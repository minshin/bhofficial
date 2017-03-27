<?php namespace Xeor\Comments\Components;

use DB;
use Log;
use Str;
use Auth;
use Event;
use Input;
use Request;
use Exception;
use BackendAuth;
use Debugbar;
use Cms\Classes\ComponentBase;
use Xeor\Comments\Models\Vote;
use Xeor\Comments\Models\Comment;
use Xeor\Comments\Classes\Helper;
use Xeor\Comments\Models\Settings;

class Comments extends ComponentBase
{

    public $comments;

    public $userId;

    public $depth;

    public $pageParam;

    public $options;

    public function componentDetails()
    {
        return [
            'name' => 'xeor.comments::lang.comments.comments',
            'description' => 'xeor.comments::lang.comments.comments_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'plugin' => [
                'title' => 'xeor.comments::lang.settings.comments_plugin',
                'description' => 'xeor.comments::lang.settings.comments_plugin_description',
                'type' => 'dropdown',
                'default' => 'none',
                'required' => false,
            ],
            'mode' => [
                'title' => 'xeor.comments::lang.settings.comments_mode',
                'description' => 'xeor.comments::lang.settings.comments_mode_description',
                'default' => '1',
                'type' => 'checkbox',
                'required' => TRUE,
                'showExternalParam' => false
            ],
            'depth' => [
                'title' => 'xeor.comments::lang.settings.depth',
                'description' => 'xeor.comments::lang.settings.depth_description',
                'default' => '0',
                'type' => 'string',
                'required' => true,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'xeor.comments::lang.settings.depth_validation_message'
            ],
            'pageNumber' => [
                'title' => 'xeor.comments::lang.settings.comments_pagination',
                'description' => 'xeor.comments::lang.settings.comments_pagination_description',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'commentsPerPage' => [
                'title' => 'xeor.comments::lang.settings.comments_per_page',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'xeor.comments::lang.settings.comments_per_page_validation',
                'default' => '10',
            ],
            'rate' => [
                'title' => 'xeor.comments::lang.settings.comments_rate_type',
                'description' => 'xeor.comments::lang.settings.comments_rate_type_description',
                'type' => 'dropdown',
                'default' => 'none',
                'required' => TRUE,
                'validationMessage' => 'xeor.comments::lang.settings.comments_rate_type_validation',
                'showExternalParam' => false
            ],
        ];
    }

    public function getRateOptions()
    {
        return [
            'none' => e(trans('xeor.comments::lang.settings.comments_rate_type_none')),
            'number' => e(trans('xeor.comments::lang.settings.comments_rate_type_number')),
            'stars' => e(trans('xeor.comments::lang.settings.comments_rate_type_fivestar'))
        ];
    }

    public function getPluginOptions()
    {
        $options = Helper::getPlugins();
        $options = ['none' => e(trans('xeor.comments::lang.settings.comments_plugin_none'))] + $options;
        return $options;
    }

    /**
     * Executed when this component is bound to a page or layout.
     */
    public function onRun()
    {
        if (Settings::get('css', true))
            $this->addCss('assets/css/comments.css');

        $this->addJs('assets/js/jquery.raty.js');
        $this->addJs('assets/js/comments.js');

        $this->prepareVars();

        $this->comments = $this->page['comments'] = $this->loadComments();

        if (!$this->comments)
            return;

        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->comments->lastPage()) && $currentPage > 1)
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
        }
    }

    protected function prepareVars()
    {
        $this->userId = $this->page['userId'] = $this->getUserId();
        $this->depth = $this->page['depth'] = $this->property('depth');
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->options = $this->page['options'] = [
            'hide-reply-form' => Settings::get('hide_reply_form', true) ? 1 : 0,
            'hide-main-form' => Settings::get('hide_main_form', true) ? 1 : 0,
            'rate' => $this->property('rate')
        ];
    }

    public function onComment()
    {
        $this->userId = $this->page['userId'] = $this->getUserId();
        $this->depth = $this->page['depth'] = $this->property('depth');
        $this->page['level'] = post('level');
        $this->page['rate'] = $this->property('rate');

        $settings = Settings::instance();
        Log::info("TTTTTTTTTTTTTT!!!!!2222");
        $hahname = post('parent_id');
        if($hahname == ''){
            Log::info("hhhhhhhhh1111112222zz");
        }
        Log::info($this->userId);
        Log::info("TTTTTTTTTTTTTT!!!!!");
        Log::info(post('parent_id'));
        try {
            if ($commentId = post('id')) {
                $comment = $this->updateComment($commentId, ['content' => post('content')]);
            } else {
                $commentData = [
                    'uri' => Request::path(),
                    'type' => $this->property('plugin'),
                   // 'parent_id' => post('parent_id'),
                    'content' => post('content'),
                    'user_id' => $this->userId,
                    'hostname' => $this->getHostname(),
                    'name' => post('name'),
                    'mail' => post('mail'),
                    'homepage' => post('homepage'),
                    'published' => $settings->comment_moderation ? 0 : 1,
                    'thread' => $this->getCommentThread(post('parent_id'))
                ];
                if(post('parent_id') != ''){
                    $commentData['parent_id'] = post('parent_id');
                }
                $comment = $this->createComment($commentData);
            }

            if (class_exists("\RainLab\User\Models\User") && ($user = Auth::findUserById($comment->user_id))) {
                $comment->avatar = $user->getAvatarThumb(64);
                $comment->name = $user->attributes['name'];
            }
            $comment->prefix = "<div id=\"comment-$comment->id\" class=\"media comment\">\n";
            $comment->suffix = '</div>';

            // Set rate values
            $comment->total = 0;
            $comment->score = 0;
            $comment->voted = false;

            $this->comment = $this->page['comment'] = $comment;
        }
        catch (Exception $ex) {
            Log::info($ex->getMessage());
        }
    }

    protected function getCommentThread($parentId)
    {
        $uri = Request::path();
        // This next section builds the thread field
        if ($parentId == 0) {
            // This is a comment with no parent comment (depth 0): we start
            // by retrieving the maximum thread level.
            $max = DB::table('xeor_comments_comments')->where('uri', $uri)->max('thread');
            // Strip the "/" from the end of the thread.
            $max = rtrim($max, '/');
            // We need to get the value at the correct depth.
            $parts = explode('.', $max);
            $firstsegment = $parts[0];
            // Finally, build the thread field for this new comment.
            $thread = $this->int2vancode($this->vancode2int($firstsegment) + 1) . '/'; //TODO
        } else {
            // This is a comment with a parent comment, so increase the part of the
            // thread value at the proper depth.

            // Get the parent comment:
            $parent = Comment::find($parentId);
            // Strip the "/" from the end of the parent thread.
            $parent->thread = (string)rtrim((string)$parent->thread, '/');
            // Get the max value in *this* thread.
            $max = DB::table('xeor_comments_comments')->where('thread', $parent->thread)->where('uri', $uri)->max('thread');

            if ($max == '') {
                // First child of this parent.
                $thread = $parent->thread . '.' . $this->int2vancode(0) . '/';
            } else {
                // Strip the "/" at the end of the thread.
                $max = rtrim($max, '/');
                // Get the value at the correct depth.
                $parts = explode('.', $max);
                $parent_depth = count(explode('.', $parent->thread));
                $last = $parts[$parent_depth];
                // Finally, build the thread field for this new comment.
                $thread = $parent->thread . '.' . $this->int2vancode($this->vancode2int($last) + 1) . '/';
            }
        }
        return $thread;
    }

    protected function createComment($commentArr)
    {
        if (!$commentArr['content'])
            return;

        $comment = Comment::make();
        foreach ($commentArr as $property => $value) {
            $comment->{$property} = $value;
        }

        Event::fire('xeor.comments.beforeSaveComment', [$comment]);

        $comment->save();

        Event::fire('xeor.comments.afterSaveComment', [$comment]);

        Log::info('Comment posted: #' . $comment->id);

        return $comment;
    }

    protected function updateComment($commentId, $commentArr)
    {
        if (!$commentArr['content'])
            return;

        $comment = null;

        if (($comment = Comment::find($commentId)) && $comment->canEdit($this->getUserId())) {
            foreach ($commentArr as $property => $value) {
                $comment->{$property} = $value;
            }

            Event::fire('xeor.comments.beforeUpdateComment', [$comment]);

            $comment->save();

            Event::fire('xeor.comments.afterUpdateComment', [$comment]);

            Log::info('Comment updated: #' . $comment->id);
        }

        return $comment;
    }

    public function onEditComment()
    {
        $return = ['id' => null, 'content' => null];
        if (($comment = Comment::find(post('id'))) && $comment->canEdit($this->getUserId())) {
            $return = ['id' => post('id'), 'content' => $comment->content];
        }
        return $return;
    }

    public function onDeleteComment()
    {
        $ids = [];
        if (($comment = Comment::find(post('id'))) && $comment->canEdit($this->getUserId())) {
            if ($comments = $comment->getAllChildrenAndSelf()) {
                foreach ($comments as $comment) {
                    $ids[] = $comment->id;
                    $comment->delete();
                }
            }
        }
        return $ids;
    }

    protected function getUserId()
    {
        return class_exists("\RainLab\User\Models\User") && ($user = Auth::getUser()) ? $user->attributes['id'] : 0;
    }

    protected function getHostname()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $hostname = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $hostname = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $hostname = $_SERVER['REMOTE_ADDR'];
        }
        return $hostname;
    }

    /**
     * Generate vancode.
     *
     * Consists of a leading character indicating length, followed by N digits
     * with a numerical value in base 36. Vancodes can be sorted as strings
     * without messing up numerical order.
     *
     * It goes:
     * 00, 01, 02, ..., 0y, 0z,
     * 110, 111, ... , 1zy, 1zz,
     * 2100, 2101, ..., 2zzy, 2zzz,
     * 31000, 31001, ...
     */
    protected function int2vancode($i = 0)
    {
        $num = base_convert((int)$i, 10, 36);
        $length = strlen($num);

        return chr($length + ord('0') - 1) . $num;
    }

    /**
     * Decode vancode back to an integer.
     */
    protected function vancode2int($c = '00')
    {
        return base_convert(substr($c, 1), 36, 10);
    }

    protected function loadComments()
    {
        $mode = $this->property('mode');
        $page = (int)$this->property('pageNumber');
        $perPage = (int)$this->property('commentsPerPage');
        Log::info("LLLLLLLLLLLLLLLLLLLL");
        /*
         * List all the comments
         */
        $comments = Comment::where('uri', Request::path())->listFrontEnd([
            'page' => $page,
            'perPage' => $perPage > 0 ? $perPage : 99999,
            'sort' => $this->mode ? 'torder' : 'id'
        ]);

        if (!$comments->count())
            return;

        // A counter that helps track how indented we are.
        $divs = 0;

        foreach ($comments as $key => $comment) {
            // The $divs element instructs prefix whether to add an indent div or
            // close existing divs (a negative value).
            $comment->depth = count(explode('.', $comment->thread)) - 1;
            if ($comment->depth > $divs) {
                $comment->divs = 1;
                $divs++;
            } else {
                $comment->divs = $comment->depth - $divs;
                while ($comment->depth < $divs) {
                    $divs--;
                }
            }
            $comments[$key] = $comment;
        }

        // The final comment must close up some hanging divs
        $comments[$key]->divs_final = $divs;

        // Prepare comments
        foreach ($comments as $key => $comment) {
            $prefix = '';
            $suffix = '';

            $is_threaded = isset($comment->divs) && $mode;
            if ($is_threaded) {
                $prefix .= $comment->divs <= 0 ? str_repeat('</div>', abs($comment->divs)) : "\n" . '<div class="indented">';
            }
            $prefix .= "<div id=\"comment-$comment->id\" class=\"media comment\">\n";

            if ($is_threaded && !empty($comment->divs_final)) {
                $suffix = str_repeat('</div>', $comment->divs_final);
            }

            $suffix .= '</div>';
            $comments[$key]->prefix = $prefix;
            $comments[$key]->suffix = $suffix;

            if ($author = Auth::findUserById($comment->user_id)) {
                $comments[$key]->avatar = $author->getAvatarThumb(64);
                $comments[$key]->name = isset($author->attributes['name']) ? $author->attributes['name'] : '';
            }

            // Set rate values
            $comments[$key]->total = $comment->getTotalVotes($comment->id);
            $comments[$key]->score = $comment->getScore($this->property('rate'));
            $comments[$key]->voted = Db::table('xeor_comments_votes')->where('comment_id', $comment->id)->where('user_id', $comment->user_id)->count();

        }

        return $comments;
    }

    public function onVote()
    {
        $commentId = post('id');
        $type = post('type');
        $value = post('value');
        $userId = $this->getUserId();

        if ($comment = Comment::find($commentId)) {
            $userVotes = Db::select('select id from xeor_comments_votes where comment_id = ? and user_id = ?', [
                $commentId,
                $userId
            ]);

            if (is_array($userVotes) && empty($userVotes)) {
                $vote = Vote::make();
                $vote->comment_id = $commentId;
                $vote->value = $value;
                $vote->user_id = $userId;
                $vote->value_type = ($type == 'stars' ? 'percent' : 'point');
                $vote->vote_source = $this->getHostname();
                $vote->save();
            } else {
                Vote::where('comment_id', $commentId)
                    ->where('user_id', $userId)
                    ->update(['value' => $value]);
            }

            return [
                'total' => $comment->getTotalVotes(),
                'score' => $comment->getScore($type)
            ];
        } else {
            Log::info('Can not find the comment #' . $commentId);
        }
        return;
    }
}

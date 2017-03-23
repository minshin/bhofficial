<?php namespace Bohe\Article\Components;

use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Bohe\Article\Models\Index as ArticleIndex;
use Log;

class Bohelist extends ComponentBase
{
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;

 

    public function componentDetails()
    {
        return [
            'name'        => 'jollen.article::lang.settings.posts_title',
            'description' => 'jollen.article::lang.settings.posts_description'
        ];
    }

    public function defineProperties()
    {
        return [

            
            'postPage' => [
                'title'       => 'jollen.article::lang.settings.posts_post',
                'description' => 'jollen.article::lang.settings.posts_post_description',
                'type'        => 'dropdown',
                'default'     => 'article/thelist',
                'group'       => 'Links',
            ],
            
        ];
    }



    public function onRun()
    {
        $this->posts= $this->page['thelist'] = $this->listPosts();


    }



    protected function listPosts()
    {

        /*
         * List all the posts, eager load their categories
         */
        $posts = ArticleIndex::paginate(1);
        /*
         * Add a "url" helper attribute for linking to each post and category
         */
//         $posts->each(function($post) {
//             Log::info("ooooooooooooooo");
//             $post->setUrl($this->postPage, $this->controller);
//             Log::info($this->postPage);
//             Log::info($post->url);
//             $post->categories->each(function($category) {
//                 $category->setUrl($this->categoryPage, $this->controller);
//             });
//         });

        return $posts;
    }


   
}

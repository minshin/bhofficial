<?php

/* /home/vagrant/Code/saasplay/october/themes/testDemo/layouts/default.htm */
class __TwigTemplate_fd039f18d351d595a6160035deb0e8cb67c690fe599223517c43053d6c305bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
        woshiheader
        ";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['name'] = "david"        ;
        $context['__cms_partial_params']['age'] = "24"        ;
        echo $this->env->getExtension('CMS')->partialFunction("pramapartial"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "        <br>
      <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</p>
      <br>
      <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "layout", array()), "html", null, true);
        echo "</p>
      <br>
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "hidden", array())) {
            // line 18
            echo "    <p>没影藏我才出现</p>
    ";
        }
        // line 20
        echo "        </header>

        ";
        // line 22
        $context["jumbotronTexture"] = twig_random($this->env, array(0 => "carbon", 1 => "dustnscratches", 2 => "elegant", 3 => "grunge", 4 => "leather", 5 => "lines", 6 => "plaid", 7 => "wood"));
        // line 23
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url(";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter((("assets/images/textures/" . (isset($context["jumbotronTexture"]) ? $context["jumbotronTexture"] : null)) . ".png"));
        echo ")\">
                <div class=\"container\">
                    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"container\">
              我是default页面
                ";
        // line 34
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 35
        echo "            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            <!-- woshifooter -->
        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/utils.js", 14 => "assets/javascript/app.js", 15 => "assets/javascript/main.js"));
        // line 64
        echo "\"></script>

        ";
        // line 66
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 67
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 68
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/testDemo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 68,  115 => 67,  108 => 66,  104 => 64,  102 => 44,  91 => 35,  89 => 34,  81 => 29,  77 => 28,  72 => 26,  67 => 23,  65 => 22,  61 => 20,  57 => 18,  55 => 17,  50 => 15,  45 => 13,  42 => 12,  36 => 11,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
      {% partial 'head' %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
        woshiheader
        {% partial \"pramapartial\" name=\"david\" age=\"24\" %}
        <br>
      <p>{{ this.page.title }}</p>
      <br>
      <p>{{ this.page.layout }}</p>
      <br>
    {% if this.page.hidden %}
    <p>没影藏我才出现</p>
    {% endif%}
        </header>

        {% set jumbotronTexture = random(['carbon', 'dustnscratches', 'elegant', 'grunge', 'leather', 'lines', 'plaid', 'wood']) %}

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url({{ ('assets/images/textures/'~jumbotronTexture~'.png')|theme }})\">
                <div class=\"container\">
                    <h1>{{ this.page.title }}</h1>
                    <p>{{ this.page.description }}</p>
                </div>
            </div>
            <div class=\"container\">
              我是default页面
                {% page %}
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            <!-- woshifooter -->
        </footer>

        <!-- Scripts -->
        <script src=\"{{ [
            'assets/javascript/jquery.js',
            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',
            'assets/javascript/utils.js',
            'assets/javascript/app.js',
            'assets/javascript/main.js',



        ]|theme }}\"></script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/home/vagrant/Code/saasplay/october/themes/testDemo/layouts/default.htm", "");
    }
}

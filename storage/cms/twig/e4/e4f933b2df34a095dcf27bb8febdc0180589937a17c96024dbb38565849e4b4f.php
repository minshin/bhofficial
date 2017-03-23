<?php

/* /home/vagrant/Code/saasplay/october/themes/testDemo/layouts/priceDetail.htm */
class __TwigTemplate_cc489aa147f610b5e5d344ab368ceee2e15ffe224644ff2c3a0606bca0bd5221 extends Twig_Template
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

        <!-- Content -->
        <section id=\"layout-content\">
                ";
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 11
        echo "        </section>
        
        <!-- Scripts -->
        <script src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery-1.11.3.min.js", 1 => "assets/javascript/bootstrap.min.js"));
        // line 18
        echo "\"></script>

        <!-- // 获取url参数
        // function getQueryString(name) {
        // var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        // var r = window.location.search.substr(1).match(reg);
        // if (r != null) return unescape(r[2]); return null;
        // }
        // var idStr =getQueryString('id');
        // console.log(idStr); -->



        ";
        // line 31
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 32
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 33
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/testDemo/layouts/priceDetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  66 => 32,  59 => 31,  44 => 18,  42 => 14,  37 => 11,  35 => 10,  28 => 5,  24 => 4,  19 => 1,);
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

        <!-- Content -->
        <section id=\"layout-content\">
                {% page %}
        </section>
        
        <!-- Scripts -->
        <script src=\"{{ [
          'assets/javascript/jquery-1.11.3.min.js',
          'assets/javascript/bootstrap.min.js',

        ]|theme }}\"></script>

        <!-- // 获取url参数
        // function getQueryString(name) {
        // var reg = new RegExp(\"(^|&)\" + name + \"=([^&]*)(&|\$)\", \"i\");
        // var r = window.location.search.substr(1).match(reg);
        // if (r != null) return unescape(r[2]); return null;
        // }
        // var idStr =getQueryString('id');
        // console.log(idStr); -->



        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/home/vagrant/Code/saasplay/october/themes/testDemo/layouts/priceDetail.htm", "");
    }
}

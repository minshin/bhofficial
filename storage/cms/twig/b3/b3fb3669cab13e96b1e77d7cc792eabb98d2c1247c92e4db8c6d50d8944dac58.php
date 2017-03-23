<?php

/* /home/vagrant/Code/saasplay/october/themes/saasplay/layouts/default.htm */
class __TwigTemplate_37a891975f8b80f8a2c35b7ff9a2684ef82a35db2d3a09ce709afb0fb08518b8 extends Twig_Template
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
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"King\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "</head>
<body>

<!-- Header -->
<header id=\"layout-header\">

</header>

<!-- Content -->
<section id=\"layout-content\">
    ";
        // line 22
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 23
        echo "</section>

<!-- Footer -->
<footer id=\"layout-footer\">

</footer>

<!-- Scripts -->
<script src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery/jquery-3.1.1.min.js");
        echo "\"></script>
<script src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
";
        // line 33
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 34
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 35
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/saasplay/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  85 => 34,  78 => 33,  74 => 32,  70 => 31,  60 => 23,  58 => 22,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
    <meta charset=\"utf-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"King\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>

<!-- Header -->
<header id=\"layout-header\">

</header>

<!-- Content -->
<section id=\"layout-content\">
    {% page %}
</section>

<!-- Footer -->
<footer id=\"layout-footer\">

</footer>

<!-- Scripts -->
<script src=\"{{ 'assets/vendor/jquery/jquery-3.1.1.min.js'|theme }}\"></script>
<script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.min.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "/home/vagrant/Code/saasplay/october/themes/saasplay/layouts/default.htm", "");
    }
}

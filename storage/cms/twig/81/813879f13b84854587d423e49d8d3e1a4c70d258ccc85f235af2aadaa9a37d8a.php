<?php

/* /home/vagrant/Code/saasplay/october/themes/testDemo/partials/head.htm */
class __TwigTemplate_4323b975f2f7aae9eb3d30bee111aedd811aafc327b356c8c4b28a7fd31a7c7e extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
    <title>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 ,maximum-scale=1,minimum-scale=1,user-scalable=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/common.css", 2 => "assets/css/chromagallery.min.css", 3 => "assets/css/font-awesome.min.css", 4 => "assets/css/animate.css", 5 => "assets/css/style.css"));
        // line 12
        echo "\">";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/testDemo/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 12,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
    <title>{{ this.page.title }}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 ,maximum-scale=1,minimum-scale=1,user-scalable=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <link rel=\"stylesheet\" href=\"{{['assets/css/bootstrap.min.css',
     'assets/css/common.css',
      'assets/css/chromagallery.min.css',
      'assets/css/font-awesome.min.css',
      'assets/css/animate.css',
      'assets/css/style.css',
    ] |theme}}\">", "/home/vagrant/Code/saasplay/october/themes/testDemo/partials/head.htm", "");
    }
}

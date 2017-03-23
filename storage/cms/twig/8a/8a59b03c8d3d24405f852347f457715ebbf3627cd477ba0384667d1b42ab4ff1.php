<?php

/* /home/vagrant/Code/saasplay/october/themes/saasplay/partials/service.htm */
class __TwigTemplate_882926fbae80d9850d0e4b24fee0f2edf34dec9b87e0693bece3f3936b3f0506 extends Twig_Template
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
        $context["post"] = $this->getAttribute((isset($context["boheservice"]) ? $context["boheservice"] : null), "post", array());
        // line 2
        echo "<div class=\"container\">
   
    <article id=\"72\" class=\"post\">
        <div class=\"post-head\">
            <h1 class=\"post-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
            <h2 class=\"post-title\">";
        // line 7
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "</h2>
            
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/saasplay/partials/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = boheservice.post %}
<div class=\"container\">
   
    <article id=\"72\" class=\"post\">
        <div class=\"post-head\">
            <h1 class=\"post-title\">{{ post.title }}</h1>
            <h2 class=\"post-title\">{{ post.content_html|raw }}</h2>
            
        </div>
</div>", "/home/vagrant/Code/saasplay/october/themes/saasplay/partials/service.htm", "");
    }
}

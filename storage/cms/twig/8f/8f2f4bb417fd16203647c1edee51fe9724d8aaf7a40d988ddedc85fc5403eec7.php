<?php

/* /home/vagrant/Code/saasplay/october/themes/saasplay/pages/service.htm */
class __TwigTemplate_e7e84deef126dd0c08a09eebd4e64ec4b7aee71f315cc235360f734ebed89333 extends Twig_Template
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
        echo "<section class=\"section-wrap\">
   <div class=\"container\">
       <div class=\"row\">
           <main class=\"col-md-8 main-content\" >
               ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("service.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "           </main>
       </div>
   </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/saasplay/pages/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-wrap\">
   <div class=\"container\">
       <div class=\"row\">
           <main class=\"col-md-8 main-content\" >
               {% partial 'service.htm' %}
           </main>
       </div>
   </div>
</section>", "/home/vagrant/Code/saasplay/october/themes/saasplay/pages/service.htm", "");
    }
}

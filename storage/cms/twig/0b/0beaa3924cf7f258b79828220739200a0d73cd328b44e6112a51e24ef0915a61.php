<?php

/* /home/vagrant/Code/saasplay/october/themes/testDemo/pages/priceDetail/priceDetail.htm */
class __TwigTemplate_96402500fcb3f539eebae117ae28938252635f5e23baa0339ba850dd7650f887 extends Twig_Template
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
        echo "

  <!-- 顶部背景图begin -->
  <div id=\"topBg\">
    <div class=\"topImg\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "first", array()), "getThumb", array(0 => "auto", 1 => "auto"), "method"), "html", null, true);
        echo "\" alt=\"\" style=\"width:100%;\"> 
    </div>
  </div>
  <!-- 顶部背景图end-->


  <div id=\"content\">
  <div class=\"row\">
\t  <div class=\"col-md-1 col-xs-1\">
\t 
\t  </div>
\t    <div class=\"col-md-10 col-xs-10\">
\t  ";
        // line 19
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
\t  </div>
\t    <div class=\"col-md-1 col-xs-1\">
\t  
\t  </div>
  </div>
  </div>
  


<!-- 编辑内容begin -->

<!-- 编辑内容end -->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/testDemo/pages/priceDetail/priceDetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 19,  28 => 7,  21 => 2,  19 => 1,);
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


  <!-- 顶部背景图begin -->
  <div id=\"topBg\">
    <div class=\"topImg\">
    <img src=\"{{ post.featured_images.first.getThumb('auto', 'auto') }}\" alt=\"\" style=\"width:100%;\"> 
    </div>
  </div>
  <!-- 顶部背景图end-->


  <div id=\"content\">
  <div class=\"row\">
\t  <div class=\"col-md-1 col-xs-1\">
\t 
\t  </div>
\t    <div class=\"col-md-10 col-xs-10\">
\t  {{post.content_html|raw}}
\t  </div>
\t    <div class=\"col-md-1 col-xs-1\">
\t  
\t  </div>
  </div>
  </div>
  


<!-- 编辑内容begin -->

<!-- 编辑内容end -->", "/home/vagrant/Code/saasplay/october/themes/testDemo/pages/priceDetail/priceDetail.htm", "");
    }
}

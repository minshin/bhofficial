<?php

/* /home/vagrant/Code/saasplay/october/themes/testDemo/pages/index.htm */
class __TwigTemplate_569b58893b58330b6ea9d94a24d9d5a53151687792ebe492145e81f306809a4c extends Twig_Template
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
        echo "<div class=\"second\">
  <a href=\"/second\"class=\"btn btn-default\">default按钮</a>
</div>
<div class=\"second\">
  <div class=\"container\">
  <!-- <form data-request=\"onTest\" data-request-update=\"index:'#myDiv'\" data-request-confirm=\"确定刷新吗？\">
      <div class=\"form-group\">
          <label for=\"userSigninLogin\">userName</label>
          <input
                  name=\"login\"
                  type=\"text\"
                  class=\"form-control\"
                  id=\"userSigninLogin\"
                  placeholder=\"Enter your userName\" />
      </div>

      <div class=\"form-group\">
          <label for=\"userSigninPassword\">Password</label>
          <input
                  name=\"password\"
                  type=\"password\"
                  class=\"form-control\"
                  id=\"userSigninPassword\"
                  placeholder=\"Enter your password\" />
      </div>
  <div class=\"btn\" style=\"width:100%;margin:0 auto\">
  <button type=\"submit\" class=\"btn btn-default\" style=\"width:30%\">Sign in</button>
  </div>
  </form> -->
  <!-- AJAX enabled form -->
  <form data-request=\"onTest\" data-request-update=\"alert: '#myDiv'\" data-request-redirect=\"/second\">

      <!-- Input two values -->
      <input name=\"value1\"> + <input name=\"value2\">

      <!-- Action button -->
      <button type=\"submit\">Calculate</button>

  </form>

<div class=\"container\">
  ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()) == "1")) {
            // line 43
            echo "
      <p>1</p>

  ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["this"]) ? $context["this"] : null), "param", array()), "id", array()) == "2")) {
            // line 47
            echo "
      <p>2</p>

      ";
        } else {
            // line 51
            echo "
          <p>qita</p>
  ";
        }
        // line 54
        echo "</div>


<button data-request=\"onSelect\" id=\"select\" class=\"btn btn-default\">选择</button>
<!-- </form> -->
  <div data-request-data=\"id: 7\">
      <button data-request=\"onDelete\">Delete</button>
      <button data-request=\"onSave\">Update</button>
  </div>

<div id=\"myDiv\">
</div>
</div>
</div>


<div class=\"container\">
<select id=\"parent\">121213</select>
</div>
<div class=\"centerdiv\" style=\"{width:100;height:100;text-align:center}\">
  我要居sads中
</div>
<div class=\"container\">

  <p class=\"p1\">This is a paragraph.</p>
  <button class=\"btn1\">Toggle</button>
</div>


<div class=\"container1\">

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/Code/saasplay/october/themes/testDemo/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 54,  77 => 51,  71 => 47,  69 => 46,  64 => 43,  62 => 42,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"second\">
  <a href=\"/second\"class=\"btn btn-default\">default按钮</a>
</div>
<div class=\"second\">
  <div class=\"container\">
  <!-- <form data-request=\"onTest\" data-request-update=\"index:'#myDiv'\" data-request-confirm=\"确定刷新吗？\">
      <div class=\"form-group\">
          <label for=\"userSigninLogin\">userName</label>
          <input
                  name=\"login\"
                  type=\"text\"
                  class=\"form-control\"
                  id=\"userSigninLogin\"
                  placeholder=\"Enter your userName\" />
      </div>

      <div class=\"form-group\">
          <label for=\"userSigninPassword\">Password</label>
          <input
                  name=\"password\"
                  type=\"password\"
                  class=\"form-control\"
                  id=\"userSigninPassword\"
                  placeholder=\"Enter your password\" />
      </div>
  <div class=\"btn\" style=\"width:100%;margin:0 auto\">
  <button type=\"submit\" class=\"btn btn-default\" style=\"width:30%\">Sign in</button>
  </div>
  </form> -->
  <!-- AJAX enabled form -->
  <form data-request=\"onTest\" data-request-update=\"alert: '#myDiv'\" data-request-redirect=\"/second\">

      <!-- Input two values -->
      <input name=\"value1\"> + <input name=\"value2\">

      <!-- Action button -->
      <button type=\"submit\">Calculate</button>

  </form>

<div class=\"container\">
  {% if this.param.id == '1' %}

      <p>1</p>

  {% elseif this.param.id == '2' %}

      <p>2</p>

      {% else %}

          <p>qita</p>
  {% endif %}
</div>


<button data-request=\"onSelect\" id=\"select\" class=\"btn btn-default\">选择</button>
<!-- </form> -->
  <div data-request-data=\"id: 7\">
      <button data-request=\"onDelete\">Delete</button>
      <button data-request=\"onSave\">Update</button>
  </div>

<div id=\"myDiv\">
</div>
</div>
</div>


<div class=\"container\">
<select id=\"parent\">121213</select>
</div>
<div class=\"centerdiv\" style=\"{width:100;height:100;text-align:center}\">
  我要居sads中
</div>
<div class=\"container\">

  <p class=\"p1\">This is a paragraph.</p>
  <button class=\"btn1\">Toggle</button>
</div>


<div class=\"container1\">

</div>", "/home/vagrant/Code/saasplay/october/themes/testDemo/pages/index.htm", "");
    }
}

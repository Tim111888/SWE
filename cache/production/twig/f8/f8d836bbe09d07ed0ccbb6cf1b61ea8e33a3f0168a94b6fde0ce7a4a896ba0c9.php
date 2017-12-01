<?php

/* captcha_default.html */
class __TwigTemplate_b583a73d40517fc018c308e37dd8e6c71b845a9edb3653b2f1575d3fba505131 extends Twig_Template
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
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 2
            echo "\t<h3 class=\"captcha-title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRMATION");
            echo "</h3>
\t<p>";
            // line 3
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_EXPLAIN");
            echo "</p>
\t<fieldset>
";
        }
        // line 6
        echo "
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE");
        echo "</h3>
\t\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<img src=\"";
        // line 13
        echo (isset($context["CONFIRM_IMAGE_LINK"]) ? $context["CONFIRM_IMAGE_LINK"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE");
        echo "\" class=\"default-captcha-image\"/>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"confirm_code\" id=\"confirm_code\" maxlength=\"8\" tabindex=\"";
        // line 17
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array());
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE");
        echo "\" placeholder=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_CODE_EXPLAIN");
        echo "\"/>
\t\t\t\t\t\t";
        // line 18
        if ((isset($context["S_CONFIRM_REFRESH"]) ? $context["S_CONFIRM_REFRESH"] : null)) {
            echo "<span class=\"input-group-btn\"><input type=\"submit\" name=\"refresh_vc\" id=\"refresh_vc\" class=\"btn btn-default\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VC_REFRESH");
            echo "\" /></span>";
        }
        // line 19
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 20
        if ((isset($context["S_CONFIRM_REFRESH"]) ? $context["S_CONFIRM_REFRESH"] : null)) {
        }
        // line 21
        echo "\t\t\t\t\t<input type=\"hidden\" name=\"confirm_id\" id=\"confirm_id\" value=\"";
        echo (isset($context["CONFIRM_ID"]) ? $context["CONFIRM_ID"] : null);
        echo "\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

";
        // line 26
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 27
            echo "\t</fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  82 => 26,  73 => 21,  70 => 20,  67 => 19,  61 => 18,  53 => 17,  44 => 13,  37 => 9,  32 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "captcha_default.html", "");
    }
}

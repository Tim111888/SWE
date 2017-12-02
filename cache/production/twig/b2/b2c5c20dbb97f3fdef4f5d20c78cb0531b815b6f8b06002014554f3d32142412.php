<?php

/* quickreply_editor.html */
class __TwigTemplate_8a758898db30a267978316d415f83486b4fbb62ce237d959baaecb9f3c209ef1 extends Twig_Template
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
        echo "<form method=\"post\" action=\"";
        echo ($context["U_QR_ACTION"] ?? null);
        echo "\" id=\"qr_postform\">
\t";
        // line 2
        // line 3
        echo "\t<div class=\"panel panel-default panel-collapsible\" id=\"qr_ns_editor_div\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICKREPLY");
        echo "</h3>
\t\t\t<span class=\"pull-right panel-right clickable panel-collapsed\"><i class=\"fa fa-chevron-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</div>
\t\t<div class=\"panel-body\" style=\"display:none\">
\t\t\t<fieldset>
\t\t\t\t";
        // line 10
        // line 11
        echo "\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-2\" for=\"subject\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" id=\"subject-ns\" size=\"45\" maxlength=\"124\" tabindex=\"2\" value=\"";
        // line 15
        echo ($context["SUBJECT"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 18
        // line 19
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-md-10 col-md-offset-2 message-box\" id=\"message-box\">
\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" rows=\"7\" cols=\"76\" tabindex=\"3\" class=\"form-control\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 24
        // line 25
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\" style=\"display:none\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 30
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t\t";
        // line 31
        echo ($context["QR_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t<input type=\"submit\" accesskey=\"f\" tabindex=\"7\" name=\"preview\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FULL_EDITOR");
        echo "\" class=\"btn btn-primary\" id=\"qr_full_editor\" />
\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t";
        // line 37
        // line 38
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "quickreply_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  89 => 37,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  63 => 25,  62 => 24,  55 => 19,  54 => 18,  48 => 15,  42 => 13,  38 => 11,  37 => 10,  29 => 5,  25 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "quickreply_editor.html", "");
    }
}

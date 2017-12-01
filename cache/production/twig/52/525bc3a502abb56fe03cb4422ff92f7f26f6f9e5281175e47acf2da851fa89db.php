<?php

/* posting_poll_body.html */
class __TwigTemplate_44fd0335cf471d3fd9925d37c089eb39874cd2c3d77a5f3dd48f1143de660ac9 extends Twig_Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane\" id=\"poll-tab\">
\t";
        // line 2
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 3
            echo "\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL_EXPLAIN");
            echo "</p>
\t";
        }
        // line 5
        echo "\t<fieldset class=\"form-horizontal\">
\t\t";
        // line 6
        if ((isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null)) {
            // line 7
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"poll_delete\" class=\"col-md-2 control-label\">";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_DELETE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<label for=\"poll_delete\"><input type=\"checkbox\" name=\"poll_delete\" id=\"poll_delete\"";
            // line 10
            if ((isset($context["S_POLL_DELETE_CHECKED"]) ? $context["S_POLL_DELETE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /></label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 14
        echo "\t\t";
        if ((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"poll_title\" class=\"col-md-2 control-label\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_QUESTION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<input type=\"text\" name=\"poll_title\" id=\"poll_title\" maxlength=\"255\" value=\"";
            // line 18
            echo (isset($context["POLL_TITLE"]) ? $context["POLL_TITLE"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"poll_option_text\" class=\"col-md-2 control-label\">";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_OPTIONS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<textarea name=\"poll_option_text\" id=\"poll_option_text\" rows=\"5\" cols=\"35\" class=\"form-control\">";
            // line 24
            echo (isset($context["POLL_OPTIONS"]) ? $context["POLL_OPTIONS"] : null);
            echo "</textarea>
\t\t\t\t\t<span class=\"help-block\">";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_OPTIONS_EXPLAIN");
            echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"dashed\" />
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"poll_max_options\" class=\"col-md-2 control-label\">";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_MAX_OPTIONS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<input type=\"number\" min=\"0\" max=\"999\" name=\"poll_max_options\" id=\"poll_max_options\" value=\"";
            // line 32
            echo (isset($context["POLL_MAX_OPTIONS"]) ? $context["POLL_MAX_OPTIONS"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<span class=\"help-block col-md-10 col-md-offset-2\">";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_MAX_OPTIONS_EXPLAIN");
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"poll_length\" class=\"col-md-2 control-label\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_FOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<input type=\"number\" min=\"0\" max=\"999\" name=\"poll_length\" id=\"poll_length\" value=\"";
            // line 40
            echo (isset($context["POLL_LENGTH"]) ? $context["POLL_LENGTH"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<span class=\"help-block col-md-9\">";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</span>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<span class=\"help-block col-md-10 col-md-offset-2\">";
            // line 44
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_FOR_EXPLAIN");
            echo "</span>
\t\t\t</div>

\t\t\t";
            // line 47
            if ((isset($context["S_POLL_VOTE_CHANGE"]) ? $context["S_POLL_VOTE_CHANGE"] : null)) {
                // line 48
                echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"poll_vote_change\" class=\"col-md-2 control-label\">";
                // line 50
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTE_CHANGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label for=\"poll_vote_change\"><input type=\"checkbox\" id=\"poll_vote_change\" name=\"poll_vote_change\"";
                // line 53
                echo (isset($context["VOTE_CHANGE_CHECKED"]) ? $context["VOTE_CHANGE_CHECKED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTE_CHANGE_EXPLAIN");
                echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 58
            echo "\t\t";
        }
        // line 59
        echo "\t\t";
        // line 60
        echo "\t</fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_poll_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  156 => 59,  153 => 58,  143 => 53,  136 => 50,  132 => 48,  130 => 47,  124 => 44,  119 => 42,  114 => 40,  108 => 38,  102 => 35,  96 => 32,  90 => 30,  82 => 25,  78 => 24,  72 => 22,  65 => 18,  59 => 16,  56 => 15,  53 => 14,  44 => 10,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_poll_body.html", "");
    }
}

<?php

/* ucp_profile_profile_info.html */
class __TwigTemplate_8692c377b3a4a3ebd017b8e6661d35f91b539bc31543378547fc966bbf551d99 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_profile_info.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading btn-panel\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t\t<span class=\"pull-right panel-right\">
\t\t\t\t<a href=\"";
        // line 10
        echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
        echo "\" class=\"btn btn-default\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PROFILE");
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PROFILE");
        echo "</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE_INFO_NOTICE");
        echo "</div>
\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t\t";
        // line 16
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 17
        echo "\t\t\t\t";
        // line 18
        echo "\t\t\t\t";
        if ((isset($context["S_BIRTHDAYS_ENABLED"]) ? $context["S_BIRTHDAYS_ENABLED"] : null)) {
            // line 19
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"bday_day\">";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<label for=\"bday_day\">";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_day\" id=\"bday_day\">";
            echo (isset($context["S_BIRTHDAY_DAY_OPTIONS"]) ? $context["S_BIRTHDAY_DAY_OPTIONS"] : null);
            echo "</select></label>
\t\t\t\t\t\t<label for=\"bday_month\">";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MONTH");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_month\" id=\"bday_month\">";
            echo (isset($context["S_BIRTHDAY_MONTH_OPTIONS"]) ? $context["S_BIRTHDAY_MONTH_OPTIONS"] : null);
            echo "</select></label>
\t\t\t\t\t\t<label for=\"bday_year\">";
            // line 24
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YEAR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_year\" id=\"bday_year\">";
            echo (isset($context["S_BIRTHDAY_YEAR_OPTIONS"]) ? $context["S_BIRTHDAY_YEAR_OPTIONS"] : null);
            echo "</select></label>

\t\t\t\t\t\t<span class=\"help-block\">";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAY_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null)) {
            // line 31
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"jabber\">";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"email\" name=\"jabber\" id=\"jabber\" maxlength=\"255\" value=\"";
            // line 34
            echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
            // line 39
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\"";
            // line 40
            if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                echo " for=\"";
                echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                echo " *";
            }
            echo "</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 42
            if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<span class=\"help-block text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 44
                echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
            echo $this->getAttribute($context["profile_fields"], "FIELD", array());
            echo "
\t\t\t\t\t\t\t";
            // line 48
            if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t\t\t";
                // line 50
                echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t";
        // line 57
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 61
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 62
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 63
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 69
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_profile_info.html", 69)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 69,  209 => 63,  205 => 62,  199 => 61,  193 => 57,  191 => 56,  183 => 53,  177 => 50,  174 => 49,  172 => 48,  167 => 47,  161 => 44,  158 => 43,  156 => 42,  141 => 40,  138 => 39,  133 => 38,  126 => 34,  120 => 32,  117 => 31,  114 => 30,  107 => 26,  99 => 24,  92 => 23,  85 => 22,  79 => 20,  76 => 19,  73 => 18,  71 => 17,  65 => 16,  60 => 14,  49 => 10,  43 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_profile_profile_info.html", "");
    }
}

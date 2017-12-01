<?php

/* ucp_prefs_personal.html */
class __TwigTemplate_78a127e468cb570c8df2085e15ffb2c6a8342f8a1300262fd46dacbf6fc34cd4 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_prefs_personal.html", 1)->display($context);
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
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t";
        // line 13
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 14
        echo "\t\t\t";
        // line 15
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SHOW_EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"viewemail1\" class=\"radio-inline\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail1\" value=\"1\"";
        // line 20
        if ((isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"viewemail0\" class=\"radio-inline\"><input type=\"radio\" name=\"viewemail\" id=\"viewemail0\" value=\"0\"";
        // line 21
        if ( !(isset($context["S_VIEW_EMAIL"]) ? $context["S_VIEW_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADMIN_EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"massemail1\" class=\"radio-inline\"><input type=\"radio\" name=\"massemail\" id=\"massemail1\" value=\"1\"";
        // line 29
        if ((isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"massemail0\" class=\"radio-inline\"><input type=\"radio\" name=\"massemail\" id=\"massemail0\" value=\"0\"";
        // line 30
        if ( !(isset($context["S_MASS_EMAIL"]) ? $context["S_MASS_EMAIL"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_PM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<label for=\"allowpm1\" class=\"radio-inline\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm1\" value=\"1\"";
        // line 38
        if ((isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t\t<label for=\"allowpm0\" class=\"radio-inline\"><input type=\"radio\" name=\"allowpm\" id=\"allowpm0\" value=\"0\"";
        // line 39
        if ( !(isset($context["S_ALLOW_PM"]) ? $context["S_ALLOW_PM"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label>
\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_PM_EXPLAIN");
        echo "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 45
        if ((isset($context["S_CAN_HIDE_ONLINE"]) ? $context["S_CAN_HIDE_ONLINE"] : null)) {
            // line 46
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ONLINE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<label for=\"hideonline1\" class=\"radio-inline\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline1\" value=\"1\"";
            // line 51
            if ((isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t\t<label for=\"hideonline0\" class=\"radio-inline\"><input type=\"radio\" name=\"hideonline\" id=\"hideonline0\" value=\"0\"";
            // line 52
            if ( !(isset($context["S_HIDE_ONLINE"]) ? $context["S_HIDE_ONLINE"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ONLINE_EXPLAIN");
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 59
        echo "\t\t\t";
        if ((isset($context["S_SELECT_NOTIFY"]) ? $context["S_SELECT_NOTIFY"] : null)) {
            // line 60
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<label for=\"notifymethod0\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod0\" value=\"0\"";
            // line 65
            if ((isset($context["S_NOTIFY_EMAIL"]) ? $context["S_NOTIFY_EMAIL"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_EMAIL");
            echo "</label>
\t\t\t\t\t\t<label for=\"notifymethod1\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod1\" value=\"1\"";
            // line 66
            if ((isset($context["S_NOTIFY_IM"]) ? $context["S_NOTIFY_IM"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_IM");
            echo "</label>
\t\t\t\t\t\t<label for=\"notifymethod2\" class=\"radio-inline\"><input type=\"radio\" name=\"notifymethod\" id=\"notifymethod2\" value=\"2\"";
            // line 67
            if ((isset($context["S_NOTIFY_BOTH"]) ? $context["S_NOTIFY_BOTH"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_METHOD_BOTH");
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 71
        echo "\t\t\t";
        if ((isset($context["S_MORE_LANGUAGES"]) ? $context["S_MORE_LANGUAGES"] : null)) {
            // line 72
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_LANGUAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t\t</label>

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<select name=\"lang\" id=\"lang\">";
            // line 78
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 82
        echo "\t\t\t";
        if (((isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null) && (isset($context["S_MORE_STYLES"]) ? $context["S_MORE_STYLES"] : null))) {
            // line 83
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t\t";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_STYLE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "
\t\t\t\t\t</label>

\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<select name=\"user_style\" id=\"user_style\">";
            // line 89
            echo (isset($context["S_STYLE_OPTIONS"]) ? $context["S_STYLE_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 93
        echo "\t\t\t";
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_prefs_personal.html", 93)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 94
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label col-md-4\">
\t\t\t\t\t";
        // line 96
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DATE_FORMAT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<select name=\"dateoptions\" id=\"dateoptions\" class=\"form-control\" onchange=\"if(this.value=='custom'){phpbb.toggleDisplay('custom_date',1);}else{phpbb.toggleDisplay('custom_date',-1);} if (this.value == 'custom') { document.getElementById('dateformat').value = default_dateformat; } else { document.getElementById('dateformat').value = this.value; }\">
\t\t\t\t\t\t";
        // line 100
        echo (isset($context["S_DATEFORMAT_OPTIONS"]) ? $context["S_DATEFORMAT_OPTIONS"] : null);
        echo "
\t\t\t\t\t</select>
\t\t\t\t\t<div id=\"custom_date\" style=\"display:none;\">
\t\t\t\t\t\t<input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"";
        // line 103
        echo (isset($context["DATE_FORMAT"]) ? $context["DATE_FORMAT"] : null);
        echo "\" maxlength=\"64\" class=\"form-control\" style=\"margin-top: 3px;\" />
\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DATE_FORMAT_EXPLAIN");
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 110
        // line 111
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 115
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 116
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 117
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

<script type=\"text/javascript\">
// <![CDATA[
\tvar date_format = '";
        // line 125
        echo (isset($context["A_DATE_FORMAT"]) ? $context["A_DATE_FORMAT"] : null);
        echo "';
\tvar default_dateformat = '";
        // line 126
        echo (isset($context["A_DEFAULT_DATEFORMAT"]) ? $context["A_DEFAULT_DATEFORMAT"] : null);
        echo "';

\tfunction customDates()
\t{
\t\tvar e = document.getElementById('dateoptions');

\t\te.selectedIndex = e.length - 1;

\t\t// Loop and match date_format in menu
\t\tfor (var i = 0; i < e.length; i++)
\t\t{
\t\t\tif (e.options[i].value == date_format)
\t\t\t{
\t\t\t\te.selectedIndex = i;
\t\t\t\tbreak;
\t\t\t}
\t\t}

\t\t// Show/hide custom field
\t\tif (e.selectedIndex == e.length - 1)
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',1);
\t\t}
\t\telse
\t\t{
\t\t\tphpbb.toggleDisplay('custom_date',-1);
\t\t}
\t}

\twindow.onload = customDates;
// ]]>
</script>

";
        // line 159
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_prefs_personal.html", 159)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_prefs_personal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 159,  348 => 126,  344 => 125,  333 => 117,  329 => 116,  323 => 115,  317 => 111,  316 => 110,  308 => 105,  303 => 103,  297 => 100,  289 => 96,  285 => 94,  272 => 93,  265 => 89,  257 => 85,  253 => 83,  250 => 82,  243 => 78,  235 => 74,  231 => 72,  228 => 71,  217 => 67,  209 => 66,  201 => 65,  194 => 62,  190 => 60,  187 => 59,  179 => 54,  170 => 52,  162 => 51,  155 => 48,  151 => 46,  149 => 45,  142 => 41,  133 => 39,  125 => 38,  118 => 35,  106 => 30,  98 => 29,  91 => 26,  79 => 21,  71 => 20,  64 => 17,  60 => 15,  58 => 14,  52 => 13,  44 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_prefs_personal.html", "");
    }
}

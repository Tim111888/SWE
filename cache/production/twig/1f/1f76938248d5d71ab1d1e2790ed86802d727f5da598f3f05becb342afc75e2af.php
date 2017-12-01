<?php

/* ucp_register.html */
class __TwigTemplate_f52f43f872a3185355fd9fb0f602bc016ed53557f15943422c85e8e8aaaa5279 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 10
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
// ]]>
</script>

<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form id=\"register\" method=\"post\" action=\"";
        // line 21
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\" ";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t\t\t\t\t<h3>";
        // line 22
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " - ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTRATION");
        echo "</h3>
\t\t\t\t\t<hr class=\"colorgraph\"/>
\t\t\t\t\t";
        // line 24
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t";
        // line 28
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 31
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REG_COND");
            echo "</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
        // line 39
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" name=\"username\" id=\"username\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo "\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" tabindex=\"1\" autofocus/>
\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"fa fa-user\" rel=\"tooltip\" title=\"username\"></label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo "\" name=\"email\" id=\"email\" value=\"";
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo "\" tabindex=\"2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"fa fa-envelope\" rel=\"tooltip\" title=\"email\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" name=\"new_password\" id=\"new_password\" value=\"";
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
        echo "\" tabindex=\"4\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"new_password\" class=\"fa fa-lock\" rel=\"tooltip\" title=\"new_password\"></label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 63
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo "\" name=\"password_confirm\" id=\"password_confirm\" value=\"";
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo "\" tabindex=\"5\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"password_confirm\" class=\"fa fa-lock\" rel=\"tooltip\" title=\"password_confirm\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 68
        // line 69
        echo "\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
        // line 70
        // line 71
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"lang\" class=\"control-label col-md-4\">";
        // line 72
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LANGUAGE");
        echo "\">";
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 78
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 79
        echo "
\t\t\t\t\t\t";
        // line 80
        // line 81
        echo "\t\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 82
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning text-center\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ITEMS_REQUIRED");
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
                // line 89
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<div class=\"col-md-12\"><div class=\"alert alert-warning\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</div></div>";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t\t<label";
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo " class=\"control-label col-md-4\">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo ":";
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t";
                // line 92
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 93
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<span class=\"help-block\">";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 94
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 100
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 101
            echo "\t\t\t\t\t\t<hr />
\t\t\t\t\t\t";
            // line 102
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 103
            echo "\t\t\t\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 103)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 104
            echo "\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t";
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 106
            echo "\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 108
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_COMPLIANCE");
            echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>";
            // line 111
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COPPA_EXPLAIN");
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t";
        // line 116
        echo "\t\t\t\t\t<hr class=\"colorgraph\"/>
\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t";
        // line 118
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t\t\t<div class=\"row mobile-fix\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 122
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger btn-block btn-lg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 127
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success default-submit-action btn-block btn-lg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 131
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 139,  345 => 131,  338 => 127,  330 => 122,  323 => 118,  319 => 116,  317 => 115,  310 => 111,  304 => 108,  300 => 106,  297 => 105,  294 => 104,  281 => 103,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  268 => 98,  265 => 97,  257 => 94,  251 => 93,  247 => 92,  231 => 90,  225 => 89,  222 => 88,  218 => 87,  212 => 84,  208 => 82,  205 => 81,  204 => 80,  201 => 79,  189 => 78,  180 => 74,  174 => 72,  171 => 71,  170 => 70,  167 => 69,  166 => 68,  154 => 63,  146 => 58,  137 => 56,  122 => 48,  112 => 41,  101 => 39,  96 => 36,  94 => 35,  87 => 31,  83 => 29,  81 => 28,  78 => 27,  72 => 25,  70 => 24,  63 => 22,  57 => 21,  41 => 10,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_register.html", "");
    }
}

<?php

/* ucp_profile_reg_details.html */
class __TwigTemplate_97fdb138881c309f88f122a83df4755f28ccb602480b78045ecb92d941a2928f extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_reg_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
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
\t\t\t";
        // line 12
        if (($context["S_FORCE_PASSWORD"] ?? null)) {
            // line 13
            echo "\t\t\t\t<p class=\"alert alert-danger\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if (($context["S_FORCE_PASSWORD"] ?? null)) {
            // line 16
            echo "\t\t\t\t<p class=\"alert alert-danger\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t\t\t";
        }
        // line 18
        echo "\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t";
        // line 19
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"alert alert-danger\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 20
        echo "\t\t\t";
        // line 21
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-4\"";
        // line 22
        if (($context["S_CHANGE_USERNAME"] ?? null)) {
            echo "for=\"username\"";
        }
        echo ">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 26
        if (($context["S_CHANGE_USERNAME"] ?? null)) {
            // line 27
            echo "\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" />
\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t<strong>";
            echo ($context["USERNAME"] ?? null);
            echo "</strong>
\t\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t\t<span class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\" class=\"control-label col-md-4\">";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 39
        if (($context["S_CHANGE_EMAIL"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" maxlength=\"100\" value=\"";
            echo ($context["EMAIL"] ?? null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_ADDRESS");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<strong>";
            echo ($context["EMAIL"] ?? null);
            echo "</strong>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 46
        if (($context["S_CHANGE_PASSWORD"] ?? null)) {
            // line 47
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"new_password\" class=\"control-label col-md-4\">";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" name=\"new_password\" id=\"new_password\" maxlength=\"255\" value=\"";
            // line 50
            echo ($context["NEW_PASSWORD"] ?? null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t<span class=\"help-block\">";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password_confirm\" class=\"control-label col-md-4\">";
            // line 55
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" maxlength=\"255\" value=\"";
            // line 57
            echo ($context["PASSWORD_CONFIRM"] ?? null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t<span class=\"help-block\">";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"cur_password\" class=\"control-label col-md-4\">";
        // line 63
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<input type=\"password\" name=\"cur_password\" id=\"cur_password\" maxlength=\"255\" value=\"";
        // line 65
        echo ($context["CUR_PASSWORD"] ?? null);
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_PASSWORD");
        echo "\" />
\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CURRENT_PASSWORD_EXPLAIN");
        echo "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 71
        // line 72
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 76
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 77
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 78
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 84
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_reg_details.html", 84)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_reg_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 84,  231 => 78,  227 => 77,  221 => 76,  215 => 72,  214 => 71,  207 => 67,  200 => 65,  194 => 63,  191 => 62,  184 => 58,  178 => 57,  172 => 55,  165 => 51,  159 => 50,  153 => 48,  150 => 47,  148 => 46,  144 => 44,  138 => 42,  130 => 40,  128 => 39,  121 => 36,  114 => 32,  111 => 31,  105 => 29,  97 => 27,  95 => 26,  88 => 23,  82 => 22,  79 => 21,  77 => 20,  71 => 19,  68 => 18,  62 => 16,  59 => 15,  53 => 13,  51 => 12,  44 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_profile_reg_details.html", "");
    }
}

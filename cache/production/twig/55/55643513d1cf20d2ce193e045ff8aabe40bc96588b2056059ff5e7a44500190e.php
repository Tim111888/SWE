<?php

/* memberlist_search.html */
class __TwigTemplate_9870a79f39c023b8ae326ffb501392e81b8ee17acb0b091b63d459e219de9dbf extends Twig_Template
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
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\" id=\"search_memberlist\" class=\"form-horizontal\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>
\t\t\t";
        // line 8
        // line 9
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"form-group\" style=\"overflow: visible;\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"username\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9 ";
        // line 14
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo "dropdown-container dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        }
        echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        // line 15
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"form-control\" ";
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo (isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null);
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo "/>
\t\t\t\t\t\t\t\t";
        // line 16
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-contents search-results\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 26
        if ((isset($context["S_EMAIL_SEARCH_ALLOWED"]) ? $context["S_EMAIL_SEARCH_ALLOWED"] : null)) {
            // line 27
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"email\">";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" value=\"";
            // line 30
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null)) {
            // line 35
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"icq\">";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"jabber\" id=\"jabber\" value=\"";
            // line 38
            echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"search_group_id\">";
        // line 43
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<select name=\"search_group_id\" id=\"search_group_id\">";
        // line 45
        echo (isset($context["S_GROUP_SELECT"]) ? $context["S_GROUP_SELECT"] : null);
        echo "</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 48
        // line 49
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"sk\">";
        // line 50
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<select name=\"sk\" id=\"sk\">";
        // line 52
        echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
        echo "</select> <select name=\"sd\">";
        echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
        echo "</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"joined\">";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<select name=\"joined_select\">";
        // line 64
        echo (isset($context["S_JOINED_TIME_OPTIONS"]) ? $context["S_JOINED_TIME_OPTIONS"] : null);
        echo "</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input class=\"form-control medium\" type=\"text\" name=\"joined\" id=\"joined\" value=\"";
        // line 66
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 70
        if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
            // line 71
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"active\">";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"active_select\">";
            // line 76
            echo (isset($context["S_ACTIVE_TIME_OPTIONS"]) ? $context["S_ACTIVE_TIME_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control medium\" type=\"text\" name=\"active\" id=\"active\" value=\"";
            // line 78
            echo (isset($context["ACTIVE"]) ? $context["ACTIVE"] : null);
            echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"count\">";
        // line 84
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<select name=\"count_select\">";
        // line 88
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input class=\"form-control medium\" type=\"text\" name=\"count\" id=\"count\" value=\"";
        // line 90
        echo (isset($context["COUNT"]) ? $context["COUNT"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 94
        if ((isset($context["S_IP_SEARCH_ALLOWED"]) ? $context["S_IP_SEARCH_ALLOWED"] : null)) {
            // line 95
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"ip\">";
            // line 96
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_IP");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control medium\" type=\"text\" name=\"ip\" id=\"ip\" value=\"";
            // line 98
            echo (isset($context["IP"]) ? $context["IP"] : null);
            echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t";
        // line 103
        echo "\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"reset\" value=\"";
        // line 109
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 110
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
        echo "\" class=\"btn btn-primary\" />
\t\t\t\t";
        // line 111
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 111,  256 => 110,  252 => 109,  244 => 103,  242 => 102,  235 => 98,  229 => 96,  226 => 95,  224 => 94,  217 => 90,  212 => 88,  204 => 84,  201 => 83,  193 => 78,  188 => 76,  180 => 72,  177 => 71,  175 => 70,  168 => 66,  163 => 64,  155 => 60,  142 => 52,  136 => 50,  133 => 49,  132 => 48,  126 => 45,  120 => 43,  117 => 42,  110 => 38,  104 => 36,  101 => 35,  98 => 34,  91 => 30,  85 => 28,  82 => 27,  80 => 26,  76 => 24,  67 => 17,  65 => 16,  55 => 15,  48 => 14,  43 => 13,  37 => 9,  36 => 8,  32 => 7,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_search.html", "");
    }
}

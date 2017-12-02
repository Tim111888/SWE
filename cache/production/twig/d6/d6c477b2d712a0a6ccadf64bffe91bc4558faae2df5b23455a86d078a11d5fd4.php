<?php

/* manage_autogroups.html */
class __TwigTemplate_4336ac51905ec435e18922e2005ba0e11090e8f6c0d30df898fb4ae69111f1b6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "manage_autogroups.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((($context["S_ADD"] ?? null) || ($context["S_EDIT"] ?? null))) {
            // line 6
            echo "\t<a href=\"";
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MANAGE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MANAGE_EXPLAIN");
        echo "</p>

";
        // line 13
        if ((($context["S_ADD"] ?? null) || ($context["S_EDIT"] ?? null))) {
            // line 14
            echo "\t<form id=\"acp_autogroups_group\" method=\"post\" action=\"";
            echo ($context["U_FORM_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 16
            if (($context["S_ADD"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_ADD");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_EDIT");
            }
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_group_id\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_GROUP_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_GROUP_NAME_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"autogroups_group_id\" id=\"autogroups_group_id\">
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "groups", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["groups"], "GROUP_ID", array());
                echo "\"";
                if ($this->getAttribute($context["groups"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["groups"], "GROUP_NAME", array());
                echo "</option>
\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 24
                echo "\t\t\t\t\t\t\t<option value=\"\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_NO_GROUPS");
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_type_id\">";
            // line 30
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_CONDITION_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_CONDITION_NAME_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"autogroups_type_id\" id=\"autogroups_type_id\">
\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "conditions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["conditions"]) {
                // line 33
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["conditions"], "CONDITION_ID", array());
                echo "\"";
                if ($this->getAttribute($context["conditions"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["conditions"], "CONDITION_NAME", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conditions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</select></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_min_value\">";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MIN_VALUE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MIN_VALUE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input id=\"autogroups_min_value\" type=\"number\" size=\"4\" name=\"autogroups_min_value\" value=\"";
            // line 39
            echo ($context["MIN_VALUE"] ?? null);
            echo "\"  /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_max_value\">";
            // line 42
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MAX_VALUE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MAX_VALUE_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input id=\"autogroups_max_value\" type=\"number\" size=\"4\" name=\"autogroups_max_value\" value=\"";
            // line 43
            echo ($context["MAX_VALUE"] ?? null);
            echo "\"  /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_default\">";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_DEFAULT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"autogroups_default\" name=\"autogroups_default\" value=\"1\"";
            // line 47
            if (($context["S_DEFAULT"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"autogroups_default\" value=\"0\"";
            // line 48
            if ( !($context["S_DEFAULT"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"autogroups_notify\">";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_NOTIFY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_NOTIFY_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"autogroups_notify\" name=\"autogroups_notify\" value=\"1\"";
            // line 52
            if (($context["S_NOTIFY"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"autogroups_notify\" value=\"0\"";
            // line 53
            if ( !($context["S_NOTIFY"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 57
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 59
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</p>
\t</form>
";
        } else {
            // line 63
            echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_GROUP_NAME");
            echo "</th>
\t\t\t\t<th style=\"width: 15%;\">";
            // line 67
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_CONDITION_NAME");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MIN_VALUE");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_MAX_VALUE");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_DEFAULT");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_NOTIFY");
            echo "</th>
\t\t\t\t<th style=\"width: 10%;\">";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "autogroups", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["autogroups"]) {
                // line 77
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td><strong>";
                // line 78
                echo $this->getAttribute($context["autogroups"], "GROUP_NAME", array());
                echo "</strong></td>
\t\t\t\t\t<td>";
                // line 79
                echo $this->getAttribute($context["autogroups"], "CONDITION_NAME", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 80
                echo $this->getAttribute($context["autogroups"], "MIN_VALUE", array());
                echo "</td>
\t\t\t\t\t<td>";
                // line 81
                echo $this->getAttribute($context["autogroups"], "MAX_VALUE", array());
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 83
                if ($this->getAttribute($context["autogroups"], "S_DEFAULT", array())) {
                    // line 84
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    echo "
\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 90
                if ($this->getAttribute($context["autogroups"], "S_NOTIFY", array())) {
                    // line 91
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    echo "
\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td><a href=\"";
                // line 96
                echo $this->getAttribute($context["autogroups"], "U_EDIT", array());
                echo "\">";
                echo ($context["ICON_EDIT"] ?? null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["autogroups"], "U_SYNC", array());
                echo "\">";
                echo ($context["ICON_SYNC"] ?? null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["autogroups"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a></td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 99
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"7\" style=\"text-align: center;\">";
                // line 100
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autogroups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "\t\t</tbody>
\t</table>
\t<form id=\"autogroups_add_rule\" method=\"post\" action=\"";
            // line 105
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addrule\" value=\"";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_CREATE_RULE");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t";
            // line 109
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
\t<form id=\"autogroups_general_options\" method=\"post\" action=\"";
            // line 112
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 114
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GENERAL_OPTIONS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"group_ids\">";
            // line 116
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_EXEMPT_GROUP");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_AUTOGROUPS_EXEMPT_GROUP_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"group_ids[]\" id=\"group_ids\" size=\"10\" multiple=\"multiple\">
\t\t\t\t\t\t";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 120
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["groups"], "GROUP_ID", array());
                echo "\"";
                if ($this->getAttribute($context["groups"], "S_SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["groups"], "GROUP_NAME", array());
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<p class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"generalsubmit\" name=\"generalsubmit\" value=\"";
            // line 126
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t</p>
\t\t</fieldset>
\t</form>
";
        }
        // line 131
        echo "
";
        // line 132
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "manage_autogroups.html", 132)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "manage_autogroups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 132,  443 => 131,  435 => 126,  429 => 122,  414 => 120,  410 => 119,  401 => 116,  396 => 114,  391 => 112,  385 => 109,  380 => 107,  375 => 105,  371 => 103,  362 => 100,  359 => 99,  341 => 96,  338 => 95,  332 => 93,  326 => 91,  324 => 90,  320 => 88,  314 => 86,  308 => 84,  306 => 83,  301 => 81,  297 => 80,  293 => 79,  289 => 78,  286 => 77,  281 => 76,  274 => 72,  270 => 71,  266 => 70,  262 => 69,  258 => 68,  254 => 67,  250 => 66,  245 => 63,  238 => 59,  234 => 58,  230 => 57,  219 => 53,  211 => 52,  204 => 51,  194 => 48,  186 => 47,  179 => 46,  173 => 43,  166 => 42,  160 => 39,  153 => 38,  148 => 35,  133 => 33,  129 => 32,  121 => 30,  115 => 26,  106 => 24,  92 => 22,  87 => 21,  78 => 18,  69 => 16,  63 => 14,  61 => 13,  56 => 11,  51 => 9,  48 => 8,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "manage_autogroups.html", "");
    }
}

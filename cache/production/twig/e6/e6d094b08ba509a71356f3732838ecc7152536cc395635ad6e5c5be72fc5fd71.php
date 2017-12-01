<?php

/* ucp_notifications.html */
class __TwigTemplate_96d57ab6eedaf97b83dc9863bef610b5f448901dfeff0ae3d82a9cbb0ec03505 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
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
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        echo (isset($context["TITLE"]) ? $context["TITLE"] : null);
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo (isset($context["TITLE_EXPLAIN"]) ? $context["TITLE_EXPLAIN"] : null);
        echo "</div>

\t\t\t";
        // line 11
        if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
            // line 12
            echo "\t\t\t\t<div class=\"responsive-table\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<th class=\"marking\">";
                echo $this->getAttribute($context["notification_methods"], "NAME", array());
                echo "</th>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_types", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 24
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["notification_types"], "GROUP_NAME", array())) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"";
                    // line 26
                    echo (isset($context["NOTIFICATION_TYPES_COLS"]) ? $context["NOTIFICATION_TYPES_COLS"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["notification_types"], "GROUP_NAME", array());
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 31
                    echo $this->getAttribute($context["notification_types"], "NAME", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    if ($this->getAttribute($context["notification_types"], "EXPLAIN", array())) {
                        echo "<br />&nbsp; &nbsp;";
                        echo $this->getAttribute($context["notification_types"], "EXPLAIN", array());
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["notification_types"], "notification_methods", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"";
                        echo $this->getAttribute($context["notification_types"], "TYPE", array());
                        echo "_";
                        echo $this->getAttribute($context["notification_methods"], "METHOD", array());
                        echo "\"";
                        if ($this->getAttribute($context["notification_methods"], "SUBSCRIBED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()))) {
                // line 45
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
                // line 48
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"btn btn-sm btn-success\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a>";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 50
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 51)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 52
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"responsive-table\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 64
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t<tr class=\"notifications";
                    if ($this->getAttribute($context["notification_list"], "STYLING", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "STYLING", array());
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row notification no-margin-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2 notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 73
                    if ($this->getAttribute($context["notification_list"], "AVATAR", array())) {
                        echo $this->getAttribute($context["notification_list"], "AVATAR", array());
                    } else {
                        echo "<img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/no_avatar.gif\" alt=\"\" class=\"pull-left avatar\"/>";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "<a href=\"";
                        if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                            echo $this->getAttribute($context["notification_list"], "U_MARK_READ", array());
                        } else {
                            echo $this->getAttribute($context["notification_list"], "URL", array());
                        }
                        echo "\">";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    echo $this->getAttribute($context["notification_list"], "FORMATTED_TITLE", array());
                    if ($this->getAttribute($context["notification_list"], "REFERENCE", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "REFERENCE", array());
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 79
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "</a>";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "FORUM", array())) {
                        echo "<p class=\"notifications_forum\">";
                        echo $this->getAttribute($context["notification_list"], "FORUM", array());
                        echo "</p>";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "REASON", array())) {
                        echo "<p class=\"notifications_reason\">";
                        echo $this->getAttribute($context["notification_list"], "REASON", array());
                        echo "</p>";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    echo $this->getAttribute($context["notification_list"], "TIME", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 90
                    echo $this->getAttribute($context["notification_list"], "NOTIFICATION_ID", array());
                    echo "\"";
                    if ( !$this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                // line 103
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 104
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 105)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
            } else {
                // line 114
                echo "\t\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t\t";
            }
            // line 116
            echo "
\t\t\t";
        }
        // line 118
        echo "\t\t</div>
\t\t";
        // line 119
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_types", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array())))) {
            // line 120
            echo "\t\t\t<div class=\"panel-footer\">
\t\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 122
            echo (isset($context["FORM_TIME"]) ? $context["FORM_TIME"] : null);
            echo "\" />
\t\t\t\t\t";
            // line 123
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 125
            if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
            }
            echo "\" class=\"btn btn-sm btn-success \" />
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 127
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            // line 128
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 131
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t";
        }
        // line 135
        echo "\t</div>
</form>

";
        // line 138
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 138)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 138,  415 => 135,  408 => 131,  402 => 128,  398 => 127,  389 => 125,  384 => 123,  380 => 122,  376 => 120,  374 => 119,  371 => 118,  367 => 116,  361 => 114,  354 => 109,  348 => 107,  345 => 106,  332 => 105,  330 => 104,  324 => 103,  315 => 96,  297 => 90,  285 => 82,  278 => 81,  271 => 80,  267 => 79,  258 => 78,  248 => 77,  243 => 74,  235 => 73,  224 => 69,  220 => 68,  213 => 64,  209 => 63,  199 => 55,  193 => 53,  190 => 52,  177 => 51,  175 => 50,  168 => 49,  160 => 48,  155 => 45,  152 => 44,  146 => 40,  140 => 39,  136 => 37,  121 => 35,  117 => 34,  114 => 33,  109 => 32,  105 => 31,  101 => 29,  93 => 26,  90 => 25,  87 => 24,  83 => 23,  78 => 20,  69 => 18,  65 => 17,  61 => 16,  55 => 12,  53 => 11,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_notifications.html", "");
    }
}

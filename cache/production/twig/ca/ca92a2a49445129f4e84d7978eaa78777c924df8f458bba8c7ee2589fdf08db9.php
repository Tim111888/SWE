<?php

/* ucp_groups_membership.html */
class __TwigTemplate_098865880c3035df3eb138c912a44377d73af8397ae7ecfa85dbaca866835889 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_groups_membership.html", 1)->display($context);
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
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_EXPLAIN");
        echo "</p>
\t\t\t";
        // line 10
        $value = 0;
        $context['definition']->set('SHOW_BUTTONS', $value);
        // line 11
        echo "\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()))) {
            // line 12
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"selected\" value=\"";
                // line 29
                echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    echo "class=\"disabled\"";
                }
                echo " /> <a href=\"";
                echo $this->getAttribute($context["leader"], "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["leader"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["leader"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["leader"], "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 30
                if ($this->getAttribute($context["leader"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["leader"], "GROUP_DESC", array());
                }
                // line 31
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["leader"], "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["leader"], "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 32
                echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"selecting\">";
                // line 35
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["leader"], "GROUP_ID", array());
                    echo "\" /> ";
                }
                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 42
        echo "
\t\t\t";
        // line 43
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", array()))) {
            // line 44
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBER");
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 49
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 61
                if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    echo $this->getAttribute($context["member"], "GROUP_ID", array());
                    echo "\" /> ";
                }
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["member"], "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["member"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["member"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["member"], "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                if ($this->getAttribute($context["member"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["member"], "GROUP_DESC", array());
                }
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["member"], "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"selecting\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 68
                echo $this->getAttribute($context["member"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["member"], "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 75
        echo "\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", array()))) {
            // line 76
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 81
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_PENDING");
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 82
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pending"]) {
                // line 87
                echo "\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 89
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 92
                echo $this->getAttribute($context["pending"], "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["pending"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["pending"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["pending"], "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 93
                if ($this->getAttribute($context["pending"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["pending"], "GROUP_DESC", array());
                }
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["pending"], "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 95
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"selected\" value=\"";
                // line 97
                echo $this->getAttribute($context["pending"], "GROUP_ID", array());
                echo "\" ";
                if ($this->getAttribute($context["pending"], "GROUP_SPECIAL", array())) {
                    echo "class=\"disabled\"";
                }
                echo " />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 105
        echo "
\t\t\t";
        // line 106
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pending", array())) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", array())))) {
            echo "<hr class=\"dashed\" />";
        }
        // line 107
        echo "
\t\t\t";
        // line 108
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", array()))) {
            // line 109
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NONMEMBER");
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 114
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "nonmember", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["nonmember"]) {
                // line 119
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["nonmember"], "S_CAN_JOIN", array())) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t";
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 121
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 122
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 124
                echo $this->getAttribute($context["nonmember"], "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if ($this->getAttribute($context["nonmember"], "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    echo $this->getAttribute($context["nonmember"], "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["nonmember"], "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 125
                if ($this->getAttribute($context["nonmember"], "GROUP_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["nonmember"], "GROUP_DESC", array());
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["nonmember"], "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    echo $this->getAttribute($context["nonmember"], "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"selected\" value=\"";
                // line 129
                echo $this->getAttribute($context["nonmember"], "GROUP_ID", array());
                echo "\" ";
                if ( !$this->getAttribute($context["nonmember"], "S_CAN_JOIN", array())) {
                    echo "class=\"disabled\"";
                }
                echo " />
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nonmember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 137
        echo "\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t";
        // line 139
        if (((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null) || ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", array()) == 1))) {
            // line 140
            echo "\t\t\t\t<fieldset>
\t\t\t\t\t";
            // line 141
            if ((isset($context["S_CHANGE_DEFAULT"]) ? $context["S_CHANGE_DEFAULT"] : null)) {
                // line 142
                echo "\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"change_default\" value=\"";
                // line 143
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_DEFAULT_GROUP");
                echo "\" />
\t\t\t\t\t\t\t";
                // line 144
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 147
            echo "
\t\t\t\t\t";
            // line 148
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_BUTTONS", array()) == 1)) {
                // line 149
                echo "\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<label for=\"action\">";
                // line 150
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t<select name=\"action\" id=\"action\">
\t\t\t\t\t\t\t\t<option value=\"join\">";
                // line 152
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOIN_SELECTED");
                echo "</option>
\t\t\t\t\t\t\t\t<option value=\"resign\">";
                // line 153
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESIGN_SELECTED");
                echo "</option>
\t\t\t\t\t\t\t\t<option value=\"demote\">";
                // line 154
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DEMOTE_SELECTED");
                echo "</option>
\t\t\t\t\t\t\t</select>&nbsp;
\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"";
                // line 156
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t\t\t\t\t";
                // line 157
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t</fieldset>
\t\t\t";
        }
        // line 162
        echo "\t\t</div>
\t</div>
</form>

";
        // line 166
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_membership.html", 166)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_membership.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 166,  505 => 162,  501 => 160,  495 => 157,  491 => 156,  486 => 154,  482 => 153,  478 => 152,  472 => 150,  469 => 149,  467 => 148,  464 => 147,  458 => 144,  454 => 143,  451 => 142,  449 => 141,  446 => 140,  444 => 139,  440 => 137,  434 => 133,  420 => 129,  416 => 127,  409 => 126,  404 => 125,  392 => 124,  388 => 122,  385 => 121,  381 => 120,  378 => 119,  374 => 118,  367 => 114,  363 => 113,  357 => 109,  355 => 108,  352 => 107,  348 => 106,  345 => 105,  339 => 101,  325 => 97,  321 => 95,  314 => 94,  309 => 93,  297 => 92,  293 => 90,  290 => 89,  286 => 88,  283 => 87,  279 => 86,  272 => 82,  268 => 81,  261 => 76,  258 => 75,  252 => 71,  239 => 68,  234 => 65,  227 => 64,  222 => 63,  209 => 62,  197 => 61,  191 => 57,  188 => 56,  184 => 55,  181 => 54,  177 => 53,  170 => 49,  166 => 48,  160 => 44,  158 => 43,  155 => 42,  149 => 38,  130 => 35,  125 => 32,  118 => 31,  113 => 30,  95 => 29,  89 => 25,  86 => 24,  82 => 23,  79 => 22,  75 => 21,  68 => 17,  64 => 16,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_groups_membership.html", "");
    }
}

<?php

/* ucp_groups_manage.html */
class __TwigTemplate_259b9b25c7f74e7d1ca07c9495c18de583079b0ad3af0e88cdebe185826c4374 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_groups_manage.html", 1)->display($context);
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
\t\t\t<h3 class=\"panel-title\" ";
        // line 6
        if (($context["GROUP_COLOR"] ?? null)) {
            echo " style=\"color:#";
            echo ($context["GROUP_COLOR"] ?? null);
            echo ";\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
        if (($context["GROUP_NAME"] ?? null)) {
            echo " :: ";
            echo ($context["GROUP_NAME"] ?? null);
        }
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_EXPLAIN");
        echo "</div>
\t\t\t<hr class=\"panel-dash\"/>
\t\t\t";
        // line 11
        if (($context["S_EDIT"] ?? null)) {
            // line 12
            echo "\t\t\t\t<h3>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DETAILS");
            echo "</h3>
\t\t\t\t";
            // line 13
            if (($context["S_ERROR"] ?? null)) {
                // line 14
                echo "\t\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t\t\t\t<p>";
                // line 16
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"group_name\">";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t";
            // line 24
            if (($context["S_SPECIAL_GROUP"] ?? null)) {
                echo "<strong ";
                if (($context["GROUP_COLOUR"] ?? null)) {
                    echo "style=\"color: #";
                    echo ($context["GROUP_COLOUR"] ?? null);
                    echo ";\"";
                }
                echo "><p class=\"form-control-static\">";
                echo ($context["GROUP_NAME"] ?? null);
                echo "</p></strong> <input name=\"group_name\" type=\"hidden\" value=\"";
                echo ($context["GROUP_INTERNAL_NAME"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "<input name=\"group_name\" type=\"text\" id=\"group_name\" value=\"";
                echo ($context["GROUP_INTERNAL_NAME"] ?? null);
                echo "\" class=\"form-control\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"group_desc\">";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DESC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\" class=\"form-control\">";
            // line 31
            echo ($context["GROUP_DESC"] ?? null);
            echo "</textarea>
\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\" for=\"desc_parse_bbcode\"><input type=\"checkbox\" name=\"desc_parse_bbcode\" id=\"desc_parse_bbcode\"";
            // line 32
            if (($context["S_DESC_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\" for=\"desc_parse_smilies\"><input type=\"checkbox\" name=\"desc_parse_smilies\" id=\"desc_parse_smilies\"";
            // line 33
            if (($context["S_DESC_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t\t\t\t\t<label class=\"checkbox-inline\" for=\"desc_parse_urls\"><input type=\"checkbox\" name=\"desc_parse_urls\" id=\"desc_parse_urls\"";
            // line 34
            if (($context["S_DESC_URLS_CHECKED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
            echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 37
            if ( !($context["S_SPECIAL_GROUP"] ?? null)) {
                // line 38
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"group_type1\">";
                // line 39
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_TYPE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"group_type1\"><input type=\"radio\" name=\"group_type\" id=\"group_type1\" value=\"";
                // line 41
                echo ($context["GROUP_TYPE_FREE"] ?? null);
                echo "\"";
                echo ($context["GROUP_FREE"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_OPEN");
                echo "</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"group_type2\"><input type=\"radio\" name=\"group_type\" id=\"group_type2\" value=\"";
                // line 42
                echo ($context["GROUP_TYPE_OPEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_OPEN"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_REQUEST");
                echo "</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"group_type3\"><input type=\"radio\" name=\"group_type\" id=\"group_type3\" value=\"";
                // line 43
                echo ($context["GROUP_TYPE_CLOSED"] ?? null);
                echo "\"";
                echo ($context["GROUP_CLOSED"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_CLOSED");
                echo "</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"group_type4\"><input type=\"radio\" name=\"group_type\" id=\"group_type4\" value=\"";
                // line 44
                echo ($context["GROUP_TYPE_HIDDEN"] ?? null);
                echo "\"";
                echo ($context["GROUP_HIDDEN"] ?? null);
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
                // line 45
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_TYPE_EXPLAIN");
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 49
                echo "\t\t\t\t\t\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                echo ($context["GROUP_TYPE_SPECIAL"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<h3>";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_SETTINGS_SAVE");
            echo "</h3>
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"group_colour\">";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_COLOR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input name=\"group_colour\" type=\"hidden\" id=\"group_colour\" value=\"";
            // line 60
            echo ($context["GROUP_COLOUR"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t<div class=\"input-group colour-picker\" id=\"group_colour_component\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"#";
            // line 63
            echo ($context["GROUP_COLOUR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" class=\"form-control color-picker\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_COLOR_EXPLAIN");
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"group_rank\">";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<select name=\"group_rank\" id=\"group_rank\">";
            // line 71
            echo ($context["S_RANK_OPTIONS"] ?? null);
            echo "</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>

\t\t\t\t";
            // line 77
            $location = "ucp_avatar_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_avatar_options.html", "ucp_groups_manage.html", 77)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 78
            echo "
\t\t\t";
        } elseif (        // line 79
($context["S_LIST"] ?? null)) {
            // line 80
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "leader", array()))) {
                // line 81
                echo "\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 85
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEAD");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 86
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 87
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 88
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 89
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "leader", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 95
                    echo $this->getAttribute($context["leader"], "USERNAME_FULL", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 96
                    if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    }
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 97
                    echo $this->getAttribute($context["leader"], "USER_POSTS", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 98
                    echo $this->getAttribute($context["leader"], "JOINED", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 106
            echo "
\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "member", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 108
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["member"], "S_PENDING", array())) {
                    // line 109
                    echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 113
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_PENDING");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 114
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 115
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 116
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 117
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                    echo "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 121
$context["member"], "S_APPROVED", array())) {
                    // line 122
                    echo "\t\t\t\t\t\t";
                    if (($context["S_PENDING_SET"] ?? null)) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 131
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_APPROVED");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 132
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 133
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 134
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                    echo "</th>
\t\t\t\t\t\t\t\t\t\t<th>";
                    // line 135
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                    echo "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t";
                } else {
                    // line 140
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                    // line 141
                    echo $this->getAttribute($context["member"], "USERNAME_FULL", array());
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 142
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
                    }
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 143
                    echo $this->getAttribute($context["member"], "USER_POSTS", array());
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 144
                    echo $this->getAttribute($context["member"], "JOINED", array());
                    echo "</td>
\t\t\t\t\t\t\t<td><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 145
                    echo $this->getAttribute($context["member"], "USER_ID", array());
                    echo "\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 149
                echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 153
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERS");
                echo "</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 158
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
            // line 164
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 165
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
                // line 168
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_groups_manage.html", 168)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 169
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<fieldset class=\"text-right\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"#\" onclick=\"marklist('ucp', 'mark', true); return false;\">";
            // line 176
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"#\" onclick=\"marklist('ucp', 'mark', false); return false;\">";
            // line 177
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<select name=\"action\"><option value=\"\">";
            // line 179
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_OPTION");
            echo "</option>";
            echo ($context["S_ACTION_OPTIONS"] ?? null);
            echo "</select>
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"update\" value=\"";
            // line 180
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t\t</fieldset>
\t\t\t\t<hr class=\"panel-dash\"/>
\t\t\t\t<h3>";
            // line 183
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS");
            echo "</h3>
\t\t\t\t<p>";
            // line 184
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_USERS_UCP_EXPLAIN");
            echo "</p>
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"default0\">";
            // line 188
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_DEFAULT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"default1\"><input type=\"radio\" name=\"default\" id=\"default1\" value=\"1\" /> ";
            // line 190
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\" for=\"default0\"><input type=\"radio\" name=\"default\" id=\"default0\" value=\"0\" checked=\"checked\" /> ";
            // line 191
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label>
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 192
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"usernames\">";
            // line 196
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<textarea name=\"usernames\" id=\"usernames\" rows=\"3\" cols=\"30\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm btn-success\" href=\"";
            // line 200
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
            echo "</a>
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 201
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAMES_EXPLAIN");
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"addusers\" value=\"";
            // line 207
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t\t\t";
            // line 208
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t\t</fieldset>
\t\t\t";
        } else {
            // line 211
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "leader", array()))) {
                // line 212
                echo "\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t\t\t\t<tr class=\"header\">
\t\t\t\t\t\t\t\t\t<th>";
                // line 216
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th><span>";
                // line 217
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</span></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t\t";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "leader", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
                    // line 223
                    echo $this->getAttribute($context["leader"], "U_EDIT", array());
                    echo "\" class=\"topictitle\"";
                    if ($this->getAttribute($context["leader"], "GROUP_COLOUR", array())) {
                        echo " style=\"color: #";
                        echo $this->getAttribute($context["leader"], "GROUP_COLOUR", array());
                        echo ";\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["leader"], "GROUP_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 224
                    if ($this->getAttribute($context["leader"], "GROUP_DESC", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["leader"], "GROUP_DESC", array());
                    }
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"option\"><span><a class=\"btn btn-warning btn-sm\" href=\"";
                    // line 226
                    echo $this->getAttribute($context["leader"], "U_EDIT", array());
                    echo "\" >";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT");
                    echo "</a></span> <span><a class=\"btn btn-default btn-sm\" href=\"";
                    echo $this->getAttribute($context["leader"], "U_LIST", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LIST");
                    echo "</a></span></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 233
                echo "\t\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_LEADERS");
                echo "</strong></p>
\t\t\t\t";
            }
            // line 235
            echo "\t\t\t";
        }
        // line 236
        echo "\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 239
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
\t\t\t\t<input type=\"reset\" value=\"";
        // line 240
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t<input type=\"submit\" name=\"update\" value=\"";
        // line 241
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 242
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 248
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_manage.html", 248)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 248,  705 => 242,  701 => 241,  697 => 240,  693 => 239,  688 => 236,  685 => 235,  679 => 233,  673 => 229,  658 => 226,  655 => 225,  650 => 224,  638 => 223,  635 => 222,  631 => 221,  624 => 217,  620 => 216,  614 => 212,  611 => 211,  605 => 208,  601 => 207,  592 => 201,  586 => 200,  578 => 196,  571 => 192,  567 => 191,  563 => 190,  557 => 188,  550 => 184,  546 => 183,  540 => 180,  534 => 179,  529 => 177,  525 => 176,  520 => 173,  514 => 169,  502 => 168,  497 => 165,  495 => 164,  490 => 161,  481 => 158,  473 => 153,  467 => 149,  462 => 148,  456 => 145,  452 => 144,  448 => 143,  440 => 142,  436 => 141,  433 => 140,  425 => 135,  421 => 134,  417 => 133,  413 => 132,  409 => 131,  403 => 127,  397 => 123,  394 => 122,  392 => 121,  385 => 117,  381 => 116,  377 => 115,  373 => 114,  369 => 113,  363 => 109,  360 => 108,  355 => 107,  352 => 106,  346 => 102,  336 => 98,  332 => 97,  324 => 96,  320 => 95,  317 => 94,  313 => 93,  306 => 89,  302 => 88,  298 => 87,  294 => 86,  290 => 85,  284 => 81,  281 => 80,  279 => 79,  276 => 78,  264 => 77,  255 => 71,  249 => 69,  242 => 65,  237 => 63,  231 => 60,  225 => 58,  218 => 54,  213 => 51,  207 => 49,  200 => 45,  192 => 44,  184 => 43,  176 => 42,  168 => 41,  162 => 39,  159 => 38,  157 => 37,  147 => 34,  139 => 33,  131 => 32,  127 => 31,  121 => 29,  116 => 26,  111 => 25,  96 => 24,  90 => 22,  85 => 19,  79 => 16,  75 => 15,  72 => 14,  70 => 13,  65 => 12,  63 => 11,  58 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_groups_manage.html", "");
    }
}

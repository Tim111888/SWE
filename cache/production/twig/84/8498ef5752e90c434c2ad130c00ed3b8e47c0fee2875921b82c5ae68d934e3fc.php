<?php

/* memberlist_body.html */
class __TwigTemplate_12857bdc42525bf1d78455975d99ab4865e1acca3ea521ac64d0f2a7bfbc0d09 extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">
";
        } else {
            // line 6
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 6)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 7
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t";
            // line 8
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 10
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 14
            echo "\t<div class=\"page-header\">
\t\t<h2 class=\"group-title\"";
            // line 15
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h2>
\t</div>
\t";
            // line 17
            if ((isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null)) {
                // line 18
                echo "\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo (isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MANAGE_GROUP");
                echo "</a></p>
\t";
            }
            // line 20
            echo "
\t<p>";
            // line 21
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo " ";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>
\t<p>
\t\t";
            // line 23
            if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            }
            // line 24
            echo "\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            }
            // line 25
            echo "\t\t";
            if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
            }
            // line 26
            echo "\t</p>
";
        } else {
            // line 28
            echo "\t<div class=\"page-header\">
\t\t<h2 class=\"solo\">";
            // line 29
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h2>
\t</div>
\t<div class=\"text-center\">
\t\t<ul class=\"pagination pagination-sm\">
\t\t\t";
            // line 33
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                // line 34
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH"), "js");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a></li>
\t\t\t";
            } elseif (((            // line 35
(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                // line 36
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME"), "js");
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_MEMBER_SEARCH");
                echo "</a></li>
\t\t\t";
            }
            // line 38
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 39
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\" data-type=\"char-select\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</ul>
\t</div>
";
        }
        // line 44
        echo "
";
        // line 45
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 46
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\" id=\"memberlist\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"rank-img pull-right\"><a href=\"";
            // line 52
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
            echo "</a></span>
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            }
            echo "</a>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
            // line 55
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
            echo "</a></th>
\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
            // line 57
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
            echo "</a></th>
\t\t\t\t\t\t";
            // line 58
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                echo "<th class=\"last-active\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 59
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
";
        }
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 64
            echo "\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 65
                echo "\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 66
                    echo "\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 67
                        echo "\t\t\t\t<tr class=\"alert-success\">
\t\t\t\t\t<td colspan=\"";
                        // line 68
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t";
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 72
                        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t\t\t";
                    }
                    // line 77
                    echo "
<div class=\"forumbg forumbg-table\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t";
                    // line 83
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 84
                        echo "\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                        echo "\"><span class=\"rank-img pull-right\"><a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
                        // line 85
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</a></th>
\t\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
                        // line 86
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
                        // line 87
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                        echo "</a></th>
\t\t\t\t\t\t\t";
                        // line 88
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 89
                        echo "\t\t\t\t\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 90
                        echo "\t\t\t\t\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t\t\t\t\t<th class=\"posts\">";
                        // line 91
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                        echo "</th>
\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
                        // line 92
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t<th class=\"joined\">";
                        // line 93
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                        echo "</th>
\t\t\t\t\t\t";
                        // line 94
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"last-active\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 95
                        echo "\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                    // line 99
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 100
                    echo "\t\t";
                }
                // line 101
                echo "\t";
            }
            // line 102
            echo "\t\t\t<tr ";
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo "class=\"danger\"";
            }
            echo ">
\t\t\t\t<td class=\"name\">";
            // line 103
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img pull-right\">";
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                echo "</span>";
            }
            // line 104
            echo "\t\t\t\t";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INACTIVE");
                echo ")";
            }
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t\t\t<td class=\"posts\">";
            // line 105
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
                echo "\"><span class=\"badge\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</span></a>";
            } else {
                echo "<span class=\"badge\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</span>";
            }
            echo "</td>
\t\t\t\t<td class=\"infos hidden-xs\">";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t\t\t<td class=\"joined\">";
            // line 107
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t\t\t";
            // line 108
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "<td class=\"last-active\">";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 109
            echo "\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "\t\t\t<tr class=\"bg1\">
\t\t\t\t<td colspan=\"";
            // line 112
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MEMBERS");
            echo "</td>
\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        // line 120
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 121
            echo "\t<fieldset class=\"text-center\">
\t\t<div class=\"btn-group\">
\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 123
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a>
\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"marklist('results', 'user', false); return false;\">";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a>
\t\t</div>
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 126
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MARKED");
            echo "\" class=\"btn btn-sm btn-default\" />
\t</fieldset>
";
        }
        // line 129
        echo "
";
        // line 130
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 131
            echo "\t</form>
\t<form method=\"post\" id=\"sort-results\" action=\"";
            // line 132
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 134
        echo "
";
        // line 135
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 136
            echo "\t<fieldset>
\t\t";
            // line 137
            if ((isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box ";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 138
            echo "\t\t";
            if ((isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null);
                echo "\" class=\"right-box ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                echo "</a>";
            }
            // line 139
            echo "\t\t<label for=\"sk\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_SORT_METHOD");
            echo ": <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t\t<label for=\"sd\">";
            // line 140
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select> <input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" class=\"btn btn-default\" /></label>
\t</fieldset>
";
        }
        // line 143
        echo "
</form>

<div class=\"row\">
\t<div class=\"col-md-12 text-center\">
\t\t<div class=\"btn-group\">
\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 149
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "</a>
\t\t\t";
        // line 150
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 151
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 151)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 152
            echo "\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t";
        }
        // line 155
        echo "\t\t</div>
\t</div>
</div>

";
        // line 159
        if ((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) {
            // line 160
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12 text-center\">
\t\t\t<div class=\"btn-group topic-pagination\">
\t\t\t\t";
            // line 163
            echo (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 168
        echo "
";
        // line 169
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 170
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 170)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 172
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 172)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 173
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 173)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  734 => 173,  721 => 172,  707 => 170,  705 => 169,  702 => 168,  694 => 163,  689 => 160,  687 => 159,  681 => 155,  675 => 153,  672 => 152,  659 => 151,  657 => 150,  653 => 149,  645 => 143,  635 => 140,  628 => 139,  617 => 138,  607 => 137,  604 => 136,  602 => 135,  599 => 134,  594 => 132,  591 => 131,  589 => 130,  586 => 129,  580 => 126,  575 => 124,  571 => 123,  567 => 121,  565 => 120,  558 => 115,  543 => 112,  540 => 111,  534 => 109,  528 => 108,  524 => 107,  506 => 106,  490 => 105,  468 => 104,  458 => 103,  451 => 102,  448 => 101,  445 => 100,  442 => 99,  437 => 96,  434 => 95,  428 => 94,  424 => 93,  409 => 92,  405 => 91,  400 => 90,  397 => 89,  389 => 88,  383 => 87,  368 => 86,  362 => 85,  343 => 84,  341 => 83,  333 => 77,  326 => 72,  323 => 71,  313 => 68,  310 => 67,  307 => 66,  304 => 65,  301 => 64,  296 => 63,  290 => 59,  282 => 58,  276 => 57,  261 => 56,  255 => 55,  244 => 53,  238 => 52,  228 => 51,  221 => 46,  219 => 45,  216 => 44,  211 => 41,  200 => 39,  195 => 38,  185 => 36,  183 => 35,  174 => 34,  172 => 33,  157 => 29,  154 => 28,  150 => 26,  145 => 25,  140 => 24,  136 => 23,  129 => 21,  126 => 20,  118 => 18,  116 => 17,  105 => 15,  102 => 14,  100 => 13,  97 => 12,  92 => 10,  89 => 9,  77 => 8,  70 => 7,  57 => 6,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_body.html", "");
    }
}

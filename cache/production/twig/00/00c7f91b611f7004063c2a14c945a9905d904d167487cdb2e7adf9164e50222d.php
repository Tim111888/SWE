<?php

/* ucp_main_front.html */
class __TwigTemplate_ae580db6ba3a7eb5b3c5806a6af46e7fe893ea728f0f4aa1c14d66f965f5031c extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<div class=\"alert alert-info\">";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_WELCOME");
        echo "</div>
\t\t";
        // line 9
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 10
            echo "\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IMPORTANT_NEWS");
            echo "</th>
\t\t\t\t\t\t\t<th class=\"lastpost\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 19
                echo "\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td ";
                // line 21
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                    echo "style=\"background-image: url(";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo "); background-repeat: no-repeat;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 22
                if ($this->getAttribute($context["topicrow"], "S_UNREAD", array())) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 24
                    echo (isset($context["NEW_POST"]) ? $context["NEW_POST"] : null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a><br />

\t\t\t\t\t\t\t\t\t";
                // line 29
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 35
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 36
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t";
                // line 44
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t";
                // line 48
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"lastpost\"><span>";
                // line 52
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 53
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a> <br />";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t</table>
\t\t\t</div>
\t\t";
        }
        // line 61
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 63
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YOUR_DETAILS");
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 66
        // line 67
        echo "\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t";
        // line 68
        // line 69
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
        // line 70
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\">";
        // line 71
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\">";
        // line 75
        echo (isset($context["LAST_VISIT_YOU"]) ? $context["LAST_VISIT_YOU"] : null);
        echo "</div></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
        // line 78
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\">";
        // line 79
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                echo " | <strong><a href=\"";
                echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_YOUR_POSTS");
                echo "</a></strong>";
            }
            echo "<br />(";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo " / ";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo ")";
        } else {
            echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        }
        echo "</div></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 81
        if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
            // line 82
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\"><strong><a href=\"";
            // line 84
            echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
            echo "\">";
            echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
            echo "</a></strong><br />(";
            echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
            echo " / ";
            echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
            echo ")</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t";
        if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
            // line 88
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
            // line 89
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\"><strong><a href=\"";
            // line 90
            echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
            echo "\">";
            echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
            echo "</a></strong><br />(";
            echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
            echo " / ";
            echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
            echo ")</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t";
        if ((isset($context["WARNINGS"]) ? $context["WARNINGS"] : null)) {
            // line 94
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\">";
            // line 95
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YOUR_WARNINGS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\"><div class=\"form-control-static\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> [";
            // line 96
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "]</div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t";
        // line 100
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 101
        // line 102
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 107
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_front.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 107,  352 => 102,  351 => 101,  348 => 100,  346 => 99,  340 => 96,  335 => 95,  332 => 94,  329 => 93,  317 => 90,  312 => 89,  309 => 88,  306 => 87,  294 => 84,  289 => 83,  286 => 82,  284 => 81,  263 => 79,  258 => 78,  252 => 75,  247 => 74,  241 => 71,  236 => 70,  233 => 69,  232 => 68,  229 => 67,  228 => 66,  222 => 63,  218 => 61,  213 => 58,  198 => 53,  190 => 52,  173 => 49,  169 => 48,  158 => 45,  154 => 44,  151 => 43,  146 => 40,  140 => 39,  130 => 37,  128 => 36,  122 => 35,  115 => 34,  112 => 33,  108 => 32,  104 => 30,  102 => 29,  94 => 27,  88 => 24,  83 => 23,  81 => 22,  72 => 21,  68 => 19,  64 => 18,  58 => 15,  54 => 14,  48 => 10,  46 => 9,  42 => 8,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ucp_main_front.html", "");
    }
}

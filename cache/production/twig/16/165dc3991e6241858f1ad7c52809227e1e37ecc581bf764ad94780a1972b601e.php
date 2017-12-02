<?php

/* mcp_queue.html */
class __TwigTemplate_2f5912790fb19f2d3f6b3846616e7cea320a1aec2e36be5997ec76074dae1e93 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_queue.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"clearfix\">
\t<fieldset class=\"forum-selector\">
\t\t<label for=\"fo\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " <select name=\"f\" id=\"fo\">";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select></label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
        // line 6
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
        echo "\" class=\"btn btn-default\" />
\t</fieldset>
</div>

<form id=\"mcp\" method=\"post\" action=\"";
        // line 10
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p class=\"alert alert-info\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
        echo "</p>
\t\t\t";
        // line 17
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "postrow", array()))) {
            // line 18
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 21
            echo ($context["TOTAL"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 22
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 23
                echo "\t\t\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 23)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 34
            if (($context["S_TOPICS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST");
            }
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"moderation\"><span>";
            // line 35
            if ( !($context["S_TOPICS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " &amp; ";
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo "</span></th>
\t\t\t\t\t\t\t\t<th class=\"marking\">";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_DELETED_TOPIC", array())) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<tr colspan=\"3\"><p class=\"notopics\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETED_TOPIC");
                    echo "</p></tr>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 46
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                    echo "</a>";
                    if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                        echo " <i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 47
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["postrow"], "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"moderation\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 51
                    if (($context["S_TOPICS"] ?? null)) {
                        echo "<br />";
                    } else {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_TOPIC", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "TOPIC_TITLE", array());
                        echo "</a> <br />";
                    }
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"marking\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 56
                    if (($context["S_TOPICS"] ?? null)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "TOPIC_ID", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                        echo $this->getAttribute($context["postrow"], "POST_ID", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
            // line 68
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_queue.html", 68)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 69
            echo "\t\t\t\t";
            if (($context["TOPIC_ID"] ?? null)) {
                // line 70
                echo "\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                echo ($context["TOPIC_ID"] ?? null);
                echo "\" checked=\"checked\" onClick=\"document.getElementById('mcp').submit()\" /> <strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLY_TOPIC");
                echo "</strong></label>
\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t<hr />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 76
            echo ($context["TOTAL"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 77
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 78
                echo "\t\t\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_queue.html", 78)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 79
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 80
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t<p class=\"notopics\"><strong>
\t\t\t\t\t";
            // line 87
            if (($context["S_RESTORE"] ?? null)) {
                // line 88
                echo "\t\t\t\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS_DELETED");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS_DELETED");
                }
                // line 89
                echo "\t\t\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\t\t\t";
                if (($context["S_TOPICS"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS_QUEUE");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS_QUEUE");
                }
                // line 91
                echo "\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t</strong></p>
\t\t\t";
        }
        // line 94
        echo "\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "postrow", array()))) {
            // line 95
            echo "\t\t\t\t<fieldset class=\"display-actions pull-right\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t";
            // line 97
            if (($context["S_TOPICS"] ?? null)) {
                // line 98
                echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-warning\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
                // line 99
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t\t\t\t";
            } else {
                // line 101
                echo "\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\" onclick=\"marklist('mcp', 'post_id_list', true); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-warning\" onclick=\"marklist('mcp', 'post_id_list', false); return false;\">";
                // line 102
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t";
            if (($context["S_RESTORE"] ?? null)) {
                // line 105
                echo "\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" name=\"action[delete]\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "\" />&nbsp;
\t\t\t\t\t\t\t<input class=\"btn btn-warning\" type=\"submit\" name=\"action[restore]\" value=\"";
                // line 106
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" />
\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" />
\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 111
            echo "
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t";
        }
        // line 115
        echo "\t\t</div>
\t</div>
\t";
        // line 117
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</form>

";
        // line 120
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_queue.html", 120)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_queue.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 120,  382 => 117,  378 => 115,  372 => 111,  367 => 109,  362 => 108,  357 => 106,  352 => 105,  349 => 104,  344 => 102,  339 => 101,  334 => 99,  329 => 98,  327 => 97,  323 => 95,  320 => 94,  316 => 92,  313 => 91,  306 => 90,  303 => 89,  296 => 88,  294 => 87,  291 => 86,  285 => 82,  279 => 80,  276 => 79,  263 => 78,  261 => 77,  257 => 76,  251 => 72,  243 => 70,  240 => 69,  228 => 68,  223 => 65,  217 => 64,  212 => 61,  206 => 59,  200 => 57,  198 => 56,  185 => 52,  173 => 51,  160 => 47,  150 => 46,  146 => 44,  140 => 42,  137 => 41,  133 => 40,  126 => 36,  118 => 35,  110 => 34,  101 => 27,  95 => 25,  92 => 24,  79 => 23,  77 => 22,  73 => 21,  68 => 18,  66 => 17,  62 => 16,  56 => 13,  50 => 10,  43 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_queue.html", "");
    }
}

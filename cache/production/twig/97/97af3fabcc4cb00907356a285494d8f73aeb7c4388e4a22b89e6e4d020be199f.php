<?php

/* mcp_reports.html */
class __TwigTemplate_0133c8227baf4dbec5f6fdd1928e764151f58b2cf554d102530a52a23b458064 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_reports.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !($context["S_PM"] ?? null)) {
            // line 4
            echo "\t<div class=\"clearfix\">
\t\t<fieldset class=\"forum-selector\">
\t\t\t<label for=\"fo\">";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"f\" id=\"fo\">";
            echo ($context["S_FORUM_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" class=\"btn btn-default\" />
\t\t\t";
            // line 8
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</div>
";
        }
        // line 12
        echo "
<form id=\"mcp\" method=\"post\" action=\"";
        // line 13
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 16
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPLAIN");
        echo "</div>
\t\t\t";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "postrow", array()))) {
            // line 21
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 24
            echo ($context["TOTAL_REPORTS"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 25
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_reports.html", 26)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 37
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
            echo "</th>
\t\t\t\t\t\t\t\t<th>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
            if ( !($context["S_PM"] ?? null)) {
                echo " &amp; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
            }
            echo "</th>
\t\t\t\t\t\t\t\t<th>";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "postrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t";
                // line 45
                if (($context["S_PM"] ?? null)) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 48
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["postrow"], "PM_SUBJECT", array());
                    echo "</a> <i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i><br />
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 49
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "PM_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["postrow"], "PM_TIME", array());
                    echo "</span><br />
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 50
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_TO");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "RECIPIENTS", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 52
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo " &laquo; ";
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"moderation\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 57
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo " &laquo; ";
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 62
                    echo $this->getAttribute($context["postrow"], "U_VIEW_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
                    echo "</a> <i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i><br />
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 63
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["postrow"], "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 65
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo " &laquo; ";
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 66
                    if ($this->getAttribute($context["postrow"], "U_VIEWFORUM", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    }
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"moderation\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 71
                    echo $this->getAttribute($context["postrow"], "REPORTER_FULL", array());
                    echo " &laquo; ";
                    echo $this->getAttribute($context["postrow"], "REPORT_TIME", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    if ($this->getAttribute($context["postrow"], "U_VIEWFORUM", array())) {
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_VIEWFORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "FORUM_NAME", array());
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"report_id_list[]\" value=\"";
                echo $this->getAttribute($context["postrow"], "REPORT_ID", array());
                echo "\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<!-- DEFINE DISPLAY_OPTIONS_MCP_TOPICS = 1 -->
\t\t\t\t";
            // line 82
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_reports.html", 82)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 83
            echo "\t\t\t\t<hr/>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 87
            echo ($context["TOTAL_REPORTS"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 88
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_reports.html", 89)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 90
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 96
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_reports.html", 96)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 97
            echo "\t\t\t\t";
            if (($context["TOPIC_ID"] ?? null)) {
                echo "<label><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"";
                echo ($context["TOPIC_ID"] ?? null);
                echo "\" checked=\"checked\" onClick=\"document.getElementById('mcp').submit()\" /> <strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 98
            echo "\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t<p><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_REPORTS");
            echo "</strong></p>
\t\t\t";
        }
        // line 101
        echo "\t\t</div>
\t</div>
</form>

";
        // line 105
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_reports.html", 105)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_reports.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 105,  362 => 101,  356 => 99,  353 => 98,  344 => 97,  332 => 96,  327 => 93,  321 => 91,  318 => 90,  305 => 89,  303 => 88,  299 => 87,  293 => 83,  281 => 82,  275 => 78,  265 => 75,  249 => 72,  243 => 71,  237 => 67,  225 => 66,  216 => 65,  205 => 63,  199 => 62,  195 => 60,  187 => 57,  174 => 52,  167 => 50,  159 => 49,  153 => 48,  149 => 46,  147 => 45,  144 => 44,  140 => 43,  133 => 39,  125 => 38,  121 => 37,  112 => 30,  106 => 28,  103 => 27,  90 => 26,  88 => 25,  84 => 24,  79 => 21,  77 => 20,  73 => 19,  67 => 16,  61 => 13,  58 => 12,  51 => 8,  47 => 7,  40 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_reports.html", "");
    }
}

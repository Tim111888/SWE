<?php

/* mcp_front.html */
class __TwigTemplate_d69e4d298adee9fa3a7d4af7ed00fd8d43daf497e9f6cd185b4bad7f7b4642cc extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_front.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 5
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h3>
\t</div>

\t";
        // line 8
        // line 9
        echo "
\t<div class=\"panel-body\">
\t\t";
        // line 11
        if (($context["S_SHOW_UNAPPROVED"] ?? null)) {
            // line 12
            echo "\t\t\t<form id=\"mcp_queue\" method=\"post\" action=\"";
            echo ($context["S_MCP_QUEUE_ACTION"] ?? null);
            echo "\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<p>";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNAPPROVED_TOTAL");
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 20
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "unapproved", array()))) {
                // line 21
                echo "\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered topiclist cplist\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>";
                // line 25
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"moderation hidden-xs\"><span>";
                // line 26
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo "</span></th>
\t\t\t\t\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody class=\"topiclist cplist missing-column\">
\t\t\t\t\t\t\t\t\t";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "unapproved", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 34
                    echo $this->getAttribute($context["unapproved"], "U_POST_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["unapproved"], "SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["unapproved"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 35
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["unapproved"], "AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["unapproved"], "POST_TIME", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 38
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["unapproved"], "TOPIC_TITLE", array());
                    echo "</a> [<a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_MCP_TOPIC", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 39
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["unapproved"], "U_FORUM", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                    }
                    if ($this->getAttribute($context["unapproved"], "U_MCP_FORUM", array())) {
                        echo " [<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_MCP_FORUM", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                        echo "</a>]";
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"moderation hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 45
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["unapproved"], "TOPIC_TITLE", array());
                    echo "</a> [<a href=\"";
                    echo $this->getAttribute($context["unapproved"], "U_MCP_TOPIC", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 46
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["unapproved"], "U_FORUM", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["unapproved"], "FORUM_NAME", array());
                    }
                    if ($this->getAttribute($context["unapproved"], "U_MCP_FORUM", array())) {
                        echo " [<a href=\"";
                        echo $this->getAttribute($context["unapproved"], "U_MCP_FORUM", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE");
                        echo "</a>]";
                    }
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 49
                    echo $this->getAttribute($context["unapproved"], "POST_ID", array());
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "unapproved", array()))) {
                // line 57
                echo "\t\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t\t\t\t\t";
                // line 59
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\">";
                // line 61
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-warning\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\">";
                // line 62
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" />
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 66
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t";
                // line 69
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t</div>
\t\t\t</form>
\t\t";
        }
        // line 75
        echo "
\t\t";
        // line 76
        // line 77
        echo "
\t\t";
        // line 78
        if (($context["S_SHOW_REPORTS"] ?? null)) {
            // line 79
            echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 81
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<p>";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTS_TOTAL");
            echo "</p>
\t\t\t\t</div>
\t\t\t\t";
            // line 86
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "report", array()))) {
                // line 87
                echo "\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered topiclist\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 91
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"moderation hidden-xs\"><span>";
                // line 92
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo "</span></th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 99
                    echo $this->getAttribute($context["report"], "U_POST_DETAILS", array());
                    echo "#reports\" class=\"topictitle\">";
                    echo $this->getAttribute($context["report"], "SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["report"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 100
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["report"], "POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 103
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORT_TIME", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 104
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["report"], "U_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["report"], "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"moderation hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 110
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["report"], "REPORT_TIME", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 111
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["report"], "U_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["report"], "FORUM_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 120
            echo "\t\t\t</div>
\t\t";
        }
        // line 122
        echo "
\t\t";
        // line 123
        // line 124
        echo "
\t\t";
        // line 125
        if (($context["S_SHOW_PM_REPORTS"] ?? null)) {
            // line 126
            echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 128
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<p>";
            // line 131
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_REPORTS_TOTAL");
            echo "</p>
\t\t\t\t</div>
\t\t\t\t";
            // line 133
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pm_report", array()))) {
                // line 134
                echo "\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 138
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_DETAILS");
                echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"moderation hidden-xs\"><span>";
                // line 139
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTER");
                echo "</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pm_report", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 146
                    echo $this->getAttribute($context["pm_report"], "U_PM_DETAILS", array());
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute($context["pm_report"], "PM_SUBJECT", array());
                    echo "</a> ";
                    if ($this->getAttribute($context["pm_report"], "ATTACH_ICON_IMG", array())) {
                        echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 147
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "PM_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["pm_report"], "PM_TIME", array());
                    echo "</span><br />
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 148
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_TO");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "RECIPIENTS", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 150
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"moderation hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 154
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORTER_FULL", array());
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute($context["pm_report"], "REPORT_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 162
            echo "\t\t\t</div>
\t\t";
        }
        // line 164
        echo "
\t\t";
        // line 165
        // line 166
        echo "
\t\t";
        // line 167
        if (($context["S_SHOW_LOGS"] ?? null)) {
            // line 168
            echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 170
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_LOGS");
            echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"name\">";
            // line 176
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"username\">";
            // line 177
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"ip\">";
            // line 178
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"topic\">";
            // line 179
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"topic-logs\">";
            // line 180
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"time\">";
            // line 181
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIME");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "log", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 187
                echo $this->getAttribute($context["log"], "ACTION", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 188
                echo $this->getAttribute($context["log"], "USERNAME", array());
                echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 189
                echo $this->getAttribute($context["log"], "IP", array());
                echo "</span></td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 190
                if ($this->getAttribute($context["log"], "U_VIEW_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEW_TOPIC", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 191
                if ($this->getAttribute($context["log"], "U_VIEWLOGS", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["log"], "U_VIEWLOGS", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t\t\t\t\t\t\t<td><span>";
                // line 192
                echo $this->getAttribute($context["log"], "TIME", array());
                echo "</span></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 195
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\">";
                // line 196
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ENTRIES");
                echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 204
        echo "\t</div>

\t";
        // line 206
        // line 207
        echo "
</div>
";
        // line 209
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_front.html", 209)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 209,  635 => 207,  634 => 206,  630 => 204,  623 => 199,  614 => 196,  611 => 195,  603 => 192,  593 => 191,  581 => 190,  577 => 189,  573 => 188,  569 => 187,  566 => 186,  561 => 185,  554 => 181,  550 => 180,  546 => 179,  542 => 178,  538 => 177,  534 => 176,  525 => 170,  521 => 168,  519 => 167,  516 => 166,  515 => 165,  512 => 164,  508 => 162,  502 => 158,  484 => 154,  469 => 150,  462 => 148,  454 => 147,  444 => 146,  440 => 144,  436 => 143,  429 => 139,  425 => 138,  419 => 134,  417 => 133,  412 => 131,  406 => 128,  402 => 126,  400 => 125,  397 => 124,  396 => 123,  393 => 122,  389 => 120,  383 => 116,  367 => 111,  355 => 110,  341 => 104,  329 => 103,  317 => 100,  307 => 99,  303 => 97,  299 => 96,  290 => 92,  286 => 91,  280 => 87,  278 => 86,  273 => 84,  267 => 81,  263 => 79,  261 => 78,  258 => 77,  257 => 76,  254 => 75,  249 => 72,  243 => 69,  237 => 66,  233 => 65,  227 => 62,  223 => 61,  218 => 59,  214 => 57,  211 => 56,  205 => 52,  196 => 49,  192 => 47,  172 => 46,  159 => 45,  152 => 40,  132 => 39,  119 => 38,  107 => 35,  97 => 34,  93 => 32,  89 => 31,  79 => 26,  75 => 25,  69 => 21,  67 => 20,  62 => 18,  56 => 15,  49 => 12,  47 => 11,  43 => 9,  42 => 8,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_front.html", "");
    }
}

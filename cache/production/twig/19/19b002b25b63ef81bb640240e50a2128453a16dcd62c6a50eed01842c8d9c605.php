<?php

/* mcp_forum.html */
class __TwigTemplate_5692a0f4f163161e050493f2c138c147f0883a9e342d95a958439e5ca9022586 extends Twig_Template
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
        $this->loadTemplate("mcp_header.html", "mcp_forum.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $value = "forum-selection2";
        $context['definition']->set('CUSTOM_FIELDSET_CLASS', $value);
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute(($context["definition"] ?? null), "DISPLAY_JUMPBOX", array()) == 1)) {
            // line 6
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "mcp_forum.html", 6)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 8
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 9
        echo ($context["S_MCP_ACTION"] ?? null);
        echo "\" class=\"form-inline\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><a href=\"";
        // line 12
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a></h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 18
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</a>
\t\t\t\t\t\t";
        // line 19
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
            // line 20
            echo "\t\t\t\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 20)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 21
            echo "\t\t\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 27
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array()))) {
            // line 28
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr class=\"icon\">
\t\t\t\t\t\t\t\t<th class=\"topic-name\">";
            // line 32
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"replies hidden-xs\">";
            // line 33
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><span>";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo "</span></th>
\t\t\t\t\t\t\t\t";
            // line 35
            if ( !($context["S_MERGE_SELECT"] ?? null)) {
                echo "<th class=\"marking\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</th>";
            }
            // line 36
            echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist ";
            // line 38
            if (($context["S_MERGE_SELECT"] ?? null)) {
                echo " missing-column";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<tr ";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    echo "class=\"danger\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t<td class=\"topic-name\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"";
                // line 43
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"btn ";
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                    echo "btn-info";
                } else {
                    echo "btn-default";
                }
                echo " btn-lg tooltip-link\" title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 47
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_SELECT_TOPIC", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_SELECT_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_MERGE");
                    echo " ]</a>&nbsp;&nbsp; ";
                }
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pcon\" style=\"background-image: url(";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "); background-repeat: no-repeat;\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 52
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 55
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_DELETED", array()))) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\" title=\"{L_TOPIC_DELETED\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-recycle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 60
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 65
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array()) && ($context["S_CAN_DELETE"] ?? null))) {
                    echo "&nbsp;<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_DELETE_TOPIC", array());
                    echo "\" class=\"topictitle\">[ ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_SHADOW_TOPIC");
                    echo " ]</a>";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
                // line 70
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 72
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "<br />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"visible-xs-block\">";
                // line 75
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo "</strong></span>

\t\t\t\t\t\t\t\t\t\t";
                // line 77
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 82
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 83
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 84
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"replies hidden-xs\">";
                // line 97
                echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                echo " <dfn>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</dfn></td>
\t\t\t\t\t\t\t\t\t<td class=\"lastpost hidden-xs\"><span><dfn>";
                // line 98
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "<br />";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                // line 100
                if ( !($context["S_MERGE_SELECT"] ?? null)) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"marking\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    if ( !$this->getAttribute($context["topicrow"], "S_MOVED_TOPIC", array())) {
                        echo "<input type=\"checkbox\" name=\"topic_id_list[]\" value=\"";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_CHECKED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "&nbsp;";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t<strong>";
            // line 112
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
            echo "</strong>
\t\t\t\t</div>
\t\t\t";
        }
        // line 115
        echo "\t\t\t";
        $location = "display_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("display_options.html", "mcp_forum.html", 115)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 116
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 119
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</a>
\t\t\t\t\t\t";
        // line 120
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
            // line 121
            echo "\t\t\t\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_forum.html", 121)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 122
            echo "\t\t\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr/>
\t\t\t";
        // line 129
        // line 130
        echo "\t\t\t<fieldset class=\"display-actions pull-right\">
\t\t\t\t";
        // line 131
        if ( !($context["S_MERGE_SELECT"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm\" onclick=\"marklist('mcp', 'topic_id_list', true); return false;\">";
            // line 133
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-sm\" onclick=\"marklist('mcp', 'topic_id_list', false); return false;\">";
            // line 134
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<select name=\"action\">
\t\t\t\t\t\t<option value=\"\" selected=\"selected\">";
            // line 137
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_ACTION");
            echo "</option>
\t\t\t\t\t\t";
            // line 138
            if (($context["S_CAN_DELETE"] ?? null)) {
                echo "<option value=\"delete_topic\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "</option>";
            }
            // line 139
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_RESTORE"] ?? null)) {
                echo "<option value=\"restore_topic\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "</option>";
            }
            // line 140
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MERGE"] ?? null)) {
                echo "<option value=\"merge_topics\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MERGE");
                echo "</option>";
            }
            // line 141
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MOVE"] ?? null)) {
                echo "<option value=\"move\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOVE");
                echo "</option>";
            }
            // line 142
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_FORK"] ?? null)) {
                echo "<option value=\"fork\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORK");
                echo "</option>";
            }
            // line 143
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_LOCK"] ?? null)) {
                echo "<option value=\"lock\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK");
                echo "</option><option value=\"unlock\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK");
                echo "</option>";
            }
            // line 144
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_SYNC"] ?? null)) {
                echo "<option value=\"resync\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC");
                echo "</option>";
            }
            // line 145
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MAKE_NORMAL"] ?? null)) {
                echo "<option value=\"make_normal\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_NORMAL");
                echo "</option>";
            }
            // line 146
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MAKE_STICKY"] ?? null)) {
                echo "<option value=\"make_sticky\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_STICKY");
                echo "</option>";
            }
            // line 147
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MAKE_ANNOUNCE"] ?? null)) {
                echo "<option value=\"make_announce\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_ANNOUNCE");
                echo "</option>";
            }
            // line 148
            echo "\t\t\t\t\t\t";
            if (($context["S_CAN_MAKE_ANNOUNCE_GLOBAL"] ?? null)) {
                echo "<option value=\"make_global\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAKE_GLOBAL");
                echo "</option>";
            }
            // line 149
            echo "\t\t\t\t\t\t";
            // line 150
            echo "\t\t\t\t\t</select>
\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t\t";
        }
        // line 153
        echo "\t\t\t</fieldset>
\t\t\t";
        // line 154
        // line 155
        echo "\t\t</div>
\t</div>
\t";
        // line 157
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</form>

";
        // line 160
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_forum.html", 160)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_forum.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 160,  586 => 157,  582 => 155,  581 => 154,  578 => 153,  573 => 151,  570 => 150,  568 => 149,  561 => 148,  554 => 147,  547 => 146,  540 => 145,  533 => 144,  524 => 143,  517 => 142,  510 => 141,  503 => 140,  496 => 139,  490 => 138,  486 => 137,  480 => 134,  476 => 133,  473 => 132,  471 => 131,  468 => 130,  467 => 129,  461 => 125,  455 => 123,  452 => 122,  439 => 121,  437 => 120,  433 => 119,  428 => 116,  415 => 115,  409 => 112,  406 => 111,  400 => 107,  393 => 105,  389 => 103,  377 => 102,  374 => 101,  372 => 100,  361 => 98,  355 => 97,  344 => 94,  340 => 93,  336 => 91,  331 => 88,  325 => 87,  315 => 85,  313 => 84,  307 => 83,  300 => 82,  297 => 81,  293 => 80,  289 => 78,  287 => 77,  279 => 75,  267 => 73,  263 => 72,  260 => 71,  259 => 70,  256 => 69,  247 => 68,  241 => 65,  234 => 64,  231 => 63,  225 => 60,  220 => 59,  217 => 58,  211 => 55,  204 => 54,  201 => 53,  200 => 52,  194 => 51,  188 => 50,  186 => 49,  177 => 48,  176 => 47,  161 => 43,  152 => 40,  148 => 39,  142 => 38,  138 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  114 => 28,  112 => 27,  107 => 24,  101 => 22,  98 => 21,  85 => 20,  83 => 19,  79 => 18,  65 => 12,  59 => 9,  56 => 8,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_forum.html", "");
    }
}

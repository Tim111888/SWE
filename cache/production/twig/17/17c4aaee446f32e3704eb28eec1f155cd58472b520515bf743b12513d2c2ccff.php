<?php

/* viewtopic_body.html */
class __TwigTemplate_189198df3e0a68700d66d64e1cd9422160a3d256b8dd8639df16e85252eb5d3a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"page-title text-center\">";
        // line 3
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        echo "
";
        // line 6
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 7
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 9
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 10
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> <strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 14
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "</p>
\t\t\t";
            }
            // line 16
            echo "\t\t</div>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 21
            echo "<p>
\t<strong>";
            // line 22
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
";
        }
        // line 25
        echo "
<div class=\"row mobile-fix clearfix\">
\t";
        // line 27
        // line 28
        echo "\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 29
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 30
            echo "\t\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 31
                echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                echo "</a>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 36)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "\t\t\t";
        // line 38
        echo "\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            // line 39
            echo "\t\t\t<div class=\"btn-group\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 45
                echo "\t\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 46
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 51
        echo "\t\t</div>
\t";
        // line 52
        // line 53
        echo "
\t";
        // line 54
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 55
            echo "\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t";
            // line 56
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 56)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 57
            echo "\t\t</div>
\t";
        }
        // line 59
        echo "
\t";
        // line 60
        // line 61
        echo "
\t";
        // line 62
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 63
            echo "\t\t<div class=\"col-md-4 pull-right\">
\t\t\t<form method=\"get\" action=\"";
            // line 64
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\" class=\"form-search no-margin\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"input-medium form-control\" type=\"search\" name=\"keywords\" size=\"20\" placeholder=\"";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\"/>
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t";
            // line 68
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 69
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t\t<a href=\"";
            // line 70
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 76
        echo "</div>

";
        // line 78
        // line 79
        echo "
";
        // line 80
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 81
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 84
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p class=\"author_poll\">";
            // line 87
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_LENGTH");
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "<br />";
            }
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_VOTES");
            }
            echo "</p>
\t\t\t\t<fieldset class=\"polls\">
\t\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 90
                echo "\t\t\t\t\t";
                // line 91
                echo "\t\t\t\t\t<div class=\"row ";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                }
                echo "\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t\t";
                // line 92
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array()) || (isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo "<div class=\"col-md-3 col-md-offset-1 vote_option\">";
                } else {
                    echo "<div class=\"col-md-12 vote_option\">";
                }
                // line 93
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" class=\"";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "checkbox-inline";
                    } else {
                        echo "radio-inline";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 95
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"vote_caption\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6 vote_progress";
                // line 107
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                // line 109
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 33)) {
                    echo "progress-bar-danger";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 66)) {
                    echo "progress-bar-warning";
                } else {
                    echo "progress-bar-success";
                }
                echo "\"  role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 10)) {
                    echo "10%";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo ";\">
\t\t\t\t\t\t\t\t\t";
                // line 110
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 poll_option_percent";
                // line 114
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 115
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 119
                // line 120
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<div class=\"text-center center-block poll_total_votes";
            // line 123
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t\t<a class=\"btn btn-default disabled\">";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></a>
\t\t\t\t\t</div>

\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t";
            // line 128
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 129
                echo "\t\t\t\t\t<div class=\" text-center center-block\">
\t\t\t\t\t\t<div class=\"btn-group poll_vote\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"update\" value=\"";
                // line 131
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-success submit_poll\" />
\t\t\t\t\t\t\t";
                // line 132
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo "<a class=\"btn btn-warning poll_view_results\" href=\"";
                    echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_RESULTS");
                    echo "</a>";
                }
                // line 133
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t</fieldset>
\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t<div class=\"alert alert-success vote-submitted hidden\">";
            // line 138
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t\t</div>
\t\t\t";
            // line 140
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t";
            // line 141
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t</div>
\t</form>
\t<hr />
";
        }
        // line 146
        echo "
";
        // line 147
        // line 148
        echo "
<div id=\"posts\">
\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 151
            echo "\t\t";
            // line 152
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                echo "<a id=\"unread\" class=\"anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>";
            }
            // line 153
            echo "\t\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t<div class=\"panel ";
            // line 154
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo "panel-info";
            } elseif (($this->getAttribute($context["postrow"], "S_POST_REPORTED", array()) || $this->getAttribute($context["postrow"], "S_POST_DELETED", array()))) {
                echo "panel-danger";
            } elseif ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "panel-warning";
            } else {
                echo "panel-primary";
            }
            echo " post-body\">
\t\t\t\t<div class=\"panel-heading clearfix\">
\t\t\t\t\t";
            // line 156
            // line 157
            echo "\t\t\t\t\t<h3 class=\"panel-title";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo " first";
            }
            echo " pull-left\">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_ALT", array());
                echo "\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t\t\t\t<div class=\"pull-right\" ";
            // line 158
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo "  id=\"post_mcp_action";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t\t\t";
            // line 159
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 160
                echo "\t\t\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t\t\t<span><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<strong>";
                // line 162
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t\t<div class=\"btn-group no-margin-bottom\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\" type=\"submit\" title=\"";
                // line 164
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\"><i class=\"fa fa-times fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\" type=\"submit\" title=\"";
                // line 165
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
                echo "\" name=\"action[approve]\"><i class=\"fa fa-check fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 167
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 168
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 170
$context["postrow"], "S_POST_DELETED", array())) {
                // line 171
                echo "\t\t\t\t\t\t\t<form method=\"post\" class=\"mcp_approve pull-right\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t\t\t<strong>";
                // line 172
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t\t<div class=\"btn-group no-margin-bottom\">
\t\t\t\t\t\t\t\t\t";
                // line 174
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\" type=\"submit\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                    echo "\" name=\"action[delete]\"><i class=\"fa fa-trash fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\" type=\"submit\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
                echo "\" name=\"action[restore]\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 179
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 180
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 184
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<div class=\"btn-group btn-toolbar-mobile hidden\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t";
            // line 198
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 199
                echo "\t\t\t\t\t\t<div class=\"post-content\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
                // line 201
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ignore\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 203
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                    // line 204
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 206
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ignore\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 208
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                    // line 209
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 212
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t<div class=\"row no-margin post-flex\">
\t\t\t\t\t";
            // line 216
            if ( !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array())) {
                // line 217
                echo "\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12 post-info post-info-left\" ";
                if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo "style=\"display: none;\"";
                }
                echo " id=\"profile";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"row no-margin-xs\">
\t\t\t\t\t\t\t\t<dl class=\"col-sm-12 col-xs-6 no-margin-xs no-padding-xs\">
\t\t\t\t\t\t\t\t\t<dt class=\"avatar text-center rounded\">
\t\t\t\t\t\t\t\t\t\t";
                // line 221
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        echo "\"><img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/default_avatar.jpg\" alt=\"avatar\"></a>";
                    } else {
                        echo "<img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/default_avatar.jpg\" alt=\"avatar\">";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 228
                echo "\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t<dd class=\"text-center author-name\">
\t\t\t\t\t\t\t\t\t\t";
                // line 230
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<strong>";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo "</strong> ";
                } else {
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_ONLINE", array())) {
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-fw text-success online\" aria-hidden=\"true\" title=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ONLINE_BADGE", array());
                    echo "\"></i><span class=\"sr-only\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-fw text-danger online\" aria-hidden=\"true\" title=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "OFFLINE_BADGE", array());
                    echo "\"></i><span class=\"sr-only\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 238
                echo "\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t";
                // line 239
                // line 240
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<dd class=\"text-center author-rank\"><span class=\"badge\">";
                    echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                    echo "</span>";
                    if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                        echo "<br />";
                    }
                    echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                    echo "</dd>";
                }
                // line 241
                echo "\t\t\t\t\t\t\t\t\t";
                // line 242
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t<dl class=\"col-sm-12 hidden-xs\">
\t\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t";
                // line 247
                if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                    echo "<dd class=\"profile-posts\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                        echo "\">";
                    }
                    echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                    if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                        echo "</a>";
                    }
                    echo "</dd>";
                }
                // line 248
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                    echo "<dd class=\"profile-joined\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                    echo "</dd>";
                }
                // line 249
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                    echo "<dd class=\"profile-warnings\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                    echo "</dd>";
                }
                // line 250
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t\t\t\t\t\t<dd><strong>";
                    // line 252
                    echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                    echo "</dd>
\t\t\t\t\t\t\t\t\t";
                }
                // line 254
                echo "\t\t\t\t\t\t\t\t\t";
                // line 255
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                        // line 257
                        echo "\t\t\t\t\t\t\t\t\t\t\t<dd class=\"profile-";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                        echo "\"><strong>";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo "</strong> ";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                        echo "</dd>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                echo "\t\t\t\t\t\t\t\t\t";
                // line 261
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 262
                // line 263
                echo "\t\t\t\t\t\t\t\t\t";
                if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 265
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                        // line 266
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                        $context['definition']->set('S_LAST_CELL', $value);
                        // line 267
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                            // line 268
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"spacer\"></div></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 271
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                            echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                        } else {
                            echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        }
                        echo "\" title=\"";
                        echo $this->getAttribute($context["contact"], "NAME", array());
                        echo "\" class=\"btn btn-sm btn-primary\" ";
                        if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                            echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                        // line 272
                        echo $this->getAttribute($context["contact"], "ID", array());
                        echo "-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 273
                        if (($this->getAttribute($context["contact"], "ID", array()) == "email")) {
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 275
$context["contact"], "ID", array()) == "pm")) {
                            // line 276
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 277
$context["contact"], "ID", array()) == "phpbb_website")) {
                            // line 278
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 279
$context["contact"], "ID", array()) == "phpbb_facebook")) {
                            // line 280
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 281
$context["contact"], "ID", array()) == "phpbb_twitter")) {
                            // line 282
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 283
$context["contact"], "ID", array()) == "phpbb_skype")) {
                            // line 284
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-skype fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 285
$context["contact"], "ID", array()) == "phpbb_youtube")) {
                            // line 286
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 287
$context["contact"], "ID", array()) == "phpbb_googleplus")) {
                            // line 288
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 290
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["contact"], "NAME", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 292
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 294
                        if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                            // line 295
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"clearfix\"></div></dd>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 299
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 300
                echo "\t\t\t\t\t\t\t\t\t";
                // line 301
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 visible-xs-block text-right post-time-mobile\">
\t\t\t\t\t\t\t\t\t";
                // line 303
                echo $this->getAttribute($context["postrow"], "POST_DATE", array());
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 308
            echo "\t\t\t\t\t<div class=\"col-md-9 col-xs-12 post-content\" ";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo " id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t\t\t<div class=\"row post-head hidden-xs no-margin-bottom\">
\t\t\t\t\t\t\t<div class=\"col-md-6 author\">
\t\t\t\t\t\t\t\t";
            // line 311
            // line 312
            echo "\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "
\t\t\t\t\t\t\t\t";
            // line 313
            // line 314
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12 no-padding\">
\t\t\t\t\t\t\t\t";
            // line 316
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 317
            echo "\t\t\t\t\t\t\t\t";
            // line 318
            echo "\t\t\t\t\t\t\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 319
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_POST_BUTTONS", array())) {
                    // line 320
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar topic-buttons\" role=\"toolbar\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 322
                    if (($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array()))) {
                        // line 323
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 324
                        if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                            echo "<a class=\"btn btn-warning\" href=\"";
                            echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
                            echo "\"><i class=\"fa fa-pencil fa-fw\" aria-hidden=\"true\"></i></a>";
                        }
                        // line 325
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                            echo "<a class=\"btn btn-danger\" href=\"";
                            echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                            echo "\"><i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i></a>";
                        }
                        // line 326
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 329
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        echo "<a class=\"btn btn-danger\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_POST");
                        echo "\"><i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 330
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        echo "<a class=\"btn btn-warning\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                        echo "\"><i class=\"fa fa-minus fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        echo "<a class=\"btn btn-primary\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
                        echo "\"><i class=\"fa fa-info fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 332
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        echo "<a class=\"btn btn-success\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLY_WITH_QUOTE");
                        echo "\"><i class=\"fa fa-quote-left fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 333
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t\t\t\t\t\t";
                // line 337
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t\t\t\t\t";
            // line 339
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t";
            // line 342
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 344
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 345
                echo "\t\t\t\t\t\t\t<div class=\"panel panel-default attachbox panel-collapsible\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
                // line 347
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "</h3>
\t\t\t\t\t\t\t\t\t<span class=\"pull-right panel-right clickable panel-collapsed\"><i class=\"fa fa-chevron-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t";
                // line 351
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 352
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 360
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                // line 361
                echo "\t\t\t\t\t<div class=\"panel-body no-padding text-center hidden-xs\">
\t\t\t\t\t\t<div id=\"sig";
                // line 362
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t<div class=\"panel-footer post-footer\">
\t\t\t\t\t";
            // line 366
            // line 367
            echo "\t\t\t\t\t<div class=\"panel-foo\">
\t\t\t\t\t\t";
            // line 368
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 369
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 370
                echo "\t\t\t\t\t\t\t<div class=\"notice post_deleted_msg\" ";
                if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo "style=\"display: none;\"";
                }
                echo " id=\"post_deleted_msg";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 371
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t\t\t\t";
                // line 372
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 373
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 374
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 375
                echo "\t\t\t\t\t\t\t<div class=\"notice\">
\t\t\t\t\t\t\t\t";
                // line 376
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t\t\t\t";
                // line 377
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 378
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 380
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                // line 381
                echo "\t\t\t\t\t\t\t<br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "
\t\t\t\t\t\t";
            }
            // line 383
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 384
            // line 385
            echo "\t\t\t\t\t";
            // line 386
            echo "\t\t\t\t\t<div class=\"to-top pull-right\">";
            echo "<a href=\"#content-wrapper\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
            echo "\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a>";
            echo "</div>";
            // line 387
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 388
            // line 389
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 391
            // line 392
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "</div>

";
        // line 395
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 396
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 396)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 398
        echo "
";
        // line 399
        // line 400
        echo "<div class=\"row mobile-fix\">
\t";
        // line 401
        // line 402
        echo "\t<div class=\"col-md-4 hidden-xs\">
\t\t";
        // line 403
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 404
            echo "\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 405
                echo "\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t\t\t";
            } else {
                // line 407
                echo "\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_REPLY");
                echo "</a>
\t\t\t";
            }
            // line 409
            echo "\t\t";
        }
        // line 410
        echo "\t\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 410)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 411
        echo "\t</div>
\t";
        // line 412
        // line 413
        echo "
\t";
        // line 414
        // line 415
        echo "
\t";
        // line 416
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 417
            echo "\t\t<div class=\"col-md-4 text-center\">
\t\t\t";
            // line 418
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 418)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 419
            echo "\t\t</div>
\t";
        }
        // line 421
        echo "
\t";
        // line 422
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 423
            echo "\t\t<div class=\"col-md-4 hidden-xs pull-right\">
\t\t\t<form method=\"get\" action=\"";
            // line 424
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\" class=\"form-search no-margin\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"input-medium form-control\" type=\"search\" name=\"keywords\" size=\"20\" placeholder=\"";
            // line 426
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_TOPIC");
            echo "\"/>
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t";
            // line 428
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 429
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t\t<a href=\"";
            // line 430
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 436
        echo "</div>
<div class=\"clearfix\"></div>

<div class=\"row\">
\t<div class=\"col-md-3 hidden-xs\">
\t\t<a href=\"";
        // line 441
        echo (isset($context["U_VIEW_OLDER_TOPIC"]) ? $context["U_VIEW_OLDER_TOPIC"] : null);
        echo "\" class=\"btn btn-primary btn-labeled text-right\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PREVIOUS_TOPIC");
        echo "\"><span class=\"btn-label\"><i class=\"fa fa-chevron-left fa-fw\" aria-hidden=\"true\"></i></span> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PREVIOUS_TOPIC");
        echo "</a>
\t</div>
\t<div class=\"col-md-6 col-xs-12 text-center\">
\t\t<div class=\"btn-group total-posts-container\">
\t\t\t";
        // line 445
        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<a href=\"";
            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
            echo "\" class=\"btn btn-default btn-sm\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_UNREAD_POST");
            echo "</a>";
        }
        echo "<a class=\"btn btn-default btn-sm disabled\">";
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a>
\t\t\t";
        // line 446
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 447
            echo "\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
            // line 448
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo " <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t<li>";
            // line 451
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</li>
\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
            // line 454
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_PAGE");
            echo "\" class=\"form-control\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
            // line 456
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
        } else {
            // line 462
            echo "\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t";
        }
        // line 464
        echo "\t\t</div>
\t</div>
\t<div class=\"col-md-3 hidden-xs\">
\t\t<a href=\"";
        // line 467
        echo (isset($context["U_VIEW_NEWER_TOPIC"]) ? $context["U_VIEW_NEWER_TOPIC"] : null);
        echo "\" class=\"btn btn-primary btn-labeled pull-right\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEXT_TOPIC");
        echo "\"> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NEXT_TOPIC");
        echo "<span class=\"btn-label btn-label-right\"><i class=\"fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i></span></a>
\t</div>
</div>

";
        // line 471
        if (((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 472
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t\t";
            // line 473
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 473)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 474
            echo "\t</form>
";
        }
        // line 476
        echo "
";
        // line 477
        // line 478
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 478)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 479
        echo "
";
        // line 480
        if ((isset($context["S_TOPIC_MOD"]) ? $context["S_TOPIC_MOD"] : null)) {
            // line 481
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
            // line 483
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_MOD");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<form method=\"post\" action=\"";
            // line 486
            echo (isset($context["S_MOD_ACTION"]) ? $context["S_MOD_ACTION"] : null);
            echo "\" class=\"form-inline pull-right\">
\t\t\t\t<fieldset class=\"quickmod\">
\t\t\t\t\t";
            // line 488
            echo (isset($context["S_TOPIC_MOD"]) ? $context["S_TOPIC_MOD"] : null);
            echo " <input type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t";
            // line 489
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
";
        }
        // line 495
        echo "
";
        // line 496
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_LOGIN_PANEL", array()) == 1))) {
            // line 497
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "viewtopic_body.html", 497)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 499
        echo "
";
        // line 500
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 500)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1629 => 500,  1626 => 499,  1612 => 497,  1610 => 496,  1607 => 495,  1598 => 489,  1592 => 488,  1587 => 486,  1581 => 483,  1577 => 481,  1575 => 480,  1572 => 479,  1560 => 478,  1559 => 477,  1556 => 476,  1552 => 474,  1540 => 473,  1535 => 472,  1533 => 471,  1522 => 467,  1517 => 464,  1511 => 462,  1502 => 456,  1491 => 454,  1484 => 451,  1478 => 448,  1475 => 447,  1473 => 446,  1461 => 445,  1450 => 441,  1443 => 436,  1432 => 430,  1426 => 429,  1422 => 428,  1417 => 426,  1412 => 424,  1409 => 423,  1407 => 422,  1404 => 421,  1400 => 419,  1388 => 418,  1385 => 417,  1383 => 416,  1380 => 415,  1379 => 414,  1376 => 413,  1375 => 412,  1372 => 411,  1359 => 410,  1356 => 409,  1346 => 407,  1336 => 405,  1333 => 404,  1331 => 403,  1328 => 402,  1327 => 401,  1324 => 400,  1323 => 399,  1320 => 398,  1306 => 396,  1304 => 395,  1300 => 393,  1294 => 392,  1293 => 391,  1289 => 389,  1288 => 388,  1285 => 387,  1279 => 386,  1277 => 385,  1276 => 384,  1273 => 383,  1267 => 381,  1264 => 380,  1260 => 378,  1251 => 377,  1247 => 376,  1244 => 375,  1242 => 374,  1239 => 373,  1230 => 372,  1226 => 371,  1217 => 370,  1214 => 369,  1208 => 368,  1205 => 367,  1204 => 366,  1201 => 365,  1193 => 362,  1190 => 361,  1188 => 360,  1183 => 357,  1178 => 354,  1169 => 352,  1165 => 351,  1158 => 347,  1154 => 345,  1152 => 344,  1147 => 342,  1142 => 339,  1140 => 338,  1137 => 337,  1135 => 336,  1130 => 333,  1121 => 332,  1112 => 331,  1103 => 330,  1095 => 329,  1092 => 328,  1088 => 326,  1079 => 325,  1071 => 324,  1068 => 323,  1066 => 322,  1063 => 321,  1061 => 320,  1058 => 319,  1055 => 318,  1053 => 317,  1050 => 316,  1046 => 314,  1045 => 313,  1036 => 312,  1035 => 311,  1024 => 308,  1016 => 303,  1012 => 301,  1010 => 300,  1007 => 299,  1001 => 298,  996 => 295,  994 => 294,  990 => 292,  984 => 290,  980 => 288,  978 => 287,  975 => 286,  973 => 285,  970 => 284,  968 => 283,  965 => 282,  963 => 281,  960 => 280,  958 => 279,  955 => 278,  953 => 277,  950 => 276,  948 => 275,  945 => 274,  943 => 273,  939 => 272,  924 => 271,  919 => 268,  916 => 267,  912 => 266,  909 => 265,  904 => 264,  901 => 263,  900 => 262,  897 => 261,  895 => 260,  889 => 259,  878 => 257,  875 => 256,  870 => 255,  868 => 254,  860 => 252,  857 => 251,  854 => 250,  844 => 249,  834 => 248,  817 => 247,  810 => 242,  808 => 241,  796 => 240,  795 => 239,  792 => 238,  790 => 237,  782 => 235,  774 => 233,  771 => 232,  762 => 231,  761 => 230,  757 => 228,  755 => 227,  752 => 226,  739 => 225,  725 => 223,  722 => 222,  721 => 221,  709 => 217,  707 => 216,  704 => 215,  699 => 212,  693 => 209,  689 => 208,  686 => 207,  684 => 206,  679 => 204,  675 => 203,  672 => 202,  670 => 201,  664 => 199,  662 => 198,  648 => 186,  640 => 184,  637 => 183,  631 => 180,  627 => 179,  621 => 177,  615 => 175,  613 => 174,  608 => 172,  603 => 171,  601 => 170,  596 => 168,  592 => 167,  587 => 165,  583 => 164,  578 => 162,  572 => 160,  570 => 159,  562 => 158,  536 => 157,  535 => 156,  522 => 154,  517 => 153,  506 => 152,  504 => 151,  500 => 150,  496 => 148,  495 => 147,  492 => 146,  484 => 141,  480 => 140,  475 => 138,  471 => 136,  466 => 133,  458 => 132,  454 => 131,  450 => 129,  448 => 128,  438 => 124,  432 => 123,  428 => 121,  422 => 120,  421 => 119,  414 => 115,  408 => 114,  403 => 111,  397 => 110,  381 => 109,  374 => 107,  370 => 105,  364 => 103,  357 => 100,  345 => 98,  333 => 96,  331 => 95,  320 => 94,  317 => 93,  311 => 92,  299 => 91,  297 => 90,  293 => 89,  282 => 87,  276 => 84,  269 => 81,  267 => 80,  264 => 79,  263 => 78,  259 => 76,  248 => 70,  242 => 69,  238 => 68,  233 => 66,  228 => 64,  225 => 63,  223 => 62,  220 => 61,  219 => 60,  216 => 59,  212 => 57,  200 => 56,  197 => 55,  195 => 54,  192 => 53,  191 => 52,  188 => 51,  183 => 48,  168 => 46,  164 => 45,  160 => 44,  153 => 39,  150 => 38,  148 => 37,  135 => 36,  132 => 35,  122 => 33,  112 => 31,  109 => 30,  107 => 29,  104 => 28,  103 => 27,  99 => 25,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  73 => 16,  68 => 14,  62 => 12,  54 => 10,  52 => 9,  48 => 7,  46 => 6,  43 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_body.html", "");
    }
}

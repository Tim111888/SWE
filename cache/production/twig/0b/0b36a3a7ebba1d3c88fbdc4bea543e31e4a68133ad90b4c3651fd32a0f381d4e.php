<?php

/* viewforum_body.html */
class __TwigTemplate_12bbdf7e06413f11a3ae470a075f174a5b3a87b2a84e16f1ef6c1d3db73ebccc extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 6
        echo "<a href=\"";
        echo ($context["U_VIEW_FORUM"] ?? null);
        echo "\">";
        echo ($context["FORUM_NAME"] ?? null);
        echo "</a>";
        echo "</h2>
\t";
        // line 7
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<p>";
            echo ($context["FORUM_DESC"] ?? null);
            echo "</p>";
        }
        // line 8
        echo "</div>

";
        // line 10
        // line 11
        echo "
";
        // line 12
        if (((($context["FORUM_DESC"] ?? null) || ($context["MODERATORS"] ?? null)) || ($context["U_MCP"] ?? null))) {
            // line 13
            echo "\t<div>
\t\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t\t";
            // line 15
            if (($context["MODERATORS"] ?? null)) {
                echo "<p><strong>";
                if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                echo ($context["MODERATORS"] ?? null);
                echo "</p>";
            }
            // line 16
            echo "\t</div>
";
        }
        // line 18
        echo "
";
        // line 19
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 20
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 22
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 23
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> <strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 27
                echo ($context["FORUM_RULES"] ?? null);
                echo "</p>
\t\t\t";
            }
            // line 29
            echo "\t\t</div>
\t</div>
";
        }
        // line 32
        echo "
";
        // line 33
        if (($context["S_HAS_SUBFORUM"] ?? null)) {
            // line 34
            echo "\t";
            if (( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_FORUMS"] ?? null))) {
                // line 35
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
                // line 38
                echo ($context["U_MARK_FORUMS"] ?? null);
                echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 43
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 43)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 45
        echo "
";
        // line 46
        if ((((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["TOTAL_POSTS"] ?? null)) || ($context["TOTAL_TOPICS"] ?? null))) {
            // line 47
            echo "\t";
            if (((($context["TOTAL_TOPICS"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["U_MARK_TOPICS"] ?? null))) {
                // line 48
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 51
                if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_TOPICS"] ?? null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 52
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "</a>
\t\t\t\t\t";
                // line 53
                if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
                    // line 54
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 55
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 58
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 61
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo ($context["PER_PAGE"] ?? null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo ($context["START_NAME"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 63
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 75
            echo "\t<div class=\"row mobile-fix\" ";
            if (($context["S_HAS_SUBFORUM"] ?? null)) {
                echo "style=\"margin-top: 2em;\"";
            }
            echo ">
\t\t";
            // line 76
            if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_POST_INFO"] ?? null))) {
                // line 77
                echo "\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t";
                // line 78
                // line 79
                echo "\t\t\t\t";
                if (($context["S_IS_LOCKED"] ?? null)) {
                    // line 80
                    echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM_LOCKED");
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                    echo ($context["U_POST_NEW_TOPIC"] ?? null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC");
                    echo "</a>
\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t";
                // line 85
                echo "\t\t\t\t";
                if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                    // line 86
                    echo "\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 92
                    echo ($context["U_WATCH_FORUM_LINK"] ?? null);
                    echo "\" title=\"";
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon ";
                    if (($context["S_WATCHING_FORUM"] ?? null)) {
                        echo "fa-check-square-o";
                    } else {
                        echo "fa-square-o";
                    }
                    echo " fa-fw\" data-toggle-text=\"";
                    echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
                    echo "\" data-toggle-url=\"";
                    echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                    // line 93
                    if (($context["S_WATCHING_FORUM"] ?? null)) {
                        echo "fa-square-o";
                    } else {
                        echo "fa-check-square-o";
                    }
                    echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t</div>
\t\t";
            }
            // line 101
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) {
                // line 102
                echo "\t\t\t<div class=\"col-sm-6 hidden-xs text-center\">
\t\t\t\t";
                // line 103
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 103)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 104
                echo "\t\t\t</div>
\t\t";
            }
            // line 106
            echo "\t\t";
            if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
                // line 107
                echo "\t\t\t<div class=\"col-md-3 col-xs-12 pull-right\" role=\"search\">
\t\t\t\t<form action=\"";
                // line 108
                echo ($context["S_SEARCHBOX_ACTION"] ?? null);
                echo "\" method=\"get\" class=\"form-search pull-right\" style=\"margin:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" type=\"text\" name=\"keywords\" size=\"20\" placeholder=\"";
                // line 110
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 112
                echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
                // line 113
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
                echo "</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
            }
            // line 119
            echo "\t</div>
";
        }
        // line 121
        echo "
";
        // line 122
        if (($context["S_NO_READ_ACCESS"] ?? null)) {
            // line 123
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t<strong>";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>
\t";
            // line 126
            if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                // line 127
                echo "\t\t<form action=\"";
                echo ($context["S_LOGIN_ACTION"] ?? null);
                echo "\" method=\"post\">
\t\t\t<div class=\"well well-sm\">
\t\t\t\t<h3 class=\"box-heading\"><a href=\"";
                // line 129
                echo ($context["U_LOGIN_LOGOUT"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if (($context["S_REGISTER_ENABLED"] ?? null)) {
                    echo "&nbsp; &nbsp;<a href=\"";
                    echo ($context["U_REGISTER"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><label for=\"username\">";
                // line 133
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 134
                echo ($context["USERNAME"] ?? null);
                echo "\" class=\"form-control\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"password\">";
                // line 137
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"form-control\" /></dd>
\t\t\t\t\t\t\t";
                // line 139
                if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 140
                echo "\t\t\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 144
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
                echo "\" class=\"btn\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 146
                echo ($context["S_LOGIN_REDIRECT"] ?? null);
                echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
            }
        }
        // line 153
        echo "
";
        // line 154
        // line 155
        echo "
";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 157
            echo "\t";
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 158
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 162
            echo "
\t";
            // line 163
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 164
                echo "\t\t<div class=\"table-responsive ";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t<tr class=\"header\">
\t\t\t\t\t\t<th class=\"forum-name\">";
                // line 168
                if (($context["S_DISPLAY_ACTIVE"] ?? null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo "<i class=\"fa fa-bullhorn fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENTS");
                } else {
                    echo "<i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                }
                echo "</th>
\t\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-reply fa-fw\" aria-hidden=\"true\"></i> ";
                // line 169
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                echo "</th>
\t\t\t\t\t\t<th class=\"views hidden-xs\"><i class=\"fa fa-eye fa-fw\" aria-hidden=\"true\"></i> ";
                // line 170
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEWS");
                echo "</th>
\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history fa-fw\" aria-hidden=\"true\"></i> <span>";
                // line 171
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist topics\">
\t";
            }
            // line 176
            echo "\t\t\t\t\t";
            // line 177
            echo "\t\t\t\t\t<tr class=\"t-row clickable";
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\" onclick=\"location.href='";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "'\">
\t\t\t\t\t\t";
            // line 178
            // line 179
            echo "\t\t\t\t\t\t<td class=\"topic-name ";
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t\t\t";
            // line 180
            // line 181
            echo "\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t";
            // line 182
            $location = "post_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("post_icons.html", "viewforum_body.html", 182)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 183
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-right topic-pagination\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t";
            // line 186
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 189
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "\"><i class=\"fa fa-recycle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_DELETED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 198
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                // line 199
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "PAGINATION", array())) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 206
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 207
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 208
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-info\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\"><i class=\"fa fa-angle-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs tooltip-link\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"  title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "\"><i class=\"fa fa-angle-double-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 223
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && ($context["S_TOPIC_ICONS"] ?? null))) {
                // line 224
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"/>
\t\t\t\t\t\t\t";
            }
            // line 226
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\"><strong>";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</strong></a>
\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
            // line 229
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 230
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 231
            echo "\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 233
            // line 234
            echo "\t\t\t\t\t\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 235
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                // line 237
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
\t\t\t\t\t\t\t\t\t\t";
                // line 238
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && (($context["FORUM_ID"] ?? null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 239
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "REPLIES", array())) {
                    // line 240
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br/>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 242
                echo "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t\t\t";
            // line 246
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"posts hidden-xs ";
            // line 247
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 248
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"views hidden-xs ";
            // line 250
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 251
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs ";
            // line 253
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<dfn>";
            // line 255
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t\t\t<small>";
            // line 256
            if ( !($context["S_IS_BOT"] ?? null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a>";
            }
            echo "<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 259
            // line 260
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 261
            // line 262
            echo "
\t\t";
            // line 263
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 264
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 268
            echo "\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 269
            echo "\t\t";
            if (($context["S_IS_POSTABLE"] ?? null)) {
                // line 270
                echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>";
                // line 271
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPICS");
                echo "</strong>
\t\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
";
        // line 276
        if ((($context["S_DISPLAY_POST_INFO"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array())))) {
            // line 277
            echo "

\t</div>
\t";
            // line 280
            if (((($context["TOTAL_TOPICS"] ?? null) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", array()))) || ($context["U_MARK_TOPICS"] ?? null))) {
                // line 281
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 284
                if ((( !($context["S_IS_BOT"] ?? null) && ($context["U_MARK_TOPICS"] ?? null)) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_TOPICS"] ?? null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 285
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo ($context["TOTAL_TOPICS"] ?? null);
                echo "</a>
\t\t\t\t\t";
                // line 286
                if ((($context["BASE_URL"] ?? null) && (($context["TOTAL_PAGES"] ?? null) > 6))) {
                    // line 287
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 288
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 291
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 294
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo ($context["PER_PAGE"] ?? null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, ($context["BASE_URL"] ?? null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo ($context["START_NAME"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 296
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 302
                    echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 304
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 307
            echo "\t</div>
";
        }
        // line 309
        echo "
";
        // line 310
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 310)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1021 => 310,  1018 => 309,  1014 => 307,  1009 => 304,  1003 => 302,  994 => 296,  983 => 294,  976 => 291,  970 => 288,  967 => 287,  965 => 286,  960 => 285,  952 => 284,  947 => 281,  945 => 280,  940 => 277,  938 => 276,  935 => 275,  925 => 271,  922 => 270,  919 => 269,  906 => 268,  900 => 264,  898 => 263,  895 => 262,  894 => 261,  891 => 260,  890 => 259,  876 => 256,  868 => 255,  852 => 253,  847 => 251,  832 => 250,  827 => 248,  812 => 247,  809 => 246,  807 => 245,  802 => 242,  793 => 240,  790 => 239,  778 => 238,  764 => 237,  760 => 235,  757 => 234,  756 => 233,  752 => 231,  742 => 230,  734 => 229,  725 => 226,  716 => 224,  714 => 223,  710 => 221,  702 => 219,  699 => 218,  693 => 216,  690 => 215,  685 => 212,  679 => 211,  669 => 209,  667 => 208,  661 => 207,  654 => 206,  651 => 205,  647 => 204,  643 => 202,  640 => 201,  636 => 199,  633 => 198,  629 => 196,  626 => 195,  616 => 193,  613 => 192,  603 => 190,  600 => 189,  590 => 187,  588 => 186,  583 => 183,  571 => 182,  568 => 181,  567 => 180,  549 => 179,  548 => 178,  530 => 177,  528 => 176,  520 => 171,  516 => 170,  512 => 169,  500 => 168,  490 => 164,  488 => 163,  485 => 162,  479 => 158,  476 => 157,  458 => 156,  455 => 155,  454 => 154,  451 => 153,  441 => 146,  436 => 144,  428 => 140,  422 => 139,  416 => 137,  410 => 134,  405 => 133,  388 => 129,  382 => 127,  380 => 126,  375 => 124,  372 => 123,  370 => 122,  367 => 121,  363 => 119,  354 => 113,  350 => 112,  345 => 110,  340 => 108,  337 => 107,  334 => 106,  330 => 104,  318 => 103,  315 => 102,  312 => 101,  308 => 99,  293 => 93,  277 => 92,  269 => 86,  266 => 85,  264 => 84,  256 => 82,  248 => 80,  245 => 79,  244 => 78,  241 => 77,  239 => 76,  232 => 75,  226 => 71,  220 => 69,  211 => 63,  200 => 61,  193 => 58,  187 => 55,  184 => 54,  182 => 53,  177 => 52,  169 => 51,  164 => 48,  161 => 47,  159 => 46,  156 => 45,  142 => 43,  132 => 38,  127 => 35,  124 => 34,  122 => 33,  119 => 32,  114 => 29,  109 => 27,  103 => 25,  95 => 23,  93 => 22,  89 => 20,  87 => 19,  84 => 18,  80 => 16,  67 => 15,  63 => 13,  61 => 12,  58 => 11,  57 => 10,  53 => 8,  47 => 7,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewforum_body.html", "");
    }
}

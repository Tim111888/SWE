<?php

/* navbar_header.html */
class __TwigTemplate_b0edf2892ee7963fb42782c346bcd8f42b02b2218ef91c45be0e3012a7076ad5 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-fix\" id=\"header-nav\">
\t<!-- Mobile dropdown buttons -->
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left-mobile\" id=\"main-menu-btn\" data-toggle=\"collapse\" data-target=\"#main-menu\">
\t\t\t\t<i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 8
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</a>
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"user-menu-btn\" data-toggle=\"collapse\" data-target=\"#user-menu\">
\t\t\t\t";
        // line 10
        if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
            // line 11
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\">";
            echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            echo "</span>
\t\t\t\t";
        } elseif (        // line 12
(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 13
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR");
            echo "\"></span>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</button>
\t\t\t";
        // line 18
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 19
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"search-menu-btn\" data-toggle=\"collapse\" data-target=\"#search-menu\">
\t\t\t\t\t<i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t";
        }
        // line 23
        echo "\t\t</div>
\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"main-menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li id=\"quick-links\" class=\"dropdown ";
        // line 26
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i> ";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t";
        // line 29
        // line 30
        echo "\t\t\t\t\t\t";
        // line 31
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 32
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 42
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 44
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 46
        echo "
\t\t\t\t\t\t";
        // line 47
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 48
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
            // line 49
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-group fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 50
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-shield fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 51
            echo "\t\t\t\t\t\t";
        }
        // line 52
        echo "
\t\t\t\t\t\t";
        // line 53
        // line 54
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 56
        // line 57
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ_EXPLAIN");
        echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FAQ");
        echo "</a></li>
\t\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 61
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 62
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"search-menu\">
\t\t\t\t<form class=\"navbar-form navbar-left\" method=\"get\" id=\"search\" action=\"";
            // line 63
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" maxlength=\"128\" type=\"text\" name=\"keywords\" id=\"search_keywords\" size=\"20\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_KEYWORDS");
            echo "\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t";
            // line 67
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 68
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "\t\t";
        // line 76
        echo "\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"user-menu\">
\t\t\t<!-- Desktop user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs fix-right-nav\">
\t\t\t\t";
        // line 79
        if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
            // line 80
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 81
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
            // line 82
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGES");
            echo " <span class=\"label ";
            if ((isset($context["PRIVATE_MESSAGE_INFO_UNREAD"]) ? $context["PRIVATE_MESSAGE_INFO_UNREAD"] : null)) {
                echo "label-danger";
            } else {
                echo "label-primary";
            }
            echo "\">";
            echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 86
        echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t";
        // line 87
        // line 88
        echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-labeled navbar-btn dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t";
        // line 89
        if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
            // line 90
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\">";
            echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            echo "</span>
\t\t\t\t\t\t";
        } elseif (        // line 91
(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 92
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR");
            echo "\"></span>
\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo (isset($context["S_USERNAME"]) ? $context["S_USERNAME"] : null);
            echo " ";
        }
        // line 97
        echo "\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 100
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 101
            echo "\t\t\t\t\t\t\t";
            // line 102
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 103
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t";
            // line 106
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 107
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t";
            // line 108
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 109
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "\"><i class=\"fa fa-cogs fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 112
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
                echo "\"><i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t";
            // line 115
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 116
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</button></li>
\t\t\t\t\t\t\t";
            // line 117
            // line 118
            echo "\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form action=\"";
            // line 120
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" method=\"post\" id=\"navloginform\" name=\"loginform\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
            // line 125
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 127
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"autologin-navbar\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-navbar\" tabindex=\"4\" /> ";
                // line 130
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t\t\t\t";
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"login\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in fa-fw\" aria-hidden=\"true\"></i> ";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 138
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 139
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" onclick=\"window.location.href='";
                // line 140
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            } else {
                // line 142
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" disabled=\"disabled\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                // line 143
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t\t\t";
            // line 146
            echo "\t\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 149
        // line 150
        echo "\t\t\t</ul>
\t\t\t<!-- Mobile user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs fix-right-nav\">
\t\t\t\t";
        // line 153
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 154
            echo "\t\t\t\t\t";
            // line 155
            echo "\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 156
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 160
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t";
            // line 161
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 162
                echo "\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP");
                echo "\"><i class=\"fa fa-cogs fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_SHORT");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t";
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 165
                echo "\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
                echo "\"><i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_SHORT");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t\t";
            // line 168
            echo "\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
            // line 169
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 170
            // line 171
            echo "\t\t\t\t\t";
            // line 172
            echo "\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"row no-margin-bottom\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 176
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 181
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"window.location.href='";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            } else {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" disabled=\"disabled\" type=\"button\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 190
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 190,  571 => 186,  565 => 184,  557 => 182,  555 => 181,  543 => 176,  538 => 173,  535 => 172,  533 => 171,  532 => 170,  524 => 169,  521 => 168,  519 => 167,  509 => 165,  506 => 164,  496 => 162,  494 => 161,  486 => 160,  477 => 159,  475 => 158,  467 => 156,  464 => 155,  462 => 154,  460 => 153,  455 => 150,  454 => 149,  450 => 147,  447 => 146,  445 => 145,  440 => 143,  437 => 142,  430 => 140,  427 => 139,  425 => 138,  419 => 135,  414 => 134,  407 => 130,  403 => 128,  401 => 127,  394 => 125,  386 => 122,  381 => 120,  378 => 119,  375 => 118,  374 => 117,  366 => 116,  363 => 115,  361 => 114,  351 => 112,  348 => 111,  338 => 109,  336 => 108,  328 => 107,  319 => 106,  317 => 105,  309 => 103,  306 => 102,  304 => 101,  302 => 100,  297 => 97,  291 => 96,  287 => 94,  279 => 92,  277 => 91,  272 => 90,  270 => 89,  267 => 88,  266 => 87,  263 => 86,  248 => 82,  244 => 81,  241 => 80,  239 => 79,  234 => 76,  232 => 75,  221 => 69,  217 => 68,  213 => 67,  204 => 65,  199 => 63,  196 => 62,  194 => 61,  190 => 59,  189 => 58,  180 => 57,  179 => 56,  175 => 54,  174 => 53,  171 => 52,  168 => 51,  159 => 50,  151 => 49,  148 => 48,  146 => 47,  143 => 46,  136 => 44,  129 => 42,  122 => 41,  114 => 39,  111 => 38,  103 => 36,  100 => 35,  92 => 33,  89 => 32,  86 => 31,  84 => 30,  83 => 29,  78 => 27,  72 => 26,  67 => 23,  61 => 19,  59 => 18,  56 => 17,  52 => 15,  44 => 13,  42 => 12,  37 => 11,  35 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_header.html", "");
    }
}

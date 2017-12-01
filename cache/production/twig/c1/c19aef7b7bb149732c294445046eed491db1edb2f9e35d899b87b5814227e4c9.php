<?php

/* memberlist_view.html */
class __TwigTemplate_b8a99b5812fb327076cbadf76da9dd2f74d23cd00594aebda4782c2b17631ece extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<form method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
\t<div class=\"user-details\">
\t\t<div class=\"user-image rounded\">
\t\t\t";
        // line 8
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 9
            echo "\t\t\t\t";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AVATAR");
            echo "\">
\t\t\t";
        }
        // line 13
        echo "\t\t</div>
\t\t<div class=\"user-info-block panel panel-default\">
\t\t\t<div class=\"user-heading\">
\t\t\t\t";
        // line 16
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<h3 style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<h3>";
        }
        // line 17
        echo "\t\t\t\t\t";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "
\t\t\t\t\t";
        // line 18
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            // line 19
            echo "\t\t\t\t\t\t<i class=\"fa fa-circle fa-fw text-success online\" aria-hidden=\"true\" title=\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ONLINE_BADGE", array());
            echo "\"></i><span class=\"sr-only\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
            echo "</span>
\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t<i class=\"fa fa-circle fa-fw text-danger online\" aria-hidden=\"true\" title=\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "OFFLINE_BADGE", array());
            echo "\"></i><span class=\"sr-only\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE");
            echo "</span>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t</h3>
\t\t\t\t";
        // line 24
        // line 25
        echo "\t\t\t\t";
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<span class=\"help-block\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</span>";
        }
        // line 26
        echo "\t\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<span class=\"help-block\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</span>";
        }
        // line 27
        echo "\t\t\t\t";
        // line 28
        echo "\t\t\t</div>
\t\t\t<div class=\"user-body panel-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading btn-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<span class=\"pull-right btn-group panel-right\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN");
            echo "</a>";
        }
        // line 39
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_PROFILE");
            echo "</a>";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_BAN");
            echo "</a>";
        }
        // line 41
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USE_PERMISSIONS");
            echo "</a>";
        }
        // line 42
        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t";
        // line 46
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 52
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RANK");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                }
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 58
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 68
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 74
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"g\">";
            // line 76
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 77
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 83
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 85
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                // line 93
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 95
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t\t\t\t\t\t\t";
        // line 101
        echo "\t\t\t\t\t\t\t\t\t";
        // line 102
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 105
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" class=\"btn btn-danger\" data-ajax=\"zebra\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_FRIEND");
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (            // line 107
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" class=\"btn btn-success\" data-ajax=\"zebra\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_FOE");
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" class=\"btn btn-success\" data-ajax=\"zebra\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FRIEND");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" class=\"btn btn-danger\" data-ajax=\"zebra\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FOE");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 120
        echo "\t\t\t\t\t\t\t\t\t";
        // line 121
        echo "\t\t\t\t\t\t\t\t\t";
        // line 122
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-labeled dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_USER");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 131
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_EMAIL_USER");
            echo "</a></li>";
        }
        // line 132
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></li>";
        }
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<li>><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEND_JABBER_MESSAGE");
            echo "</a></li>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<li>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</li>";
        }
        // line 134
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 135
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 137
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 145
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
            // line 148
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 161
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_FORUM");
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t";
        // line 165
        // line 166
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 167
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JOINED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 169
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 173
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 175
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 178
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 180
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 182
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 183
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                // line 184
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 185
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\" class=\"btn btn-primary btn-sm\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NOTES");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\" class=\"btn btn-danger btn-sm\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARN_USER");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 196
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 197
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 199
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 200
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 201
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\" class=\"btn btn-primary btn-sm\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_USER_POSTS");
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 203
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<span class=\"help-block\">(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")</span>";
        }
        // line 204
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo "</a>)</span>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (        // line 206
(isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 211
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 213
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 215
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
                // line 217
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 218
                echo " - ";
            }
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 222
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 224
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                // line 225
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
                // line 226
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 227
                echo " - ";
            }
            // line 228
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t\t\t\t";
        // line 232
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 237
        // line 238
        echo "\t\t\t\t";
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 239
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 241
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SIGNATURE");
            echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t";
            // line 244
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 248
        echo "\t\t\t\t";
        // line 249
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</form>

";
        // line 254
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 254)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 255
        echo "
";
        // line 256
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 256)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 256,  750 => 255,  738 => 254,  731 => 249,  729 => 248,  722 => 244,  716 => 241,  712 => 239,  709 => 238,  708 => 237,  701 => 232,  699 => 231,  694 => 228,  691 => 227,  684 => 226,  677 => 225,  675 => 224,  669 => 222,  664 => 219,  661 => 218,  654 => 217,  647 => 216,  645 => 215,  639 => 213,  636 => 212,  634 => 211,  630 => 209,  624 => 207,  622 => 206,  615 => 205,  612 => 204,  603 => 203,  595 => 201,  593 => 200,  589 => 199,  583 => 197,  580 => 196,  575 => 193,  571 => 191,  563 => 189,  560 => 188,  552 => 186,  550 => 185,  547 => 184,  545 => 183,  541 => 182,  535 => 180,  532 => 179,  530 => 178,  524 => 175,  518 => 173,  511 => 169,  505 => 167,  502 => 166,  501 => 165,  494 => 161,  481 => 150,  476 => 148,  472 => 146,  469 => 145,  467 => 144,  461 => 143,  458 => 142,  452 => 140,  444 => 138,  441 => 137,  438 => 136,  433 => 135,  431 => 134,  418 => 133,  409 => 132,  401 => 131,  394 => 127,  387 => 122,  385 => 121,  383 => 120,  378 => 117,  375 => 116,  367 => 114,  364 => 113,  356 => 111,  353 => 110,  345 => 108,  343 => 107,  336 => 106,  334 => 105,  330 => 103,  327 => 102,  325 => 101,  323 => 100,  317 => 99,  310 => 95,  304 => 93,  301 => 92,  298 => 91,  293 => 90,  291 => 89,  284 => 85,  278 => 83,  275 => 82,  272 => 81,  265 => 77,  261 => 76,  255 => 74,  252 => 73,  249 => 72,  242 => 68,  236 => 66,  233 => 65,  230 => 64,  226 => 62,  224 => 61,  218 => 58,  207 => 56,  204 => 55,  198 => 52,  191 => 50,  188 => 49,  187 => 48,  184 => 47,  182 => 46,  176 => 42,  167 => 41,  158 => 40,  149 => 39,  141 => 38,  125 => 35,  116 => 28,  114 => 27,  107 => 26,  100 => 25,  99 => 24,  96 => 23,  88 => 21,  80 => 19,  78 => 18,  73 => 17,  65 => 16,  60 => 13,  52 => 11,  46 => 9,  44 => 8,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "memberlist_view.html", "");
    }
}

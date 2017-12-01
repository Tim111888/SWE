<?php

/* overall_header.html */
class __TwigTemplate_682075c1c1bc6935984ba4041666fc31334bf35bf41c8a8e90460ef8bba2d756 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\" xml:lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
\t<head>

\t";
        // line 5
        $location = "config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("config.html", "overall_header.html", 5)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 6
        echo "
\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.ico\" />
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<link rel=\"icon\" sizes=\"256x256\" href=\"";
        // line 11
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.ico\">

\t<meta name=\"comboot-version\" content=\"1.1-rc5\">
\t<meta name=\"comboot-channel\" content=\"";
        // line 14
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BETA", array()) == 1)) {
            echo "beta";
        } else {
            echo "stable";
        }
        echo "\">

\t";
        // line 16
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
\t<title>";
        // line 17
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

\t";
        // line 19
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 20
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 21
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 22
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 23
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 24
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 25
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_forum", array("forum_id" => (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null)));
                echo "\">";
            }
            // line 26
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension\routing')->getPath("phpbb_feed_topic", array("topic_id" => (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null)));
                echo "\">";
            }
            // line 27
            echo "\t\t";
            // line 28
            echo "\t";
        }
        // line 29
        echo "
\t";
        // line 30
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 31
            echo "\t\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
\t";
        }
        // line 33
        echo "
\t<!--
\t\tphpBB style name: ComBoot Free
\t\tBased on style:   prosilver (this is the default phpBB3 style)
\t\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\t\tModified by: Florian Gareis (http://www.florian-gareis.de)
\t-->

\t";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 42
            echo "\t<script>
\t\tWebFontConfig = {
\t\t\tgoogle: {
\t\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t\t}
\t\t};

\t\t(function(d) {
\t\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\t\twf.async = true;
\t\t\ts.parentNode.insertBefore(wf, s);
\t\t})(document);
\t</script>
\t";
        }
        // line 57
        echo "\t<link href=\"";
        echo (isset($context["T_FONT_AWESOME_LINK"]) ? $context["T_FONT_AWESOME_LINK"] : null);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 58
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 60
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 61
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 65
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        if ((isset($context["S_COOKIE_NOTICE"]) ? $context["S_COOKIE_NOTICE"] : null)) {
            // line 69
            echo "\t\t<link href=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 71
        echo "
\t<!--[if lte IE 9]>
\t\t<link href=\"";
        // line 73
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->

\t";
        // line 76
        // line 77
        echo "
\t";
        // line 78
        $location = "additional_files.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("additional_files.html", "overall_header.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 79
        echo "
\t";
        // line 80
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t";
        // line 82
        // line 83
        echo "
\t</head>

\t<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 86
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " ";
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "logged-in";
        }
        echo "\">

\t\t";
        // line 88
        // line 89
        echo "
\t\t<div id=\"wrap\">
\t\t\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t\t\t<div id=\"page-header\">
\t\t\t\t";
        // line 93
        // line 94
        echo "\t\t\t\t";
        // line 95
        echo "\t\t\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 95)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 96
        echo "\t\t\t\t";
        // line 97
        echo "\t\t\t</div>

\t\t\t<div class=\"jumbotron no-margin-bottom no-padding-bottom\">
\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 101
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        }
        echo "\">";
        echo (isset($context["SITE_LOGO_IMG"]) ? $context["SITE_LOGO_IMG"] : null);
        echo "</a>
\t\t\t\t\t<p>";
        // line 102
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 103
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SKIP");
        echo "</a></p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 107
        // line 108
        echo "
\t\t\t<a id=\"start_here\" class=\"anchor\"></a>
\t\t\t<div class=\"container\" id=\"page-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 113
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 114
        echo "\t\t\t\t\t\t";
        // line 115
        echo "\t\t\t\t\t\t<ol class=\"breadcrumb no-margin-bottom\" id=\"nav-breadcrumbs\">
\t\t\t\t\t\t\t";
        // line 116
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 117
            echo "\t\t\t\t\t\t\t\t<li><span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\"><i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i></span></a></span></li>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t<li><span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span></li>
\t\t\t\t\t\t\t";
        // line 120
        // line 121
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 122
            echo "\t\t\t\t\t\t\t\t";
            // line 123
            echo "\t\t\t\t\t\t\t\t<li><span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" ";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo " itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span></li>
\t\t\t\t\t\t\t\t";
            // line 124
            // line 125
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t\t\t\t\t";
        // line 127
        echo "\t\t\t\t\t\t</ol>
\t\t\t\t\t\t";
        // line 128
        // line 129
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 131
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 132
            echo "\t\t\t\t\t<div id=\"information\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"alert alert-danger rules\">
\t\t\t\t\t\t\t\t<strong>";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOARD_DISABLED");
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 140
        echo "
\t\t\t\t";
        // line 141
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 141,  479 => 140,  468 => 135,  463 => 132,  461 => 131,  457 => 129,  456 => 128,  453 => 127,  451 => 126,  445 => 125,  444 => 124,  430 => 123,  428 => 122,  423 => 121,  422 => 120,  411 => 119,  403 => 117,  401 => 116,  398 => 115,  396 => 114,  393 => 113,  386 => 108,  385 => 107,  378 => 103,  374 => 102,  358 => 101,  352 => 97,  350 => 96,  337 => 95,  335 => 94,  334 => 93,  328 => 89,  327 => 88,  314 => 86,  309 => 83,  308 => 82,  303 => 80,  300 => 79,  288 => 78,  285 => 77,  284 => 76,  276 => 73,  272 => 71,  264 => 69,  262 => 68,  259 => 67,  251 => 65,  249 => 64,  246 => 63,  238 => 61,  236 => 60,  231 => 58,  226 => 57,  209 => 42,  207 => 41,  197 => 33,  191 => 31,  189 => 30,  186 => 29,  183 => 28,  181 => 27,  168 => 26,  155 => 25,  144 => 24,  133 => 23,  122 => 22,  111 => 21,  100 => 20,  98 => 19,  73 => 17,  69 => 16,  60 => 14,  54 => 11,  47 => 7,  44 => 6,  32 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "overall_header.html", "");
    }
}

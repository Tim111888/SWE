<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_1e9e2da28a1d8498a8c67321ddff85865ba47a93df0d85c1c1534fb78004c376 extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"btn-group\">
\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t</button>
\t\t<ul class=\"dropdown-menu\">
\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"fa ";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "fa-check-square-o";
                } else {
                    echo "fa-square-o";
                }
                echo " fa-fw\"data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t<i class=\"fa ";
                // line 11
                if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                    echo "fa-square-o";
                } else {
                    echo "fa-check-square-o";
                }
                echo " fa-fw\" aria-hidden=\"true\"></i><span>";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 15
            echo "\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 16
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 17
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t<i class=\"fa fa-bookmark fa-fw\" aria-hidden=\"true\"></i> ";
                // line 18
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 22
            echo "\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\"><i class=\"fa fa-arrow-up fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "\"><i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 24
            echo "\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\"><i class=\"fa fa-print fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 25
            echo "\t\t\t";
            // line 26
            echo "\t\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 26,  118 => 25,  107 => 24,  96 => 23,  85 => 22,  78 => 18,  70 => 17,  67 => 16,  64 => 15,  51 => 11,  35 => 10,  32 => 9,  29 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "viewtopic_topic_tools.html", "");
    }
}

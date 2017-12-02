<?php

/* post_icons.html */
class __TwigTemplate_4cfe74bcff709fd57bdbfb713ce1d5dcf7ccba90ff0aea6410bbe98f92727207 extends Twig_Template
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
        echo "<a href=\"";
        echo $this->getAttribute(($context["topicrow"] ?? null), "U_VIEW_TOPIC", array());
        echo "\" class=\"btn ";
        if ($this->getAttribute(($context["topicrow"] ?? null), "S_UNREAD_TOPIC", array())) {
            echo "btn-info";
        } else {
            echo "btn-default";
        }
        echo " btn-lg tooltip-link hidden-xs\" title=\"";
        echo $this->getAttribute(($context["topicrow"] ?? null), "TOPIC_FOLDER_IMG_ALT", array());
        echo "\">
\t";
        // line 2
        if ($this->getAttribute(($context["topicrow"] ?? null), "S_TOPIC_LOCKED", array())) {
            // line 3
            echo "\t\t<i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 4
($context["topicrow"] ?? null), "S_POST_GLOBAL", array())) {
            // line 5
            echo "\t\t<i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 6
($context["topicrow"] ?? null), "S_POST_ANNOUNCE", array())) {
            // line 7
            echo "\t\t<i class=\"fa fa-bullhorn fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 8
($context["topicrow"] ?? null), "S_POST_STICKY", array())) {
            // line 9
            echo "\t\t<i class=\"fa fa-thumb-tack fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 10
($context["topicrow"] ?? null), "S_HAS_POLL", array())) {
            // line 11
            echo "\t\t<i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 12
($context["topicrow"] ?? null), "S_TOPIC_MOVED", array())) {
            // line 13
            echo "        <i class=\"fa fa-long-arrow-right fa-fw\" aria-hidden=\"true\"></i>
\t";
        } else {
            // line 15
            echo "\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t";
        }
        // line 17
        echo "</a>
<div class=\"visible-xs-inline\">
\t";
        // line 19
        if ($this->getAttribute(($context["topicrow"] ?? null), "S_TOPIC_LOCKED", array())) {
            // line 20
            echo "\t\t<i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 21
($context["topicrow"] ?? null), "S_POST_GLOBAL", array())) {
            // line 22
            echo "\t\t<i class=\"fa fa-info-circle fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 23
($context["topicrow"] ?? null), "S_POST_ANNOUNCE", array())) {
            // line 24
            echo "\t\t<i class=\"fa fa-bullhorn fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 25
($context["topicrow"] ?? null), "S_POST_STICKY", array())) {
            // line 26
            echo "\t\t<i class=\"fa fa-thumb-tack fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 27
($context["topicrow"] ?? null), "S_HAS_POLL", array())) {
            // line 28
            echo "\t\t<i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>
\t";
        } elseif ($this->getAttribute(        // line 29
($context["topicrow"] ?? null), "S_TOPIC_MOVED", array())) {
            // line 30
            echo "        <i class=\"fa fa-long-arrow-right fa-fw\" aria-hidden=\"true\"></i>
\t";
        } else {
            // line 32
            echo "\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t";
        }
        // line 34
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "post_icons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  102 => 32,  98 => 30,  96 => 29,  93 => 28,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  67 => 17,  63 => 15,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "post_icons.html", "");
    }
}

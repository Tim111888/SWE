<?php

/* jumpbox.html */
class __TwigTemplate_018aeb77bdcb4f676e19dcfbe3ac897a3ac53794418ab14d03c74444255afa55 extends Twig_Template
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
        echo "<div class=\"jumpbox row\">
\t<div class=\"col-xs-6\">
\t\t";
        // line 3
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 4
            echo "\t\t\t<a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"btn btn-default\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 5
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_FORUM");
            echo "</span>
\t\t\t</a>
\t\t";
        } elseif (        // line 7
(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 8
            echo "\t\t\t<a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"btn btn-default\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 9
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_INDEX");
            echo "</span>
\t\t\t</a>
\t\t";
        } elseif (        // line 11
(isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 12
            echo "\t\t\t<a class=\"btn btn-default\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 13
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t\t</a>
\t\t";
        }
        // line 16
        echo "\t</div>
\t";
        // line 17
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 18
            echo "\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" title=\"";
            // line 20
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            echo "\" >
\t\t\t\t\t";
            // line 21
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JUMP_TO");
            }
            echo " <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 25
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                    // line 26
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", array());
                    echo "\" class=\"";
                    if ($this->getAttribute($context["jumpbox_forums"], "level", array())) {
                        echo "jumpbox-sub-link";
                    } elseif ($this->getAttribute($context["jumpbox_forums"], "S_IS_CAT", array())) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "<span class=\"spacer\"></span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <span>";
                    if ($this->getAttribute($context["jumpbox_forums"], "level", array())) {
                        echo " &#8627; &nbsp;";
                    }
                    echo " ";
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                    echo "</span></a></li>
\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  139 => 29,  133 => 28,  104 => 26,  101 => 25,  97 => 24,  85 => 21,  75 => 20,  71 => 18,  69 => 17,  66 => 16,  58 => 13,  53 => 12,  51 => 11,  44 => 9,  39 => 8,  37 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "jumpbox.html", "");
    }
}

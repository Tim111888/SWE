<?php

/* posting_topic_review.html */
class __TwigTemplate_a0c9caefa8c39933c4db6a0962268448abc6746629195ab805275a7dea172a4d extends Twig_Template
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
        echo "<div class=\"panel panel-default review\" id=\"review\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</h3>
\t\t<span class=\"pull-right panel-right\" id=\"review_panel\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true);\" class=\"btn btn-xs btn-default expander\"><i class=\"fa fa-expand fa-fw\" aria-hidden=\"true\"></i></a></span>
\t</div>
\t<div id=\"topicreview\" class=\"panel-body no-margin-bottom topicreview\">
\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tbbcodeEnabled = ";
        // line 9
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
\t\t// ]]>
\t\t</script>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 13
            echo "\t\t\t";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 14
                echo "\t\t\t\t<div class=\"post post-ignore\">
\t\t\t\t\t";
                // line 15
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "
\t\t\t";
            } elseif ($this->getAttribute(            // line 16
$context["topic_review_row"], "S_POST_DELETED", array())) {
                // line 17
                echo "\t\t\t\t<div class=\"post post-ignore\">
\t\t\t\t\t";
                // line 18
                echo $this->getAttribute($context["topic_review_row"], "L_DELETE_POST", array());
                echo "
\t\t\t";
            }
            // line 20
            echo "\t\t\t\t<div id=\"pr";
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\" class=\"preview-item\">
\t\t\t\t\t<div class=\"panel panel-default no-margin-bottom\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t<a href=\"#pr";
            // line 24
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
            echo "</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<span class=\"pull-right btn-group panel-right\">
\t\t\t\t\t\t\t\t";
            // line 27
            if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                echo "\" class=\"btn btn-primary btn-xs\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 29
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo ", '";
                echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                echo "', '";
                echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("WROTE"), "js");
                echo "');\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                echo " ";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                echo "\" class=\"btn btn-success btn-xs\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 34
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                echo " ";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body post-content\">
\t\t\t\t\t\t\t<div class=\"post-head\">
\t\t\t\t\t\t\t\t";
            // line 41
            // line 42
            echo "\t\t\t\t\t\t\t\t<p class=\"author\">
\t\t\t\t\t\t\t\t\t";
            // line 43
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 47
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 52
            // line 53
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">";
            // line 54
            echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
            echo "</div>
\t\t\t\t\t\t\t";
            // line 55
            if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 56
                echo "\t\t\t\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t\t\t\t<dt>";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t\t\t\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            // line 69
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 70
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 72
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t</div>
\t<div class=\"panel-footer review-footer\">
\t\t";
        // line 75
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 76
            echo "\t\t\t<div class=\"to-top pull-right\"><a href=\"#report\" class=\"top\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t";
        } else {
            // line 78
            echo "\t\t\t<div class=\"to-top pull-right\"><a href=\"#postingbox\" class=\"top\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t";
        }
        // line 80
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 80,  231 => 78,  227 => 76,  225 => 75,  221 => 73,  215 => 72,  211 => 70,  209 => 69,  204 => 66,  196 => 64,  193 => 63,  189 => 61,  180 => 59,  176 => 58,  172 => 57,  169 => 56,  167 => 55,  163 => 54,  160 => 53,  159 => 52,  149 => 50,  143 => 47,  136 => 46,  130 => 44,  128 => 43,  125 => 42,  124 => 41,  118 => 37,  110 => 34,  97 => 33,  94 => 32,  88 => 29,  83 => 28,  81 => 27,  73 => 24,  65 => 20,  60 => 18,  57 => 17,  55 => 16,  51 => 15,  48 => 14,  45 => 13,  41 => 12,  35 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_topic_review.html", "");
    }
}

<?php

/* posting_option_body.html */
class __TwigTemplate_6c06cb5978fd1857d1235f2dc5018100d086a40e2a452f5537ea885db40bc6bd extends Twig_Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane active\" id=\"options-tab\">
\t<fieldset class=\"form-horizontal\">
\t\t";
        // line 3
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 4
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_bbcode\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            // line 7
            echo ($context["S_BBCODE_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_BBCODE");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 13
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_smilies\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            // line 16
            echo ($context["S_SMILIES_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_SMILIES");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t";
        if (($context["S_LINKS_ALLOWED"] ?? null)) {
            // line 22
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_magic_url\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            // line 25
            echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MAGIC_URL");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (($context["S_SIG_ALLOWED"] ?? null)) {
            // line 31
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"attach_sig\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
            // line 34
            echo ($context["S_SIGNATURE_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_SIG");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        echo "\t\t";
        if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
            // line 40
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"notify\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"notify\" id=\"notify\"";
            // line 43
            echo ($context["S_NOTIFY_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY_REPLY");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 48
        echo "\t\t";
        if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
            // line 49
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"lock_topic\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
            // line 52
            echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_TOPIC");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t";
        if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
            // line 58
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"lock_post\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
            // line 61
            echo ($context["S_LOCK_POST_CHECKED"] ?? null);
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
            echo " [";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
            echo "]
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 66
        echo "\t\t";
        if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
            // line 67
            echo "\t\t\t<hr class=\"dashed\" />
\t\t";
        }
        // line 69
        echo "\t\t";
        if (($context["S_TYPE_TOGGLE"] ?? null)) {
            // line 70
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"radio\">
\t\t\t\t\t<label for=\"topic_type-0\">";
            // line 72
            if (($context["S_EDIT_POST"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_TOPIC_TO");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_TOPIC_AS");
            }
            echo ":</label>
\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_type", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                // line 74
                echo "\t\t\t\t\t\t<label for=\"topic_type-";
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                // line 75
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\"";
                echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                echo " />
\t\t\t\t\t\t\t";
                // line 76
                echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t";
        if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
            // line 83
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"topic_time_limit\" class=\"col-md-2 control-label\">";
            // line 84
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR");
            echo ":</label>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<input type=\"text\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
            // line 86
            echo ($context["TOPIC_TIME_LIMIT"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">";
            // line 88
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAYS");
            echo "</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<p class=\"help-block col-md-12\">";
            // line 90
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STICK_TOPIC_FOR_EXPLAIN");
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 93
        echo "\t\t";
        if (($context["S_EDIT_REASON"] ?? null)) {
            // line 94
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"edit_reason\" class=\"col-md-4\">";
            // line 95
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_REASON");
            echo ":</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
            // line 97
            echo ($context["EDIT_REASON"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 101
        echo "\t</fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_option_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 101,  241 => 97,  236 => 95,  233 => 94,  230 => 93,  224 => 90,  219 => 88,  214 => 86,  209 => 84,  206 => 83,  203 => 82,  198 => 79,  189 => 76,  181 => 75,  176 => 74,  172 => 73,  164 => 72,  160 => 70,  157 => 69,  153 => 67,  150 => 66,  138 => 61,  133 => 58,  130 => 57,  120 => 52,  115 => 49,  112 => 48,  102 => 43,  97 => 40,  94 => 39,  84 => 34,  79 => 31,  76 => 30,  66 => 25,  61 => 22,  58 => 21,  48 => 16,  43 => 13,  40 => 12,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_option_body.html", "");
    }
}

<?php

/* display_options.html */
class __TwigTemplate_e2dceecb347b02406aea0bf606ecb35ab61b293a7c7b629d1a3745eab66e65c7 extends Twig_Template
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
        echo "<fieldset class=\"display-options well well-sm text-center\">
\t";
        // line 2
        if (((isset($context["DISPLAY_OPTIONS_PREV_NEXT"]) ? $context["DISPLAY_OPTIONS_PREV_NEXT"] : null) == 1)) {
            // line 3
            echo "\t\t";
            if ((isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box ";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 4
            echo "\t\t";
            if ((isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null);
                echo "\" class=\"right-box ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                echo "</a>";
            }
            // line 5
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 7
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo " <input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" class=\"btn btn-default\" /></label>
\t";
        } elseif ((        // line 8
(isset($context["DISPLAY_OPTIONS_MCP_TOPICS"]) ? $context["DISPLAY_OPTIONS_MCP_TOPICS"] : null) == 1)) {
            // line 9
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 11
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t";
            // line 12
            if ((isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null)) {
                echo "<label class=\"inline-checkbox\"><input type=\"checkbox\" name=\"t\" value=\"";
                echo (isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null);
                echo "\" checked=\"checked\" /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 13
            echo "\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t";
        } elseif ((        // line 14
(isset($context["DISPLAY_OPTIONS_S_RESULT"]) ? $context["DISPLAY_OPTIONS_S_RESULT"] : null) == 1)) {
            // line 15
            echo "\t\t";
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 16
                echo "\t\t \t<label>";
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
                    echo "</label>
\t\t \t<label>";
                }
                // line 17
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    echo "</label> <label>";
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "</label>
\t\t\t<label>";
                    // line 18
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                }
                echo "</label>
\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"sort\" value=\"";
                // line 19
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
                echo "\" />
\t\t";
            }
            // line 21
            echo "\t";
        } else {
            // line 22
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 24
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"sort\" value=\"";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" />
\t";
        }
        // line 27
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 27,  152 => 25,  148 => 24,  142 => 23,  134 => 22,  131 => 21,  126 => 19,  121 => 18,  113 => 17,  104 => 16,  101 => 15,  99 => 14,  94 => 13,  86 => 12,  82 => 11,  76 => 10,  68 => 9,  66 => 8,  60 => 7,  54 => 6,  46 => 5,  35 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display_options.html", "");
    }
}

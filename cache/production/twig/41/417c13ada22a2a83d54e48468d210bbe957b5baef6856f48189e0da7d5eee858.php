<?php

/* posting_editor.html */
class __TwigTemplate_751350d795ea8edf00d1dd6c23f5b7a8db732703820b87fba2467fcb674250b7 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"alert alert-danger\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 3
        echo "\t<div class=\"form-horizontal\">
\t\t";
        // line 4
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 5
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"icon\" class=\"col-md-2 control-label\">";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ICON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t<div class=\"btn-radio-group btn-group\">
\t\t\t\t\t\t<label class=\"btn btn-sm btn-default btn-radio\" for=\"icon\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"chradio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" />
\t\t\t\t\t\t\t";
            // line 11
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_PM_ICON");
            }
            // line 12
            echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                // line 14
                echo "\t\t\t\t\t\t\t<label class=\"btn btn-default btn-sm btn-radio\" for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"chradio\" name=\"icon\" id=\"icon-";
                // line 15
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\" />
\t\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ALT", array());
                echo "\" />
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 24
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-md-2 control-label\">";
            // line 25
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 27
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        // line 32
        echo "\t\t";
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 33
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subject\" class=\"col-md-2 control-label\">";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t";
            // line 36
            // line 37
            echo "\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "60";
            } else {
                echo "64";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 41
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 42
                echo "\t\t\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 43
                echo "\t\t\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 43)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 44
                echo "\t\t\t";
            }
            // line 45
            echo "\t\t";
        }
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t";
        // line 51
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 52
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t";
        // line 54
        // line 55
        echo "\t\t\t\t\t\t<div id=\"message-box\" class=\"message-box\">
\t\t\t\t\t\t\t<textarea ";
        // line 56
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo " name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"form-control no-auto-resize\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 smiley-box\" id=\"smiley-box\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 64
        // line 65
        echo "\t\t\t\t\t";
        if (($context["S_SMILIES_ALLOWED"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-md-12\">
\t\t\t\t\t\t\t";
            // line 67
            if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array())))) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SMILIES");
                echo "</strong><br/>
\t\t\t\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "smiley", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                    echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                    echo "', true); return false;\"><img src=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                    echo "\" /></a>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "\t\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t";
            if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
                // line 74
                echo "\t\t\t\t\t\t\t\t<br /><a href=\"";
                echo ($context["U_MORE_SMILIES"] ?? null);
                echo "\" onclick=\"popup(this.href, 300, 350, '_phpbbsmilies'); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MORE_SMILIES");
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t";
        // line 79
        echo "\t\t\t\t\t<div class=\"col-sm-6 col-md-12\">
\t\t\t\t\t\t";
        // line 80
        // line 81
        echo "\t\t\t\t\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t\t<div class=\"visible-lg\">";
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "smiley", array()))) {
                echo "<hr />";
            }
            echo "</div>
\t\t\t\t\t\t\t";
            // line 83
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t\t\t\t\t\t";
            // line 84
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t\t\t\t\t\t";
                // line 86
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t\t\t\t\t\t";
                // line 87
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 92
            echo "\t\t\t\t\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 93
            echo "\t\t\t\t\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" class=\"btn btn-warning\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_DRAFTS");
                echo "</a>";
            }
            // line 94
            echo "\t\t\t\t\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<a href=\"#review\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REVIEW");
                echo "</a>";
            }
            // line 95
            echo "\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</fieldset>
";
        // line 103
        if (($this->getAttribute(($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 104
            echo "\t";
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 105
                echo "\t\t<div id=\"submit\">
\t\t\t<fieldset class=\"submit-buttons btn-post\">
\t\t\t\t";
                // line 107
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t\t";
                // line 108
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t\t";
                // line 109
                // line 110
                echo "\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 111
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOAD_DRAFT");
                    echo "\" class=\"btn btn-warning\" onclick=\"load_draft = true;\" />";
                }
                // line 112
                echo "\t\t\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SAVE_DRAFT");
                    echo "\" class=\"btn btn-warning\" />";
                }
                // line 113
                echo "\t\t\t\t</div>
\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                // line 114
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIEW");
                echo "\" class=\"btn btn-primary\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />
\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 115
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" class=\"btn btn-success default-submit-action\" />
\t\t\t</fieldset>
\t\t</div>
\t";
            }
            // line 119
            echo "\t<div id=\"opt_tabs\">
\t\t";
            // line 120
            if (( !($context["S_PRIVMSGS"] ?? null) && ( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1))) {
                // line 121
                echo "\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t<li class=\"active\" role=\"presentation\"><a href=\"#options-tab\" aria-controls=\"options-tab\" data-toggle=\"tab\">";
                // line 122
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</a></li>
\t\t\t\t";
                // line 123
                if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                    echo "<li role=\"presentation\"><a href=\"#attach-tab\" aria-controls=\"attach-tab\" data-toggle=\"tab\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_ATTACHMENT");
                    echo "</a></li>";
                }
                // line 124
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    echo "<li role=\"presentation\"><a href=\"#poll-tab\" aria-controls=\"poll-tab\" data-toggle=\"tab\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_POLL");
                    echo "</a></li>";
                }
                // line 125
                echo "\t\t\t\t";
                // line 126
                echo "\t\t\t</ul>
\t\t";
            }
            // line 128
            echo "\t\t";
            if (( !$this->getAttribute(($context["definition"] ?? null), "SIG_EDIT", array()) == 1)) {
                // line 129
                echo "\t\t\t<div class=\"tab-content well post-tabs\">
\t\t\t\t";
                // line 130
                $location = "posting_option_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("posting_option_body.html", "posting_editor.html", 130)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 131
                echo "\t\t\t\t";
                if (($context["S_SHOW_ATTACH_BOX"] ?? null)) {
                    $location = "posting_attach_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("posting_attach_body.html", "posting_editor.html", 131)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 132
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    $location = "posting_poll_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("posting_poll_body.html", "posting_editor.html", 132)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 133
                echo "\t\t\t</div>
\t\t";
            }
            // line 135
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 135,  485 => 133,  470 => 132,  455 => 131,  443 => 130,  440 => 129,  437 => 128,  433 => 126,  431 => 125,  424 => 124,  418 => 123,  414 => 122,  411 => 121,  409 => 120,  406 => 119,  399 => 115,  391 => 114,  388 => 113,  381 => 112,  375 => 111,  372 => 110,  371 => 109,  367 => 108,  363 => 107,  359 => 105,  356 => 104,  354 => 103,  347 => 98,  346 => 97,  343 => 96,  340 => 95,  333 => 94,  324 => 93,  319 => 92,  316 => 91,  310 => 89,  305 => 87,  301 => 86,  296 => 85,  294 => 84,  290 => 83,  283 => 82,  280 => 81,  279 => 80,  276 => 79,  274 => 78,  270 => 76,  262 => 74,  259 => 73,  256 => 72,  237 => 70,  233 => 69,  228 => 68,  226 => 67,  223 => 66,  220 => 65,  219 => 64,  212 => 59,  211 => 58,  198 => 56,  195 => 55,  194 => 54,  190 => 52,  178 => 51,  172 => 47,  170 => 46,  167 => 45,  164 => 44,  151 => 43,  147 => 42,  145 => 41,  141 => 39,  140 => 38,  128 => 37,  127 => 36,  121 => 34,  118 => 33,  115 => 32,  113 => 31,  106 => 27,  100 => 25,  97 => 24,  94 => 23,  88 => 19,  71 => 16,  63 => 15,  58 => 14,  54 => 13,  51 => 12,  45 => 11,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_editor.html", "");
    }
}

<?php

/* posting_buttons.html */
class __TwigTemplate_77f458d1f0bd9fff6a599e2d2c1c8b70b18646567f52e204c45bb8d8ceb25c9d extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 4
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP"), "js");
        echo "',
\t\ti: '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP"), "js");
        echo "',
\t\tu: '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP"), "js");
        echo "',
\t\tq: '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP"), "js");
        echo "',
\t\tc: '";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP"), "js");
        echo "',
\t\tl: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP"), "js");
        echo "',
\t\to: '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP"), "js");
        echo "',
\t\tp: '";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP"), "js");
        echo "',
\t\tw: '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP"), "js");
        echo "',
\t\ta: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_A_HELP"), "js");
        echo "',
\t\ts: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP"), "js");
        echo "',
\t\tf: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP"), "js");
        echo "',
\t\ty: '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Y_HELP"), "js");
        echo "',
\t\td: '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP"), "js");
        echo "'
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 30
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR_HIDE"), "js");
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR"), "js");
        echo "';
\t\t}
\t}


// ]]>
</script>
";
        // line 52
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('2');
        }
        $this->getEnvironment()->get_assets_bag()->add_script($asset);        // line 53
        if ( !(isset($context["S_VISUAL_EDITOR"]) ? $context["S_VISUAL_EDITOR"] : null)) {
            // line 54
            echo "\t";
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 55
                echo "\t\t<div id=\"colour_palette\" style=\"display: none;\">
\t\t\t<dl style=\"clear: left;\">
\t\t\t\t<dt><label>";
                // line 57
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
                echo ":</label></dt>
\t\t\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t\t\t</dl>
\t\t</div>
\t\t";
                // line 61
                // line 62
                echo "\t\t<div id=\"format-buttons\" class=\"no-margin\">
\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\">
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(0)\" title=\"";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_B_HELP");
                echo "\" accesskey=\"b\" name=\"addbbcode0\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-bold fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(2)\" title=\"";
                // line 68
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_I_HELP");
                echo "\" accesskey=\"i\" name=\"addbbcode2\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-italic fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(4)\" title=\"";
                // line 71
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_U_HELP");
                echo "\" accesskey=\"u\" name=\"addbbcode4\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-underline fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t";
                // line 75
                if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                    // line 76
                    echo "\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t<button onclick=\"bbstyle(6)\" title=\"";
                    // line 77
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_Q_HELP");
                    echo "\" accesskey=\"q\" name=\"addbbcode6\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-quote-right fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(10)\" title=\"";
                // line 83
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_L_HELP");
                echo "\" accesskey=\"l\" name=\"addbbcode10\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-list-ul fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(12)\" title=\"";
                // line 86
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_O_HELP");
                echo "\" accesskey=\"o\" name=\"addbbcode12\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-list-ol fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(-1)\" title=\"";
                // line 89
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_LISTITEM_HELP");
                echo "\" accesskey=\"y\" name=\"addbblistitem\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-asterisk fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(8)\" title=\"";
                // line 94
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_C_HELP");
                echo "\" accesskey=\"c\" name=\"addbbcode8\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-code fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                // line 97
                if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                    // line 98
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(14)\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_P_HELP");
                    echo "\" accesskey=\"p\" name=\"addbbcode14\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-picture-o fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 103
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(16)\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_W_HELP");
                    echo "\" accesskey=\"w\" name=\"addbbcode16\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-link fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t";
                if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                    // line 108
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(18)\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_D_HELP");
                    echo "\" accesskey=\"d\" name=\"addbbcode18\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-flash fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t<button onclick=\"change_palette();\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_S_HELP");
                echo "\" name=\"bbpalette\" type=\"button\" class=\"btn btn-default btn-xs\" id=\"bbpalette\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_COLOR");
                echo "\"    >
\t\t\t\t\t\t<i class=\"fa fa-tint fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group btn-group-sm fontsize-picker\">
\t\t\t\t\t<select name=\"addbbcode20\" class=\"form-control\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
                // line 117
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BBCODE_F_HELP");
                echo "\">
\t\t\t\t\t\t<option value=\"50\">";
                // line 118
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_TINY");
                echo "</option>
\t\t\t\t\t\t<option value=\"85\">";
                // line 119
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_SMALL");
                echo "</option>
\t\t\t\t\t\t<option value=\"100\" selected=\"selected\">";
                // line 120
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_NORMAL");
                echo "</option>
\t\t\t\t\t\t";
                // line 121
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                    // line 122
                    echo "\t\t\t\t\t\t\t<option value=\"150\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_LARGE");
                    echo "</option>
\t\t\t\t\t\t\t";
                    // line 123
                    if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t<option value=\"200\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FONT_HUGE");
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t";
                // line 129
                // line 130
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 131
                    echo "\t\t\t\t\t<button onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo ")\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" type=\"button\" class=\"btn btn-default btn-xs bbcode-";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG_CLEAN", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "\"  >
\t\t\t\t\t\t";
                    // line 132
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "
\t\t\t\t\t</button>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t</div>
\t\t</div>
\t";
                // line 137
                // line 138
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 138,  359 => 137,  355 => 135,  346 => 132,  333 => 131,  328 => 130,  327 => 129,  323 => 127,  320 => 126,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  297 => 119,  293 => 118,  289 => 117,  278 => 112,  270 => 108,  267 => 107,  259 => 103,  256 => 102,  248 => 98,  246 => 97,  240 => 94,  232 => 89,  226 => 86,  220 => 83,  217 => 82,  209 => 77,  206 => 76,  204 => 75,  197 => 71,  191 => 68,  185 => 65,  180 => 62,  179 => 61,  172 => 57,  168 => 55,  165 => 54,  163 => 53,  152 => 52,  142 => 45,  135 => 41,  124 => 32,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  37 => 10,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "posting_buttons.html", "");
    }
}

<?php

/* mcp_header.html */
class __TwigTemplate_4ff74c19d8ce3d6d9467a92563e0e0a0289ee76c4d6e5683f0d9a07dd7876423 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "mcp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP");
        echo "</h2>
</div>

";
        // line 7
        if (((($context["U_MCP_FORUM"] ?? null) || ($context["U_MCP_TOPIC"] ?? null)) || ($context["U_MCP_POST"] ?? null))) {
            // line 8
            echo "\t<div class=\"text-center mcp-buttons\">
\t\t<div class=\"btn-group\">
\t\t\t";
            // line 10
            if (($context["U_MCP_FORUM"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MCP_FORUM"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_FORUM");
                echo "</a>";
            }
            // line 11
            echo "\t\t\t";
            if (($context["U_MCP_TOPIC"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MCP_TOPIC"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_TOPIC");
                echo "</a>";
            }
            // line 12
            echo "\t\t\t";
            if (($context["U_MCP_POST"] ?? null)) {
                echo "<a href=\"";
                echo ($context["U_MCP_POST"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MODERATE_POST");
                echo "</a>";
            }
            // line 13
            echo "\t\t</div>
\t</div>
";
        }
        // line 16
        echo "
<div id=\"mcp-container\">
\t<ul class=\"nav nav-tabs nav-justified\">
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 20
            echo "\t\t\t<li role=\"presentation\" ";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["l_block1"], "U_TITLE", array());
            echo "\"><span>";
            echo $this->getAttribute($context["l_block1"], "L_TITLE", array());
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</ul>

\t<div class=\"well\" id=\"mcp-nav\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<div class=\"list-group\" role=\"navigation\">
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 29
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["l_block2"], "S_SELECTED", array())) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\" class=\"list-group-item active\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["l_block2"], "U_TITLE", array());
                        echo "\" class=\"list-group-item\"><span>";
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        if ($this->getAttribute($context["l_block2"], "ADD_ITEM", array())) {
                            echo " (";
                            echo $this->getAttribute($context["l_block2"], "ADD_ITEM", array());
                            echo ")";
                        }
                        echo "</span></a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-10\" id=\"mcp-body\">
\t\t\t\t";
        // line 43
        if (($context["MESSAGE"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE");
            echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<p class=\"alert alert-danger\">";
            // line 49
            echo ($context["MESSAGE"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t<p>";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "return_links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["return_links"]) {
                echo $this->getAttribute($context["return_links"], "MESSAGE_LINK", array());
                echo "<br /><br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_links'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
    }

    public function getTemplateName()
    {
        return "mcp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 50,  184 => 49,  178 => 46,  174 => 44,  172 => 43,  166 => 39,  160 => 38,  157 => 37,  151 => 36,  138 => 34,  125 => 32,  122 => 31,  117 => 30,  114 => 29,  110 => 28,  102 => 22,  87 => 20,  83 => 19,  78 => 16,  73 => 13,  64 => 12,  55 => 11,  47 => 10,  43 => 8,  41 => 7,  35 => 4,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_header.html", "");
    }
}

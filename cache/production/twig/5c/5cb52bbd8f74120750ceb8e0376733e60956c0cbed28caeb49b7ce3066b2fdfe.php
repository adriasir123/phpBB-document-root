<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navbar_header.html */
class __TwigTemplate_fe97d0748c2ec6e21e871ee98c0f3189f9bc961425a8c87d4da728c3f2763a29 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 5
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 6
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 7
        echo "\t\t";
        // line 8
        echo "
\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t";
        // line 11
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 12
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 14
        echo "
\t\t\t";
        // line 15
        // line 16
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 19
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 19))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 19)));
            // line 20
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 20))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 20)));
            // line 21
            echo "
\t\t\t\t";
            // line 22
            // line 23
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 23)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 23);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 24
            // line 25
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t";
        // line 27
        // line 28
        echo "\t\t</li>
\t\t";
        // line 29
        // line 30
        echo "
\t\t";
        // line 31
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 32
            echo "\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 33
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 34
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        // line 38
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 34,  144 => 33,  141 => 32,  139 => 31,  136 => 30,  135 => 29,  132 => 28,  131 => 27,  128 => 26,  122 => 25,  121 => 24,  105 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  91 => 18,  74 => 16,  73 => 15,  70 => 14,  57 => 12,  55 => 11,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}

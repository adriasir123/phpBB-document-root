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

/* navbar_header_top.html */
class __TwigTemplate_5cc6ac9580c8423fafdd62d570875291bfad2a495ae04fc9006b3fe0f90fb955 extends \Twig\Template
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
        echo "<div class=\"navbar navbar-top\" role=\"navigation\">
\t<div class=\"inner\">
\t\t<nav class=\"navigation-bar-top\">
\t\t\t<ul class=\"navbar-bar\" id='main' role=\"menubar\">
\t\t\t\t\t";
        // line 5
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 6
            echo "\t\t\t\t\t";
            // line 7
            echo "\t\t\t\t<li class=\"nav-button-front\" id=\"username_logged_in\" >
\t\t\t\t\t";
            // line 8
            // line 9
            echo "\t\t\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t\t\t<a href=\"";
            // line 10
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            } else {
                echo " <img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" /> ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
            // line 14
            // line 15
            echo "\t\t\t\t\t\t\t";
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 17
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 18
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 22
            echo "
\t\t\t\t\t\t\t";
            // line 23
            // line 24
            echo "
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 30
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 31
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 33
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 37
            echo "
\t\t\t\t\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t\t\t\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
                // line 40
                echo "\t\t\t\t\t\t\t";
                if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                    echo "\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 42
                    echo ($context["U_MEMBERLIST"] ?? null);
                    echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 43
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t";
                if (($context["U_TEAM"] ?? null)) {
                    echo "\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 49
                    echo ($context["U_TEAM"] ?? null);
                    echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                    // line 50
                    echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t";
            echo "\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            // line 59
            // line 60
            echo "\t\t\t\t</li>\t\t\t
\t\t\t\t";
            // line 61
            // line 62
            echo "
\t\t\t\t";
        } elseif ( !        // line 63
($context["S_IS_BOT"] ?? null)) {
            // line 64
            echo "\t\t\t\t<li class=\"nav-button-front\" >
\t\t\t\t\t<a href=\"";
            // line 65
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 66
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 69
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 70
                echo "\t\t\t\t<li >
\t\t\t\t\t<a class=\"blink\" href=\"";
                // line 71
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 72
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t";
            // line 77
            echo "\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t
\t\t\t\t";
        // line 80
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 81
            echo "\t\t\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 82
                echo "\t\t\t\t<li >
\t\t\t\t\t<a id=\"myBtn\" title=\"";
                // line 83
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span class=\"hide-name\">";
                // line 84
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo "</span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t";
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 89
                echo "\t\t\t\t<li >
\t\t\t\t\t<a href=\"";
                // line 90
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span class=\"hide-name\">";
                // line 91
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGE");
                echo "</span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t";
        // line 98
        echo "\t\t\t\t";
        // line 99
        echo "\t\t\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " class=\"nav-button-end\" ";
        }
        echo " >
\t\t\t\t\t<a href=\"";
        // line 100
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 101
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 104
        if (($context["U_ACP"] ?? null)) {
            // line 105
            echo "\t\t\t\t<li >
\t\t\t\t\t<a href=\"";
            // line 106
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 107
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 112
            echo "\t\t\t\t<li >
\t\t\t\t\t<a href=\"";
            // line 113
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 114
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t";
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 119
            echo "\t\t\t\t<li  class=\"nav-button-end\">
\t\t\t\t\t<a href=\"";
            // line 120
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 121
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t<li class=\"more hidden nav-button-end\" data-width=\"80\" >
\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-ellipsis-h\" style=\"display:block;font-size: 20px;position: relative;left: 12px;top: -2px;z-index: 100;\"></span></a>
\t\t\t\t\t\t<ul></ul>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>

\t</div>
\t\t<!-- The Modal -->
\t<div id=\"myModal\" class=\"modal\">

\t\t<!-- Modal content -->
\t\t<div class=\"modal-content\">
\t\t\t";
        // line 138
        $location = "notification_dropdown.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("notification_dropdown.html", "navbar_header_top.html", 138)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 139
        echo "\t\t</div>

\t</div>\t
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header_top.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 139,  375 => 138,  360 => 125,  353 => 121,  347 => 120,  344 => 119,  341 => 118,  334 => 114,  328 => 113,  325 => 112,  322 => 111,  315 => 107,  309 => 106,  306 => 105,  304 => 104,  298 => 101,  292 => 100,  285 => 99,  283 => 98,  281 => 97,  277 => 95,  264 => 91,  260 => 90,  257 => 89,  254 => 88,  241 => 84,  237 => 83,  234 => 82,  231 => 81,  229 => 80,  225 => 78,  222 => 77,  220 => 76,  213 => 72,  209 => 71,  206 => 70,  204 => 69,  198 => 66,  192 => 65,  189 => 64,  187 => 63,  184 => 62,  183 => 61,  180 => 60,  179 => 59,  172 => 55,  169 => 54,  162 => 50,  158 => 49,  152 => 47,  145 => 43,  141 => 42,  135 => 40,  132 => 39,  131 => 38,  128 => 37,  121 => 33,  115 => 32,  112 => 31,  110 => 30,  104 => 27,  98 => 26,  94 => 24,  93 => 23,  90 => 22,  83 => 18,  79 => 17,  76 => 16,  73 => 15,  72 => 14,  54 => 10,  51 => 9,  50 => 8,  47 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header_top.html", "");
    }
}

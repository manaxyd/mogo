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

/* C:\OpenServer\domains\mogo/themes/mogo/partials/header.htm */
class __TwigTemplate_5f356ed6260a4c7c1b816845f0b94c8a0b15ca438d44997bdfb330b4bb7e4c89 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container container--header\">
        <div class=\"header_top\">
            <div class=\"header_logo\">MoGo</div>
            <div class=\"nav_top\">
                <div class=\"menu_nav\" id=\"nav\">
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#about\">About</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#service\">Service</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#work\">Work</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#blog\">Blog</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#contact\">Contact</a>
                    <a class=\"nav_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-shopping-cart\"></i></a>
                    <a class=\"nav_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-search\"></i></a>
                </div>
            </div>
            <div class=\"nav-toggle\" id=\"nav_toogle\">
                <span class=\"nav-toggle_item\">Menu</span>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container container--header\">
        <div class=\"header_top\">
            <div class=\"header_logo\">MoGo</div>
            <div class=\"nav_top\">
                <div class=\"menu_nav\" id=\"nav\">
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#about\">About</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#service\">Service</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#work\">Work</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#blog\">Blog</a>
                    <a class=\"nav_item\" href=\"#\" data-scroll=\"#contact\">Contact</a>
                    <a class=\"nav_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-shopping-cart\"></i></a>
                    <a class=\"nav_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-search\"></i></a>
                </div>
            </div>
            <div class=\"nav-toggle\" id=\"nav_toogle\">
                <span class=\"nav-toggle_item\">Menu</span>
            </div>
        </div>
    </div>", "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/header.htm", "");
    }
}

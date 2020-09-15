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

/* C:\OpenServer\domains\mogo/themes/mogo/pages/post.htm */
class __TwigTemplate_8f8a046d5f862bf13f66e686e0cac41f2d4b75e3d3bf548cd01b6de8fd305394 extends \Twig\Template
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
        $tags = array("component" => 14);
        $filters = array("escape" => 5, "raw" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['escape', 'raw'],
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
        echo "<section class=\"section section--post\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
        <div class=\"section_inner\">
            <div class=\"section_intro\">
                <h2 class=\"section_title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
                <p class=\"section_text\">
                    ";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
                </p>        
            </div>
            <div class=\"post_body\">
                ";
        // line 11
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 11), 11, $this->source);
        echo "
            </div>

            ";
        // line 14
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("commentsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 15
        echo "
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  86 => 14,  80 => 11,  73 => 7,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section section--post\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
        <div class=\"section_inner\">
            <div class=\"section_intro\">
                <h2 class=\"section_title\">{{ post.title }}</h2>
                <p class=\"section_text\">
                    {{ post.excerpt }}
                </p>        
            </div>
            <div class=\"post_body\">
                {{ post.content_html|raw }}
            </div>

            {% component 'commentsPost' %}

        </div>
    </div>
</section>", "C:\\OpenServer\\domains\\mogo/themes/mogo/pages/post.htm", "");
    }
}

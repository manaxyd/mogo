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

/* C:\OpenServer\domains\mogo/themes/mogo/partials/blog.htm */
class __TwigTemplate_5a2b375a9b98d54d526a30060683df9e1e07857fa4fe32860606295caca9161c extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 3);
        $filters = array("escape" => 6, "slice" => 7, "date" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'slice', 'date'],
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "<div class=\"blog\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "    <div class=\"post\">
        <div class=\"post_picture\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 7), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "                <img class=\"post_img\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </a>
            <div class=\"post_date\"><span>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 11), 11, $this->source), "d"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 11), 11, $this->source), "M"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"post_title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</div>
        <div class=\"post_exerpt\">";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</div>
        <div class=\"post_activity\">
            <div class=\"post_views\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</div>
            <div class=\"post_comments\">70</div>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noPostsMessage"] ?? null), 21, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 23,  124 => 21,  114 => 16,  109 => 14,  105 => 13,  98 => 11,  95 => 10,  84 => 8,  80 => 7,  76 => 6,  72 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}
<div class=\"blog\">
    {% for post in posts %}
    <div class=\"post\">
        <div class=\"post_picture\">
            <a href=\"{{ post.url }}\">
                {% for image in post.featured_images| slice(0, 1) %}
                <img class=\"post_img\" src=\"{{ image.path }}\" alt=\"{{ post.title }}\">
                {% endfor %}
            </a>
            <div class=\"post_date\"><span>{{ post.published_at|date('d') }}</span>{{ post.published_at|date('M') }}</div>
        </div>
        <div class=\"post_title\">{{ post.title }}</div>
        <div class=\"post_exerpt\">{{ post.excerpt }}</div>
        <div class=\"post_activity\">
            <div class=\"post_views\">{{ post.views }}</div>
            <div class=\"post_comments\">70</div>
        </div>
    </div>
    {% else %}
        {{ noPostsMessage }}
    {% endfor %}
</div>", "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/blog.htm", "");
    }
}

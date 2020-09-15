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

/* C:\OpenServer\domains\mogo/themes/mogo/layouts/default.htm */
class __TwigTemplate_46e12f50a6c7164cf77b7a2a41ad704c362304d4ab801900a7249b136224e1f7 extends \Twig\Template
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
        $tags = array("styles" => 14, "if" => 17, "partial" => 18, "page" => 22, "framework" => 93, "scripts" => 94);
        $filters = array("escape" => 6, "theme" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'if', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.css\">

        ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>
        <header id=\"header\" class=\"header ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) != "home")) {
            echo " active ";
        }
        echo "\">
            ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "        </header>
        
        
        ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "
        <footer>
            ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "        </footer>


        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
        <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.instagramFeed.min.js");
        echo "\"></script>
        <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
        <script src=\"https://kit.fontawesome.com/64a3499a60.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script> 
        <script>
            AOS.init({
                offset: 200,
                duration: 900,
                delay: 100,
                disable: function () {
                    var maxWidth = 768;
                    return window.innerWidth < maxWidth;
                }
            });
        </script>

        <script>
            var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            setWrapperSize: false,
            virtualTranslate: false,
            spaceBetween: 50,

            // If we need pagination
            /* pagination: {
                el: '.swiper-pagination',
            },*/

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            /* scrollbar: {
                el: '.swiper-scrollbar',
            },*/
            });
        </script>
        <script>
            (function (\$) {
                \$(window).on('load', function () {
                    \$.instagramFeed({
                        'username': 'tickets_travel_ua', //Имя пользователя
                        'container': \"#instafeed\", //Контейнер для изображений
                        'display_profile': false, //Отображение профиля
                        'display_biography': true, //Отображение биографии
                        'display_gallery': true, //Отображение галереи
                        'styling': true, //Стандартные стили библиотеки
                        'items': 8, //Количество изображений в галереи
                        'items_per_row': 4, //Количество изображений в ряд
                        'margin': 0.5 //Отступ между изображениями
                    });
                });
            })(jQuery);
        </script>

    ";
        // line 93
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 94
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 95
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 95,  201 => 94,  190 => 93,  126 => 32,  122 => 31,  115 => 26,  111 => 25,  107 => 23,  105 => 22,  100 => 19,  96 => 18,  90 => 17,  86 => 15,  83 => 14,  76 => 10,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{{ this.page.title }}</title>
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
        <link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/swiper/swiper-bundle.css\">

        {% styles %}
    </head>
    <body>
        <header id=\"header\" class=\"header {% if this.page.id != 'home' %} active {% endif %}\">
            {% partial 'header' %}
        </header>
        
        
        {% page %}

        <footer>
            {% partial 'footer' %}
        </footer>


        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/jquery.instagramFeed.min.js'|theme }}\"></script>
        <script src=\"https://unpkg.com/swiper/swiper-bundle.min.js\"></script>
        <script src=\"https://kit.fontawesome.com/64a3499a60.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script> 
        <script>
            AOS.init({
                offset: 200,
                duration: 900,
                delay: 100,
                disable: function () {
                    var maxWidth = 768;
                    return window.innerWidth < maxWidth;
                }
            });
        </script>

        <script>
            var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            setWrapperSize: false,
            virtualTranslate: false,
            spaceBetween: 50,

            // If we need pagination
            /* pagination: {
                el: '.swiper-pagination',
            },*/

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            /* scrollbar: {
                el: '.swiper-scrollbar',
            },*/
            });
        </script>
        <script>
            (function (\$) {
                \$(window).on('load', function () {
                    \$.instagramFeed({
                        'username': 'tickets_travel_ua', //Имя пользователя
                        'container': \"#instafeed\", //Контейнер для изображений
                        'display_profile': false, //Отображение профиля
                        'display_biography': true, //Отображение биографии
                        'display_gallery': true, //Отображение галереи
                        'styling': true, //Стандартные стили библиотеки
                        'items': 8, //Количество изображений в галереи
                        'items_per_row': 4, //Количество изображений в ряд
                        'margin': 0.5 //Отступ между изображениями
                    });
                });
            })(jQuery);
        </script>

    {% framework extras %}
    {% scripts %}

    </body>
</html>", "C:\\OpenServer\\domains\\mogo/themes/mogo/layouts/default.htm", "");
    }
}

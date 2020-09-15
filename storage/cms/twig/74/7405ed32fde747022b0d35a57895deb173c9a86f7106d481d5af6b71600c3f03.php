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

/* C:\OpenServer\domains\mogo/themes/mogo/partials/footer.htm */
class __TwigTemplate_9c4ee734ea9f47559ab55bc3e3dd3cfab0ea493b10ef00eef0f0685fa296cbf4 extends \Twig\Template
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
        $filters = array("theme" => 32);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<section>
    <div class=\"container\">
        <div class=\"footer_inner\">
            <div class=\"footer_block footer_block--info\">
                <div class=\"footer_info\">
                    <h1>MoGo</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class=\"follow_us\">
                    <p><span>15k</span> followers</p>
                    <div class=\"follow_us_icons\">
                        Follow Us:
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-google-plus-square\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-tumblr\"></i></a>
                    </div>
                </div>
                <div class=\"subscribe\">
                    <input class=\"subscribe_input\" type=\"text\" placeholder=\"Your Email...\">
                    <input class=\"subscribe_btn\" type=\"button\" value=\"subscribe\">
                </div>
            </div>
            <div class=\"footer_block footer_block--blog\">
                <div class=\"footer_blogs\">
                    <h3><a class=\"footer_blogs_title\" href=\"\">Blog</a></h3>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/macpc.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/macpc.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">Consectetur adipiscing elit, sed do eiusmod tempor</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/macpc.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">sed do eiusmod tempor</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer_block footer_block--instagram\">
                <div class=\"footer_instagram\">
                    <h3><a class=\"footer_blogs_title\" href=\"\">Instagram</a></h3>
                    <div class=\"footer_instagram_collage\">
                        <!-- <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\"> -->
                    </div>
                    <div id=\"instafeed\"></div>
                    <a class=\"view_more\" href=\"\">View more photos</a>
                </div>
            </div>
        </div>
        <div class=\"footer_bottom\">
            <p>© 2016 MoGo free PSD template by <a href=\"\">Laaqiq</a></p>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 46,  105 => 39,  95 => 32,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
    <div class=\"container\">
        <div class=\"footer_inner\">
            <div class=\"footer_block footer_block--info\">
                <div class=\"footer_info\">
                    <h1>MoGo</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class=\"follow_us\">
                    <p><span>15k</span> followers</p>
                    <div class=\"follow_us_icons\">
                        Follow Us:
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-google-plus-square\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a>
                        <a class=\"follow_us_icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-tumblr\"></i></a>
                    </div>
                </div>
                <div class=\"subscribe\">
                    <input class=\"subscribe_input\" type=\"text\" placeholder=\"Your Email...\">
                    <input class=\"subscribe_btn\" type=\"button\" value=\"subscribe\">
                </div>
            </div>
            <div class=\"footer_block footer_block--blog\">
                <div class=\"footer_blogs\">
                    <h3><a class=\"footer_blogs_title\" href=\"\">Blog</a></h3>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"{{ 'assets/img/macpc.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"{{ 'assets/img/macpc.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">Consectetur adipiscing elit, sed do eiusmod tempor</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                    <div class=\"footer_post\">
                        <div class=\"footer_post_img\"><img src=\"{{ 'assets/img/macpc.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"footer_post_content\">
                            <div class=\"footer_post_title\"><a href=\"\">sed do eiusmod tempor</a></div>
                            <div class=\"footer_post_date\">Jan 9, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"footer_block footer_block--instagram\">
                <div class=\"footer_instagram\">
                    <h3><a class=\"footer_blogs_title\" href=\"\">Instagram</a></h3>
                    <div class=\"footer_instagram_collage\">
                        <!-- <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\">
                        <img src=\"/assets/img/road.jpg\" alt=\"\"> -->
                    </div>
                    <div id=\"instafeed\"></div>
                    <a class=\"view_more\" href=\"\">View more photos</a>
                </div>
            </div>
        </div>
        <div class=\"footer_bottom\">
            <p>© 2016 MoGo free PSD template by <a href=\"\">Laaqiq</a></p>
        </div>
    </div>
</section>", "C:\\OpenServer\\domains\\mogo/themes/mogo/partials/footer.htm", "");
    }
}

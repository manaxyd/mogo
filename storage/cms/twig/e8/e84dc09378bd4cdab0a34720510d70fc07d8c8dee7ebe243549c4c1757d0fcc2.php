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

/* C:\OpenServer\domains\mogo/themes/mogo/pages/home.htm */
class __TwigTemplate_922b0100ee7e9e58c5ddc326f41ac6db3dba8c5c35b2fa140daa052c5b2e842f extends \Twig\Template
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
        $tags = array("component" => 20, "partial" => 468);
        $filters = array("theme" => 45);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial'],
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
        echo "<div class=\"m-menu\" id=\"nav_toogle_menu\">
        <div class=\"close\" id=\"close\">
            <i class=\"fas fa-times\"></i>
        </div>
        <a class=\"m-menu_item\" href=\"#\">About</a>
        <a class=\"m-menu_item\" href=\"#\">Service</a>
        <a class=\"m-menu_item\" href=\"#\">Work</a>
        <a class=\"m-menu_item\" href=\"#\">Blog</a>
        <a class=\"m-menu_item\" href=\"#\">Contact</a>
        <a class=\"m-menu_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-shopping-cart\"></i></a>
        <a class=\"m-menu_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-search\"></i></a>
    </div>
    <!-- header --><!-- header end -->
    <div class=\"intro\" id=\"intro\">
            <div class=\"intro_block\">
                <div class=\"suptext_intro\">
                    Creative Tamlate
                </div>
                <div class=\"text_intro\">
                    ";
        // line 20
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "                </div>
                <a href=\"#\" class=\"btn\">Learn More</a>
            </div>
            <div class=\"intro_bottom\">
                <div class=\"intro_bottom_item active_btm_it\"><span>01</span> Intro</div>
                <div class=\"intro_bottom_item\"><span>02</span> Work</div>
                <div class=\"intro_bottom_item\"><span>03</span> About</div>
                <div class=\"intro_bottom_item\"><span>04</span> Contacts</div>
            </div>
    </div>

    <section id=\"about\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">What we do</p>
                    <h2 class=\"section_title\">Story about us</h2>
                    <p class=\"section_text\">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae recusandae error nostrum vitae suscipit eius facilis iusto ab esse minus, fuga sapiente id omnis dicta nam maxime reprehenderit itaque ipsam?
                    </p>        
                </div>
                <div class=\"gallery\">
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/macpc.jpg");
        echo "\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tablet.jpg");
        echo "\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/iphone.jpg");
        echo "\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"counter\">
        <div class=\"container\">
            <div class=\"counter_inner\">
                <div class=\"counter_item\">
                    <div class=\"counter_num\">42</div>
                    <div class=\"counter_title\">web design projects</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">123</div>
                    <div class=\"counter_title\">happy client</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">15</div>
                    <div class=\"counter_title\">award winner</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">99</div>
                    <div class=\"counter_title\">cup of coffee</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">24</div>
                    <div class=\"counter_title\">member</div>
                </div>
            </div>
        </div>
    </div>
    <section id=\"service\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">We work with</p>
                    <h2 class=\"section_title\">Amazing services</h2>        
                </div>
                <div class=\"tech_set\">
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/photography.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">photography</div>
                        <div class=\"tech_item_desc\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, dolores?</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/webdesign.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">web design</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/creativity.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">creativity</div>
                        <div class=\"tech_item_desc\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est?</div>
                    </div>
                </div>
                <div class=\"tech_set\">    
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/seo.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">seo</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, quis dolore?</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/csshtml.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">css/html</div>
                        <div class=\"tech_item_desc\">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/digital.png");
        echo "\" alt=\"\">
                        <div class=\"tech_item_title\">digital</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"udesign\">
        <div class=\"udesign\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <p class=\"section_sup_title\">For all devices</p>
                        <h2 class=\"section_title\">Unique design</h2>        
                    </div>
                    <div class=\"devices\">
                        <img class=\"utablet\" src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/utablet.png");
        echo "\" alt=\"\">
                        <img class=\"uphone\" src=\"";
        // line 145
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/uphone.png");
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"work\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Service</p>
                    <h2 class=\"section_title\">What we do</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque tempore consequatur officiis sed, aspernatur provident, quia expedita illo, cumque porro. Quia quos tempore vel! Voluptatem quis et cumque doloremque.
                    </p>
                </div>
                <div class=\"wedo\">
                    <div class=\"wedo_item\">
                        <div class=\"wedo_img\">
                            <img src=\"";
        // line 164
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/wedo.png\" a");
        echo "lt=\"\">
                        </div>
                    </div>
                    <div class=\"wedo_item\">
                        <div class=\"accordion\">
                            <div class=\"accordion_item active\" data-collapse=\"#wedo_1\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"";
        // line 171
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/photo");
        echo "graphy.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Photography</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_1\">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum sunt reprehenderit eaque repellat illo repudiandae architecto modi deserunt accusamus, ullam sit molestias facere aliquam est vitae suscipit a officiis corrupti ipsum mollitia aut! Totam explicabo non architecto excepturi, ipsa, repellat possimus vel aut exercitationem ipsum nam? Expedita quibusdam molestias officiis inventore facere nam ex unde voluptate ad rerum hic recusandae quia odit illum maxime eligendi fugit omnis molestiae, consectetur dignissimos quis sequi labore quasi. Incidunt, pariatur. Aperiam fuga est ullam neque et modi perspiciatis dolorum officia voluptas magnam sint nostrum, accusamus vero error quasi itaque architecto earum animi culpa voluptatem omnis velit, odit a. Molestias non placeat, officiis inventore repellat nemo, deleniti dignissimos ullam assumenda cumque provident ut, a debitis numquam labore. Molestiae dolore doloremque libero nihil quaerat consequuntur? Cumque nisi eius ea voluptates aliquam architecto ipsa dicta fugiat dolor. Dolorum nihil repellat culpa quaerat quasi tempore id repudiandae molestiae.
                                </div>
                            </div>
                            <div class=\"accordion_item\" data-collapse=\"#wedo_2\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/creat");
        echo "ivity.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Creativity</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_2\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laudantium atque eos error illum adipisci commodi iusto? Reiciendis cumque sequi molestiae molestias ipsa neque, eveniet ullam velit doloremque minus exercitationem quod, vel quidem dicta nobis voluptatum itaque laudantium autem? Vel sed voluptatum labore dolore unde, laborum, sequi repellat temporibus veritatis ipsam id. Quasi, quo. Doloremque id laudantium in illo enim, temporibus consectetur magni incidunt hic neque, deserunt possimus aperiam? Repellendus, accusantium? Vero, consectetur enim molestiae illo architecto similique sed asperiores voluptatem culpa omnis soluta dicta modi autem perspiciatis dolorem hic odit tempore rem facilis recusandae quasi consequuntur minima? Molestiae, fugiat aliquid dolorem pariatur natus ipsam voluptatem ut autem porro explicabo.</div>
                            </div>
                            <div class=\"accordion_item\" data-collapse=\"#wedo_3\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/webde");
        echo "sign.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Web design</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_3\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus laboriosam velit saepe voluptatem est numquam ab! Illum maxime quisquam nobis voluptatem, soluta fuga vel adipisci, repudiandae nihil nesciunt harum saepe. Dolorem laboriosam eaque nam voluptas commodi dignissimos aut sapiente blanditiis beatae minus rerum est iusto perspiciatis iste in voluptatem consequatur veritatis maxime eum qui, perferendis aliquid quae suscipit. Velit, tenetur reiciendis incidunt facere necessitatibus quis repudiandae dignissimos similique at accusantium praesentium magnam fugit error minima quae ut perferendis sunt quam. Officiis exercitationem porro, iste placeat natus necessitatibus velit corporis nam error ipsum, beatae ea quasi tempore minus qui aut?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"speeches\">
        <div class=\"container swiper-container\">
            <div class=\"speech_inner swiper-wrapper\">
                <!-- <a class=\"arrow arrow--left\" href=\"\">prev</a>
                <a class=\"arrow arrow--right\" href=\"\">next</a> -->
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"";
        // line 205
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/speec");
        echo "h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/speec");
        echo "h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icons/speec");
        echo "h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                    
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
        </div>
    </div>
    <section id=\"gallery\">
        <div class=\"container\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Who we are</p>
                    <h2 class=\"section_title\">Meet our team</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class=\"gallery\">
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/matthew.jpg");
        echo "\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class=\"member_name\">Matthew Dix</div>
                        <div class=\"member_position\">Graphic Design</div>
                    </div>
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"";
        // line 267
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/christopher");
        echo ".jpg\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"member_name\">Christopher Campbell</div>
                        <div class=\"member_position\">Branding/UX design</div>
                    </div>
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"";
        // line 284
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/michael.jpg");
        echo "\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"member_name\">Michael Fertig</div>
                        <div class=\"member_position\">Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"labels\">
        <div class=\"container\">
            <img class=\"label_set\" src=\"";
        // line 304
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/labels.png");
        echo "\" alt=\"\">
        </div>
    </div>
    <section id=\"collage\">
        <div class=\"container\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">What we do</p>
                    <h2 class=\"section_title\">Some of our work</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>                
            </div>
        </div>
        <div class=\"collage\">
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 321
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/field.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/house.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/cat.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 342
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/drop.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 349
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mountain.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 356
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tree.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 363
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/panorama.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/road.jpg");
        echo "\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"speeches\">
        <div class=\"container swiper-container\">
            <div class=\"speech_inner swiper-wrapper\">
                <!-- <a class=\"arrow arrow--left\" href=\"\">prev</a>
                <a class=\"arrow arrow--right\" href=\"\">next</a> -->
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"";
        // line 385
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"";
        // line 394
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"";
        // line 403
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
        </div>
    </div>
    <section id=\"reviews\">
        <div class=\"clients_review\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <p class=\"section_sup_title\">Happy Clients</p>
                        <h2 class=\"section_title\">What people say</h2>        
                    </div>
                    <div class=\"reviews\">
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"";
        // line 425
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/matthew2.jpg");
        echo "\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Matthew Dix</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                            </div>
                        </div>
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"";
        // line 433
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/nick.jpg");
        echo "\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Nick Karvounis</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                            </div>
                        </div>   
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"";
        // line 441
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/jaelynny.jpg");
        echo "\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Jaelynny Castillo</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                            </div>
                        </div>
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"";
        // line 449
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/mike.jpg");
        echo "\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Mike Petrucci</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Our stories</p>
                    <h2 class=\"section_title\">Latest blog</h2>
                </div>
                ";
        // line 468
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 469
        echo "            </div>
        </div>
    </section>
    <section id=\"contact\">
        <div class=\"clients_review\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <h2 class=\"section_title\"><a class=\"section_title--open_map\" href=\"#\">Open Map</a></h2>        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer --><!-- footer end -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\mogo/themes/mogo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 469,  649 => 468,  627 => 449,  616 => 441,  605 => 433,  594 => 425,  569 => 403,  557 => 394,  545 => 385,  527 => 370,  517 => 363,  507 => 356,  497 => 349,  487 => 342,  477 => 335,  467 => 328,  457 => 321,  437 => 304,  414 => 284,  394 => 267,  374 => 250,  344 => 223,  332 => 214,  320 => 205,  299 => 187,  289 => 180,  277 => 171,  267 => 164,  245 => 145,  241 => 144,  221 => 127,  213 => 122,  205 => 117,  195 => 110,  187 => 105,  179 => 100,  133 => 57,  124 => 51,  115 => 45,  89 => 21,  83 => 20,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"m-menu\" id=\"nav_toogle_menu\">
        <div class=\"close\" id=\"close\">
            <i class=\"fas fa-times\"></i>
        </div>
        <a class=\"m-menu_item\" href=\"#\">About</a>
        <a class=\"m-menu_item\" href=\"#\">Service</a>
        <a class=\"m-menu_item\" href=\"#\">Work</a>
        <a class=\"m-menu_item\" href=\"#\">Blog</a>
        <a class=\"m-menu_item\" href=\"#\">Contact</a>
        <a class=\"m-menu_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-shopping-cart\"></i></a>
        <a class=\"m-menu_item\" href=\"#\" target=\"_blank\"><i class=\"fas fa-search\"></i></a>
    </div>
    <!-- header --><!-- header end -->
    <div class=\"intro\" id=\"intro\">
            <div class=\"intro_block\">
                <div class=\"suptext_intro\">
                    Creative Tamlate
                </div>
                <div class=\"text_intro\">
                    {% component 'contenteditor' file=\"intro/title.htm\" fixture=\"h1\" %}
                </div>
                <a href=\"#\" class=\"btn\">Learn More</a>
            </div>
            <div class=\"intro_bottom\">
                <div class=\"intro_bottom_item active_btm_it\"><span>01</span> Intro</div>
                <div class=\"intro_bottom_item\"><span>02</span> Work</div>
                <div class=\"intro_bottom_item\"><span>03</span> About</div>
                <div class=\"intro_bottom_item\"><span>04</span> Contacts</div>
            </div>
    </div>

    <section id=\"about\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">What we do</p>
                    <h2 class=\"section_title\">Story about us</h2>
                    <p class=\"section_text\">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae recusandae error nostrum vitae suscipit eius facilis iusto ab esse minus, fuga sapiente id omnis dicta nam maxime reprehenderit itaque ipsam?
                    </p>        
                </div>
                <div class=\"gallery\">
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"{{ 'assets/img/macpc.jpg'|theme }}\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"{{ 'assets/img/tablet.jpg'|theme }}\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                    <div class=\"gallery_item\">
                        <div class=\"gallery_item_inner\">
                            <img class=\"gallery_img\" src=\"{{ 'assets/img/iphone.jpg'|theme }}\" alt=\"Super team\">
                            <div class=\"gallery_img_title\">Super team</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"counter\">
        <div class=\"container\">
            <div class=\"counter_inner\">
                <div class=\"counter_item\">
                    <div class=\"counter_num\">42</div>
                    <div class=\"counter_title\">web design projects</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">123</div>
                    <div class=\"counter_title\">happy client</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">15</div>
                    <div class=\"counter_title\">award winner</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">99</div>
                    <div class=\"counter_title\">cup of coffee</div>
                </div>
                <div class=\"counter_item\">
                    <div class=\"counter_num\">24</div>
                    <div class=\"counter_title\">member</div>
                </div>
            </div>
        </div>
    </div>
    <section id=\"service\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">We work with</p>
                    <h2 class=\"section_title\">Amazing services</h2>        
                </div>
                <div class=\"tech_set\">
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/photography.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">photography</div>
                        <div class=\"tech_item_desc\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, dolores?</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/webdesign.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">web design</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/creativity.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">creativity</div>
                        <div class=\"tech_item_desc\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est?</div>
                    </div>
                </div>
                <div class=\"tech_set\">    
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/seo.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">seo</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, quis dolore?</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/csshtml.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">css/html</div>
                        <div class=\"tech_item_desc\">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                    </div>
                    <div class=\"tech_item\">
                        <img class=\"tech_item_icon\" src=\"{{ 'assets/img/icons/digital.png'|theme }}\" alt=\"\">
                        <div class=\"tech_item_title\">digital</div>
                        <div class=\"tech_item_desc\">Lorem ipsum dolor sit amet consectetur.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"udesign\">
        <div class=\"udesign\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <p class=\"section_sup_title\">For all devices</p>
                        <h2 class=\"section_title\">Unique design</h2>        
                    </div>
                    <div class=\"devices\">
                        <img class=\"utablet\" src=\"{{ 'assets/img/utablet.png'|theme }}\" alt=\"\">
                        <img class=\"uphone\" src=\"{{ 'assets/img/uphone.png'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"work\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Service</p>
                    <h2 class=\"section_title\">What we do</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque tempore consequatur officiis sed, aspernatur provident, quia expedita illo, cumque porro. Quia quos tempore vel! Voluptatem quis et cumque doloremque.
                    </p>
                </div>
                <div class=\"wedo\">
                    <div class=\"wedo_item\">
                        <div class=\"wedo_img\">
                            <img src=\"{{ 'assets/img/wedo.png\" a'|theme }}lt=\"\">
                        </div>
                    </div>
                    <div class=\"wedo_item\">
                        <div class=\"accordion\">
                            <div class=\"accordion_item active\" data-collapse=\"#wedo_1\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"{{ 'assets/img/icons/photo'|theme }}graphy.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Photography</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_1\">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum sunt reprehenderit eaque repellat illo repudiandae architecto modi deserunt accusamus, ullam sit molestias facere aliquam est vitae suscipit a officiis corrupti ipsum mollitia aut! Totam explicabo non architecto excepturi, ipsa, repellat possimus vel aut exercitationem ipsum nam? Expedita quibusdam molestias officiis inventore facere nam ex unde voluptate ad rerum hic recusandae quia odit illum maxime eligendi fugit omnis molestiae, consectetur dignissimos quis sequi labore quasi. Incidunt, pariatur. Aperiam fuga est ullam neque et modi perspiciatis dolorum officia voluptas magnam sint nostrum, accusamus vero error quasi itaque architecto earum animi culpa voluptatem omnis velit, odit a. Molestias non placeat, officiis inventore repellat nemo, deleniti dignissimos ullam assumenda cumque provident ut, a debitis numquam labore. Molestiae dolore doloremque libero nihil quaerat consequuntur? Cumque nisi eius ea voluptates aliquam architecto ipsa dicta fugiat dolor. Dolorum nihil repellat culpa quaerat quasi tempore id repudiandae molestiae.
                                </div>
                            </div>
                            <div class=\"accordion_item\" data-collapse=\"#wedo_2\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"{{ 'assets/img/icons/creat'|theme }}ivity.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Creativity</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_2\">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus laudantium atque eos error illum adipisci commodi iusto? Reiciendis cumque sequi molestiae molestias ipsa neque, eveniet ullam velit doloremque minus exercitationem quod, vel quidem dicta nobis voluptatum itaque laudantium autem? Vel sed voluptatum labore dolore unde, laborum, sequi repellat temporibus veritatis ipsam id. Quasi, quo. Doloremque id laudantium in illo enim, temporibus consectetur magni incidunt hic neque, deserunt possimus aperiam? Repellendus, accusantium? Vero, consectetur enim molestiae illo architecto similique sed asperiores voluptatem culpa omnis soluta dicta modi autem perspiciatis dolorem hic odit tempore rem facilis recusandae quasi consequuntur minima? Molestiae, fugiat aliquid dolorem pariatur natus ipsam voluptatem ut autem porro explicabo.</div>
                            </div>
                            <div class=\"accordion_item\" data-collapse=\"#wedo_3\">
                                <div class=\"accordion_item_header\">
                                    <img class=\"accordion_item_icon\" src=\"{{ 'assets/img/icons/webde'|theme }}sign.png\" alt=\"\">
                                    <div class=\"accordion_item_title\">Web design</div>
                                </div>
                                <div class=\"accordion_item_desc\" id=\"wedo_3\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus laboriosam velit saepe voluptatem est numquam ab! Illum maxime quisquam nobis voluptatem, soluta fuga vel adipisci, repudiandae nihil nesciunt harum saepe. Dolorem laboriosam eaque nam voluptas commodi dignissimos aut sapiente blanditiis beatae minus rerum est iusto perspiciatis iste in voluptatem consequatur veritatis maxime eum qui, perferendis aliquid quae suscipit. Velit, tenetur reiciendis incidunt facere necessitatibus quis repudiandae dignissimos similique at accusantium praesentium magnam fugit error minima quae ut perferendis sunt quam. Officiis exercitationem porro, iste placeat natus necessitatibus velit corporis nam error ipsum, beatae ea quasi tempore minus qui aut?</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"speeches\">
        <div class=\"container swiper-container\">
            <div class=\"speech_inner swiper-wrapper\">
                <!-- <a class=\"arrow arrow--left\" href=\"\">prev</a>
                <a class=\"arrow arrow--right\" href=\"\">next</a> -->
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"{{ 'assets/img/icons/speec'|theme }}h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"{{ 'assets/img/icons/speec'|theme }}h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item\">
                        <div class=\"speech_icon\"><img  src=\"{{ 'assets/img/icons/speec'|theme }}h.png\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
                    
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
        </div>
    </div>
    <section id=\"gallery\">
        <div class=\"container\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Who we are</p>
                    <h2 class=\"section_title\">Meet our team</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class=\"gallery\">
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"{{ 'assets/img/matthew.jpg'|theme }}\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class=\"member_name\">Matthew Dix</div>
                        <div class=\"member_position\">Graphic Design</div>
                    </div>
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"{{ 'assets/img/christopher'|theme }}.jpg\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"member_name\">Christopher Campbell</div>
                        <div class=\"member_position\">Branding/UX design</div>
                    </div>
                    <div class=\"member_body\" data-aos=\"zoom-in\">
                        <div class=\"gallery_item\">
                            <div class=\"gallery_item_inner member--inner\">
                                <img class=\"gallery_img\" src=\"{{ 'assets/img/michael.jpg'|theme }}\" alt=\"Super team\">
                                <div class=\"gallery_img_title\">
                                    <div class=\"member_icon_set\">
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-pinterest-p\"></i></a>
                                        <a class=\"icon_link\" href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"member_name\">Michael Fertig</div>
                        <div class=\"member_position\">Developer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"labels\">
        <div class=\"container\">
            <img class=\"label_set\" src=\"{{ 'assets/img/labels.png'|theme }}\" alt=\"\">
        </div>
    </div>
    <section id=\"collage\">
        <div class=\"container\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">What we do</p>
                    <h2 class=\"section_title\">Some of our work</h2>      
                    <p class=\"section_text\">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>                
            </div>
        </div>
        <div class=\"collage\">
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/field.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/house.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/cat.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/drop.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/mountain.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/tree.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/panorama.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
            <div class=\"collage_item\" data-aos=\"flip-right\">
                <img class=\"collage_img\" src=\"{{ 'assets/img/road.jpg'|theme }}\" alt=\"\">
                <div class=\"collage_info\">
                    <div class=\"collage_title\">Collage Title</div>
                    <div class=\"collage_text\">Collage Text</div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"speeches\">
        <div class=\"container swiper-container\">
            <div class=\"speech_inner swiper-wrapper\">
                <!-- <a class=\"arrow arrow--left\" href=\"\">prev</a>
                <a class=\"arrow arrow--right\" href=\"\">next</a> -->
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"{{ 'assets/img/testimonial.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"{{ 'assets/img/testimonial.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"speech_item testimonial--item\">
                        <div class=\"speech_icon testimonial--icon\"><img  src=\"{{ 'assets/img/testimonial.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"speech_content\">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</p>
                            <div class=\"speech_author\">Joshua Earle</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-button-prev\"></div>
            <div class=\"swiper-button-next\"></div>
        </div>
    </div>
    <section id=\"reviews\">
        <div class=\"clients_review\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <p class=\"section_sup_title\">Happy Clients</p>
                        <h2 class=\"section_title\">What people say</h2>        
                    </div>
                    <div class=\"reviews\">
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"{{ 'assets/img/matthew2.jpg'|theme }}\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Matthew Dix</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                            </div>
                        </div>
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"{{ 'assets/img/nick.jpg'|theme }}\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Nick Karvounis</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                            </div>
                        </div>   
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"{{ 'assets/img/jaelynny.jpg'|theme }}\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Jaelynny Castillo</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</div>
                            </div>
                        </div>
                        <div class=\"review_item\">
                            <img class=\"review_item_icon\" src=\"{{ 'assets/img/mike.jpg'|theme }}\" alt=\"\">
                            <div class=\"review_item_head\">
                                <div class=\"reviewer_title\">Mike Petrucci</div>
                                <div class=\"reviewer_position\">Graphic Design</div>
                                <div class=\"review_item_content\">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-easing=\"linear\">
            <div class=\"section_inner\">
                <div class=\"section_intro\">
                    <p class=\"section_sup_title\">Our stories</p>
                    <h2 class=\"section_title\">Latest blog</h2>
                </div>
                {% partial 'blog' %}
            </div>
        </div>
    </section>
    <section id=\"contact\">
        <div class=\"clients_review\">
            <div class=\"container\">
                <div class=\"section_inner section_inner--udesign\">
                    <div class=\"section_intro\">
                        <h2 class=\"section_title\"><a class=\"section_title--open_map\" href=\"#\">Open Map</a></h2>        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer --><!-- footer end -->", "C:\\OpenServer\\domains\\mogo/themes/mogo/pages/home.htm", "");
    }
}

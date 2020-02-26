<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_72240c15f2cdee9dc71b462f542685ce5a9c07af2971b25b02107ff820f119b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 165
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        echo "Bonjour!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        // line 12
        echo "    <head>
        <title>Binder</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        <link href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Fredericka+the+Great"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <div class=\"py-2 bg-primary\">
        <div class=\"container\">
            <div class=\"row no-gutters d-flex align-items-start align-items-center px-3 px-md-0\">
                <div class=\"col-lg-12 d-block\">
                    <div class=\"row d-flex\">
                        <div class=\"col-md-5 pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-fifth mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-map\"></span></div>
                            <span class=\"text\">Tunis Tunisie</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-secondary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                            <span class=\"text\">contactus@binder.com</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                            <span class=\"text\">+ 1235 2355 98</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"index.html\">Binder</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a href=\"index.html\" class=\"nav-link pl-0\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
                    <li class=\"nav-item\"><a href=\"teacher.html\" class=\"nav-link\">Teacher</a></li>
                    <li class=\"nav-item\"><a href=\"courses.html\" class=\"nav-link\">Courses</a></li>
                    <li class=\"nav-item\"><a href=\"pricing.html\" class=\"nav-link\">Pricing</a></li>
                    <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
                    <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        // line 80
        echo "    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                        <div class=\"block-23 mb-3\">
                            <ul>
                                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"ftco-heading-2\">Recent Blog</h2>
                        <div class=\"block-21 mb-4 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_1.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"block-21 mb-5 d-flex\">
                            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_2.jpg);\"></a>
                            <div class=\"text\">
                                <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                                <div class=\"meta\">
                                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Dec 25, 2018</a></div>
                                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"ftco-footer-widget mb-5 ml-md-4\">
                        <h2 class=\"ftco-heading-2\">Links</h2>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Home</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>About</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Services</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Deparments</a></li>
                            <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-3\">
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"ftco-heading-2\">Subscribe Us!</h2>
                        <form action=\"#\" class=\"subscribe-form\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control mb-2 text-center\" placeholder=\"Enter email address\">
                                <input type=\"submit\" value=\"Subscribe\" class=\"form-control submit px-3\">
                            </div>
                        </form>
                    </div>
                    <div class=\"ftco-footer-widget mb-5\">
                        <h2 class=\"ftco-heading-2 mb-0\">Connect With Us</h2>
                        <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-3\">
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
";
    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        // line 166
        echo "    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 183,  345 => 182,  341 => 181,  337 => 180,  333 => 179,  329 => 178,  325 => 177,  321 => 176,  317 => 175,  313 => 174,  309 => 173,  305 => 172,  301 => 171,  297 => 170,  293 => 169,  288 => 166,  285 => 165,  197 => 80,  194 => 79,  189 => 77,  141 => 33,  137 => 32,  133 => 31,  128 => 29,  123 => 27,  118 => 25,  114 => 24,  110 => 23,  105 => 21,  101 => 20,  96 => 18,  92 => 17,  85 => 12,  82 => 11,  77 => 6,  71 => 5,  64 => 185,  62 => 165,  60 => 79,  58 => 77,  56 => 11,  48 => 7,  46 => 6,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\GroupePi\\app\\Resources\\views\\base.html.twig");
    }
}

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
class __TwigTemplate_070f63ceeac01d273ed211267f21ff13e301b69b880d2b7e436a5590bf4e9814 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 8
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "<!--
";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 183
        echo "!>
";
        // line 184
        $this->displayBlock('javascripts', $context, $blocks);
        // line 204
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Binder";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    <head>
        <title>Binder</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        <link href=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Fredericka+the+Great"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
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
                            <span class=\"text\">+21629164978</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"index.html\" ><h1 STYLE=\"color:#00c5de\">BIND<strong STYLE=\"color: #0b0b0b\">ER</strong></h1></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_homeFrontpage");
        echo "\" class=\"nav-link pl-0\"><h5>Home</h5></a></li>
                    <li class=\"nav-item \"><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_readClass");
        echo "\" class=\"nav-link pl-0\"><h5>Classes</h5></a></li>
                    <li class=\"nav-item \"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_searchTimeTableFront");
        echo "\" class=\"nav-link pl-0\"><h5>Time Table</h5></a></li>

                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "    <section class=\"home-slider owl-carousel\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                    <div class=\"col-md-8 text-center ftco-animate\">
                        <h1 class=\"mb-4\">Kids Are The Best <span>Explorers In The World</span></h1>
                        <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                    <div class=\"col-md-8 text-center ftco-animate\">
                        <h1 class=\"mb-4\">Perfect Learned<span> For Your Child</span></h1>
                        <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 101
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

                    <p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                         Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  463 => 202,  459 => 201,  455 => 200,  451 => 199,  447 => 198,  443 => 197,  439 => 196,  435 => 195,  431 => 194,  427 => 193,  423 => 192,  419 => 191,  415 => 190,  411 => 189,  407 => 188,  402 => 185,  393 => 184,  301 => 101,  292 => 100,  259 => 76,  250 => 75,  233 => 68,  229 => 67,  225 => 66,  190 => 34,  186 => 33,  182 => 32,  177 => 30,  172 => 28,  167 => 26,  163 => 25,  159 => 24,  154 => 22,  150 => 21,  145 => 19,  141 => 18,  134 => 13,  125 => 12,  115 => 7,  106 => 6,  88 => 5,  76 => 204,  74 => 184,  71 => 183,  69 => 100,  66 => 99,  64 => 75,  62 => 12,  54 => 8,  52 => 6,  48 => 5,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Binder{% endblock %}</title>
    {% block stylesheets %}
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

{% block header %}
    <head>
        <title>Binder</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        <link href=\"{{ asset ('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900') }} \" rel=\"stylesheet\">
        <link href=\" {{ asset ('https://fonts.googleapis.com/css?family=Fredericka+the+Great') }}\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\" {{ asset ('css/open-iconic-bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\" {{ asset ('css/animate.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset ('css/owl.carousel.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/owl.theme.default.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/magnific-popup.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset ('css/aos.css')}}\">

        <link rel=\"stylesheet\" href=\"{{ asset ('css/ionicons.min.css')}}\">

        <link rel=\"stylesheet\" href=\"{{ asset ('css/flaticon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/icomoon.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/style.css')}}\">
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
                            <span class=\"text\">+21629164978</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"index.html\" ><h1 STYLE=\"color:#00c5de\">BIND<strong STYLE=\"color: #0b0b0b\">ER</strong></h1></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a href=\"{{ path('class_homeFrontpage') }}\" class=\"nav-link pl-0\"><h5>Home</h5></a></li>
                    <li class=\"nav-item \"><a href=\"{{ path('class_readClass') }}\" class=\"nav-link pl-0\"><h5>Classes</h5></a></li>
                    <li class=\"nav-item \"><a href=\"{{ path('class_searchTimeTableFront') }}\" class=\"nav-link pl-0\"><h5>Time Table</h5></a></li>

                </ul>
            </div>
        </div>
    </nav>
{% endblock %}
{% block content %}
    <section class=\"home-slider owl-carousel\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                    <div class=\"col-md-8 text-center ftco-animate\">
                        <h1 class=\"mb-4\">Kids Are The Best <span>Explorers In The World</span></h1>
                        <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\" data-scrollax-parent=\"true\">
                    <div class=\"col-md-8 text-center ftco-animate\">
                        <h1 class=\"mb-4\">Perfect Learned<span> For Your Child</span></h1>
                        <p><a href=\"#\" class=\"btn btn-secondary px-4 py-3 mt-3\">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}<!--
{% block footer %}
    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
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

                    <p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                         Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
                </div>
            </div>
        </div>
    </footer>
{% endblock %}!>
{% block javascripts %}
    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"{{ asset ('js/jquery.min.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery-migrate-3.0.1.min.js')}}\"></script>
    <script src=\"{{ asset ('js/popper.min.js')}}\"></script>
    <script src=\"{{ asset ('js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.easing.1.3.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.waypoints.min.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.stellar.min.js')}}\"></script>
    <script src=\"{{ asset ('js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{ asset ('js/aos.js')}}\"></script>
    <script src=\"{{ asset ('js/jquery.animateNumber.min.js')}}\"></script>
    <script src=\"{{ asset ('js/scrollax.min.js')}}\"></script>
    <script src=\"{{ asset ('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}\"></script>
    <script src=\"{{ asset ('js/google-map.js')}}\"></script>
    <script src=\"{{ asset ('js/main.js')}}\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\XAMPP\\htdocs\\Binder\\app\\Resources\\views\\base.html.twig");
    }
}

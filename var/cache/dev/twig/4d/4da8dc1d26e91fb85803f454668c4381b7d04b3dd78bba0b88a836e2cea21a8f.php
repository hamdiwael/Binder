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
class __TwigTemplate_ff20a1907978e67ae7748c1b5a59080a62f04ed1aad94010729d71c38bf15371 extends \Twig\Template
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
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/favicon.ico"), "html", null, true);
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
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "</body>
</html>";
        
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

        echo "Binder | The best school to enhance your child's capabilities";
        
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    <head>
        <title><strong>Binder</strong></title>
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
                            <span class=\"text\">binder.app2020@gmail.com</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                            <span class=\"text\">+216 26196887</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exams_homepage");
        echo "\">Binder</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exams_homepage");
        echo "\" class=\"nav-link pl-0\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_searchTimeTableFront");
        echo "\" class=\"nav-link\">Timetables</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_afficheFront");
        echo "\" class=\"nav-link\">Clubs</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichegrades");
        echo "\" class=\"nav-link\">Grades</a></li>
                    <li class=\"nav-item \"><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listabsencesFront");
        echo "\" class=\"nav-link\">Absences</a></li>
                    <li class=\"nav-item \"><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listnotFront");
        echo "\" class=\"nav-link\">Notification</a></li>
                    <li class=\"nav-item\"><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"nav-link\">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 80
        echo "    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "    <div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
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
        return array (  368 => 102,  364 => 101,  360 => 100,  356 => 99,  352 => 98,  348 => 97,  344 => 96,  340 => 95,  336 => 94,  332 => 93,  328 => 92,  324 => 91,  320 => 90,  316 => 89,  312 => 88,  307 => 85,  298 => 84,  285 => 80,  276 => 79,  259 => 77,  243 => 71,  239 => 70,  235 => 69,  231 => 68,  227 => 67,  223 => 66,  219 => 65,  210 => 59,  181 => 33,  177 => 32,  173 => 31,  168 => 29,  163 => 27,  158 => 25,  154 => 24,  150 => 23,  145 => 21,  141 => 20,  136 => 18,  132 => 17,  125 => 12,  116 => 11,  99 => 6,  81 => 5,  70 => 104,  68 => 84,  66 => 79,  64 => 77,  62 => 11,  54 => 7,  52 => 6,  48 => 5,  42 => 1,);
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
    <title>{% block title %}Binder | The best school to enhance your child's capabilities{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('imgg/favicon.ico') }}\" />
</head>
<body>

{% block header %}
    <head>
        <title><strong>Binder</strong></title>
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
                            <span class=\"text\">binder.app2020@gmail.com</span>
                        </div>
                        <div class=\"col-md pr-4 d-flex topper align-items-center\">
                            <div class=\"icon bg-tertiary mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                            <span class=\"text\">+216 26196887</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"{{ path('exams_homepage') }}\">Binder</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item \"><a href=\"{{ path('exams_homepage') }}\" class=\"nav-link pl-0\">Home</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('class_searchTimeTableFront') }}\" class=\"nav-link\">Timetables</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('club_afficheFront') }}\" class=\"nav-link\">Clubs</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('affichegrades') }}\" class=\"nav-link\">Grades</a></li>
                    <li class=\"nav-item \"><a href=\"{{ path('listabsencesFront') }}\" class=\"nav-link\">Absences</a></li>
                    <li class=\"nav-item \"><a href=\"{{ path('listnotFront') }}\" class=\"nav-link\">Notification</a></li>
                    <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_login') }}\" class=\"nav-link\">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}
{% block content %}
{% endblock %}
{% block footer %}
    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">

    </footer>
{% endblock %}
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
</html>", "base.html.twig", "/home/wael/34/finalweb/Binder/app/Resources/views/base.html.twig");
    }
}

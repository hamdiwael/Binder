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

/* base2.html.twig */
class __TwigTemplate_466cab40d4f2df6bae72780ca09b06c3ca273d9735af164c129cdcbe0e2d03b5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Binder</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/fontastic.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,700"), "html", null, true);
        echo "\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
</head>
<body>

<div class=\"page\">
    <!-- Main Navbar-->
    <header class=\"header\">
        <nav class=\"navbar\">
            <!-- Search Box-->
            <div class=\"search-box\">
                <button class=\"dismiss\"><i class=\"icon-close\"></i></button>
                <form id=\"searchForm\" action=\"#\" role=\"search\">
                </form>
            </div>
            <div class=\"container-fluid\">
                <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                    <!-- Navbar Header-->
                    <div class=\"blue-bg\">
                        <!-- Navbar Brand --><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homeback");
        echo "\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>BIND</span><strong>ER</strong></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>

                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">



                        <!-- Logout    -->
                        <li class=\"nav-item\"><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"page-content d-flex align-items-stretch\">
        <!-- Side Navbar -->
        <nav class=\"side-navbar\">
            <!-- Sidebar Header-->
            <div class=\"sidebar-header d-flex align-items-center\">
                <div class=\"avatar\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/image1.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">
                        ";
        // line 69
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 70
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "
                        ";
        } else {
            // line 72
            echo "                         Ananymous
                        ";
        }
        // line 74
        echo "
                    </h1>
                    <p>Admin</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">

                <li><a href=\"#classe\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>Exams </a>
                    <ul id=\"classe\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createexams");
        echo "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>Insert Exam</a></li>
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichebackexams");
        echo "\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>List of exams</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTable\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>Grades </a>
                    <ul id=\"timeTable\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creategrades");
        echo "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>Insert grades</a></li>
                        <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affichebackgrades");
        echo "\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>list of grades</a></li>
                    </ul>
                </li>

                <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-subjects");
        echo "\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i>Subjects </a></li>
                <li ><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i>Course </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-courses");
        echo "\">Show Courses</a></li>
                        <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create-course");
        echo "\">Add course</a></li>
                    </ul>
                </li>
                        <li><a href=\"#classee\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i>Classes </a>
                    <ul id=\"classee\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_add");
        echo "\">Insert Class</a></li>
                        <li><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_read");
        echo "\">List of Classes</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTablee\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        Time Table </a>
                    <ul id=\"timeTablee\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_addTimeTable");
        echo "\">Insert Time Table</a></li>
                        <li><a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_searchTimeTable");
        echo "\">Search Time Table</a></li>



                    </ul>
                </li>
                <li><a href=\"#classes\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-cubes\" aria-hidden=\"true\"></i>Clubs </a>
                    <ul id=\"classes\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_Add");
        echo "\">Add club</a></li>
                        <li><a href=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_display");
        echo "\">Display clubs</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTables\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>Activities</a>
                    <ul id=\"timeTables\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_AddA");
        echo "\">Add activities</a></li>
                        <li><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_displayActivity");
        echo "\">Display activities</a></li>

            </ul>
                <li><a href=\"#notification\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i>Notifications </a>
                    <ul id=\"notification\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("binaddot");
        echo "\">Add notifications</a></li>
                        <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listnot");
        echo "\">List of notifications</a></li>
                        <li><a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchnot");
        echo "\">Search Notification</a></li>
                    </ul>
                </li>

                    <li><a href=\"#abscense\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>Abscenses </a>
                        <ul id=\"abscense\" class=\"collapse list-unstyled \">
                            <li><a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("binaddabs");
        echo "\">Add Abscense</a></li>
                            <li><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listabsences");
        echo "\">List of abscenses</a></li>
                            <li><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchabscenses");
        echo "\">Search Abscenss</a></li>

                        </ul>
                    </li>

        </nav>
        <div class=\"content-inner\">
            <!-- Page Header-->

            <!-- Dashboard Counts Section-->
            <div style=\"text-align: center;\">
                ";
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "            </div>
            <!-- Dashboard Header Section    -->


            <!-- Page Footer-->

        </div>
    </div>
</div>

";
        // line 169
        $this->displayBlock('javascripts', $context, $blocks);
        // line 180
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 157
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/kids.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle\">
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/charts-home.js"), "html", null, true);
        echo "\"></script>
    <!-- Main File-->
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/front.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 178,  386 => 176,  382 => 175,  378 => 174,  374 => 173,  370 => 172,  366 => 171,  361 => 170,  352 => 169,  339 => 157,  330 => 156,  319 => 180,  317 => 169,  305 => 159,  303 => 156,  289 => 145,  285 => 144,  281 => 143,  272 => 137,  268 => 136,  264 => 135,  256 => 130,  252 => 129,  243 => 123,  239 => 122,  228 => 114,  224 => 113,  214 => 106,  210 => 105,  202 => 100,  198 => 99,  192 => 96,  185 => 92,  181 => 91,  172 => 85,  168 => 84,  156 => 74,  152 => 72,  146 => 70,  144 => 69,  138 => 66,  124 => 55,  110 => 44,  89 => 26,  85 => 25,  80 => 23,  75 => 21,  70 => 19,  65 => 17,  60 => 15,  55 => 13,  50 => 11,  38 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Binder</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('vendorr/bootstrap/css/bootstrap.min.css') }}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('vendorr/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\"{{ asset('csss/fontastic.css') }}\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,700') }}\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('csss/style.default.css') }}\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ asset('csss/custom.css') }}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ asset('imgg/favicon.ico') }}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}\"></script>
    <script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script><![endif]-->
</head>
<body>

<div class=\"page\">
    <!-- Main Navbar-->
    <header class=\"header\">
        <nav class=\"navbar\">
            <!-- Search Box-->
            <div class=\"search-box\">
                <button class=\"dismiss\"><i class=\"icon-close\"></i></button>
                <form id=\"searchForm\" action=\"#\" role=\"search\">
                </form>
            </div>
            <div class=\"container-fluid\">
                <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                    <!-- Navbar Header-->
                    <div class=\"blue-bg\">
                        <!-- Navbar Brand --><a href=\"{{path('homeback')}}\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>BIND</span><strong>ER</strong></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>

                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">



                        <!-- Logout    -->
                        <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"page-content d-flex align-items-stretch\">
        <!-- Side Navbar -->
        <nav class=\"side-navbar\">
            <!-- Sidebar Header-->
            <div class=\"sidebar-header d-flex align-items-center\">
                <div class=\"avatar\"><img src=\"{{ asset('imgg/image1.png') }}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">
                        {% if app.user  %}
                        {{ app.user.username }}
                        {% else %}
                         Ananymous
                        {% endif %}

                    </h1>
                    <p>Admin</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">

                <li><a href=\"#classe\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i>Exams </a>
                    <ul id=\"classe\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('createexams') }}\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>Insert Exam</a></li>
                        <li><a href=\"{{ path('affichebackexams') }}\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>List of exams</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTable\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>Grades </a>
                    <ul id=\"timeTable\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('creategrades') }}\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>Insert grades</a></li>
                        <li><a href=\"{{ path('affichebackgrades') }}\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i>list of grades</a></li>
                    </ul>
                </li>

                <li><a href=\"{{ path('show-subjects') }}\"><i class=\"fa fa-bookmark\" aria-hidden=\"true\"></i>Subjects </a></li>
                <li ><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-book\" aria-hidden=\"true\"></i>Course </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('show-courses') }}\">Show Courses</a></li>
                        <li><a href=\"{{ path('create-course') }}\">Add course</a></li>
                    </ul>
                </li>
                        <li><a href=\"#classee\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i>Classes </a>
                    <ul id=\"classee\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('class_add') }}\">Insert Class</a></li>
                        <li><a href=\"{{ path('class_read') }}\">List of Classes</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTablee\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        Time Table </a>
                    <ul id=\"timeTablee\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('class_addTimeTable') }}\">Insert Time Table</a></li>
                        <li><a href=\"{{ path('class_searchTimeTable') }}\">Search Time Table</a></li>



                    </ul>
                </li>
                <li><a href=\"#classes\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-cubes\" aria-hidden=\"true\"></i>Clubs </a>
                    <ul id=\"classes\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('club_Add') }}\">Add club</a></li>
                        <li><a href=\"{{ path('club_display') }}\">Display clubs</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTables\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>Activities</a>
                    <ul id=\"timeTables\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('club_AddA') }}\">Add activities</a></li>
                        <li><a href=\"{{ path('club_displayActivity') }}\">Display activities</a></li>

            </ul>
                <li><a href=\"#notification\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"fa fa-bell\" aria-hidden=\"true\"></i>Notifications </a>
                    <ul id=\"notification\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('binaddot') }}\">Add notifications</a></li>
                        <li><a href=\"{{ path('listnot') }}\">List of notifications</a></li>
                        <li><a href=\"{{ path('searchnot') }}\">Search Notification</a></li>
                    </ul>
                </li>

                    <li><a href=\"#abscense\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>Abscenses </a>
                        <ul id=\"abscense\" class=\"collapse list-unstyled \">
                            <li><a href=\"{{ path('binaddabs') }}\">Add Abscense</a></li>
                            <li><a href=\"{{ path('listabsences') }}\">List of abscenses</a></li>
                            <li><a href=\"{{ path('searchabscenses') }}\">Search Abscenss</a></li>

                        </ul>
                    </li>

        </nav>
        <div class=\"content-inner\">
            <!-- Page Header-->

            <!-- Dashboard Counts Section-->
            <div style=\"text-align: center;\">
                {% block content %}
<img src=\"{{asset ('imgg/kids.jpg') }}\" alt=\"\" class=\"img-fluid rounded-circle\">
                {% endblock %}
            </div>
            <!-- Dashboard Header Section    -->


            <!-- Page Footer-->

        </div>
    </div>
</div>

{% block javascripts %}
    <script src=\"{{ asset('vendorr/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendorr/popper.js/umd/popper.min.js') }}\"> </script>
    <script src=\"{{ asset('vendorr/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('vendorr/jquery.cookie/jquery.cookie.js') }}\"> </script>
    <script src=\"{{ asset('vendorr/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('vendorr/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('jss/charts-home.js') }}\"></script>
    <!-- Main File-->
    <script src=\"{{ asset('jss/front.js') }}\"></script>
{% endblock %}
</body>
</html>", "base2.html.twig", "C:\\xampp\\htdocs\\Binder\\app\\Resources\\views\\base2.html.twig");
    }
}

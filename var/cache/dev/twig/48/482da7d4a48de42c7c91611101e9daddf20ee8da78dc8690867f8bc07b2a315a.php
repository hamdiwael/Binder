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

/* back.html.twig */
class __TwigTemplate_322bacd2de7a20a3998234586333ddd66e901a8b9d8d8e6073c89763f44dd9b1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/fontastic.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
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
                    <input type=\"search\" placeholder=\"What are you looking for...\" class=\"form-control\">
                </form>
            </div>
            <div class=\"container-fluid\">
                <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                    <!-- Navbar Header-->
                    <div class=\"navbar-header\">
                        <!-- Navbar Brand --><a href=\"index.html\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><strong>Binder</strong><span>School </span></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                        <!-- Search-->
                        <li class=\"nav-item d-flex align-items-center\"><a id=\"search\" href=\"#\"><i class=\"icon-search\"></i></a></li>
                        <!-- Notifications-->
                        <li class=\"nav-item dropdown\"> <a id=\"notifications\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-bell-o\"></i><span class=\"badge bg-red badge-corner\">12</span></a>
                            <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-envelope bg-green\"></i>You have 6 new messages </div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-twitter bg-blue\"></i>You have 2 followers</div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-upload bg-orange\"></i>Server Rebooted</div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-twitter bg-blue\"></i>You have 2 followers</div>
                                            <div class=\"notification-time\"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class=\"nav-item dropdown\"> <a id=\"messages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge bg-orange badge-corner\">10</span></a>
                            <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class=\"nav-item dropdown\"><a id=\"languages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><img src=\"img/flags/16/GB.png\" alt=\"English\"><span class=\"d-none d-sm-inline-block\">English</span></a>
                            <ul aria-labelledby=\"languages\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/flags/16/DE.png"), "html", null, true);
        echo "\" alt=\"English\" class=\"mr-2\">German</a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/flags/16/FR.png"), "html", null, true);
        echo "\" alt=\"English\" class=\"mr-2\">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->
                        <li class=\"nav-item\"><a href=\"";
        // line 108
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
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/IMAG0049.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
        echo "</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">
                <li><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>
                <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tables </a></li>
                <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Charts </a></li>
                <li  class=\"active\"><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-subjects");
        echo "\"> <i class=\"icon-padnote\"></i>Subjects </a></li>
                <li  class=\"active\"><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-interface-windows\"></i>Course </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-courses");
        echo "\">Show Courses</a></li>
                        <li><a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create-course");
        echo "\">Add course</a></li>

                    </ul>
                </li>
                <li><a href=\"login.html\"> <i class=\"icon-interface-windows\"></i>Login page </a></li>
            </ul><span class=\"heading\">Extras</span>
            <ul class=\"list-unstyled\">
                <li> <a href=\"#\"> <i class=\"icon-flask\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-screen\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-mail\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-picture\"></i>Demo </a></li>
            </ul>
        </nav>
        <div class=\"content-inner\">
            <!-- Page Header-->
            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">Forms</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-holder container-fluid\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Subjects</li>
                </ul>
            </div>
            <!-- Forms Section-->

            ";
        // line 163
        $this->displayBlock('container', $context, $blocks);
        // line 166
        echo "
            <!-- Page Footer-->
            <footer class=\"main-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class=\"col-sm-6 text-right\">
                            <p>Design by <a href=\"https://bootstrapious.com/p/admin-template\" class=\"external\">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<!-- Main File-->
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/js/front.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 163
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 164
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 164,  313 => 163,  300 => 192,  295 => 190,  291 => 189,  287 => 188,  283 => 187,  279 => 186,  275 => 185,  254 => 166,  252 => 163,  220 => 134,  216 => 133,  210 => 130,  198 => 121,  193 => 119,  179 => 108,  172 => 104,  168 => 103,  155 => 93,  147 => 88,  139 => 83,  76 => 23,  71 => 21,  66 => 19,  59 => 15,  54 => 13,  49 => 11,  37 => 1,);
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
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/vendor/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/vendor/font-awesome/css/font-awesome.min.css')}}\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/fontastic.css')}}\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/style.default.css')}}\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/css/custom.css')}}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ asset('bundles/img/favicon.ico')}}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
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
                    <input type=\"search\" placeholder=\"What are you looking for...\" class=\"form-control\">
                </form>
            </div>
            <div class=\"container-fluid\">
                <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                    <!-- Navbar Header-->
                    <div class=\"navbar-header\">
                        <!-- Navbar Brand --><a href=\"index.html\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><strong>Binder</strong><span>School </span></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                        <!-- Search-->
                        <li class=\"nav-item d-flex align-items-center\"><a id=\"search\" href=\"#\"><i class=\"icon-search\"></i></a></li>
                        <!-- Notifications-->
                        <li class=\"nav-item dropdown\"> <a id=\"notifications\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-bell-o\"></i><span class=\"badge bg-red badge-corner\">12</span></a>
                            <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-envelope bg-green\"></i>You have 6 new messages </div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-twitter bg-blue\"></i>You have 2 followers</div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-upload bg-orange\"></i>Server Rebooted</div>
                                            <div class=\"notification-time\"><small>4 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\">
                                        <div class=\"notification\">
                                            <div class=\"notification-content\"><i class=\"fa fa-twitter bg-blue\"></i>You have 2 followers</div>
                                            <div class=\"notification-time\"><small>10 minutes ago</small></div>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages                        -->
                        <li class=\"nav-item dropdown\"> <a id=\"messages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link\"><i class=\"fa fa-envelope-o\"></i><span class=\"badge bg-orange badge-corner\">10</span></a>
                            <ul aria-labelledby=\"notifications\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('bundles/img/avatar-1.jpg')}}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('bundles/img/avatar-2.jpg')}}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('bundles/img/avatar-3.jpg')}}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class=\"nav-item dropdown\"><a id=\"languages\" rel=\"nofollow\" data-target=\"#\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"nav-link language dropdown-toggle\"><img src=\"img/flags/16/GB.png\" alt=\"English\"><span class=\"d-none d-sm-inline-block\">English</span></a>
                            <ul aria-labelledby=\"languages\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"{{ asset('bundles/img/flags/16/DE.png')}}\" alt=\"English\" class=\"mr-2\">German</a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"{{ asset('bundles/img/flags/16/FR.png')}}\" alt=\"English\" class=\"mr-2\">French                                         </a></li>
                            </ul>
                        </li>
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
                <div class=\"avatar\"><img src=\"{{ asset('bundles/img/IMAG0049.jpg')}}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">{{ app.user.username }}</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">
                <li><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>
                <li><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tables </a></li>
                <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Charts </a></li>
                <li  class=\"active\"><a href=\"{{ path('show-subjects') }}\"> <i class=\"icon-padnote\"></i>Subjects </a></li>
                <li  class=\"active\"><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-interface-windows\"></i>Course </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('show-courses') }}\">Show Courses</a></li>
                        <li><a href=\"{{ path('create-course') }}\">Add course</a></li>

                    </ul>
                </li>
                <li><a href=\"login.html\"> <i class=\"icon-interface-windows\"></i>Login page </a></li>
            </ul><span class=\"heading\">Extras</span>
            <ul class=\"list-unstyled\">
                <li> <a href=\"#\"> <i class=\"icon-flask\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-screen\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-mail\"></i>Demo </a></li>
                <li> <a href=\"#\"> <i class=\"icon-picture\"></i>Demo </a></li>
            </ul>
        </nav>
        <div class=\"content-inner\">
            <!-- Page Header-->
            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">Forms</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-holder container-fluid\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Subjects</li>
                </ul>
            </div>
            <!-- Forms Section-->

            {% block container %}

            {% endblock %}

            <!-- Page Footer-->
            <footer class=\"main-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <p>Your company &copy; 2017-2019</p>
                        </div>
                        <div class=\"col-sm-6 text-right\">
                            <p>Design by <a href=\"https://bootstrapious.com/p/admin-template\" class=\"external\">Bootstrapious</a></p>
                            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src=\"{{ asset('bundles/vendor/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset('bundles/vendor/popper.js/umd/popper.min.js')}}\"> </script>
<script src=\"{{ asset('bundles/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('bundles/vendor/jquery.cookie/jquery.cookie.js')}}\"> </script>
<script src=\"{{ asset('bundles/vendor/chart.js/Chart.min.js')}}\"></script>
<script src=\"{{ asset('bundles/vendor/jquery-validation/jquery.validate.min.js')}}\"></script>
<!-- Main File-->
<script src=\"{{ asset('bundles/js/front.js')}}\"></script>
</body>
</html>", "back.html.twig", "/home/wael/34/binder/app/Resources/views/back.html.twig");
    }
}

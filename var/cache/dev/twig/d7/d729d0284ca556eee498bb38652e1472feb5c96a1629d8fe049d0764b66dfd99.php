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

/* baseback.html.twig */
class __TwigTemplate_2bb03c5ca4c2923e32fcea3af8327cf6b8030952bcdf8759e5bf61dde946e35e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_home");
        echo "\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>BIND</span><strong>ER</strong></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                        <!-- Search-->
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
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                            <ul aria-labelledby=\"languages\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/flags/16/DE.png"), "html", null, true);
        echo "\" alt=\"English\" class=\"mr-2\">German</a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/flags/16/FR.png"), "html", null, true);
        echo "\" alt=\"English\" class=\"mr-2\">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->

                        <li class=\"nav-item\"><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "
                            \" class=\"nav-link logout\">
                                <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
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
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/image1.png"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">";
        // line 122
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 123
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo "

                        ";
        } else {
            // line 126
            echo "                            ";
            // line 127
            echo "                        ";
        }
        echo "</a>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">

                <li><a href=\"#classe\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i ></i>Classes </a>
                    <ul id=\"classe\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 135
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_add");
        echo "\">Insert Class</a></li>
                        <li><a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_read");
        echo "\">List of Classes</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTable\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i ></i>Time Table </a>
                    <ul id=\"timeTable\" class=\"collapse list-unstyled \">
                        <li><a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_addTimeTable");
        echo "\">Insert Time Table</a></li>
                        <li><a href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_searchTimeTable");
        echo "\">Search Time Table</a></li>
                        <li><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_createTtable");
        echo "\">Create Time Table</a></li>
                        <li><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_Ttime");
        echo "\">Convert Time Table to pdf</a></li>

                        <li><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_searchTtime");
        echo "\">Search Session</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("charts.html"), "html", null, true);
        echo "\"> <i ></i>Charts </a></li>
                <li><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("forms.html"), "html", null, true);
        echo "\"> <i class=\"icon-padnote\"></i>Forms </a></li>





                <li><a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login.html"), "html", null, true);
        echo "\"> <i class=\"icon-interface-windows\"></i>Login page </a></li>
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

            <!-- Dashboard Counts Section-->
            <center>
            ";
        // line 171
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "            </center>
            <!-- Dashboard Header Section    -->


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

";
        // line 195
        $this->displayBlock('javascripts', $context, $blocks);
        // line 206
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 171
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 172
        echo "           ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 196
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/charts-home.js"), "html", null, true);
        echo "\"></script>
<!-- Main File-->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/front.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 204,  393 => 202,  389 => 201,  385 => 200,  381 => 199,  377 => 198,  373 => 197,  368 => 196,  359 => 195,  349 => 172,  340 => 171,  329 => 206,  327 => 195,  303 => 173,  301 => 171,  284 => 157,  275 => 151,  271 => 150,  265 => 147,  260 => 145,  256 => 144,  252 => 143,  248 => 142,  239 => 136,  235 => 135,  223 => 127,  221 => 126,  214 => 123,  212 => 122,  207 => 120,  191 => 107,  183 => 102,  179 => 101,  167 => 92,  159 => 87,  151 => 82,  110 => 44,  89 => 26,  85 => 25,  80 => 23,  75 => 21,  70 => 19,  65 => 17,  60 => 15,  55 => 13,  50 => 11,  38 => 1,);
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
                        <!-- Navbar Brand --><a href=\"{{path('class_home')}}\" class=\"navbar-brand d-none d-sm-inline-block\">
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>BIND</span><strong>ER</strong></div>
                            <div class=\"brand-text d-none d-sm-inline-block d-lg-none\"><strong>BD</strong></div></a>
                        <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                    </div>
                    <!-- Navbar Menu -->
                    <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                        <!-- Search-->
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
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('imgg/avatar-1.jpg') }}\" alt=\"\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Jason Doe</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('imgg/avatar-2.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Frank Williams</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item d-flex\">
                                        <div class=\"msg-profile\"> <img src=\"{{ asset('imgg/avatar-3.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                                        <div class=\"msg-body\">
                                            <h3 class=\"h5\">Ashley Wood</h3><span>Sent You Message</span>
                                        </div></a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item all-notifications text-center\"> <strong>Read all messages   </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                            <ul aria-labelledby=\"languages\" class=\"dropdown-menu\">
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"{{ asset('imgg/flags/16/DE.png') }}\" alt=\"English\" class=\"mr-2\">German</a></li>
                                <li><a rel=\"nofollow\" href=\"#\" class=\"dropdown-item\"> <img src=\"{{ asset('imgg/flags/16/FR.png') }}\" alt=\"English\" class=\"mr-2\">French                                         </a></li>
                            </ul>
                        </li>
                        <!-- Logout    -->

                        <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_logout') }}
                            \" class=\"nav-link logout\">
                                <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
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
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}

                        {% else %}
                            {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
                        {% endif %}</a>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">

                <li><a href=\"#classe\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i ></i>Classes </a>
                    <ul id=\"classe\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('class_add') }}\">Insert Class</a></li>
                        <li><a href=\"{{ path('class_read') }}\">List of Classes</a></li>
                    </ul>
                </li>

                <li><a href=\"#timeTable\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i ></i>Time Table </a>
                    <ul id=\"timeTable\" class=\"collapse list-unstyled \">
                        <li><a href=\"{{ path('class_addTimeTable') }}\">Insert Time Table</a></li>
                        <li><a href=\"{{ path('class_searchTimeTable') }}\">Search Time Table</a></li>
                        <li><a href=\"{{ path('class_createTtable') }}\">Create Time Table</a></li>
                        <li><a href=\"{{ path('class_Ttime') }}\">Convert Time Table to pdf</a></li>

                        <li><a href=\"{{ path('class_searchTtime') }}\">Search Session</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ asset('charts.html') }}\"> <i ></i>Charts </a></li>
                <li><a href=\"{{ asset('forms.html') }}\"> <i class=\"icon-padnote\"></i>Forms </a></li>





                <li><a href=\"{{ asset('login.html') }}\"> <i class=\"icon-interface-windows\"></i>Login page </a></li>
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

            <!-- Dashboard Counts Section-->
            <center>
            {% block content %}
           {% endblock %}
            </center>
            <!-- Dashboard Header Section    -->


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
</html>", "baseback.html.twig", "C:\\XAMPP\\htdocs\\Binder\\app\\Resources\\views\\baseback.html.twig");
    }
}

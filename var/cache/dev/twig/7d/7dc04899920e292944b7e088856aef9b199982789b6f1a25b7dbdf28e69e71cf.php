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

/* table.html.twig */
class __TwigTemplate_6587e2693cb8ef17f74719dbefa7c457a9648e4b443d275417448ab485339ed4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "table.html.twig"));

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
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>Bootstrap </span><strong>Dashboard</strong></div>
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
                        <li class=\"nav-item\"><a href=\"login.html\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">
                <li><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>
                <li class=\"active\"><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tables </a></li>
                <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Charts </a></li>
                <li><a href=\"forms.html\"> <i class=\"icon-padnote\"></i>Forms </a></li>
                <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-interface-windows\"></i>Example dropdown </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"#\">Page</a></li>
                        <li><a href=\"#\">Page</a></li>
                        <li><a href=\"#\">Page</a></li>
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
                    <h2 class=\"no-margin-bottom\">Tables</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-holder container-fluid\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Tables</li>
                </ul>
            </div>
            <section class=\"tables\">
                <div class=\"container-fluid\">
                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-close\">
                                    <div class=\"dropdown\">
                                        <button type=\"button\" id=\"closeCard2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                                        <div aria-labelledby=\"closeCard2\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class=\"card-header d-flex align-items-center\">
                                    <h3 class=\"h4\">Striped Table</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope=\"row\">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter                            </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
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
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/popper.js/umd/popper.min.js\"> </script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"vendor/jquery.cookie/jquery.cookie.js\"> </script>
<script src=\"vendor/chart.js/Chart.min.js\"></script>
<script src=\"vendor/jquery-validation/jquery.validate.min.js\"></script>
<!-- Main File-->
<script src=\"js/front.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 119,  171 => 104,  167 => 103,  154 => 93,  146 => 88,  138 => 83,  75 => 23,  70 => 21,  65 => 19,  58 => 15,  53 => 13,  48 => 11,  36 => 1,);
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
                            <div class=\"brand-text d-none d-lg-inline-block\"><span>Bootstrap </span><strong>Dashboard</strong></div>
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
                        <li class=\"nav-item\"><a href=\"login.html\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
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
                <div class=\"avatar\"><img src=\"{{ asset('bundles/img/avatar-1.jpg')}}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
                <div class=\"title\">
                    <h1 class=\"h4\">Mark Stephen</h1>
                    <p>Web Designer</p>
                </div>
            </div>
            <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
            <ul class=\"list-unstyled\">
                <li><a href=\"index.html\"> <i class=\"icon-home\"></i>Home </a></li>
                <li class=\"active\"><a href=\"tables.html\"> <i class=\"icon-grid\"></i>Tables </a></li>
                <li><a href=\"charts.html\"> <i class=\"fa fa-bar-chart\"></i>Charts </a></li>
                <li><a href=\"forms.html\"> <i class=\"icon-padnote\"></i>Forms </a></li>
                <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"> <i class=\"icon-interface-windows\"></i>Example dropdown </a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse list-unstyled \">
                        <li><a href=\"#\">Page</a></li>
                        <li><a href=\"#\">Page</a></li>
                        <li><a href=\"#\">Page</a></li>
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
                    <h2 class=\"no-margin-bottom\">Tables</h2>
                </div>
            </header>
            <!-- Breadcrumb-->
            <div class=\"breadcrumb-holder container-fluid\">
                <ul class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Tables</li>
                </ul>
            </div>
            <section class=\"tables\">
                <div class=\"container-fluid\">
                    <div class=\"row\">

                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-close\">
                                    <div class=\"dropdown\">
                                        <button type=\"button\" id=\"closeCard2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" class=\"dropdown-toggle\"><i class=\"fa fa-ellipsis-v\"></i></button>
                                        <div aria-labelledby=\"closeCard2\" class=\"dropdown-menu dropdown-menu-right has-shadow\"><a href=\"#\" class=\"dropdown-item remove\"> <i class=\"fa fa-times\"></i>Close</a><a href=\"#\" class=\"dropdown-item edit\"> <i class=\"fa fa-gear\"></i>Edit</a></div>
                                    </div>
                                </div>
                                <div class=\"card-header d-flex align-items-center\">
                                    <h3 class=\"h4\">Striped Table</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope=\"row\">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope=\"row\">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter                            </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
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
<script src=\"vendor/jquery/jquery.min.js\"></script>
<script src=\"vendor/popper.js/umd/popper.min.js\"> </script>
<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"vendor/jquery.cookie/jquery.cookie.js\"> </script>
<script src=\"vendor/chart.js/Chart.min.js\"></script>
<script src=\"vendor/jquery-validation/jquery.validate.min.js\"></script>
<!-- Main File-->
<script src=\"js/front.js\"></script>
</body>
</html>", "table.html.twig", "/home/wael/34/binder/app/Resources/views/table.html.twig");
    }
}

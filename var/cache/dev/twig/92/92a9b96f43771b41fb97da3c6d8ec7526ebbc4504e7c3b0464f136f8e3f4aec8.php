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

/* login.html.twig */
class __TwigTemplate_a48a1543cfed9f89318127a0c0f9ede71e4ab34a5e19b1846c5a8eceb80b7ddc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

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
<div class=\"page login-page\">
    <div class=\"container d-flex align-items-center\">
        <div class=\"form-holder has-shadow\">
            <div class=\"row\">
                <!-- Logo & Information Panel-->
                <div class=\"col-lg-6\">
                    <div class=\"info d-flex align-items-center\">
                        <div class=\"content\">
                            <div class=\"logo\">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class=\"col-lg-6 bg-white\">
                    <div class=\"form d-flex align-items-center\">
                        <div class=\"content\">
                            <form method=\"post\" class=\"form-validate\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                                    <label for=\"username\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username"), "html", null, true);
        echo "</label>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                                    <label for=\"password\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password"), "html", null, true);
        echo "</label>
                                </div><a type=\"password \"id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show-courses");
        echo "\" class=\"btn btn-primary\">Login</a>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form><a href=\"#\" class=\"forgot-pass\">Forgot Password?</a><br><small>Do not have an account? </small><a href=\"register.html\" class=\"signup\">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyrights text-center\">
        <p>Design by <a href=\"https://bootstrapious.com/p/admin-template\" class=\"external\">Bootstrapious</a>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
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
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 56,  116 => 55,  109 => 51,  105 => 50,  75 => 23,  70 => 21,  65 => 19,  58 => 15,  53 => 13,  48 => 11,  36 => 1,);
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
<div class=\"page login-page\">
    <div class=\"container d-flex align-items-center\">
        <div class=\"form-holder has-shadow\">
            <div class=\"row\">
                <!-- Logo & Information Panel-->
                <div class=\"col-lg-6\">
                    <div class=\"info d-flex align-items-center\">
                        <div class=\"content\">
                            <div class=\"logo\">
                                <h1>Dashboard</h1>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class=\"col-lg-6 bg-white\">
                    <div class=\"form d-flex align-items-center\">
                        <div class=\"content\">
                            <form method=\"post\" class=\"form-validate\">
                                <div class=\"form-group\">
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                                </div><a type=\"password \"id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" href=\"{{ path('show-courses') }}\" class=\"btn btn-primary\">Login</a>
                                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                            </form><a href=\"#\" class=\"forgot-pass\">Forgot Password?</a><br><small>Do not have an account? </small><a href=\"register.html\" class=\"signup\">Signup</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyrights text-center\">
        <p>Design by <a href=\"https://bootstrapious.com/p/admin-template\" class=\"external\">Bootstrapious</a>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
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
</html>", "login.html.twig", "/home/wael/34/binder/app/Resources/views/login.html.twig");
    }
}

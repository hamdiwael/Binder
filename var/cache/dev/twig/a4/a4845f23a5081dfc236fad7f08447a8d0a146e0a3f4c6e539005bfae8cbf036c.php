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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_3d723e31425f4bc6c3aa46773885131538208b0a04f3a7a2da4eb54b267be4a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Bootstrap Material Admin by Bootstrapious.com</title>
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"robots\" content=\"all,follow\">
<!-- Bootstrap CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Font Awesome CSS-->
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<!-- Fontastic Custom icon font-->
<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontastic.css"), "html", null, true);
        echo "\">
<!-- Google fonts - Poppins -->
<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,700"), "html", null, true);
        echo "\">
<!-- theme stylesheet-->
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/style.default.css\" id=\"theme-stylesheet"), "html", null, true);
        echo "\">
<!-- Custom stylesheet - for your changes-->
<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/custom.css"), "html", null, true);
        echo "\">
<!-- Favicon-->
<link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
<!-- Tweaks for older IEs--><!--[if lt IE 9]>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script><![endif]-->
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
                            <form action=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                ";
        // line 51
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 52
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                ";
        }
        // line 54
        echo "
                                <label for=\"username\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />

                                <label for=\"password\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>

                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                            </form>
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
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<!-- Main File-->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/front.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 86,  194 => 84,  190 => 83,  186 => 82,  182 => 81,  178 => 80,  174 => 79,  156 => 64,  151 => 62,  144 => 58,  139 => 56,  135 => 55,  132 => 54,  126 => 52,  124 => 51,  120 => 50,  95 => 28,  91 => 27,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  61 => 15,  56 => 13,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Bootstrap Material Admin by Bootstrapious.com</title>
<meta name=\"description\" content=\"\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"robots\" content=\"all,follow\">
<!-- Bootstrap CSS-->
<link rel=\"stylesheet\" href=\"{{ asset('vendorr/bootstrap/css/bootstrap.min.css')}}\">
<!-- Font Awesome CSS-->
<link rel=\"stylesheet\" href=\"{{ asset('vendorr/font-awesome/css/font-awesome.min.css')}}\">
<!-- Fontastic Custom icon font-->
<link rel=\"stylesheet\" href=\"{{ asset('css/fontastic.css')}}\">
<!-- Google fonts - Poppins -->
<link rel=\"stylesheet\" href=\"{{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,700')}}\">
<!-- theme stylesheet-->
<link rel=\"stylesheet\" href=\"{{ asset('csss/style.default.css\" id=\"theme-stylesheet')}}\">
<!-- Custom stylesheet - for your changes-->
<link rel=\"stylesheet\" href=\"{{ asset('csss/custom.css')}}\">
<!-- Favicon-->
<link rel=\"shortcut icon\" href=\"{{ asset('img/favicon.ico')}}\">
<!-- Tweaks for older IEs--><!--[if lt IE 9]>
<script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}\"></script>
<script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script><![endif]-->
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
                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                {% endif %}

                                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

                                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                            </form>
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
<script src=\"{{ asset('vendorr/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset('vendorr/popper.js/umd/popper.min.js')}}\"> </script>
<script src=\"{{ asset('vendorr/bootstrap/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('vendorr/jquery.cookie/jquery.cookie.js')}}\"> </script>
<script src=\"{{ asset('vendorr/chart.js/Chart.min.js')}}\"></script>
<script src=\"{{ asset('vendorr/jquery-validation/jquery.validate.min.js')}}\"></script>
<!-- Main File-->
<script src=\"{{ asset('js/front.js')}}\"></script>
</body>
</html>
{#<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
#}", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\Binder\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}

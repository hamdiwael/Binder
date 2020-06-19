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
class __TwigTemplate_6a278ceed8e55552a965a2866d61ad9a830a5e0da40af2d9c600e13d1d7eaf75 extends \Twig\Template
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
    <link rel=\"stylesheet\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"  ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\" ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/fontastic.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,700"), "html", null, true);
        echo "\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\" ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/style.default.css\" id=\"theme-stylesheet"), "html", null, true);
        echo "\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\" ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imgg/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\" ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\" ";
        // line 31
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
                                <h1>Binder</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class=\"col-lg-6 bg-white\">
                    <div class=\"form d-flex align-items-center\">
                        <div class=\"content\">
                            <form method=\"post\" class=\"form-validate\"  action=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\">
                                ";
        // line 54
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 55
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                                ";
        }
        // line 57
        echo "                                <div class=\"form-group\">
                                    <input id=\"username\" type=\"text\" name=\"_username\" required data-msg=\"Please enter your username\" class=\"input-material\"  value=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\">
                                    <label for=\"username\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo ">User Name</label>
                                </div>
                                <div class=\"form-group\">
                                    <input id=\"password\" type=\"password\" name=\"_password\" required data-msg=\"Please enter your password\" class=\"input-material\" required=\"required\" autocomplete=\"current-password\">
                                    <label for=\"password\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo " >Password</label>
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                                    <!-- This should be submit button but I replaced it with <a> for demo purposes--></div>
                            </form><a href=\"#\" class=\"forgot-pass\">Forgot Password?</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyrights text-center\">

            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
    </div>
</div>
<!-- JavaScript files-->
<script src=\" ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\" ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\" ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendorr/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<!-- Main File-->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/front.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        // line 106
        echo "
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
        return array (  203 => 106,  197 => 87,  192 => 85,  188 => 84,  184 => 83,  180 => 82,  176 => 81,  172 => 80,  153 => 64,  149 => 63,  142 => 59,  138 => 58,  135 => 57,  129 => 55,  127 => 54,  123 => 53,  98 => 31,  94 => 30,  89 => 28,  84 => 26,  79 => 24,  74 => 22,  69 => 20,  64 => 18,  59 => 16,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
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
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\" {{ asset ('vendorr/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"  {{ asset ('vendorr/font-awesome/css/font-awesome.min.css')}}\">
    <!-- Fontastic Custom icon font-->
    <link rel=\"stylesheet\" href=\" {{ asset ('csss/fontastic.css')}}\">
    <!-- Google fonts - Poppins -->
    <link rel=\"stylesheet\" href=\" {{ asset ('https://fonts.googleapis.com/css?family=Poppins:300,400,700')}}\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\" {{ asset ('csss/style.default.css\" id=\"theme-stylesheet')}}\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\" {{ asset ('csss/custom.css')}}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\" {{ asset ('imgg/favicon.ico')}}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src=\" {{ asset ('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}\"></script>
    <script src=\" {{ asset ('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}\"></script><![endif]-->
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
                                <h1>Binder</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class=\"col-lg-6 bg-white\">
                    <div class=\"form d-flex align-items-center\">
                        <div class=\"content\">
                            <form method=\"post\" class=\"form-validate\"  action=\"{{ path(\"fos_user_security_check\") }}\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                {% endif %}
                                <div class=\"form-group\">
                                    <input id=\"username\" type=\"text\" name=\"_username\" required data-msg=\"Please enter your username\" class=\"input-material\"  value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\">
                                    <label for=\"username\"{{ 'security.login.username'|trans }}>User Name</label>
                                </div>
                                <div class=\"form-group\">
                                    <input id=\"password\" type=\"password\" name=\"_password\" required data-msg=\"Please enter your password\" class=\"input-material\" required=\"required\" autocomplete=\"current-password\">
                                    <label for=\"password\"{{ 'security.login.password'|trans }} >Password</label>
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                                    <!-- This should be submit button but I replaced it with <a> for demo purposes--></div>
                            </form><a href=\"#\" class=\"forgot-pass\">Forgot Password?</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyrights text-center\">

            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
    </div>
</div>
<!-- JavaScript files-->
<script src=\" {{ asset ('vendorr/jquery/jquery.min.js')}}\"></script>
<script src=\" {{ asset ('vendorr/popper.js/umd/popper.min.js')}}\"> </script>
<script src=\" {{ asset ('vendorr/bootstrap/js/bootstrap.min.js')}}\"></script>
<script src=\" {{ asset ('vendorr/jquery.cookie/jquery.cookie.js')}}\"> </script>
<script src=\"{{ asset ('vendorr/chart.js/Chart.min.js')}}\"></script>
<script src=\"{{ asset ('vendorr/jquery-validation/jquery.validate.min.js')}}\"></script>
<!-- Main File-->
<script src=\"{{ asset ('jss/front.js')}}\"></script>
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
</form>#}

", "@FOSUser/Security/login_content.html.twig", "/home/wael/34/finalweb/Binder/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}

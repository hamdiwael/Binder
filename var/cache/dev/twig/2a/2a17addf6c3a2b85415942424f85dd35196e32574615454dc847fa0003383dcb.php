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
class __TwigTemplate_aa87e8e5c85c8d08758ee5f2a677ce55b5b5cf9939202ef339d2fea43e890ac4 extends \Twig\Template
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
        // line 85
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 86
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 87
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 89
        echo "
    <label for=\"username\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />

    <label for=\"password\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
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
        return array (  84 => 99,  79 => 97,  72 => 93,  67 => 91,  63 => 90,  60 => 89,  54 => 87,  52 => 86,  47 => 85,  41 => 4,  39 => 3,  36 => 2,);
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
{#<meta charset=\"utf-8\">
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
</html>#}
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
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\Binder\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}

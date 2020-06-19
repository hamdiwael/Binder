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

/* @Bin/notification/listFront.html.twig */
class __TwigTemplate_711931ca8a98d563c0df1569baa13aa27d3f0543edc85ab4cb523ef077affefd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/notification/listFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/notification/listFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bin/notification/listFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image:\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/images/bg_2.jpg"), "html", null, true);
        echo "\";\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">List of notifications</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check notifications <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
    </section>
<div class=\"container\">

<table class=\"table table-striped\" >

        <thead>
            <th>Category</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Content</th>

            <th></th>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notification"] ?? $this->getContext($context, "notification")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "category", []), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "sender", []), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "receiver", []), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", []), "html", null, true);
            echo "</td>
                <td>
                <td><a  class =\"btn btn-primary btn-md\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("traitnot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">Treat</a>
                <a  class =\"btn btn-success btn-md\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shownot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">Details</a></td>



            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/notification/listFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  116 => 35,  112 => 34,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  92 => 28,  88 => 27,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image:\"{{ asset('web/images/bg_2.jpg') }}\";\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">List of notifications</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check notifications <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
    </section>
<div class=\"container\">

<table class=\"table table-striped\" >

        <thead>
            <th>Category</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Content</th>

            <th></th>
        </thead>
        <tbody>
        {% for n in notification %}
            <tr>
                <td>{{ n.category }}</td>
                <td>{{ n.sender }}</td>
                <td>{{ n.receiver }}</td>
                <td>{{ n.content}}</td>
                <td>
                <td><a  class =\"btn btn-primary btn-md\" href=\"{{ path('traitnot',{\"id\":n.id}) }}\">Treat</a>
                <a  class =\"btn btn-success btn-md\" href=\"{{ path('shownot',{\"id\":n.id}) }}\">Details</a></td>



            </tr>
        {% endfor %}
        </tbody>
</table>
{% endblock %}



", "@Bin/notification/listFront.html.twig", "/home/wael/34/finalweb/Binder/src/BinBundle/Resources/views/notification/listFront.html.twig");
    }
}

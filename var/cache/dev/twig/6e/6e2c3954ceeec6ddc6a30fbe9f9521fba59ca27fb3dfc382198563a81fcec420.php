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

/* @Club/Club/displayClubFront.html.twig */
class __TwigTemplate_a06c815c3a2751d84030a0c12babc4536c746a63748406e9c5cd3ca4a13dba4d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/displayClubFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/displayClubFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Club/Club/displayClubFront.html.twig", 1);
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
        echo "        <section class=\"hero-wrap hero-wrap-2\" style=\"background-image:\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/images/bg_2.jpg"), "html", null, true);
        echo "\";\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                <div class=\"col-md-9 ftco-animate text-center\">
                    <h1 class=\"mb-2 bread\">List of clubs</h1>
                    <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check clubs <i class=\"ion-ios-arrow-forward\"></i></span></p>
                </div>
            </div>
        </div>
        </section>
<br/>
    <br/>


    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["club"] ?? $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 19
            echo "<div class=\"container centered\">

        <div class=\"col-md-10 course d-lg-flex ftco-animate\">

            <div class=\"text bg-light p-4\">
                <h3><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clubDetailsfront", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", []), "html", null, true);
            echo "</a></h3>
                <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "specialty", []), "html", null, true);
            echo "</p>
            </div>
        </div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Club/displayClubFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  96 => 25,  90 => 24,  83 => 19,  79 => 18,  60 => 3,  51 => 2,  29 => 1,);
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
                    <h1 class=\"mb-2 bread\">List of clubs</h1>
                    <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check clubs <i class=\"ion-ios-arrow-forward\"></i></span></p>
                </div>
            </div>
        </div>
        </section>
<br/>
    <br/>


    {% for c in club %}
<div class=\"container centered\">

        <div class=\"col-md-10 course d-lg-flex ftco-animate\">

            <div class=\"text bg-light p-4\">
                <h3><a href=\"{{path('clubDetailsfront',{'id':c.id})}}\">{{c.name}}</a></h3>
                <p>{{c.specialty}}</p>
            </div>
        </div></div>
    {% endfor %}



{% endblock %}", "@Club/Club/displayClubFront.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\ClubBundle\\Resources\\views\\Club\\displayClubFront.html.twig");
    }
}

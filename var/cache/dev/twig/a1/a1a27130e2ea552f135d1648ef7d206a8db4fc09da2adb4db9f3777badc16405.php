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

/* @Club/Club/clubdetailfront.html.twig */
class __TwigTemplate_8169ee6012146c912fe7afbc26e0c69f174fab42f54ef653c2d6b415ede483c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'section' => [$this, 'block_section'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/clubdetailfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/clubdetailfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Club/Club/clubdetailfront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_section($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 3
        echo "
        <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/bg_2.jpg"), "html", null, true);
        echo "');\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                    <div class=\"col-md-9 ftco-animate text-center\">
                        <h1 class=\"mb-2 bread\">Our clubs</h1>
                        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Library <i class=\"ion-ios-arrow-forward\"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "

    ";
        // line 19
        $context["urlc"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []);
        // line 20
        echo "

    ";
        // line 22
        $context["long"] = twig_length_filter($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")));
        // line 23
        echo "
    ";
        // line 24
        $context["res"] = twig_slice($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")), 33, ($context["long"] ?? $this->getContext($context, "long")));
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
            // line 27
            echo "        <center>


        <h1>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "name", []), "html", null, true);
            echo "</h1>
        <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "specialty", []), "html", null, true);
            echo "</p>
    ";
        }
        // line 33
        echo "    <br><br><br><br><br>


    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? $this->getContext($context, "activities")));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 37
            echo "    ";
            if (($this->getAttribute($this->getAttribute($context["activity"], "club", []), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
                // line 38
                echo "
        <div class=\"col-md-6 course d-lg-flex ftco-animate\">
            <div class=\"text bg-light p-4\">
                <h3><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("activityDetailsFront", ["id" => $this->getAttribute($context["activity"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "about", []), "html", null, true);
                echo "</a></h3>
                <p>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "location", []), "html", null, true);
                echo "</p>
                <p>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "date", [])), "html", null, true);
                echo "</p>
                <p>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "duration", []), "html", null, true);
                echo "</p>
            </div>
        </div>

    ";
            }
            // line 49
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Club/clubdetailfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 50,  170 => 49,  162 => 44,  158 => 43,  154 => 42,  148 => 41,  143 => 38,  140 => 37,  136 => 36,  131 => 33,  126 => 31,  122 => 30,  117 => 27,  115 => 26,  112 => 25,  110 => 24,  107 => 23,  105 => 22,  101 => 20,  99 => 19,  95 => 17,  86 => 16,  64 => 4,  61 => 3,  52 => 2,  30 => 1,);
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
    {% block section %}

        <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{asset('Front/images/bg_2.jpg')}}');\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                    <div class=\"col-md-9 ftco-animate text-center\">
                        <h1 class=\"mb-2 bread\">Our clubs</h1>
                        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Library <i class=\"ion-ios-arrow-forward\"></i></span></p>
                    </div>
                </div>
            </div>
        </section>
    {% endblock %}
{% block content %}


    {% set urlc= app.request.uri %}


    {% set long = urlc|length %}

    {% set res=  urlc|slice(33, long) %}

    {% if club.id == res %}
        <center>


        <h1>{{ club.name }}</h1>
        <p>{{ club.specialty }}</p>
    {% endif %}
    <br><br><br><br><br>


    {% for activity in activities %}
    {% if activity.club.id == res %}

        <div class=\"col-md-6 course d-lg-flex ftco-animate\">
            <div class=\"text bg-light p-4\">
                <h3><a href=\"{{path('activityDetailsFront',{'id':activity.id})}}\">{{activity.about}}</a></h3>
                <p>{{activity.location}}</p>
                <p>{{activity.date|date}}</p>
                <p>{{activity.duration}}</p>
            </div>
        </div>

    {% endif %}
    {% endfor %}


{% endblock %}", "@Club/Club/clubdetailfront.html.twig", "/home/wael/34/finalweb/Binder/src/ClubBundle/Resources/views/Club/clubdetailfront.html.twig");
    }
}

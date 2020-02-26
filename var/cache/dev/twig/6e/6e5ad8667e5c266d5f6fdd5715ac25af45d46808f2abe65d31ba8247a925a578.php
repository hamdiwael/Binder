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

/* @Club/Club/activitydetailfront.html.twig */
class __TwigTemplate_3539a1e3aa93dae2bdd488c89a6f40dc3cae61fd2ca4f488bf1c4c96284d5a01 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/activitydetailfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/activitydetailfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Club/Club/activitydetailfront.html.twig", 1);
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
        // line 18
        $context["urlc"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []);
        // line 19
        echo "

        ";
        // line 21
        $context["long"] = twig_length_filter($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")));
        // line 22
        echo "
        ";
        // line 23
        $context["res"] = twig_slice($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")), 33, ($context["long"] ?? $this->getContext($context, "long")));
        // line 24
        echo "
        ";
        // line 25
        if (($this->getAttribute(($context["activity"] ?? $this->getContext($context, "activity")), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
            // line 26
            echo "            <center>

      <p><h1>Activity Detail</h1></p>
            <h1>About : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? $this->getContext($context, "activity")), "about", []), "html", null, true);
            echo "</h1>
            <p>Location : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? $this->getContext($context, "activity")), "location", []), "html", null, true);
            echo "</p>
        ";
        }
        // line 32
        echo "        <br><br><br><br><br>
        ";
        // line 33
        $context["urlc"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []);
        // line 34
        echo "        ";
        $context["long"] = twig_length_filter($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")));
        // line 35
        echo "        ";
        $context["res"] = twig_slice($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")), 33, ($context["long"] ?? $this->getContext($context, "long")));
        // line 36
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentaires"] ?? $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 37
            echo "            ";
            if (($this->getAttribute($this->getAttribute($context["commentaire"], "activity", []), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
                // line 38
                echo "

                <div class=\"comment-body\">
                    <h3>samar</h3>
                    <div   class=\"meta mb-2\">";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commentaire"], "datecreate", [])), "html", null, true);
                echo "</div>

                    <p>


                        ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "contenue", []), "html", null, true);
                echo "

                    </p>

                </div>


            ";
            }
            // line 55
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        <div class=\"comment-form-wrap pt-5\">
            <h3 class=\"mb-5 h4 font-weight-bold\">Leave a comment</h3>
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Club/activitydetailfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  180 => 56,  174 => 55,  163 => 47,  155 => 42,  149 => 38,  146 => 37,  141 => 36,  138 => 35,  135 => 34,  133 => 33,  130 => 32,  125 => 30,  121 => 29,  116 => 26,  114 => 25,  111 => 24,  109 => 23,  106 => 22,  104 => 21,  100 => 19,  98 => 18,  95 => 17,  86 => 16,  64 => 4,  61 => 3,  52 => 2,  30 => 1,);
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

        {% if activity.id == res %}
            <center>

      <p><h1>Activity Detail</h1></p>
            <h1>About : {{ activity.about }}</h1>
            <p>Location : {{ activity.location }}</p>
        {% endif %}
        <br><br><br><br><br>
        {% set urlc= app.request.uri %}
        {% set long = urlc|length %}
        {% set res=  urlc|slice(33, long) %}
        {% for commentaire in commentaires %}
            {% if commentaire.activity.id == res %}


                <div class=\"comment-body\">
                    <h3>samar</h3>
                    <div   class=\"meta mb-2\">{{ commentaire.datecreate|date }}</div>

                    <p>


                        {{commentaire.contenue}}

                    </p>

                </div>


            {% endif %}
        {% endfor %}
        <div class=\"comment-form-wrap pt-5\">
            <h3 class=\"mb-5 h4 font-weight-bold\">Leave a comment</h3>
            {{form(form)}}

        </div>
{% endblock %}", "@Club/Club/activitydetailfront.html.twig", "C:\\xampp\\htdocs\\Pidev4\\src\\ClubBundle\\Resources\\views\\Club\\activitydetailfront.html.twig");
    }
}

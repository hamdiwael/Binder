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

/* @Bin/abscense/listFront.html.twig */
class __TwigTemplate_e1c17b5964432386562a3c7c89b3b19e10fc5e7b7f6310393978a4344dc4b857 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/listFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/listFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bin/abscense/listFront.html.twig", 1);
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
                <h1 class=\"mb-2 bread\">List of absences</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check absences <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
    </section>


<div class=\"container\">

    <center><h3> </h3></center>

    <center><table class=\"table table-striped\"  >
            <thead>

            <th>Pupil</th>
            <th>Class</th>
            <th>Number of absences</th>
            <th>Date</th>
            <th>Subject</th>
            <th></th>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abscense"] ?? $this->getContext($context, "abscense")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 32
            echo "                <tr>

                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "pupl", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "groupe", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nbr", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "subject", []), "html", null, true);
            echo "</td>
                        <td><a  class =\"btn btn-primary btn-md\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showab", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">Details</a>
                    <a  class =\"btn btn-success btn-md\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calabs", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">Calendar</a></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>

        </table></center>






</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/abscense/listFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 32,  92 => 31,  60 => 3,  51 => 2,  29 => 1,);
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
                <h1 class=\"mb-2 bread\">List of absences</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check absences <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
    </section>


<div class=\"container\">

    <center><h3> </h3></center>

    <center><table class=\"table table-striped\"  >
            <thead>

            <th>Pupil</th>
            <th>Class</th>
            <th>Number of absences</th>
            <th>Date</th>
            <th>Subject</th>
            <th></th>
            </thead>
            <tbody>
            {% for a in abscense %}
                <tr>

                    <td>{{ a.pupl }}</td>
                    <td>{{ a.groupe }}</td>
                    <td>{{ a.nbr }}</td>
                    <td>{{ a.date }}</td>
                    <td>{{ a.subject}}</td>
                        <td><a  class =\"btn btn-primary btn-md\" href=\"{{ path('showab',{\"id\":a.id}) }}\">Details</a>
                    <a  class =\"btn btn-success btn-md\" href=\"{{ path('calabs',{\"id\":a.id}) }}\">Calendar</a></td>

                </tr>
            {% endfor %}
            </tbody>

        </table></center>






</div>

{% endblock %}", "@Bin/abscense/listFront.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\BinBundle\\Resources\\views\\abscense\\listFront.html.twig");
    }
}

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

/* @Exams\grade\listforback.html.twig */
class __TwigTemplate_0fd9a1ee1bbda57fecbd29364dccdb0cec6f2041aed0090ed8c0512a4c127262 extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\grade\\listforback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\grade\\listforback.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Exams\\grade\\listforback.html.twig", 1);
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
        echo "    <section>
    <div class=\"row justify-content-center mb-5 pb-2 \">
    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('web/images/bg_2.jpg');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
    <div class=\"col-md-9 ftco-animate text-center\">

    <h1>List of grades</h1>
        <br/><br/>
        <div class=table-responsive\">
            <table class=\"table-hover table\"  border=\"1\">
                    <tr>

                        <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "subject", "ex.idExam.subject");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "teacher", "ex.teacher.fullname");
        echo "</th>
                        <th>";
        // line 22
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "pupil", "ex.pupil.fullname");
        echo "</th>
                        <th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "grade", "ex.grade");
        echo "</th>

                    </tr>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            echo " <tr>

                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "idExam", []), "subject", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "teacher", []), "fullname", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "pupil", []), "fullname", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", []), "html", null, true);
            echo "</td>
                        <td> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updategrades", ["id" => $this->getAttribute($context["grade"], "idg", [])]), "html", null, true);
            echo "\">Update</a></td>
                        <td> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletegrades", ["id" => $this->getAttribute($context["grade"], "idg", [])]), "html", null, true);
            echo "\">Delete</a></td>
                    </tr>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " </table>
            <div class=\"navigation\">
                ";
        // line 39
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
            </div></div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams\\grade\\listforback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  135 => 37,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  97 => 26,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block content %}
    <section>
    <div class=\"row justify-content-center mb-5 pb-2 \">
    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('web/images/bg_2.jpg');\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
    <div class=\"col-md-9 ftco-animate text-center\">

    <h1>List of grades</h1>
        <br/><br/>
        <div class=table-responsive\">
            <table class=\"table-hover table\"  border=\"1\">
                    <tr>

                        <th>{{  knp_pagination_sortable(pagination, 'subject', 'ex.idExam.subject') }}</th>
                        <th>{{  knp_pagination_sortable(pagination, 'teacher', 'ex.teacher.fullname') }}</th>
                        <th>{{  knp_pagination_sortable(pagination, 'pupil', 'ex.pupil.fullname') }}</th>
                        <th>{{  knp_pagination_sortable(pagination, 'grade', 'ex.grade') }}</th>

                    </tr>
                    {% for grade in pagination %} <tr>

                        <td>{{ grade.idExam.subject }}</td>
                        <td>{{ grade.teacher.fullname}}</td>
                        <td>{{ grade.pupil.fullname}}</td>
                        <td>{{ grade.grade}}</td>
                        <td> <a href=\"{{ path('updategrades',{'id':grade.idg}) }}\">Update</a></td>
                        <td> <a href=\"{{ path('deletegrades',{'id':grade.idg}) }}\">Delete</a></td>
                    </tr>


                    {% endfor %} </table>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div></div>
        </div>
    </section>

{% endblock %}", "@Exams\\grade\\listforback.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\ExamsBundle\\Resources\\views\\grade\\listforback.html.twig");
    }
}

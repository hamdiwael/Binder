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

/* @Exams/grade/listforback.html.twig */
class __TwigTemplate_99e2747d599ce27ea3675e90bb3cd6917fba8835f967df7b84ebef8fbc7e7ce0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/listforback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/listforback.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Exams/grade/listforback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div style=\"text-align: center;\">
    <h1>List of grades</h1>
    <div>
        <form action=\"\" method=\"get\">
            <label for=\"filter\">Filter</label>
            <input name=\"filter\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-default btn-sm\">Filter Now</button>
        </form>
    </div>

    <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

        <table class=\"table-hover table\"  border=\"1\">
                    <tr>

                        <th>subject</th>
                        <th>teacher</th>
                        <th>pupil</th>
                        <th>grade</th>

                    </tr>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listgrades"] ?? $this->getContext($context, "listgrades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            echo " <tr>

                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "examname", []), "subject", []), "html", null, true);
            echo "</td>
                       <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "teacher", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "pupil", []), "name", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", []), "html", null, true);
            echo "</td>
                        <td> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updategrades", ["id" => $this->getAttribute($context["grade"], "idg", [])]), "html", null, true);
            echo "\" class =\"btn btn-primary btn-sm\">Update</a></td>
                        <td> <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletegrades", ["id" => $this->getAttribute($context["grade"], "idg", [])]), "html", null, true);
            echo "\" class =\"btn btn-warning btn-sm\">Delete</a></td>
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["listgrades"] ?? $this->getContext($context, "listgrades")));
        echo "
            </div></div>
        </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams/grade/listforback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  122 => 37,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  84 => 26,  60 => 4,  51 => 3,  29 => 1,);
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

<div style=\"text-align: center;\">
    <h1>List of grades</h1>
    <div>
        <form action=\"\" method=\"get\">
            <label for=\"filter\">Filter</label>
            <input name=\"filter\" type=\"text\">
            <button type=\"submit\" class=\"btn btn-default btn-sm\">Filter Now</button>
        </form>
    </div>

    <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

        <table class=\"table-hover table\"  border=\"1\">
                    <tr>

                        <th>subject</th>
                        <th>teacher</th>
                        <th>pupil</th>
                        <th>grade</th>

                    </tr>
                    {% for grade in listgrades %} <tr>

                        <td>{{ grade.examname.subject }}</td>
                       <td>{{ grade.teacher}}</td>
                        <td>{{ grade.pupil.name}}</td>
                        <td>{{ grade.grade}}</td>
                        <td> <a href=\"{{ path('updategrades',{'id':grade.idg}) }}\" class =\"btn btn-primary btn-sm\">Update</a></td>
                        <td> <a href=\"{{ path('deletegrades',{'id':grade.idg}) }}\" class =\"btn btn-warning btn-sm\">Delete</a></td>
                    </tr>


                    {% endfor %} </table>
            <div class=\"navigation\">
                {{ knp_pagination_render(listgrades) }}
            </div></div>
        </div>

</div>
{% endblock %}", "@Exams/grade/listforback.html.twig", "/home/wael/34/finalweb/Binder/src/ExamsBundle/Resources/views/grade/listforback.html.twig");
    }
}

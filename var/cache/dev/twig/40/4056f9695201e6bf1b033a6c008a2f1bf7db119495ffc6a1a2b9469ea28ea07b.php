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

/* @Course/course/show.html.twig */
class __TwigTemplate_8489aa14fa0897fe1302224ca68ab47d17971e79aec1523a8ed6164e9ce7bcea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/course/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/course/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Course/course/show.html.twig", 1);
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
        echo "
    <h1 xml:space=\"default\"</h1>

    <div class=\"col-lg-12\">
    <div class=\"card\">
    <div class=\"card-close\">
        <div class=\"dropdown\">
        </div>
    </div>
    <div class=\"card-header d-flex align-items-center\">
        <h3 class=\"h4\"><strong>All courses</strong></h3>
    </div>
    <div class=\"card-body\">
    <div class=\"table-responsive\">
    ";
        // line 17
        if ( !twig_test_empty(($context["courses"] ?? $this->getContext($context, "courses")))) {
            // line 18
            echo "        <table class=\"table-hover\">
            <thead>
            <tr>

                <th>Subject</th>
                <th>Content</th>
                <th>Teacher</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 31
                echo "                <tr>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subject", []), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "content", []), "html", null, true);
                echo "\">Link</a></td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "teacher", []), "html", null, true);
                echo "</td>

                    <td><a class=\"btn btn-danger btn-sm\" href=\"/teacher/delete-course/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
                echo "\">Delete</a></td>
                    <td><a class=\"btn btn-warning btn-sm\" href=\"/teacher/update-course/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
                echo "\">Update</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </tbody>
        </table>
        <a class=\"btn btn-primary btn-sm\" href=\"/teacher/create-course\">Create New</a>

        </div>
        </div>
        </div>
        </div>

        <style>
            th, td {
                padding: 10px;
            }
            th {
                text-align: left;
            }
        </style>

        <div class=\"offset-sm-3\">
            ";
            // line 59
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["courses"] ?? $this->getContext($context, "courses")));
            echo "
        </div>

    ";
        } else {
            // line 63
            echo "        <p>No course found.</p>
    ";
        }
        // line 65
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Course/course/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  153 => 63,  146 => 59,  125 => 40,  116 => 37,  112 => 36,  107 => 34,  103 => 33,  99 => 32,  96 => 31,  92 => 30,  78 => 18,  76 => 17,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base2.html.twig\" %}
{% block content %}

    <h1 xml:space=\"default\"</h1>

    <div class=\"col-lg-12\">
    <div class=\"card\">
    <div class=\"card-close\">
        <div class=\"dropdown\">
        </div>
    </div>
    <div class=\"card-header d-flex align-items-center\">
        <h3 class=\"h4\"><strong>All courses</strong></h3>
    </div>
    <div class=\"card-body\">
    <div class=\"table-responsive\">
    {% if courses is not empty %}
        <table class=\"table-hover\">
            <thead>
            <tr>

                <th>Subject</th>
                <th>Content</th>
                <th>Teacher</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>
            <tbody>
            {% for course in courses %}
                <tr>
                    <td>{{ course.subject }}</td>
                    <td><a href=\"{{ course.content }}\">Link</a></td>
                    <td>{{ course.teacher }}</td>

                    <td><a class=\"btn btn-danger btn-sm\" href=\"/teacher/delete-course/{{ course.id }}\">Delete</a></td>
                    <td><a class=\"btn btn-warning btn-sm\" href=\"/teacher/update-course/{{ course.id }}\">Update</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a class=\"btn btn-primary btn-sm\" href=\"/teacher/create-course\">Create New</a>

        </div>
        </div>
        </div>
        </div>

        <style>
            th, td {
                padding: 10px;
            }
            th {
                text-align: left;
            }
        </style>

        <div class=\"offset-sm-3\">
            {{ knp_pagination_render(courses) }}
        </div>

    {% else %}
        <p>No course found.</p>
    {% endif %}



{% endblock %}", "@Course/course/show.html.twig", "/home/wael/34/finalweb/Binder/src/CourseBundle/Resources/views/course/show.html.twig");
    }
}

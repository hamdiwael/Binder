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

/* @Course/subject/show.html.twig */
class __TwigTemplate_e7cf3dd5d1c70b15134badcc24957959d923bb05a1a7b8f3d43181d867585cf9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/subject/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/subject/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Course/subject/show.html.twig", 1);
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
        echo "    <style>

        th, td {
            padding: 10px;
        }
        th {
            text-align: left;
        }
    </style>

    <h1>All Subjects</h1>

    <h1 xml:space=\"default\"</h1>

    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-close\">
                <div class=\"dropdown\">
                </div>
            </div>
            <div class=\"card-header d-flex align-items-center\"></div>
            <div class=\"card-body\">
                <div class=\"table-responsive table-bordered\">

                    ";
        // line 27
        if ( !twig_test_empty(($context["subjects"] ?? $this->getContext($context, "subjects")))) {
            // line 28
            echo "                        <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Teachers</th>
                                <th>Classes</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subjects"] ?? $this->getContext($context, "subjects")));
            foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
                // line 40
                echo "                                <tr>
                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "name", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "teachers", []), "html", null, true);
                echo "</td>
                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "classes", []), "html", null, true);
                echo "</td>
                                    <td><a class=\"btn btn-danger btn-sm\" href=\"/admin/delete-subject/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "\">Delete</a></td>
                                    <td><a class=\"btn btn-warning btn-sm\" href=\"/admin/update-subject/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["subject"], "id", []), "html", null, true);
                echo "\">Update</a></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                            </tbody>
                        </table>
                    ";
        } else {
            // line 51
            echo "                        <p>No subject found.</p>
                    ";
        }
        // line 53
        echo "
                    <br/>
                    <a class=\"btn btn-primary btn-sm\" href=\"/admin/create-subject\">Create New</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Course/subject/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  138 => 51,  133 => 48,  124 => 45,  120 => 44,  116 => 43,  112 => 42,  108 => 41,  105 => 40,  101 => 39,  88 => 28,  86 => 27,  60 => 3,  51 => 2,  29 => 1,);
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
    <style>

        th, td {
            padding: 10px;
        }
        th {
            text-align: left;
        }
    </style>

    <h1>All Subjects</h1>

    <h1 xml:space=\"default\"</h1>

    <div class=\"col-lg-12\">
        <div class=\"card\">
            <div class=\"card-close\">
                <div class=\"dropdown\">
                </div>
            </div>
            <div class=\"card-header d-flex align-items-center\"></div>
            <div class=\"card-body\">
                <div class=\"table-responsive table-bordered\">

                    {% if subjects is not empty %}
                        <table>
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Teachers</th>
                                <th>Classes</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for subject in subjects %}
                                <tr>
                                    <td>{{ subject.name }}</td>
                                    <td>{{ subject.teachers }}</td>
                                    <td>{{ subject.classes  }}</td>
                                    <td><a class=\"btn btn-danger btn-sm\" href=\"/admin/delete-subject/{{ subject.id }}\">Delete</a></td>
                                    <td><a class=\"btn btn-warning btn-sm\" href=\"/admin/update-subject/{{ subject.id }}\">Update</a></td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    {% else %}
                        <p>No subject found.</p>
                    {% endif %}

                    <br/>
                    <a class=\"btn btn-primary btn-sm\" href=\"/admin/create-subject\">Create New</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "@Course/subject/show.html.twig", "/home/wael/34/finalweb/Binder/src/CourseBundle/Resources/views/subject/show.html.twig");
    }
}

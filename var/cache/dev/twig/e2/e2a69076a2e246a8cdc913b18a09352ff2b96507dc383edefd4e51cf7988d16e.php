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

/* @Club/Club/categorydetail.html.twig */
class __TwigTemplate_10f72c25040652b127972200824680e64b205726087818546abe7a60138a9990 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/categorydetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/categorydetail.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Club/Club/categorydetail.html.twig", 1);
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
        echo "    ";
        $context["urlc"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []);
        // line 4
        echo "

    ";
        // line 6
        $context["long"] = twig_length_filter($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")));
        // line 7
        echo "
    ";
        // line 8
        $context["res"] = twig_slice($this->env, ($context["urlc"] ?? $this->getContext($context, "urlc")), 33, ($context["long"] ?? $this->getContext($context, "long")));
        // line 9
        echo "
    ";
        // line 10
        if (($this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
            // line 11
            echo "        <center>



        <h1>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "name", []), "html", null, true);
            echo "</h1>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["club"] ?? $this->getContext($context, "club")), "specialty", []), "html", null, true);
            echo "</p>
    ";
        }
        // line 18
        echo "    <br><br><br><br><br>

    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div class=\"example-wrapper\">


        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    </div>

    </center>
    <br><br><br><br><br>

    <div class=\"row mt\">
        <div class=\"col-lg-12\">
            <div class=\"form-panel\">
                <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> List activities</h4>



                <div class=\"row mb\">
                    <!-- page start-->
                    <div class=\"content-panel\">
                        <div class=\"adv-table\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display table table-bordered\" id=\"hidden-table-info\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Club</th>
                                    <th class=\"hidden-phone\">about</th>
                                    <th class=\"hidden-phone\">location</th>
                                    <th class=\"hidden-phone\">date</th>
                                    <th class=\"hidden-phone\">duration in hours</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? $this->getContext($context, "activities")));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 58
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["activity"], "club", []), "id", []) == ($context["res"] ?? $this->getContext($context, "res")))) {
                // line 59
                echo "                                        <tr class=\"gradeU\">
                                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["activity"], "club", []), "name", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "about", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "location", []), "html", null, true);
                echo "</td>
                                            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "date", [])), "html", null, true);
                echo "</td>
                                            <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "duration", []), "html", null, true);
                echo "</td>

                                        </tr>
                                    ";
            }
            // line 69
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                                </tbody>
                            </table>
                        </div>

                        <li> <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export");
        echo "\">export</a> </li>
                    </div>
                    <!-- page end-->
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
        return "@Club/Club/categorydetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 75,  181 => 70,  175 => 69,  168 => 65,  164 => 64,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  145 => 59,  142 => 58,  138 => 57,  105 => 27,  94 => 18,  89 => 16,  85 => 15,  79 => 11,  77 => 10,  74 => 9,  72 => 8,  69 => 7,  67 => 6,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
    {% set urlc= app.request.uri %}


    {% set long = urlc|length %}

    {% set res=  urlc|slice(33, long) %}

    {% if club.id == res %}
        <center>



        <h1>{{ club.name }}</h1>
        <p>{{ club.specialty }}</p>
    {% endif %}
    <br><br><br><br><br>

    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>
    <div class=\"example-wrapper\">


        {{form(form)}}
    </div>

    </center>
    <br><br><br><br><br>

    <div class=\"row mt\">
        <div class=\"col-lg-12\">
            <div class=\"form-panel\">
                <h4 class=\"mb\"><i class=\"fa fa-angle-right\"></i> List activities</h4>



                <div class=\"row mb\">
                    <!-- page start-->
                    <div class=\"content-panel\">
                        <div class=\"adv-table\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display table table-bordered\" id=\"hidden-table-info\">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Club</th>
                                    <th class=\"hidden-phone\">about</th>
                                    <th class=\"hidden-phone\">location</th>
                                    <th class=\"hidden-phone\">date</th>
                                    <th class=\"hidden-phone\">duration in hours</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for activity in activities %}
                                    {% if activity.club.id == res %}
                                        <tr class=\"gradeU\">
                                            <td>{{ activity.id }}</td>
                                            <td>{{ activity.club.name }}</td>
                                            <td>{{ activity.about }}</td>
                                            <td>{{ activity.location }}</td>
                                            <td>{{ activity.date|date }}</td>
                                            <td>{{ activity.duration }}</td>

                                        </tr>
                                    {% endif %}
                                {% endfor %}

                                </tbody>
                            </table>
                        </div>

                        <li> <a href=\"{{ path('export') }}\">export</a> </li>
                    </div>
                    <!-- page end-->
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "@Club/Club/categorydetail.html.twig", "/home/wael/34/finalweb/Binder/src/ClubBundle/Resources/views/Club/categorydetail.html.twig");
    }
}

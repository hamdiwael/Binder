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

/* @class/Default/searchTimeTable.html.twig */
class __TwigTemplate_588c41adcad65b2294953b42096450b20fae894ef0160af997140b3389bb5845 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTimeTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTimeTable.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@class/Default/searchTimeTable.html.twig", 1);
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
        echo "<html>
<head>
    <title>class</title></head>
<body>
<center>

    ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "
                            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classe", []), 'widget');
        echo "</br>
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

        <table class=\"table-hover table\"  border=\"1\">
                                <tr>
                                    <th>Timetable</th>
                                    <th>Classes</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timetable"] ?? $this->getContext($context, "timetable")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "                                    <tr>
                                      <td>  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["p"], "content", []))), "html", null, true);
            echo "\">Timetable (PDF)</a></td>

                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "classe", []), "nom", []), "html", null, true);
            echo "</td>
                                        <td><a  class=\"btn btn-danger btn-sm\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_deleteTimeTable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>
                                        <td><a   class=\"btn btn-warning btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_updateTimeTable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>

                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                            </table>







</center>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/searchTimeTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  115 => 30,  111 => 29,  107 => 28,  102 => 26,  99 => 25,  95 => 24,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
<html>
<head>
    <title>class</title></head>
<body>
<center>

    {% form_theme form 'bootstrap_4_layout.html.twig' %}

                            {{ form_start(form) }}
                            {{ form_widget(form.classe) }}</br>
                            {{ form_end(form) }}
    <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

        <table class=\"table-hover table\"  border=\"1\">
                                <tr>
                                    <th>Timetable</th>
                                    <th>Classes</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                                {% for p in timetable %}
                                    <tr>
                                      <td>  <a href=\"{{ asset('uploads/brochures/' ~ p.content) }}\">Timetable (PDF)</a></td>

                                        <td>{{ p.classe.nom }}</td>
                                        <td><a  class=\"btn btn-danger btn-sm\" href=\"{{ path('class_deleteTimeTable',{\"id\":p.id}) }}\">Delete</a></td>
                                        <td><a   class=\"btn btn-warning btn-sm\" href=\"{{ path('class_updateTimeTable',{\"id\":p.id}) }}\">Update</a></td>

                                    </tr>

                                {% endfor %}
                            </table>







</center>
</body>

</html>
{% endblock %}", "@class/Default/searchTimeTable.html.twig", "/home/wael/34/finalweb/Binder/src/classBundle/Resources/views/Default/searchTimeTable.html.twig");
    }
}

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

/* @class/Default/readTimeTable.html.twig */
class __TwigTemplate_e9f6e77ef7908e7febe9cc843ffe4203ec7db36d3dcade4d25ca6080959a1181 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/readTimeTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/readTimeTable.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@class/Default/readTimeTable.html.twig", 1);
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
<h1>List Time table</h1>

<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
            <section class=\"ftco-section ftco-no-pt ftco-no-pb contact-section\">
                <div class=\"container\">
                    <div class=\"row d-flex align-items-stretch no-gutters\">
                        <h1>Time Table List</h1>
                        <fieldset style=\"width: 30%\">
                            <table border=\"1\">
                                <tr>
                                    <th>Classes Name</th>
                                    <th>Link Of Time Table</th>

                                </tr>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["timetable"]);
        foreach ($context['_seq'] as $context["_key"] => $context["timetable"]) {
            // line 25
            echo "<tr>

        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["timetable"], "classe", []), "nom", []), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["timetable"], "content", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["timetable"], "content", []), "html", null, true);
            echo "</td>



       <td><a  href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_deleteTimeTable", ["id" => $this->getAttribute($context["timetable"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>
        <td><a  href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_updateTimeTable", ["id" => $this->getAttribute($context["timetable"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timetable'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</tr>
                            </table>
                        </fieldset></div> </div> </section></div> </section> </section>
</center>

</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/readTimeTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  108 => 33,  104 => 32,  95 => 28,  91 => 27,  87 => 25,  83 => 24,  60 => 3,  51 => 2,  29 => 1,);
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
<h1>List Time table</h1>

<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
            <section class=\"ftco-section ftco-no-pt ftco-no-pb contact-section\">
                <div class=\"container\">
                    <div class=\"row d-flex align-items-stretch no-gutters\">
                        <h1>Time Table List</h1>
                        <fieldset style=\"width: 30%\">
                            <table border=\"1\">
                                <tr>
                                    <th>Classes Name</th>
                                    <th>Link Of Time Table</th>

                                </tr>
{% for timetable in timetable  %}
<tr>

        <td>{{ timetable.classe.nom }}</td>
    <td><a href=\"{{ asset('uploads/brochures/' ~ timetable.content) }}\">{{ timetable.content }}</td>



       <td><a  href=\"{{ path('class_deleteTimeTable',{\"id\":timetable.id}) }}\">Delete</a></td>
        <td><a  href=\"{{ path('class_updateTimeTable',{\"id\":timetable.id}) }}\">Update</a></td>



{% endfor %}
</tr>
                            </table>
                        </fieldset></div> </div> </section></div> </section> </section>
</center>

</body>

</html>
{% endblock %}", "@class/Default/readTimeTable.html.twig", "/home/wael/34/final/Binder/src/classBundle/Resources/views/Default/readTimeTable.html.twig");
    }
}

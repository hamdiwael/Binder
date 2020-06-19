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

/* @Course/subject/view.html.twig */
class __TwigTemplate_2446f63836301cccc9ddd7cc519638bc5f605fde1ccf58455dfb21b80f4f7091 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/subject/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/subject/view.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Course/subject/view.html.twig", 1);
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
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Subject Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Name:</th>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subject"] ?? $this->getContext($context, "subject")), "name", []), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Teachers:</th>
        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subject"] ?? $this->getContext($context, "subject")), "teachers", []), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Classes:</th>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subject"] ?? $this->getContext($context, "subject")), "classes", []), "html", null, true);
        echo "</td>
    </tr>
    >
    </tbody>
</table>

<br/>
<a href=\"/show-subjects\">View All</a> -
<a href=\"/update-subject/";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subject"] ?? $this->getContext($context, "subject")), "id", []), "html", null, true);
        echo "\">Modify</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Course/subject/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  91 => 26,  84 => 22,  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
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
        text-align: right;
    }
</style>

<h1>Subject Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Name:</th>
        <td>{{ subject.name }}</td>
    </tr>
    <tr>
        <th>Teachers:</th>
        <td>{{ subject.teachers }}</td>
    </tr>
    <tr>
        <th>Classes:</th>
        <td>{{ subject.classes }}</td>
    </tr>
    >
    </tbody>
</table>

<br/>
<a href=\"/show-subjects\">View All</a> -
<a href=\"/update-subject/{{ subject.id }}\">Modify</a>
{% endblock %}", "@Course/subject/view.html.twig", "/home/wael/34/finalweb/Binder/src/CourseBundle/Resources/views/subject/view.html.twig");
    }
}

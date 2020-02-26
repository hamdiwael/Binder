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

/* @Course/course/view.html.twig */
class __TwigTemplate_5cb5d116be29617147b694c9fc74abd540c2b2601c7af7832de047bce1f3fd85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/course/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Course/course/view.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "@Course/course/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Course Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Subject:</th>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "subject", []), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "content", []), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Teacher:</th>
        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "teacher", []), "html", null, true);
        echo "</td>
    </tr>
    >
    </tbody>
</table>

<br/>
<a href=\"/show-courses\">View All</a> -
<a href=\"/update-course/";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", []), "html", null, true);
        echo "\">Modify</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Course/course/view.html.twig";
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
        return new Source("{% extends \"back.html.twig\" %}
{% block container %}
<style>
    th, td {
        padding: 10px;
    }
    th {
        text-align: right;
    }
</style>

<h1>Course Created or Modified</h1>

<table>
    <tbody>
    <tr>
        <th>Subject:</th>
        <td>{{ course.subject }}</td>
    </tr>
    <tr>
        <th>Content:</th>
        <td>{{ course.content }}</td>
    </tr>
    <tr>
        <th>Teacher:</th>
        <td>{{ course.teacher }}</td>
    </tr>
    >
    </tbody>
</table>

<br/>
<a href=\"/show-courses\">View All</a> -
<a href=\"/update-course/{{ course.id }}\">Modify</a>
{% endblock %}
", "@Course/course/view.html.twig", "/home/wael/34/binder/src/CourseBundle/Resources/views/course/view.html.twig");
    }
}

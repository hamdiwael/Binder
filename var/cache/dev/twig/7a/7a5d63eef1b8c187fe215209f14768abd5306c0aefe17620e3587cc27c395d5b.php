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

/* @class/Default/searchTtime.html.twig */
class __TwigTemplate_aee7d390e5888921afbfb7a78967d797a44be7079eb109515738ad476744c430 extends \Twig\Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTtime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTtime.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "@class/Default/searchTtime.html.twig", 1);
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
        echo "    <html xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <title>
            Time Table
        </title>
    </head>
<body>
<br>
<br>
<br>
";
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 14
        echo "

<h1>Search Session </h1>
<br>
<br>
<br>
<fieldset style=\"width: 90%\">
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


    <div class=\"input-group input-group-sm mb-3\">
        <h1>Day:</h1>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", []), 'widget');
        echo "</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Subject:</h1> ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", []), 'widget');
        echo "</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Time:</h1> ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", []), 'widget');
        echo "</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Class:</h1> ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", []), 'widget');
        echo "</br></div>
    <br>
    <br>
    <table border=\"1\">
        <tr>
            <th> day</th>
            <th>subject</th>
            <th>time</th>
            <th>classe</th>


        </tr>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 44
            echo "            <tr>

                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "day", []), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "subject", []), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "time", []), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "classe", []), "nom", []), "html", null, true);
            echo "</td>


            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </table>


<br>
    <br>


    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", []), 'widget');
        echo "
    ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</fieldset>

</body>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/searchTtime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 63,  161 => 62,  152 => 55,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 44,  120 => 43,  105 => 31,  100 => 29,  95 => 27,  90 => 25,  83 => 21,  74 => 14,  72 => 13,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}
{% block content %}
    <html xmlns=\"http://www.w3.org/1999/html\">
    <head>
        <title>
            Time Table
        </title>
    </head>
<body>
<br>
<br>
<br>
{% form_theme form 'bootstrap_4_layout.html.twig' %}


<h1>Search Session </h1>
<br>
<br>
<br>
<fieldset style=\"width: 90%\">
    {{ form_start(form) }}


    <div class=\"input-group input-group-sm mb-3\">
        <h1>Day:</h1>{{ form_widget(form.day) }}</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Subject:</h1> {{ form_widget(form.subject) }}</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Time:</h1> {{ form_widget(form.time) }}</br></div>
    <div class=\"input-group input-group-sm mb-3\">
        <h1>Class:</h1> {{ form_widget(form.classe) }}</br></div>
    <br>
    <br>
    <table border=\"1\">
        <tr>
            <th> day</th>
            <th>subject</th>
            <th>time</th>
            <th>classe</th>


        </tr>
        {% for p in time %}
            <tr>

                <td>{{ p.day }}</td>
                <td>{{ p.subject }}</td>
                <td>{{ p.time }}</td>
                <td>{{ p.classe.nom}}</td>


            </tr>

        {% endfor %}
    </table>


<br>
    <br>


    {{ form_widget(form.search) }}
    {{ form_end(form) }}
</fieldset>

</body>
</body>
</html>
{% endblock %}", "@class/Default/searchTtime.html.twig", "C:\\XAMPP\\htdocs\\Binder\\src\\classBundle\\Resources\\views\\Default\\searchTtime.html.twig");
    }
}

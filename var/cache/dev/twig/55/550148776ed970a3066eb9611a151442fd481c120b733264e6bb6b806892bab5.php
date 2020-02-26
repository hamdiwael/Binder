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

/* @class/Default/readTtime.html.twig */
class __TwigTemplate_f280f19716958d817d9e0dd0ffb0a51fc0c8dd40a4afd0e13be9705073bd5ec0 extends \Twig\Template
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
        // line 2
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/readTtime.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/readTtime.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "@class/Default/readTtime.html.twig", 2);
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
        echo "<html>
<head>
    <title>Time Table</title></head>
<body>
<center>

<fieldset style=\"width: 100%\">
<br>
    <br>
    <h1>you need to <a  href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_pdf");
        echo "\">Convert</a> time table ?!</h1>
    <br>
    <div class=\"input-group input-group-sm mb-3\">
        <p align=\"right\">
    </div>
                        <table border=\"1\" width=\"100%\">
                            <tr>
                                <th>day</th>
                                <th>subject</th>
                                <th>time</th>
                                <th>classe name</th>

                            </tr>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["time"]);
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 27
            echo "                            <tr >

                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "day", []), "html", null, true);
            echo "        </td>

                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "subject", []), "html", null, true);
            echo "         </td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "time", []), "html", null, true);
            echo "        </td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time"], "classe", []), "nom", []), "html", null, true);
            echo "        </td>





                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "

</tr>
                        </table>
</fieldset>
</center>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/readTtime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  108 => 33,  104 => 32,  100 => 31,  95 => 29,  91 => 27,  87 => 26,  71 => 13,  60 => 4,  51 => 3,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseback.html.twig' %}
{% block content %}
<html>
<head>
    <title>Time Table</title></head>
<body>
<center>

<fieldset style=\"width: 100%\">
<br>
    <br>
    <h1>you need to <a  href=\"{{ path('class_pdf') }}\">Convert</a> time table ?!</h1>
    <br>
    <div class=\"input-group input-group-sm mb-3\">
        <p align=\"right\">
    </div>
                        <table border=\"1\" width=\"100%\">
                            <tr>
                                <th>day</th>
                                <th>subject</th>
                                <th>time</th>
                                <th>classe name</th>

                            </tr>
                        {% for time in time  %}
                            <tr >

                                <td>{{ time.day }}        </td>

                                <td>{{ time.subject }}         </td>
                                <td>{{ time.time }}        </td>
                                <td>{{ time.classe.nom }}        </td>





                                {% endfor %}


</tr>
                        </table>
</fieldset>
</center>
</body>

</html>
{% endblock %}
", "@class/Default/readTtime.html.twig", "C:\\XAMPP\\htdocs\\Binder\\src\\classBundle\\Resources\\views\\Default\\readTtime.html.twig");
    }
}

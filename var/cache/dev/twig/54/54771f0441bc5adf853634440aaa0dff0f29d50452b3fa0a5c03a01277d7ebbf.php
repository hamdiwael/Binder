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

/* @class/Default/read.html.twig */
class __TwigTemplate_3da4b4a590db066a7e02dda7adde1febebc3b5bd00f60552ec6e75056640c69c extends \Twig\Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/read.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@class/Default/read.html.twig", 2);
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
    <title>class</title></head>
<body>



<fieldset style=\"width: 95%\">
<br>
    <br>
                       <h1><h1> <strong>List of classes</strong></h1></h1>

        <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

            <table class=\"table-hover table\"  border=\"1\">


                            <tr>
                                <th>Classes</th>
                                <th>Session</th>
                                <th></th>
                                <th></th>

                            </tr>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["classe"]);
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 29
            echo "<tr >

                           <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", []), "html", null, true);
            echo "        </td>

                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nbPupils", []), "html", null, true);
            echo "         </td>


                                <td ><a class=\"btn btn-danger btn-sm\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_delete", ["id" => $this->getAttribute($context["classe"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>
                                <td ><a  class=\"btn btn-warning btn-sm\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_update", ["id" => $this->getAttribute($context["classe"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>


                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return "@class/Default/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  109 => 37,  105 => 36,  99 => 33,  94 => 31,  90 => 29,  86 => 28,  60 => 4,  51 => 3,  29 => 2,);
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
{% extends 'base2.html.twig' %}
{% block content %}
<html>
<head>
    <title>class</title></head>
<body>



<fieldset style=\"width: 95%\">
<br>
    <br>
                       <h1><h1> <strong>List of classes</strong></h1></h1>

        <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

            <table class=\"table-hover table\"  border=\"1\">


                            <tr>
                                <th>Classes</th>
                                <th>Session</th>
                                <th></th>
                                <th></th>

                            </tr>
                        {% for classe in classe  %}
<tr >

                           <td>{{ classe.nom }}        </td>

                                <td>{{ classe.nbPupils }}         </td>


                                <td ><a class=\"btn btn-danger btn-sm\" href=\"{{ path('class_delete',{\"id\":classe.id}) }}\">Delete</a></td>
                                <td ><a  class=\"btn btn-warning btn-sm\" href=\"{{ path('class_update',{\"id\":classe.id}) }}\">Update</a></td>


                        {% endfor %}

</tr>
                        </table>
</fieldset>
</center>
</body>

</html>
{% endblock %}
", "@class/Default/read.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\classBundle\\Resources\\views\\Default\\read.html.twig");
    }
}

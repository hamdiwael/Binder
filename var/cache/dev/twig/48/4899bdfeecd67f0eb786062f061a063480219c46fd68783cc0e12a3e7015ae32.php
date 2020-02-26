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

/* @Bin/abscense/listFront.html.twig */
class __TwigTemplate_e4d8b819d22d43108fcdf3665868e76649d039f6783b7ade687f16848aa3a37e extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/listFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/listFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bin/abscense/listFront.html.twig", 1);
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
        echo "    <center><h3>List of abscenses </h3></center>
<div class=\"container\">

    <center><h3> </h3></center>
<br/><br/><br/><br/><br/>
    <center><table class=\"table table-striped\"  >
            <thead>
            <th>id</th>
            <th>pupl</th>
            <th>groupe</th>
            <th>nbr</th>
            <th>date</th>
            <th>subject</th>
            <th></th>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abscense"]) ? $context["abscense"] : $this->getContext($context, "abscense")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "pupl", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "groupe", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nbr", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", [])), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "subject", []), "html", null, true);
            echo "</td>
                        <td><a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showab", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">Details</a>
                    <a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calabs", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">calendar</a></td>

                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>

        </table></center>






</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/abscense/listFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 40,  121 => 36,  113 => 31,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  82 => 20,  78 => 19,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <center><h3>List of abscenses </h3></center>
<div class=\"container\">

    <center><h3> </h3></center>
<br/><br/><br/><br/><br/>
    <center><table class=\"table table-striped\"  >
            <thead>
            <th>id</th>
            <th>pupl</th>
            <th>groupe</th>
            <th>nbr</th>
            <th>date</th>
            <th>subject</th>
            <th></th>
            </thead>
            <tbody>
            {% for a in abscense %}
                <tr>
                    <td>{{ a.id }}</td>
                    <td>{{ a.pupl }}</td>
                    <td>{{ a.groupe }}</td>
                    <td>{{ a.nbr }}</td>
                    <td>{{ a.date|date() }}</td>
                    <td>{{ a.subject}}</td>
                        <td><a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"{{ path('showab',{\"id\":a.id}) }}\">Details</a>
                    <a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"{{ path('calabs',{\"id\":a.id}) }}\">calendar</a></td>

                </tr>
            {% endfor %}
            </tbody>

        </table></center>






</div>

{% endblock %}", "@Bin/abscense/listFront.html.twig", "C:\\wamp64\\www\\GroupePi\\src\\BinBundle\\Resources\\views\\abscense\\listFront.html.twig");
    }
}

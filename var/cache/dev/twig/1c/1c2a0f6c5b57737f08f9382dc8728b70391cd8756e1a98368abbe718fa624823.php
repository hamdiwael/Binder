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

/* @Bin/abscense/list.html.twig */
class __TwigTemplate_a7ecb4279303fa95eb041c8b7b0b26cdc92ede144825a2e3e184ce69ae64958a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/list.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Bin/abscense/list.html.twig", 1);
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
        echo "<div class=\"container\">

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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abscense"]) ? $context["abscense"] : $this->getContext($context, "abscense")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "pupl", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "groupe", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nbr", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", [])), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "subject", []), "html", null, true);
            echo "</td>
                    <td><a style=\" background-color: #6dc8c4;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteabs", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">delete</a>

                        <a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateabs", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">update</a></td>


                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>

        </table></center>






</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/abscense/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  121 => 36,  112 => 30,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
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
                    <td><a style=\" background-color: #6dc8c4;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"{{ path('deleteabs',{\"id\":a.id}) }}\">delete</a>

                        <a style=\" background-color: #8B0000;color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;\" href=\"{{ path('updateabs',{\"id\":a.id}) }}\">update</a></td>


                </tr>
            {% endfor %}
            </tbody>

        </table></center>






</div>

{% endblock %}", "@Bin/abscense/list.html.twig", "C:\\wamp64\\www\\GroupePi\\src\\BinBundle\\Resources\\views\\abscense\\list.html.twig");
    }
}

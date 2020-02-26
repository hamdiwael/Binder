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

/* @Bin/notification/list.html.twig */
class __TwigTemplate_bf733faf08c821dcceda4f7a34d90ae7b7a5c7c2938e8c4158e6ac531d2b4d52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/notification/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/notification/list.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Bin/notification/list.html.twig", 1);
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
        echo "
    <br/><br/><br/><br/>
<center><h3>List of notifications </h3></center>
<table class=\"table table-striped\" >

        <thead>
            <th>category</th>
            <th>sender</th>
            <th>receiver</th>
            <th>content</th>
            <th>state</th>
            <th></th>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "category", []), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "sender", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "receiver", []), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 24
            if (($this->getAttribute($context["n"], "state", []) == true)) {
                // line 25
                echo "                        treaty
                    ";
            } else {
                // line 27
                echo "                        In progress<br>
                    ";
            }
            // line 28
            echo "</td>
                <td><a style=\" background-color: #8B0000;color: white;
                    padding: 5px 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletenot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>
                <td><a style=\" background-color: #6dc8c4;color: white;
                    padding: 5px 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatenot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">update</a></td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/notification/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  125 => 38,  117 => 33,  110 => 28,  106 => 27,  102 => 25,  100 => 24,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  80 => 18,  76 => 17,  60 => 3,  51 => 2,  29 => 1,);
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

    <br/><br/><br/><br/>
<center><h3>List of notifications </h3></center>
<table class=\"table table-striped\" >

        <thead>
            <th>category</th>
            <th>sender</th>
            <th>receiver</th>
            <th>content</th>
            <th>state</th>
            <th></th>
        </thead>
        <tbody>
        {% for n in notification %}
            <tr>
                <td>{{ n.category }}</td>
                <td>{{ n.sender }}</td>
                <td>{{ n.receiver }}</td>
                <td>{{ n.content}}</td>
                <td>
                    {% if n.state == true %}
                        treaty
                    {% else %}
                        In progress<br>
                    {% endif %}</td>
                <td><a style=\" background-color: #8B0000;color: white;
                    padding: 5px 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;\" href=\"{{ path('deletenot',{\"id\":n.id}) }}\">delete</a></td>
                <td><a style=\" background-color: #6dc8c4;color: white;
                    padding: 5px 10px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;\" href=\"{{ path('updatenot',{\"id\":n.id}) }}\">update</a></td>


            </tr>
        {% endfor %}
        </tbody>
</table>
{% endblock %}



", "@Bin/notification/list.html.twig", "C:\\wamp64\\www\\Pidev\\src\\BinBundle\\Resources\\views\\notification\\list.html.twig");
    }
}

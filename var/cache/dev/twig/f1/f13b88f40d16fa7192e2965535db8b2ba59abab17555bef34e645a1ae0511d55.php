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
class __TwigTemplate_4877e1286fb526848b7c919c25f9e5ef62cedcd5e1f6b25a867241ed189c2ce3 extends \Twig\Template
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
    <br/><br/>
<center><h3><strong>List of notifications</strong> </h3></center>
    <br/>
<table class=\"table table-striped table-hover table-bordered table-inbox table-condensed\" >

        <thead>
            <th>Category</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Content</th>
            <th>State</th>
            <th></th>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notification"] ?? $this->getContext($context, "notification")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "category", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "sender", []), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "receiver", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "content", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 25
            if (($this->getAttribute($context["n"], "state", []) == true)) {
                // line 26
                echo "                        treaty
                    ";
            } else {
                // line 28
                echo "                        In progress<br>
                    ";
            }
            // line 29
            echo "</td>
                <td><a class=\"btn btn-danger btn-sm\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletenot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>
                <td><a class=\"btn btn-warning btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updatenot", ["id" => $this->getAttribute($context["n"], "id", [])]), "html", null, true);
            echo "\">update</a></td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return array (  129 => 36,  118 => 31,  114 => 30,  111 => 29,  107 => 28,  103 => 26,  101 => 25,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  81 => 19,  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
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

    <br/><br/>
<center><h3><strong>List of notifications</strong> </h3></center>
    <br/>
<table class=\"table table-striped table-hover table-bordered table-inbox table-condensed\" >

        <thead>
            <th>Category</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Content</th>
            <th>State</th>
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
                <td><a class=\"btn btn-danger btn-sm\" href=\"{{ path('deletenot',{\"id\":n.id}) }}\">delete</a></td>
                <td><a class=\"btn btn-warning btn-sm\" href=\"{{ path('updatenot',{\"id\":n.id}) }}\">update</a></td>


            </tr>
        {% endfor %}
        </tbody>
</table>
{% endblock %}



", "@Bin/notification/list.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\BinBundle\\Resources\\views\\notification\\list.html.twig");
    }
}

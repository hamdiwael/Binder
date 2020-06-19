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

/* @Club/Activity/displayActivities.html.twig */
class __TwigTemplate_1225006568eb722934cf75b8333a1773ad5ab743352959e18b4b51f2bebafa6d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Activity/displayActivities.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Activity/displayActivities.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Club/Activity/displayActivities.html.twig", 1);
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
        echo "  <br/>
    <h1><strong>List of activities</strong></h1>



        <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

            <table class=\"table-hover table\"  border=\"1\">
        <tr>

            <th>About</th>
            <th>Date</th>
            <th>Duration by hour</th>
            <th>Location</th>


        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activity"] ?? $this->getContext($context, "activity")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 21
            echo "            <tr>

                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "about", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "date", [])), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "duration", []), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "location", []), "html", null, true);
            echo "</td>



                <td><a class=\"btn btn-warning btn-sm\"  href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_updateActivity", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">update</a></td>
                <td><a class=\"btn btn-danger btn-sm\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_deleteActivity", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </table>
        </fieldset> </center></div> </section> </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Activity/displayActivities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  110 => 31,  106 => 30,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 21,  79 => 20,  60 => 3,  51 => 2,  29 => 1,);
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
  <br/>
    <h1><strong>List of activities</strong></h1>



        <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

            <table class=\"table-hover table\"  border=\"1\">
        <tr>

            <th>About</th>
            <th>Date</th>
            <th>Duration by hour</th>
            <th>Location</th>


        </tr>
        {% for a in activity %}
            <tr>

                <td>{{ a.about }}</td>
                <td>{{ a.date | date}}</td>
                <td>{{ a.duration }}</td>
                <td>{{ a.location }}</td>



                <td><a class=\"btn btn-warning btn-sm\"  href=\"{{ path('club_updateActivity',{\"id\":a.id}) }}\">update</a></td>
                <td><a class=\"btn btn-danger btn-sm\" href=\"{{ path('club_deleteActivity',{\"id\":a.id}) }}\">delete</a></td>

            </tr>
        {% endfor %}

    </table>
        </fieldset> </center></div> </section> </section>
{% endblock %}
", "@Club/Activity/displayActivities.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\ClubBundle\\Resources\\views\\Activity\\displayActivities.html.twig");
    }
}

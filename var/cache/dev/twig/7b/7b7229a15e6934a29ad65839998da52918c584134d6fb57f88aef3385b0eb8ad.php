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

/* @Club/Club/display.html.twig */
class __TwigTemplate_762298fc9a82ca6b80f4c057bc1a7fab56538d8f03c2a2fba1775b603ed21add extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/display.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/display.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Club/Club/display.html.twig", 1);
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
        echo "<br/>
    <h1><strong>List of clubs</strong></h1>
        <div style=\"text-align: center;\">


            <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

                <table class=\"table-hover table\"  border=\"1\">
   <tr>
       <th>Name</th>
       <th>Specialty</th>
       <th>Responsible</th>


   </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["club"] ?? $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 19
            echo "        <tr>

            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", []), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "specialty", []), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "responsible", []), "html", null, true);
            echo "</td>

            <td><a class=\"btn btn-danger btn-sm\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_deleteClub", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>
            <td><a  class=\"btn btn-warning btn-sm\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_updateClub", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">update</a></td>
            <td><a class=\"btn btn-primary btn-sm\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_club", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">show details</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </table>
            </fieldset>
            </div>

    </div> </section> </section>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Club/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  106 => 27,  102 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 19,  77 => 18,  60 => 3,  51 => 2,  29 => 1,);
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
    <h1><strong>List of clubs</strong></h1>
        <div style=\"text-align: center;\">


            <div class=\"table-hover table-bordered table-inbox table-condensed\"  border=\"1\">

                <table class=\"table-hover table\"  border=\"1\">
   <tr>
       <th>Name</th>
       <th>Specialty</th>
       <th>Responsible</th>


   </tr>
        {% for c in club %}
        <tr>

            <td>{{ c.name }}</td>
            <td>{{ c.specialty }}</td>
            <td>{{ c.responsible }}</td>

            <td><a class=\"btn btn-danger btn-sm\" href=\"{{ path('club_deleteClub',{\"id\":c.id}) }}\">delete</a></td>
            <td><a  class=\"btn btn-warning btn-sm\" href=\"{{ path('club_updateClub',{\"id\":c.id}) }}\">update</a></td>
            <td><a class=\"btn btn-primary btn-sm\" href=\"{{ path('detail_club',{\"id\":c.id}) }}\">show details</a></td>
        </tr>
        {% endfor %}

    </table>
            </fieldset>
            </div>

    </div> </section> </section>





{% endblock %}", "@Club/Club/display.html.twig", "/home/wael/34/finalweb/Binder/src/ClubBundle/Resources/views/Club/display.html.twig");
    }
}

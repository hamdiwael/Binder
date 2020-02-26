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
class __TwigTemplate_215cb1b33127165cccc5420c562a4ff07314952ed020d514f19b46c2077e07c0 extends \Twig\Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/display.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Club/Club/display.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "@Club/Club/display.html.twig", 1);
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
        echo "    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
        <center>
        <fieldset style=\"width:80%\">


            <table border=\"2\">
   <tr>
       <th>id</th>
       <th>name</th>
       <th> spcialty</th>
       <th>responsible</th>

       <th>members</th>
       <th>image</th>

   </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["club"] ?? $this->getContext($context, "club")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", []), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "specialty", []), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "responsible", []), "html", null, true);
            echo "</td>

            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "members", []), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomImage", []), "html", null, true);
            echo "\" style=\"width: 100px;height: 100px\"></td>
            <td><a  href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_deleteClub", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">delete</a></td>
            <td><a  href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_updateClub", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">update</a></td>
            <td><a  href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_club", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">show detail</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </table>
            </fieldset>
            </centre>

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
        return array (  130 => 35,  121 => 32,  117 => 31,  113 => 30,  108 => 29,  104 => 28,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  84 => 22,  80 => 21,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}
    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
        <center>
        <fieldset style=\"width:80%\">


            <table border=\"2\">
   <tr>
       <th>id</th>
       <th>name</th>
       <th> spcialty</th>
       <th>responsible</th>

       <th>members</th>
       <th>image</th>

   </tr>
        {% for c in club %}
        <tr>
            <td>{{  c.id }}</td>
            <td>{{ c.name }}</td>
            <td>{{ c.specialty }}</td>
            <td>{{ c.responsible }}</td>

            <td>{{ c.members }}</td>
            <td><img src=\"{{ asset('images/') }}{{ c.nomImage }}\" style=\"width: 100px;height: 100px\"></td>
            <td><a  href=\"{{ path('club_deleteClub',{\"id\":c.id}) }}\">delete</a></td>
            <td><a  href=\"{{ path('club_updateClub',{\"id\":c.id}) }}\">update</a></td>
            <td><a  href=\"{{ path('detail_club',{\"id\":c.id}) }}\">show detail</a></td>
        </tr>
        {% endfor %}

    </table>
            </fieldset>
            </centre>

    </div> </section> </section>





{% endblock %}", "@Club/Club/display.html.twig", "C:\\xampp\\htdocs\\Pidev4\\src\\ClubBundle\\Resources\\views\\Club\\display.html.twig");
    }
}

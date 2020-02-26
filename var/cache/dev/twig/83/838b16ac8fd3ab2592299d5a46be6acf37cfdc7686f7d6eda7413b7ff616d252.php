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

/* @class/Default/searchTimeTable.html.twig */
class __TwigTemplate_db2a2e93f42cba6ba5e42da5a282470d19e53c02720235db4335f790106639d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTimeTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/searchTimeTable.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "@class/Default/searchTimeTable.html.twig", 1);
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
        echo "<html>
<head>
    <title>class</title></head>
<body>
<center>

    ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "
                            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", []), 'widget');
        echo "</br>
                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            <table border=\"1\">
                                <tr>
                                    <th>Time Table</th>
                                    <th>Classes</th>
                                    <th>Delete</th>
                                    <th>Update</th>

                                </tr>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timetable"]) ? $context["timetable"] : $this->getContext($context, "timetable")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "                                    <tr>
                                      <td>  <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["p"], "content", []))), "html", null, true);
            echo "\">Time Table (PDF)</a></td>

                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "classe", []), "nom", []), "html", null, true);
            echo "</td>
                                        <td><a  href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_deleteTimeTable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Delete</a></td>
                                        <td><a  href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("class_updateTimeTable", ["id" => $this->getAttribute($context["p"], "id", [])]), "html", null, true);
            echo "\">Update</a></td>

                                    </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            </table>







</center>
</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/searchTimeTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  113 => 28,  109 => 27,  105 => 26,  100 => 24,  97 => 23,  93 => 22,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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
<html>
<head>
    <title>class</title></head>
<body>
<center>

    {% form_theme form 'bootstrap_4_layout.html.twig' %}

                            {{ form_start(form) }}
                            {{ form_widget(form.classe) }}</br>
                            {{ form_end(form) }}
                            <table border=\"1\">
                                <tr>
                                    <th>Time Table</th>
                                    <th>Classes</th>
                                    <th>Delete</th>
                                    <th>Update</th>

                                </tr>
                                {% for p in timetable %}
                                    <tr>
                                      <td>  <a href=\"{{ asset('uploads/brochures/' ~ p.content) }}\">Time Table (PDF)</a></td>

                                        <td>{{ p.classe.nom }}</td>
                                        <td><a  href=\"{{ path('class_deleteTimeTable',{\"id\":p.id}) }}\">Delete</a></td>
                                        <td><a  href=\"{{ path('class_updateTimeTable',{\"id\":p.id}) }}\">Update</a></td>

                                    </tr>

                                {% endfor %}
                            </table>







</center>
</body>

</html>
{% endblock %}", "@class/Default/searchTimeTable.html.twig", "C:\\XAMPP\\htdocs\\Binder\\src\\classBundle\\Resources\\views\\Default\\searchTimeTable.html.twig");
    }
}

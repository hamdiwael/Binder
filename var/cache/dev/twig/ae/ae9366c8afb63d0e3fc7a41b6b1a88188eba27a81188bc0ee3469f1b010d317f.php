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

/* @Bin/abscense/show.html.twig */
class __TwigTemplate_36381426fed4781066c276462774f770373854caf3999bbb0475ff697e6d671f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bin/abscense/show.html.twig", 1);
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
        echo "
    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-4\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abscense"] ?? $this->getContext($context, "abscense")), "pupl", []), "html", null, true);
        echo "</h1>
            <p class=\"lead\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abscense"] ?? $this->getContext($context, "abscense")), "groupe", []), "html", null, true);
        echo " </p>
            ";
        // line 10
        echo "            <h3 class=\"lead\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abscense"] ?? $this->getContext($context, "abscense")), "nbr", []), "html", null, true);
        echo " </h3>
            <h3 class=\"lead\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["abscense"] ?? $this->getContext($context, "abscense")), "subject", []), "html", null, true);
        echo " </h3>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listabsencesFront");
        echo "\">
                <button type=\"button\" style=\"color: white;background-color: #6dc8c4\" class=\"btn btn-success\" >Back to the list</button></a>


        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/abscense/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  78 => 11,  73 => 10,  69 => 8,  65 => 7,  60 => 4,  51 => 3,  29 => 1,);
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

    <div class=\"jumbotron jumbotron-fluid\">
        <div class=\"container\">
            <h1 class=\"display-4\">{{ abscense.pupl }}</h1>
            <p class=\"lead\"> {{ abscense.groupe }} </p>
            {#     <p class=\"lead\"> {{ rec.date }} </p>#}
            <h3 class=\"lead\"> {{ abscense.nbr }} </h3>
            <h3 class=\"lead\"> {{ abscense.subject }} </h3>
            <a href=\"{{ path('listabsencesFront') }}\">
                <button type=\"button\" style=\"color: white;background-color: #6dc8c4\" class=\"btn btn-success\" >Back to the list</button></a>


        </div>
    </div>
{% endblock %}", "@Bin/abscense/show.html.twig", "/home/wael/34/final/Binder/src/BinBundle/Resources/views/abscense/show.html.twig");
    }
}

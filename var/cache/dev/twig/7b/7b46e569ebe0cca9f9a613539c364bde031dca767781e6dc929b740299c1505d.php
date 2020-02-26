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

/* @Exams\exam\listeforback.html.twig */
class __TwigTemplate_c778a718242b30a4a9ece184c1fe7517880e943ac0b23601580b16453f4d32cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\exam\\listeforback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\exam\\listeforback.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "@Exams\\exam\\listeforback.html.twig", 1);
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
        echo "    <section>
        <div class=\"row justify-content-center mb-5 pb-2 \">
    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('web/images/bg_2.jpg');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                <div class=\"col-md-9 ftco-animate text-center\">
                    <h1>List of exams</h1>
                    <br/><br/>
            <div class=table-responsive\">
                <table class=\"table-hover table\"  border=\"1\">

                    <tr>

                        <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "subject", "ex.subject");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), "date", "ex.date");
        echo "</th>
                        <th>Duration</th>
                    </tr>

                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            echo " <tr class=\"success\">
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "subject", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["exam"], "date", [])), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "duration", []), "html", null, true);
            echo "</td>
                        <td> <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("updateexams", ["id" => $this->getAttribute($context["exam"], "ide", [])]), "html", null, true);
            echo "\">Update</a></td>
                        <td> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteexams", ["id" => $this->getAttribute($context["exam"], "ide", [])]), "html", null, true);
            echo "\">Delete</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                </table>
                <br/>
                <div class=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
                </div> </div> </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams\\exam\\listeforback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  121 => 33,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  90 => 25,  83 => 21,  79 => 20,  60 => 3,  51 => 2,  29 => 1,);
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
    <section>
        <div class=\"row justify-content-center mb-5 pb-2 \">
    <section id=\"main-content\">
    <section class=\"wrapper\">
    <div class=\"row\">
    <section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('web/images/bg_2.jpg');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                <div class=\"col-md-9 ftco-animate text-center\">
                    <h1>List of exams</h1>
                    <br/><br/>
            <div class=table-responsive\">
                <table class=\"table-hover table\"  border=\"1\">

                    <tr>

                        <th>{{  knp_pagination_sortable(pagination, 'subject', 'ex.subject') }}</th>
                        <th>{{  knp_pagination_sortable(pagination, 'date', 'ex.date')}}</th>
                        <th>Duration</th>
                    </tr>

                    {% for exam in pagination %} <tr class=\"success\">
                        <td>{{ exam.subject}}</td>
                        <td>{{ exam.date|date }}</td>
                        <td>{{ exam.duration}}</td>
                        <td> <a href=\"{{ path('updateexams',{'id':exam.ide}) }}\">Update</a></td>
                        <td> <a href=\"{{ path('deleteexams',{'id':exam.ide}) }}\">Delete</a></td>
                    </tr>
                    {% endfor %}

                </table>
                <br/>
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
                </div> </div> </div>
    </section>
{% endblock %}", "@Exams\\exam\\listeforback.html.twig", "C:\\xampp\\htdocs\\Binder\\src\\ExamsBundle\\Resources\\views\\exam\\listeforback.html.twig");
    }
}

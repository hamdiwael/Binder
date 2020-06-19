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

/* @Exams/grade/liste.html.twig */
class __TwigTemplate_8747b3c70e47eca492b3a31257bd906de61f3f4dc6e32fd56816798a065f0889 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Exams/grade/liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_script($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "

<section class=\"hero-wrap hero-wrap-2\" style=\"background-image:\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/images/bg_2.jpg"), "html", null, true);
        echo "\";\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Check your grades!</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check grades <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section>
    <br/>
</section>
<section>
    <div class=\"container\">
    <div class=\"row justify-content-center\">
        <table class=\"table table-striped table-hover table-bordered table-inbox table-condensed\" >
    <tr>

        <th>Subject</th>
        <th>Teacher</th>
        <th>Pupil</th>
        <th>Grade</th>

    </tr>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listgrades"] ?? $this->getContext($context, "listgrades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            echo " <tr>

        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "examname", []), "subject", []), "html", null, true);
            echo "</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "teacher", []), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grade"], "pupil", []), "name", []), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", []), "html", null, true);
            echo "</td>
        ";
            // line 44
            echo "    </tr>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo " </table> </div>
    </div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams/grade/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 47,  146 => 44,  142 => 41,  138 => 40,  134 => 39,  130 => 38,  123 => 36,  94 => 10,  90 => 8,  81 => 7,  70 => 6,  66 => 5,  61 => 4,  52 => 3,  30 => 1,);
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

{% block script %}
    <link rel=\"stylesheet\" href=\"{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}\">
    <script src=\"{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}\"></script>
    <script src=\"{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}\"></script> {% endblock %}
{% block content %}


<section class=\"hero-wrap hero-wrap-2\" style=\"background-image:\"{{ asset('web/images/bg_2.jpg') }}\";\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-9 ftco-animate text-center\">
                <h1 class=\"mb-2 bread\">Check your grades!</h1>
                <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span>Check grades <i class=\"ion-ios-arrow-forward\"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section>
    <br/>
</section>
<section>
    <div class=\"container\">
    <div class=\"row justify-content-center\">
        <table class=\"table table-striped table-hover table-bordered table-inbox table-condensed\" >
    <tr>

        <th>Subject</th>
        <th>Teacher</th>
        <th>Pupil</th>
        <th>Grade</th>

    </tr>
    {% for grade in listgrades %} <tr>

        <td>{{ grade.examname.subject }}</td>
        <td>{{ grade.teacher}}</td>
        <td>{{ grade.pupil.name}}</td>
        <td>{{ grade.grade}}</td>
        {#<td> <a href=\"{{ path('updategrades',{'id':grade.idg}) }}\">Update</a></td>
        <td> <a href=\"{{ path('deletegrades',{'id':grade.idg}) }}\">Delete</a></td>#}
    </tr>


    {% endfor %} </table> </div>
    </div>
</section>

{% endblock %}", "@Exams/grade/liste.html.twig", "/home/wael/34/finalweb/Binder/src/ExamsBundle/Resources/views/grade/liste.html.twig");
    }
}

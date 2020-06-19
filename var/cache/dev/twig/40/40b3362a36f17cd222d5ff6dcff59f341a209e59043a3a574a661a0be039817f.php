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

/* @Exams/grade/update.html.twig */
class __TwigTemplate_4d582cdd89095cf7a436383fb138efa85c9421703f4c25845cfb23e499a81bb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams/grade/update.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "@Exams/grade/update.html.twig", 1);
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
        echo "    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"overlay\"></div>
                <div class=\"container\">
                    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                        <div class=\"col-md-9 ftco-animate text-center\">
                                <h1 class=\"mb-2 bread\">Update grades</h1>

                            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                            </div>
                        </div>
                    </div>

            </div>
        </section> </section>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams/grade/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  63 => 4,  54 => 3,  43 => 1,  41 => 2,  29 => 1,);
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
{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block content %}
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"overlay\"></div>
                <div class=\"container\">
                    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
                        <div class=\"col-md-9 ftco-animate text-center\">
                                <h1 class=\"mb-2 bread\">Update grades</h1>

                            {{ form(form)}}
                            </div>
                        </div>
                    </div>

            </div>
        </section> </section>
    </html>
{% endblock %}


{#<html>
<head>


</head>
<body><h1>Update a grade</h1>
<fieldset style=\"width: 50%\">
    <form method=\"POST\">
        Subject: <input type=\"text\" name=\"subject\" value=\"{{ grade.subject }}\">
        <br/>
        Session: <input type=\"text\" name=\"session\" value=\"{{ grade.idExam.session }}\"><br/>
        Teacher: <input type=\"text\" name=\"teacher\" value=\"{{ grade.teacher }}\"><br/>
        Pupil: <input type=\"text\" name=\"pupil\" value=\"{{ grade.pupil }}\"><br/>
        Grade: <input type=\"text\" name=\"grade\" value=\"{{ grade.grade }}\"><br/>
        <br/>

        <input type=\"submit\" value=\"Enregistrer\">
    </form>
</fieldset>

</body>

</html>#}", "@Exams/grade/update.html.twig", "/home/wael/34/final/Binder/src/ExamsBundle/Resources/views/grade/update.html.twig");
    }
}

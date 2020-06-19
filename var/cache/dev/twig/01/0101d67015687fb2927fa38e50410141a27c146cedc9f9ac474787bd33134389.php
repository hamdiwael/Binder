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

/* @Exams\Default\index.html.twig */
class __TwigTemplate_4fa73db2e5c1ff4da94f4199c83f044a36ca2f80ce76d6c3a8db8aead45f1c54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\Default\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Exams\\Default\\index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Exams\\Default\\index.html.twig", 1);
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
        echo "    <section class=\"home-slider owl-carousel\">

        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        echo "\">

        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_3.jpg"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_4.jpg"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_5.jpg"), "html", null, true);
        echo "\">

        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/bg_2.jpg"), "html", null, true);
        echo "\">

    </section>
    <section class=\"ftco-services ftco-no-pb\">
        <div class=\"container-wrap\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-teacher\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Certified Teachers</h3>
                            <p>We choose our teachers very carefully. We care about the quality of education your child gets.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-reading\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Special Education</h3>
                            <p>We change the game. We teach children in ways that are both fun and interesting to keep the kids on their toes.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-books\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Book &amp; Library</h3>
                            <p>We offer a wide range of books to keep the children entertained. We believe it's necessary for kids to read.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-diploma\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Certification</h3>
                            <p>We have many certifications to prove the quality of our work and what we stand for. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Exams\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 11,  77 => 9,  73 => 8,  69 => 7,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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
    <section class=\"home-slider owl-carousel\">

        <img src=\"{{ asset('images/bg_1.jpg') }}\">

        <img src=\"{{ asset('images/bg_3.jpg') }}\">
        <img src=\"{{ asset('images/bg_4.jpg') }}\">
        <img src=\"{{ asset('images/bg_5.jpg') }}\">

        <img src=\"{{ asset('images/bg_2.jpg') }}\">

    </section>
    <section class=\"ftco-services ftco-no-pb\">
        <div class=\"container-wrap\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-teacher\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Certified Teachers</h3>
                            <p>We choose our teachers very carefully. We care about the quality of education your child gets.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-reading\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Special Education</h3>
                            <p>We change the game. We teach children in ways that are both fun and interesting to keep the kids on their toes.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-books\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Book &amp; Library</h3>
                            <p>We offer a wide range of books to keep the children entertained. We believe it's necessary for kids to read.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary\">
                    <div class=\"media block-6 d-block text-center\">
                        <div class=\"icon d-flex justify-content-center align-items-center\">
                            <span class=\"flaticon-diploma\"></span>
                        </div>
                        <div class=\"media-body p-2 mt-3\">
                            <h3 class=\"heading\">Certification</h3>
                            <p>We have many certifications to prove the quality of our work and what we stand for. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "@Exams\\Default\\index.html.twig", "/home/wael/34/finalweb/Binder/src/ExamsBundle/Resources/views/Default/index.html.twig");
    }
}

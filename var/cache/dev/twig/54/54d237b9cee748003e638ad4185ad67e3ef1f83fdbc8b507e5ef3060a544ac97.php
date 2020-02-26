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

/* @class/Default/index.html.twig */
class __TwigTemplate_e8652faef23ba816dcf55be4fa8f4ba02eececd65a83f53d0c50fed657c3f16f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@class/Default/index.html.twig"));

        // line 1
        echo "<
<html>
<head>
    <title>class</title></head>
<body>
<center>
    <fieldset style=\"width: 90%\">
        <br>
        <br>
        <br>
        <br><br>




        <table border=\"1\" width=\"70%\">
            <tr>

                <th>day</th>
                <th>subject</th>
                <th>time</th>
                <th>class name</th>

            </tr>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["time"]);
        foreach ($context['_seq'] as $context["_key"] => $context["time"]) {
            // line 26
            echo "            <tr >

                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "day", []), "html", null, true);
            echo "        </td>

                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "subject", []), "html", null, true);
            echo "         </td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["time"], "time", []), "html", null, true);
            echo "        </td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time"], "classe", []), "nom", []), "html", null, true);
            echo "        </td>




                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            </tr>
        </table>
    </fieldset>
</center>
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@class/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  83 => 32,  79 => 31,  75 => 30,  70 => 28,  66 => 26,  62 => 25,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<
<html>
<head>
    <title>class</title></head>
<body>
<center>
    <fieldset style=\"width: 90%\">
        <br>
        <br>
        <br>
        <br><br>




        <table border=\"1\" width=\"70%\">
            <tr>

                <th>day</th>
                <th>subject</th>
                <th>time</th>
                <th>class name</th>

            </tr>
            {% for time in time  %}
            <tr >

                <td>{{ time.day }}        </td>

                <td>{{ time.subject }}         </td>
                <td>{{ time.time }}        </td>
                <td>{{ time.classe.nom }}        </td>




                {% endfor %}

            </tr>
        </table>
    </fieldset>
</center>
</body>

</html>

", "@class/Default/index.html.twig", "C:\\XAMPP\\htdocs\\Binder\\src\\classBundle\\Resources\\views\\Default\\index.html.twig");
    }
}

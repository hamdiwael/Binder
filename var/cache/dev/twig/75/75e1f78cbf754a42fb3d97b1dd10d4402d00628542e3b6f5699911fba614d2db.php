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

/* @Bin/abscense/calendar.html.twig */
class __TwigTemplate_a17837a43a55400079108edd0cb78b514ecb7a83f02cad808e04fbc948a9c610 extends \Twig\Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/calendar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Bin/abscense/calendar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Bin/abscense/calendar.html.twig", 2);
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
        echo "<!DOCTYPE html>
<html>
<head>

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css"), "html", null, true);
        echo "\" rel='stylesheet' />
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales-all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js"), "html", null, true);
        echo "\"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            //   var initialLocaleCode = 'en';
            //  var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listWeek'
                },
                views: {
                    dayGridMonth: { buttonText :'Month view' },
                    listWeek: { buttonText: 'Week view' }
                },
                defaultDate: new Date(),

                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                abscenseLimit: true, // allow \"more\" link when too many events
                abscense: [
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["abscense"] ?? $this->getContext($context, "abscense")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 46
            echo "                    {
                        title: '";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "pupl", []), "html", null, true);
            echo "',


                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                ],
                backgroundColor: '#1f2e86',
                eventTextColor: '#1f2e86',
                textColor: '#378006',
            });

            calendar.render();
        });

    </script>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }

    </style>
</head>
<body>


<div class=\"container-fluid\">
    <div class=\"row\">

        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div id='calendar'>
                <a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listabsencesFront");
        echo "\">
                    <button type=\"button\" style=\"color: white;background-color: #6dc8c4\" class=\"btn btn-success\" >Back to the list</button></a>

        </div>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Bin/abscense/calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 96,  154 => 52,  143 => 47,  140 => 46,  136 => 45,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  60 => 4,  51 => 3,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}
{% block content %}
<!DOCTYPE html>
<html>
<head>

    <link rel=\"stylesheet\" href=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}\">
    <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css') }}\" rel=\"stylesheet\" >
    <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css')}}\" rel='stylesheet' />
    <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css')}}\" rel='stylesheet' />
    <link href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css')}}\" rel='stylesheet' />
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js')}}\"></script>
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales-all.min.js')}}\"></script>
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js')}}\"></script>
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js')}}\"></script>
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js')}}\"></script>
    <script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js')}}\"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            //   var initialLocaleCode = 'en';
            //  var localeSelectorEl = document.getElementById('locale-selector');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listWeek'
                },
                views: {
                    dayGridMonth: { buttonText :'Month view' },
                    listWeek: { buttonText: 'Week view' }
                },
                defaultDate: new Date(),

                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                abscenseLimit: true, // allow \"more\" link when too many events
                abscense: [
                    {% for a in abscense %}
                    {
                        title: '{{a.pupl}}',


                    },
                    {% endfor %}

                ],
                backgroundColor: '#1f2e86',
                eventTextColor: '#1f2e86',
                textColor: '#378006',
            });

            calendar.render();
        });

    </script>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #top {
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            font-size: 12px;
        }

        #calendar {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 10px;
        }

    </style>
</head>
<body>


<div class=\"container-fluid\">
    <div class=\"row\">

        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
            <div id='calendar'>
                <a href=\"{{ path('listabsencesFront') }}\">
                    <button type=\"button\" style=\"color: white;background-color: #6dc8c4\" class=\"btn btn-success\" >Back to the list</button></a>

        </div>
        </div>
    </div>
</div>
</body>
</html>
{% endblock %}

", "@Bin/abscense/calendar.html.twig", "/home/wael/34/final/Binder/src/BinBundle/Resources/views/abscense/calendar.html.twig");
    }
}

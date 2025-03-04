<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* services/index.html.twig */
class __TwigTemplate_82b76c5506206f5615a924b585a8c7fb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "services/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <!-- Add FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        /* Custom card styling */
        .static-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .static-card .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .static-card .card-icon {
            font-size: 24px;
            color: #4169E1; /* Blue color for the medical icon */
            margin-right: 10px;
        }

        .static-card .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none; /* Remove underline from link */
        }

        .static-card .card-title:hover {
            color: #4169E1; /* Blue color on hover */
        }

        .static-card .card-description {
            font-size: 16px;
            color: #666;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        yield "<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title mb-4\">Gestion des services</h5>

                            <!-- Static Cards -->
                            <div class=\"row\">
                                <div class=\"col-12 mb-4\">
                                    <div class=\"static-card\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-hospital card-icon\"></i> <!-- Medical icon -->
                                            <a href=\"#\" class=\"card-title\">Nom du Service 1</a> <!-- Clickable title -->
                                        </div>
                                        <p class=\"card-description\">
                                            Ce service coûte <strong>50 €</strong> et est disponible du <strong>01/01/2023</strong> au <strong>31/12/2023</strong>.
                                        </p>
                                    </div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    <div class=\"static-card\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-hospital card-icon\"></i> <!-- Medical icon -->
                                            <a href=\"#\" class=\"card-title\">Nom du Service 2</a> <!-- Clickable title -->
                                        </div>
                                        <p class=\"card-description\">
                                            Ce service coûte <strong>75 €</strong> et est disponible du <strong>15/03/2023</strong> au <strong>15/06/2023</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "services/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  145 => 49,  132 => 48,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Add FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        /* Custom card styling */
        .static-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .static-card .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .static-card .card-icon {
            font-size: 24px;
            color: #4169E1; /* Blue color for the medical icon */
            margin-right: 10px;
        }

        .static-card .card-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none; /* Remove underline from link */
        }

        .static-card .card-title:hover {
            color: #4169E1; /* Blue color on hover */
        }

        .static-card .card-description {
            font-size: 16px;
            color: #666;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title mb-4\">Gestion des services</h5>

                            <!-- Static Cards -->
                            <div class=\"row\">
                                <div class=\"col-12 mb-4\">
                                    <div class=\"static-card\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-hospital card-icon\"></i> <!-- Medical icon -->
                                            <a href=\"#\" class=\"card-title\">Nom du Service 1</a> <!-- Clickable title -->
                                        </div>
                                        <p class=\"card-description\">
                                            Ce service coûte <strong>50 €</strong> et est disponible du <strong>01/01/2023</strong> au <strong>31/12/2023</strong>.
                                        </p>
                                    </div>
                                </div>

                                <div class=\"col-12 mb-4\">
                                    <div class=\"static-card\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-hospital card-icon\"></i> <!-- Medical icon -->
                                            <a href=\"#\" class=\"card-title\">Nom du Service 2</a> <!-- Clickable title -->
                                        </div>
                                        <p class=\"card-description\">
                                            Ce service coûte <strong>75 €</strong> et est disponible du <strong>15/03/2023</strong> au <strong>15/06/2023</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "services/index.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\index.html.twig");
    }
}

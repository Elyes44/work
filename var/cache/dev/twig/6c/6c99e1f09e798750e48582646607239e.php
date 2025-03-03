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

/* services/service_detail.html.twig */
class __TwigTemplate_751495d88236b76986606fe9ce5042a0 extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/service_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/service_detail.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "services/service_detail.html.twig", 1);
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
    <style>
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .details-section {
            margin-bottom: 15px;
        }
        .details-section strong {
            width: 150px;
            display: inline-block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
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

        // line 22
        yield "    <div class=\"container mt-4\">
        <h2 class=\"text-center mb-4\">Détails du Service</h2>

        <div class=\"row\">
            <div class=\"col-md-12 mb-3\">
                <div class=\"card shadow-sm p-3\">
                    <div class=\"details-section\">
                        <strong>Nom:</strong> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "
                    </div>
                    <div class=\"details-section\">
                        <strong>Contenu:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 32, $this->source); })()), "content", [], "any", false, false, false, 32), "html", null, true);
        yield "
                    </div>
                    <div class=\"details-section\">
                        <strong>Créé le:</strong> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 35, $this->source); })()), "created", [], "any", false, false, false, 35), "d/m/Y H:i"), "html", null, true);
        yield "
                    </div>
                    <div class=\"details-section\">
                        <strong>Mis à jour le:</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 38, $this->source); })()), "updated", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
        yield "
                    </div>
                    <div class=\"details-section\">
                        <strong>Catégorie:</strong> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 41, $this->source); })()), "categorie", [], "any", false, false, false, 41), "html", null, true);
        yield "
                    </div>

                    <div class=\"details-section\">
                        <strong>Durée:</strong> ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 45, $this->source); })()), "duree", [], "any", false, false, false, 45), "html", null, true);
        yield " heures
                    </div>
                    <div class=\"details-section\">
                        <strong>Prix:</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 48, $this->source); })()), "prix", [], "any", false, false, false, 48), "html", null, true);
        yield " €
                    </div>
                    <div class=\"mt-3\">
                        <!-- Use correct route names -->
                        <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_services", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Editer</a>
                        <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_services", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"btn btn-danger\">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>

        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_services");
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la liste des services</a>
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
        return "services/service_detail.html.twig";
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
        return array (  184 => 59,  175 => 53,  171 => 52,  164 => 48,  158 => 45,  151 => 41,  145 => 38,  139 => 35,  133 => 32,  127 => 29,  118 => 22,  105 => 21,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .details-section {
            margin-bottom: 15px;
        }
        .details-section strong {
            width: 150px;
            display: inline-block;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2 class=\"text-center mb-4\">Détails du Service</h2>

        <div class=\"row\">
            <div class=\"col-md-12 mb-3\">
                <div class=\"card shadow-sm p-3\">
                    <div class=\"details-section\">
                        <strong>Nom:</strong> {{ service.nom }}
                    </div>
                    <div class=\"details-section\">
                        <strong>Contenu:</strong> {{ service.content }}
                    </div>
                    <div class=\"details-section\">
                        <strong>Créé le:</strong> {{ service.created|date('d/m/Y H:i') }}
                    </div>
                    <div class=\"details-section\">
                        <strong>Mis à jour le:</strong> {{ service.updated|date('d/m/Y H:i') }}
                    </div>
                    <div class=\"details-section\">
                        <strong>Catégorie:</strong> {{ service.categorie }}
                    </div>

                    <div class=\"details-section\">
                        <strong>Durée:</strong> {{ service.duree }} heures
                    </div>
                    <div class=\"details-section\">
                        <strong>Prix:</strong> {{ service.prix }} €
                    </div>
                    <div class=\"mt-3\">
                        <!-- Use correct route names -->
                        <a href=\"{{ path('update_services', {'id': service.id}) }}\" class=\"btn btn-primary\">Editer</a>
                        <a href=\"{{ path('delete_services', {'id': service.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>

        <a href=\"{{ path('all_services') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste des services</a>
    </div>
{% endblock %}
", "services/service_detail.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\service_detail.html.twig");
    }
}

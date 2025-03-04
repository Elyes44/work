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

/* services/allserives.html.twig */
class __TwigTemplate_bdca80fd86c1f0cbf8adc0aba0c7388a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/allserives.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/allserives.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "services/allserives.html.twig", 1);
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
        .card-service {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card-service:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-service .card-body {
            padding: 20px;
        }

        .card-service .service-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-service .service-icon {
            font-size: 24px;
            color: #4169E1; /* Blue color for the medical icon */
            margin-right: 10px;
        }

        .card-service .service-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none; /* Remove underline from link */
        }

        .card-service .service-title:hover {
            color: #4169E1; /* Blue color on hover */
        }

        .card-service .service-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .card-service .service-description strong {
            color: #333;
        }

        .card-service .service-actions {
            border-top: 1px solid #e0e0e0;
            padding-top: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .card-service .usage-percentage {
            font-size: 16px;
            color: #333;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h3 class=\"card-title mb-4\">Gestion des services</h3>

                            <!-- Services List -->
                            <div class=\"row\">
                                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["servicesWithUsage"]) || array_key_exists("servicesWithUsage", $context) ? $context["servicesWithUsage"] : (function () { throw new RuntimeError('Variable "servicesWithUsage" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["serviceWithUsage"]) {
            // line 91
            yield "                                <div class=\"col-12 mb-4\">
                                    <div class=\"card card-service\">
                                        <div class=\"card-body\">
                                            <!-- Service Header with Icon and Title -->
                                            <div class=\"service-header\">
                                                <i class=\"fas fa-hospital service-icon\"></i> <!-- Medical icon -->
                                                <a href=\"#\" class=\"service-title\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
            yield "</a> <!-- Clickable title -->
                                            </div>

                                            <!-- Service Description -->
                                            <p class=\"service-description\">
                                                <strong>Contenu :</strong> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 102), "content", [], "any", false, false, false, 102), "html", null, true);
            yield "<br>
                                                <strong>Prix :</strong> ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 103), "prix", [], "any", false, false, false, 103), "html", null, true);
            yield " €<br>
                                                <strong>Durée :</strong> ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 104), "duree", [], "any", false, false, false, 104), "html", null, true);
            yield " minutes<br>
                                                <strong>Disponible à domicile :</strong> ";
            // line 105
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 105), "dispoDomicile", [], "any", false, false, false, 105)) ? ("Oui") : ("Non"));
            yield "<br>
                                                <strong>Date de création :</strong> ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 106), "created", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
            yield "<br>
                                                <strong>Date de mise à jour :</strong> ";
            // line 107
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 107), "updated", [], "any", false, false, false, 107)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 107), "updated", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "<br>
                                                <strong>Catégorie :</strong> ";
            // line 108
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, true, false, 108), "categorie", [], "any", true, true, false, 108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 108), "categorie", [], "any", false, false, false, 108)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "service", [], "any", false, false, false, 108), "categorie", [], "any", false, false, false, 108), "html", null, true)) : ("N/A"));
            yield "
                                            </p>

                                            <!-- Usage Percentage -->
                                            <div class=\"service-actions\">
                                                <div class=\"usage-percentage\">
                                                    <strong>Taux d'utilisation :</strong> ";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["serviceWithUsage"], "usagePercentage", [], "any", false, false, false, 114), 2), "html", null, true);
            yield "%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            $context['_iterated'] = true;
        }
        // line 126
        if (!$context['_iterated']) {
            // line 121
            yield "                                <div class=\"col-12\">
                                    <div class=\"alert alert-info\" role=\"alert\">
                                        Aucune services trouvée.
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['serviceWithUsage'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                            </div>

                            <!-- Pagination -->
                            ";
        // line 130
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 130, $this->source); })())) > 0)) {
            // line 131
            yield "                            <div class=\"pagination justify-content-center mt-4\">
                                <ul class=\"pagination\">
                                    <!-- Previous Link -->
                                    ";
            // line 134
            if ((array_key_exists("previous", $context) && (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 134, $this->source); })()))) {
                // line 135
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 136
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pourcentageservices");
                yield "?page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 136, $this->source); })()), "html", null, true);
                yield "&search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "get", ["search"], "method", false, false, false, 136), "html", null, true);
                yield "\">Précédent</a>
                                        </li>
                                    ";
            }
            // line 139
            yield "                                    <!-- Current Page -->
                                    <li class=\"page-item active\">
                                        <span class=\"page-link\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 141, $this->source); })()), "html", null, true);
            yield "</span>
                                    </li>
                                    <!-- Next Link -->
                                    ";
            // line 144
            if ((array_key_exists("next", $context) && (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 144, $this->source); })()))) {
                // line 145
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 146
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pourcentageservices");
                yield "?page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 146, $this->source); })()), "html", null, true);
                yield "&search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "query", [], "any", false, false, false, 146), "get", ["search"], "method", false, false, false, 146), "html", null, true);
                yield "\">Suivant</a>
                                        </li>
                                    ";
            }
            // line 149
            yield "                                </ul>
                            </div>
                            <!-- Page Indicator -->
                            <div class=\"text-center mt-2\">
                                Page ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 153, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 153, $this->source); })()), "getPageCount", [], "method", false, false, false, 153), "html", null, true);
            yield "
                            </div>
                            ";
        }
        // line 156
        yield "                        </div>
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
        return "services/allserives.html.twig";
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
        return array (  332 => 156,  324 => 153,  318 => 149,  308 => 146,  305 => 145,  303 => 144,  297 => 141,  293 => 139,  283 => 136,  280 => 135,  278 => 134,  273 => 131,  271 => 130,  266 => 127,  255 => 121,  253 => 126,  242 => 114,  233 => 108,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  213 => 103,  209 => 102,  201 => 97,  193 => 91,  188 => 90,  175 => 79,  162 => 78,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <!-- Add FontAwesome for icons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        /* Custom card styling */
        .card-service {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card-service:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-service .card-body {
            padding: 20px;
        }

        .card-service .service-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-service .service-icon {
            font-size: 24px;
            color: #4169E1; /* Blue color for the medical icon */
            margin-right: 10px;
        }

        .card-service .service-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none; /* Remove underline from link */
        }

        .card-service .service-title:hover {
            color: #4169E1; /* Blue color on hover */
        }

        .card-service .service-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .card-service .service-description strong {
            color: #333;
        }

        .card-service .service-actions {
            border-top: 1px solid #e0e0e0;
            padding-top: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .card-service .usage-percentage {
            font-size: 16px;
            color: #333;
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin-top: 10px;
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
                            <h3 class=\"card-title mb-4\">Gestion des services</h3>

                            <!-- Services List -->
                            <div class=\"row\">
                                {% for serviceWithUsage in servicesWithUsage %}
                                <div class=\"col-12 mb-4\">
                                    <div class=\"card card-service\">
                                        <div class=\"card-body\">
                                            <!-- Service Header with Icon and Title -->
                                            <div class=\"service-header\">
                                                <i class=\"fas fa-hospital service-icon\"></i> <!-- Medical icon -->
                                                <a href=\"#\" class=\"service-title\">{{ serviceWithUsage.service.nom }}</a> <!-- Clickable title -->
                                            </div>

                                            <!-- Service Description -->
                                            <p class=\"service-description\">
                                                <strong>Contenu :</strong> {{ serviceWithUsage.service.content }}<br>
                                                <strong>Prix :</strong> {{ serviceWithUsage.service.prix }} €<br>
                                                <strong>Durée :</strong> {{ serviceWithUsage.service.duree }} minutes<br>
                                                <strong>Disponible à domicile :</strong> {{ serviceWithUsage.service.dispoDomicile ? 'Oui' : 'Non' }}<br>
                                                <strong>Date de création :</strong> {{ serviceWithUsage.service.created|date('d/m/Y') }}<br>
                                                <strong>Date de mise à jour :</strong> {{ serviceWithUsage.service.updated ? serviceWithUsage.service.updated|date('d/m/Y') : 'N/A' }}<br>
                                                <strong>Catégorie :</strong> {{ serviceWithUsage.service.categorie ?? 'N/A' }}
                                            </p>

                                            <!-- Usage Percentage -->
                                            <div class=\"service-actions\">
                                                <div class=\"usage-percentage\">
                                                    <strong>Taux d'utilisation :</strong> {{ serviceWithUsage.usagePercentage|number_format(2) }}%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% else %}
                                <div class=\"col-12\">
                                    <div class=\"alert alert-info\" role=\"alert\">
                                        Aucune services trouvée.
                                    </div>
                                </div>
                                {% endfor %}
                            </div>

                            <!-- Pagination -->
                            {% if services|length > 0 %}
                            <div class=\"pagination justify-content-center mt-4\">
                                <ul class=\"pagination\">
                                    <!-- Previous Link -->
                                    {% if previous is defined and previous %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('pourcentageservices') }}?page={{ previous }}&search={{ app.request.query.get('search') }}\">Précédent</a>
                                        </li>
                                    {% endif %}
                                    <!-- Current Page -->
                                    <li class=\"page-item active\">
                                        <span class=\"page-link\">{{ currentPage }}</span>
                                    </li>
                                    <!-- Next Link -->
                                    {% if next is defined and next %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('pourcentageservices') }}?page={{ next }}&search={{ app.request.query.get('search') }}\">Suivant</a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                            <!-- Page Indicator -->
                            <div class=\"text-center mt-2\">
                                Page {{ currentPage }} sur {{ services.getPageCount() }}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "services/allserives.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\allserives.html.twig");
    }
}

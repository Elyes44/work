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
class __TwigTemplate_e84eec4a0ff7152e805dc823c7bd7661 extends Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/kk.css"), "html", null, true);
        yield "\">
    <!-- Ajoute FontAwesome pour les icônes -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        /* Styles pour les boutons */
        .btn-like, .btn-comment, .btn-share {
            border: none;
            background: none;
            color: #666;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center; /* Centrer le texte et l'icône verticalement */
        }
    
        .btn-like:hover, .btn-comment:hover, .btn-share:hover {
            color: #1877f2; /* Couleur bleue Facebook */
        }
    
        .btn-like i, .btn-comment i, .btn-share i {
            margin-right: 5px;
        }
    
        /* Style pour la section des actions */
        .services-actions {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
            display: flex;
            justify-content: center; /* Centrer les boutons horizontalement */
            gap: 20px; /* Espacement entre les boutons */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
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

        // line 41
        yield "<div class=\"content-page\">
    <div class=\"content\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title mb-4\">Gestion des services</h5>

                            <!-- Formulaire de recherche -->
                            <form action=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" method=\"GET\" class=\"mb-4\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher une services par nom ou type...\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "query", [], "any", false, false, false, 53), "get", ["search"], "method", false, false, false, 53), "html", null, true);
        yield "\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-search\"></i> Rechercher
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Fin du formulaire de recherche -->

                            <!-- Liste verticale des services -->
                            <div class=\"row\">
                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["services"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["services"]) {
            // line 66
            yield "                                <div class=\"col-12 mb-4\"> <!-- Chaque service prend toute la largeur -->
                                    <div class=\"card card-services\">
                                        <div class=\"card-body\">
                                            <!-- Image de la services -->
                                            <div class=\"services-image\" style=\"background-image: url('https://via.placeholder.com/300');\"></div>
                                            <!-- Nom de la services -->
                                            <h5 class=\"services-nom\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "</h5>
                                            <!-- Information sur la services -->
                                            <p class=\"services-type\"><strong>Type :</strong> ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "content", [], "any", false, false, false, 74), "html", null, true);
            yield "</p>
                                            <p class=\"services-date\"><strong>Date de plantation :</strong> ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["services"], "created", [], "any", false, false, false, 75), "d-m-Y"), "html", null, true);
            yield "</p>
                                            <!-- Groupe sanguin du rendez vous  -->
                                            
                                            <!-- Boutons d'actions -->
                                            <div class=\"services-actions\">
                                                <!-- Boutons personnalisés -->
                                                <button class=\"btn btn-like\">
                                                    <i class=\"fas fa-thumbs-up\"></i> J'aime
                                                </button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
            $context['_iterated'] = true;
        }
        // line 95
        if (!$context['_iterated']) {
            // line 90
            yield "                                <div class=\"col-12\">
                                    <div class=\"alert alert-info\" role=\"alert\">
                                        Aucune services trouvée.
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['services'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                            </div>
                            <!-- Fin de la liste verticale -->

                            <!-- Pagination -->
                            ";
        // line 100
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 100, $this->source); })())) > 0)) {
            // line 101
            yield "                            <div class=\"pagination justify-content-center mt-4\">
                                <ul class=\"pagination\">
                                    <!-- Lien \"Précédent\" -->
                                    ";
            // line 104
            if ((array_key_exists("previous", $context) && (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 104, $this->source); })()))) {
                // line 105
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 106
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
                yield "?page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "&search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "query", [], "any", false, false, false, 106), "get", ["search"], "method", false, false, false, 106), "html", null, true);
                yield "\">Précédent</a>
                                        </li>
                                    ";
            }
            // line 109
            yield "                                    <!-- Page actuelle -->
                                    <li class=\"page-item active\">
                                        <span class=\"page-link\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 111, $this->source); })()), "html", null, true);
            yield "</span>
                                    </li>
                                    <!-- Lien \"Suivant\" -->
                                    ";
            // line 114
            if ((array_key_exists("next", $context) && (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 114, $this->source); })()))) {
                // line 115
                yield "                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"";
                // line 116
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
                yield "?page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 116, $this->source); })()), "html", null, true);
                yield "&search=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "query", [], "any", false, false, false, 116), "get", ["search"], "method", false, false, false, 116), "html", null, true);
                yield "\">Suivant</a>
                                        </li>
                                    ";
            }
            // line 119
            yield "                                </ul>
                            </div>
                            <!-- Indicateur de page -->
                            <div class=\"text-center mt-2\">
                                Page ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 123, $this->source); })()), "html", null, true);
            yield " sur ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 123, $this->source); })()), "getPageCount", [], "method", false, false, false, 123), "html", null, true);
            yield "
                            </div>
                            ";
        }
        // line 126
        yield "                            <!-- Fin de la pagination -->
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
        return array (  293 => 126,  285 => 123,  279 => 119,  269 => 116,  266 => 115,  264 => 114,  258 => 111,  254 => 109,  244 => 106,  241 => 105,  239 => 104,  234 => 101,  232 => 100,  226 => 96,  215 => 90,  213 => 95,  194 => 75,  190 => 74,  185 => 72,  177 => 66,  172 => 65,  157 => 53,  152 => 51,  140 => 41,  127 => 40,  82 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/kk.css') }}\">
    <!-- Ajoute FontAwesome pour les icônes -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        /* Styles pour les boutons */
        .btn-like, .btn-comment, .btn-share {
            border: none;
            background: none;
            color: #666;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center; /* Centrer le texte et l'icône verticalement */
        }
    
        .btn-like:hover, .btn-comment:hover, .btn-share:hover {
            color: #1877f2; /* Couleur bleue Facebook */
        }
    
        .btn-like i, .btn-comment i, .btn-share i {
            margin-right: 5px;
        }
    
        /* Style pour la section des actions */
        .services-actions {
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
            display: flex;
            justify-content: center; /* Centrer les boutons horizontalement */
            gap: 20px; /* Espacement entre les boutons */
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

                            <!-- Formulaire de recherche -->
                            <form action=\"{{ path('app_services') }}\" method=\"GET\" class=\"mb-4\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Rechercher une services par nom ou type...\" value=\"{{ app.request.query.get('search') }}\">
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\">
                                            <i class=\"fas fa-search\"></i> Rechercher
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Fin du formulaire de recherche -->

                            <!-- Liste verticale des services -->
                            <div class=\"row\">
                                {% for services in services %}
                                <div class=\"col-12 mb-4\"> <!-- Chaque service prend toute la largeur -->
                                    <div class=\"card card-services\">
                                        <div class=\"card-body\">
                                            <!-- Image de la services -->
                                            <div class=\"services-image\" style=\"background-image: url('https://via.placeholder.com/300');\"></div>
                                            <!-- Nom de la services -->
                                            <h5 class=\"services-nom\">{{ services.nom }}</h5>
                                            <!-- Information sur la services -->
                                            <p class=\"services-type\"><strong>Type :</strong> {{ services.content }}</p>
                                            <p class=\"services-date\"><strong>Date de plantation :</strong> {{ services.created|date('d-m-Y') }}</p>
                                            <!-- Groupe sanguin du rendez vous  -->
                                            
                                            <!-- Boutons d'actions -->
                                            <div class=\"services-actions\">
                                                <!-- Boutons personnalisés -->
                                                <button class=\"btn btn-like\">
                                                    <i class=\"fas fa-thumbs-up\"></i> J'aime
                                                </button>
                                                
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
                            <!-- Fin de la liste verticale -->

                            <!-- Pagination -->
                            {% if services|length > 0 %}
                            <div class=\"pagination justify-content-center mt-4\">
                                <ul class=\"pagination\">
                                    <!-- Lien \"Précédent\" -->
                                    {% if previous is defined and previous %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('app_services') }}?page={{ previous }}&search={{ app.request.query.get('search') }}\">Précédent</a>
                                        </li>
                                    {% endif %}
                                    <!-- Page actuelle -->
                                    <li class=\"page-item active\">
                                        <span class=\"page-link\">{{ currentPage }}</span>
                                    </li>
                                    <!-- Lien \"Suivant\" -->
                                    {% if next is defined and next %}
                                        <li class=\"page-item\">
                                            <a class=\"page-link\" href=\"{{ path('app_services') }}?page={{ next }}&search={{ app.request.query.get('search') }}\">Suivant</a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                            <!-- Indicateur de page -->
                            <div class=\"text-center mt-2\">
                                Page {{ currentPage }} sur {{ services.getPageCount() }}
                            </div>
                            {% endif %}
                            <!-- Fin de la pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "services/index.html.twig", "C:\\Users\\medel\\Desktop\\ons\\ons\\templates\\services\\index.html.twig");
    }
}

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

/* rendezVous/index.html.twig */
class __TwigTemplate_6ffe091ee2af11a6847d00f15d149e57 extends Template
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
            'section' => [$this, 'block_section'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/index.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "rendezVous/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_section(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 4
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Liste des Rendez-vous</h1>

        ";
        // line 8
        yield "        <div class=\"row mb-4\">
            <div class=\"col-md-6 offset-md-3\">
                <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_search");
        yield "\" method=\"get\" class=\"form-inline\">
                    <div class=\"input-group w-100\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher par nom...\" value=\"";
        // line 12
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 24
        yield "        <div class=\"text-right mb-4\">
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rendezVous");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un Rendez-vous
            </a>
        </div>

        ";
        // line 31
        yield "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Date et Heure de Début</th>
                    <th>Date et Heure de Fin</th>
                    <th>Service</th>
                    <th>Lieu</th>
                    <th>Antécédents médicaux</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["RendezVous"]) || array_key_exists("RendezVous", $context) ? $context["RendezVous"] : (function () { throw new RuntimeError('Variable "RendezVous" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rendezVous"]) {
            // line 45
            yield "                    <tr>
                        <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "NomClient", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                        <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "start", [], "any", false, false, false, 47), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "end", [], "any", false, false, false, 48), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "services", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                        <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "lieu", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                        <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "adresse", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 54
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updaterendez", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\" style=\"padding: 0.25rem 0.5rem; font-size: 0.875rem;\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>

                            ";
            // line 59
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleterendez", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rendezVous"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm\" style=\"padding: 0.25rem 0.5rem; font-size: 0.875rem;\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?');\">
                                <i class=\"fas fa-trash\"></i> Supprimer
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 68
        if (!$context['_iterated']) {
            // line 65
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun rendez-vous trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rendezVous'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "            </tbody>
        </table>

        ";
        // line 73
        yield "        <div class=\"d-flex justify-content-center\">
            ";
        // line 74
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["RendezVous"]) || array_key_exists("RendezVous", $context) ? $context["RendezVous"] : (function () { throw new RuntimeError('Variable "RendezVous" does not exist.', 74, $this->source); })()));
        yield "
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
        return "rendezVous/index.html.twig";
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
        return array (  201 => 74,  198 => 73,  193 => 69,  184 => 65,  182 => 68,  171 => 59,  163 => 54,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  135 => 45,  130 => 44,  115 => 31,  107 => 25,  104 => 24,  90 => 12,  85 => 10,  81 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home.html.twig' %}

{% block section %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Liste des Rendez-vous</h1>

        {# Search Form #}
        <div class=\"row mb-4\">
            <div class=\"col-md-6 offset-md-3\">
                <form action=\"{{ path('app_search') }}\" method=\"get\" class=\"form-inline\">
                    <div class=\"input-group w-100\">
                        <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Rechercher par nom...\" value=\"{{ searchTerm ?? '' }}\">
                        <div class=\"input-group-append\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {# Add Rendez-vous Button #}
        <div class=\"text-right mb-4\">
            <a href=\"{{ path('add_rendezVous') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un Rendez-vous
            </a>
        </div>

        {# Display Rendez-vous List #}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Nom du Client</th>
                    <th>Date et Heure de Début</th>
                    <th>Date et Heure de Fin</th>
                    <th>Service</th>
                    <th>Lieu</th>
                    <th>Antécédents médicaux</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for rendezVous in RendezVous %}
                    <tr>
                        <td>{{ rendezVous.NomClient }}</td>
                        <td>{{ rendezVous.start|date('d/m/Y H:i') }}</td>
                        <td>{{ rendezVous.end|date('d/m/Y H:i') }}</td>
                        <td>{{ rendezVous.services.nom }}</td>
                        <td>{{ rendezVous.lieu }}</td>
                        <td>{{ rendezVous.adresse }}</td>
                        <td>
                            {# Edit Button #}
                            <a href=\"{{ path('updaterendez', {'id': rendezVous.id}) }}\" class=\"btn btn-warning btn-sm\" style=\"padding: 0.25rem 0.5rem; font-size: 0.875rem;\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>

                            {# Delete Button #}
                            <a href=\"{{ path('deleterendez', {'id': rendezVous.id}) }}\" class=\"btn btn-danger btn-sm\" style=\"padding: 0.25rem 0.5rem; font-size: 0.875rem;\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?');\">
                                <i class=\"fas fa-trash\"></i> Supprimer
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center\">Aucun rendez-vous trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        {# Pagination #}
        <div class=\"d-flex justify-content-center\">
            {{ knp_pagination_render(RendezVous) }}
        </div>
    </div>
{% endblock %}", "rendezVous/index.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\rendezVous\\index.html.twig");
    }
}

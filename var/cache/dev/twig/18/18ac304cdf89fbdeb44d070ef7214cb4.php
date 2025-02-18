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

/* rendezVous/updaterendezVous.html.twig */
class __TwigTemplate_6910773209e955d66bb61641f5b00c1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/updaterendezVous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/updaterendezVous.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "rendezVous/updaterendezVous.html.twig", 1);
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
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm p-3\">
                    <h2 class=\"text-center\">Modifier un Rendez-vous</h2>

                    ";
        // line 11
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11)) > 0)) {
            // line 12
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 16
        yield "
                    ";
        // line 18
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

                        ";
        // line 21
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "services", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Services"]);
        yield "
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "services", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "services", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "services", [], "any", false, false, false, 25), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 30
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nomClient", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du Client"]);
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nomClient", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nomClient", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nomClient", [], "any", false, false, false, 34), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 39
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateHeure", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date et Heure"]);
        yield "
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateHeure", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateHeure", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateHeure", [], "any", false, false, false, 43), 'errors');
        yield "
                            </div>
                        </div>

";
        // line 48
        yield "<div class=\"form-group mb-3\">
    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => ("form-control-file" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
    <div class=\"invalid-feedback\">
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'errors');
        yield "
    </div>
    ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["RendezVous"]) || array_key_exists("RendezVous", $context) ? $context["RendezVous"] : (function () { throw new RuntimeError('Variable "RendezVous" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54)) {
            // line 55
            yield "        <div class=\"mt-2\">
            <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["RendezVous"]) || array_key_exists("RendezVous", $context) ? $context["RendezVous"] : (function () { throw new RuntimeError('Variable "RendezVous" does not exist.', 56, $this->source); })()), "image", [], "any", false, false, false, 56))), "html", null, true);
            yield "\" alt=\"Current Image\" width=\"100\">
        </div>
    ";
        }
        // line 59
        yield "</div>

                        ";
        // line 62
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lieu", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lieu"]);
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lieu", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "lieu", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "errors", [], "any", false, false, false, 64)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "lieu", [], "any", false, false, false, 66), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 71
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "adresse", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Antécédents médicaux"]);
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "adresse", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "adresse", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "errors", [], "any", false, false, false, 73)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "adresse", [], "any", false, false, false, 75), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 80
        yield "                        <button type=\"submit\" class=\"btn btn-primary w-100\">Mettre à jour</button>

                    ";
        // line 82
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        yield "
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
        return "rendezVous/updaterendezVous.html.twig";
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
        return array (  236 => 82,  232 => 80,  225 => 75,  220 => 73,  216 => 72,  213 => 71,  206 => 66,  201 => 64,  197 => 63,  194 => 62,  190 => 59,  184 => 56,  181 => 55,  179 => 54,  174 => 52,  169 => 50,  165 => 49,  162 => 48,  155 => 43,  150 => 41,  146 => 40,  143 => 39,  136 => 34,  131 => 32,  127 => 31,  124 => 30,  117 => 25,  112 => 23,  108 => 22,  105 => 21,  99 => 18,  96 => 16,  90 => 13,  87 => 12,  84 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home.html.twig' %}

{% block section %}
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm p-3\">
                    <h2 class=\"text-center\">Modifier un Rendez-vous</h2>

                    {# Display global form errors at the top #}
                    {% if form.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger\">
                            {{ form_errors(form) }}
                        </div>
                    {% endif %}

                    {# Form Start #}
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation'}}) }}

                        {# Services Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.services, 'Services', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.services, {'attr': {'class': 'form-control' ~ (form.services.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.services) }}
                            </div>
                        </div>

                        {# Nom Client Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.nomClient, 'Nom du Client', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.nomClient, {'attr': {'class': 'form-control' ~ (form.nomClient.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.nomClient) }}
                            </div>
                        </div>

                        {# Date and Time Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.dateHeure, 'Date et Heure', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.dateHeure, {'attr': {'class': 'form-control' ~ (form.dateHeure.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.dateHeure) }}
                            </div>
                        </div>

{# Image Field #}
<div class=\"form-group mb-3\">
    {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.image, {'attr': {'class': 'form-control-file' ~ (form.image.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
    <div class=\"invalid-feedback\">
        {{ form_errors(form.image) }}
    </div>
    {% if RendezVous.image %}
        <div class=\"mt-2\">
            <img src=\"{{ asset('uploads/' ~ RendezVous.image) }}\" alt=\"Current Image\" width=\"100\">
        </div>
    {% endif %}
</div>

                        {# Lieu Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.lieu, 'Lieu', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.lieu, {'attr': {'class': 'form-control' ~ (form.lieu.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.lieu) }}
                            </div>
                        </div>

                        {# Adresse Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.adresse, 'Antécédents médicaux', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.adresse, {'attr': {'class': 'form-control' ~ (form.adresse.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.adresse) }}
                            </div>
                        </div>

                        {# Submit Button #}
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Mettre à jour</button>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "rendezVous/updaterendezVous.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\rendezVous\\updaterendezVous.html.twig");
    }
}

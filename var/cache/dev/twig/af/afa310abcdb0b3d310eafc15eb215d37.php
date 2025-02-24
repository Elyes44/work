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

/* rendezVous/addrendezVous.html.twig */
class __TwigTemplate_fc54852dd79c1220c39e179c7152d4e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/addrendezVous.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendezVous/addrendezVous.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "rendezVous/addrendezVous.html.twig", 1);
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
                    <h2 class=\"text-center\">Prendre un Rendez-vous</h2>

                    ";
        // line 11
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation"]]);
        yield "

                        ";
        // line 14
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "services", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Services"]);
        yield "
                            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "services", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "services", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "services", [], "any", false, false, false, 18), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 23
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "NomClient", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du Client"]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "NomClient", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "NomClient", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "NomClient", [], "any", false, false, false, 27), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 32
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Titre du Rendez-Vous"]);
        yield "
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 41
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "start", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date et Heure de Début"]);
        yield "
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "start", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "start", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "start", [], "any", false, false, false, 45), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"form-group mb-3\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "end", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date et Heure de Fin"]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "end", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "end", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "errors", [], "any", false, false, false, 50)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "end", [], "any", false, false, false, 52), 'errors');
        yield "
                            </div>
                </div>

                        ";
        // line 57
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "telephone", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "telephone", [], "any", false, false, false, 61), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 66
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "lieu", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lieu"]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "lieu", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "lieu", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "errors", [], "any", false, false, false, 68)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "lieu", [], "any", false, false, false, 70), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 75
        yield "                        <div class=\"form-group mb-3\">
                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "adresse", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        yield "
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "adresse", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "adresse", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                            <div class=\"invalid-feedback\">
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "adresse", [], "any", false, false, false, 79), 'errors');
        yield "
                            </div>
                        </div>

                        ";
        // line 84
        yield "                        <button type=\"submit\" class=\"btn btn-primary w-100\">Prendre Rendez-vous</button>

                    ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        return "rendezVous/addrendezVous.html.twig";
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
        return array (  243 => 86,  239 => 84,  232 => 79,  227 => 77,  223 => 76,  220 => 75,  213 => 70,  208 => 68,  204 => 67,  201 => 66,  194 => 61,  189 => 59,  185 => 58,  182 => 57,  175 => 52,  170 => 50,  166 => 49,  159 => 45,  154 => 43,  150 => 42,  147 => 41,  140 => 36,  135 => 34,  131 => 33,  128 => 32,  121 => 27,  116 => 25,  112 => 24,  109 => 23,  102 => 18,  97 => 16,  93 => 15,  90 => 14,  84 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'home.html.twig' %}

{% block section %}
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card shadow-sm p-3\">
                    <h2 class=\"text-center\">Prendre un Rendez-vous</h2>

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
                            {{ form_label(form.NomClient, 'Nom du Client', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.NomClient, {'attr': {'class': 'form-control' ~ (form.NomClient.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.NomClient) }}
                            </div>
                        </div>

                        {# Title Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.title, 'Titre du Rendez-Vous', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.title, {'attr': {'class': 'form-control' ~ (form.title.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.title) }}
                            </div>
                        </div>

                        {# Start Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.start, 'Date et Heure de Début', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.start, {'attr': {'class': 'form-control' ~ (form.start.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.start) }}
                            </div>
                        </div>
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.end, 'Date et Heure de Fin', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.end, {'attr': {'class': 'form-control' ~ (form.end.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.end) }}
                            </div>
                </div>

                        {# Telephone Field #}
                        <div class=\"form-group mb-3\">
                            {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.telephone, {'attr': {'class': 'form-control' ~ (form.telephone.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.telephone) }}
                            </div>
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
                            {{ form_label(form.adresse, 'Adresse', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(form.adresse, {'attr': {'class': 'form-control' ~ (form.adresse.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.adresse) }}
                            </div>
                        </div>

                        {# Submit Button #}
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Prendre Rendez-vous</button>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "rendezVous/addrendezVous.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\rendezVous\\addrendezVous.html.twig");
    }
}

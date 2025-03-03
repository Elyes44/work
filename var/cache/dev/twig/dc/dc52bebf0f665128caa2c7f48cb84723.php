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

/* services/update.html.twig */
class __TwigTemplate_91e58b52fff5362a955e435c0195add1 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/update.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/update.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "services/update.html.twig", 1);
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
        .form-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex; /* Afficher le formulaire par défaut */
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .avatar-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar-container img {
            margin-right: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <!-- Zone de mise à jour de services -->
                <div class=\"card shadow-sm p-3\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <!-- Supprimer le bouton \"Quoi de neuf ?\" -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 55
        yield "    <div id=\"form-overlay\" class=\"form-overlay\">
        <div class=\"form-container\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Mettre à jour le service</h5>
                    <button class=\"btn btn-close\" onclick=\"closeForm()\"></button>
                </div>
                <div class=\"card-body\">
                    <!-- Afficher l'avatar à côté du formulaire -->
                    <div class=\"avatar-container\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <span>Votre nom d'utilisateur</span>
                    </div>

                    ";
        // line 69
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
        yield "

                    <div class=\"form-group\">
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "nom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "content", [], "any", false, false, false, 78), 'label', ["label" => "Contenu"]);
        yield "
                        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "content", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "content", [], "any", false, false, false, 80), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "created", [], "any", false, false, false, 84), 'label', ["label" => "Date de création"]);
        yield "
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "created", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "created", [], "any", false, false, false, 86), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "updated", [], "any", false, false, false, 90), 'label', ["label" => "Date de mise à jour"]);
        yield "
                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "updated", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "updated", [], "any", false, false, false, 92), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "categorie", [], "any", false, false, false, 96), 'label', ["label" => "Catégorie"]);
        yield "
                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "categorie", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "categorie", [], "any", false, false, false, 98), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 102), 'label', ["label" => "Disponible à domicile"]);
        yield "
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 103), 'widget');
        yield "
                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 104), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "duree", [], "any", false, false, false, 108), 'label', ["label" => "Durée (en minutes)"]);
        yield "
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "duree", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "duree", [], "any", false, false, false, 110), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "prix", [], "any", false, false, false, 114), 'label', ["label" => "Prix (€)"]);
        yield "
                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "prix", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "prix", [], "any", false, false, false, 116), 'errors');
        yield "
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>

                    ";
        // line 121
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
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

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function closeForm() {
            console.log(\"Close form called\"); // Debug
            document.getElementById('form-overlay').style.display = 'none';
        }
    </script>
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
        return "services/update.html.twig";
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
        return array (  326 => 129,  313 => 128,  296 => 121,  288 => 116,  284 => 115,  280 => 114,  273 => 110,  269 => 109,  265 => 108,  258 => 104,  254 => 103,  250 => 102,  243 => 98,  239 => 97,  235 => 96,  228 => 92,  224 => 91,  220 => 90,  213 => 86,  209 => 85,  205 => 84,  198 => 80,  194 => 79,  190 => 78,  183 => 74,  179 => 73,  175 => 72,  169 => 69,  153 => 55,  137 => 40,  124 => 39,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .form-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex; /* Afficher le formulaire par défaut */
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

        .form-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .avatar-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar-container img {
            margin-right: 10px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <!-- Zone de mise à jour de services -->
                <div class=\"card shadow-sm p-3\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <!-- Supprimer le bouton \"Quoi de neuf ?\" -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Conteneur du formulaire en pop-up #}
    <div id=\"form-overlay\" class=\"form-overlay\">
        <div class=\"form-container\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Mettre à jour le service</h5>
                    <button class=\"btn btn-close\" onclick=\"closeForm()\"></button>
                </div>
                <div class=\"card-body\">
                    <!-- Afficher l'avatar à côté du formulaire -->
                    <div class=\"avatar-container\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <span>Votre nom d'utilisateur</span>
                    </div>

                    {{ form_start(form) }}

                    <div class=\"form-group\">
                        {{ form_label(form.nom, \"Nom\") }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.nom) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.content, \"Contenu\") }}
                        {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.content) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.created, \"Date de création\") }}
                        {{ form_widget(form.created, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.created) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.updated, \"Date de mise à jour\") }}
                        {{ form_widget(form.updated, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.updated) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.categorie, \"Catégorie\") }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.categorie) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.dispoDomicile, \"Disponible à domicile\") }}
                        {{ form_widget(form.dispoDomicile) }}
                        {{ form_errors(form.dispoDomicile) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.duree, \"Durée (en minutes)\") }}
                        {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.duree) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.prix, \"Prix (€)\") }}
                        {{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.prix) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function closeForm() {
            console.log(\"Close form called\"); // Debug
            document.getElementById('form-overlay').style.display = 'none';
        }
    </script>
{% endblock %}", "services/update.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\update.html.twig");
    }
}

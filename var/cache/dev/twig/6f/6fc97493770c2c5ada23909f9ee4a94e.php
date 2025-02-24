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

/* services/add.html.twig */
class __TwigTemplate_0091b23d9d981d7ba2b0d2dcf959f069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "services/add.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "services/add.html.twig", 1);
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
            display: flex;
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
                <div class=\"card shadow-sm p-3\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 53
        yield "    <div id=\"form-overlay\" class=\"form-overlay\">
        <div class=\"form-container\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Créer une publication</h5>
                    <button class=\"btn btn-close\" onclick=\"closeForm()\"></button>
                </div>
                <div class=\"card-body\">
                    <div class=\"avatar-container\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <span>Votre nom d'utilisateur</span>
                    </div>

                    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    ";
        // line 69
        yield "                    <div class=\"form-group\">
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "errors", [], "any", false, false, false, 71)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 72
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nom", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "errors", [], "any", false, false, false, 72)) > 0)) {
            // line 73
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 77
        yield "                    </div>

                    ";
        // line 80
        yield "                    <div class=\"form-group\">
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "content", [], "any", false, false, false, 81), 'label', ["label" => "Contenu"]);
        yield "
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "content", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "content", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "errors", [], "any", false, false, false, 82)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 83
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "content", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "errors", [], "any", false, false, false, 83)) > 0)) {
            // line 84
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 85
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "content", [], "any", false, false, false, 85), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 88
        yield "                    </div>

                    ";
        // line 91
        yield "                    <div class=\"form-group\">
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "created", [], "any", false, false, false, 92), 'label', ["label" => "Date de création"]);
        yield "
                        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "created", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "created", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "errors", [], "any", false, false, false, 93)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "created", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94)) > 0)) {
            // line 95
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "created", [], "any", false, false, false, 96), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 99
        yield "                    </div>

                    ";
        // line 102
        yield "                    <div class=\"form-group\">
                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "updated", [], "any", false, false, false, 103), 'label', ["label" => "Date de mise à jour"]);
        yield "
                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "updated", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "updated", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 105
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "updated", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "errors", [], "any", false, false, false, 105)) > 0)) {
            // line 106
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 107
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "updated", [], "any", false, false, false, 107), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 110
        yield "                    </div>

                    ";
        // line 113
        yield "                    <div class=\"form-group\">
                        ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "categorie", [], "any", false, false, false, 114), 'label', ["label" => "Catégorie"]);
        yield "
                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "categorie", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "categorie", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 116
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "categorie", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116)) > 0)) {
            // line 117
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 118
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "categorie", [], "any", false, false, false, 118), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 121
        yield "                    </div>

                    ";
        // line 124
        yield "                    <div class=\"form-group\">
                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 125), 'label', ["label" => "Disponible à domicile"]);
        yield "
                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => ("form-check-input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "errors", [], "any", false, false, false, 126)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 127
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127)) > 0)) {
            // line 128
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 129
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 129), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 132
        yield "                    </div>

                    ";
        // line 135
        yield "                    <div class=\"form-group\">
                        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "duree", [], "any", false, false, false, 136), 'label', ["label" => "Durée (en minutes)"]);
        yield "
                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "duree", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "duree", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 138
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "duree", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "errors", [], "any", false, false, false, 138)) > 0)) {
            // line 139
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 140
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "duree", [], "any", false, false, false, 140), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 143
        yield "                    </div>

                    ";
        // line 146
        yield "                    <div class=\"form-group\">
                        ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "prix", [], "any", false, false, false, 147), 'label', ["label" => "Prix (€)"]);
        yield "
                        ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "prix", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "prix", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "errors", [], "any", false, false, false, 148)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 149
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "prix", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "errors", [], "any", false, false, false, 149)) > 0)) {
            // line 150
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 151
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "prix", [], "any", false, false, false, 151), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 154
        yield "                    </div>

                    ";
        // line 157
        yield "                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

                    ";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_end');
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

    // line 166
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

        // line 167
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
        return "services/add.html.twig";
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
        return array (  413 => 167,  400 => 166,  383 => 159,  379 => 157,  375 => 154,  369 => 151,  366 => 150,  364 => 149,  360 => 148,  356 => 147,  353 => 146,  349 => 143,  343 => 140,  340 => 139,  338 => 138,  334 => 137,  330 => 136,  327 => 135,  323 => 132,  317 => 129,  314 => 128,  312 => 127,  308 => 126,  304 => 125,  301 => 124,  297 => 121,  291 => 118,  288 => 117,  286 => 116,  282 => 115,  278 => 114,  275 => 113,  271 => 110,  265 => 107,  262 => 106,  260 => 105,  256 => 104,  252 => 103,  249 => 102,  245 => 99,  239 => 96,  236 => 95,  234 => 94,  230 => 93,  226 => 92,  223 => 91,  219 => 88,  213 => 85,  210 => 84,  208 => 83,  204 => 82,  200 => 81,  197 => 80,  193 => 77,  187 => 74,  184 => 73,  182 => 72,  178 => 71,  174 => 70,  171 => 69,  166 => 66,  151 => 53,  137 => 40,  124 => 39,  78 => 4,  65 => 3,  42 => 1,);
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
            display: flex;
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
                <div class=\"card shadow-sm p-3\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Form Overlay Container #}
    <div id=\"form-overlay\" class=\"form-overlay\">
        <div class=\"form-container\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Créer une publication</h5>
                    <button class=\"btn btn-close\" onclick=\"closeForm()\"></button>
                </div>
                <div class=\"card-body\">
                    <div class=\"avatar-container\">
                        <img src=\"/images/user_avatar.png\" alt=\"Avatar\" class=\"rounded-circle\" width=\"50\" height=\"50\">
                        <span>Votre nom d'utilisateur</span>
                    </div>

                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                    {# Nom Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.nom, \"Nom\") }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control' ~ (form.nom.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.nom.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.nom) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Content Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.content, \"Contenu\") }}
                        {{ form_widget(form.content, {'attr': {'class': 'form-control' ~ (form.content.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.content.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.content) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Created Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.created, \"Date de création\") }}
                        {{ form_widget(form.created, {'attr': {'class': 'form-control' ~ (form.created.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.created.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.created) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Updated Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.updated, \"Date de mise à jour\") }}
                        {{ form_widget(form.updated, {'attr': {'class': 'form-control' ~ (form.updated.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.updated.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.updated) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Catégorie Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.categorie, \"Catégorie\") }}
                        {{ form_widget(form.categorie, {'attr': {'class': 'form-control' ~ (form.categorie.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.categorie.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.categorie) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Disponible à domicile Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.dispoDomicile, \"Disponible à domicile\") }}
                        {{ form_widget(form.dispoDomicile, {'attr': {'class': 'form-check-input' ~ (form.dispoDomicile.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.dispoDomicile.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.dispoDomicile) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Durée Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.duree, \"Durée (en minutes)\") }}
                        {{ form_widget(form.duree, {'attr': {'class': 'form-control' ~ (form.duree.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.duree.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.duree) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Prix Field #}
                    <div class=\"form-group\">
                        {{ form_label(form.prix, \"Prix (€)\") }}
                        {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form.prix.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {% if form.prix.vars.errors|length > 0 %}
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.prix) }}
                            </div>
                        {% endif %}
                    </div>

                    {# Submit Button #}
                    <button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

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
{% endblock %}", "services/add.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\services\\add.html.twig");
    }
}

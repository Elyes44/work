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
class __TwigTemplate_c51c6b55d0fb874fa635279f83eb7dd2 extends Template
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
        .form-container {
            background: white;
            padding: 40px 40px 30px;
            border-radius: 16px;
            width: 600px;
            max-width: 100%;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        .card-header {
            padding: 10px 15px;
            background-color: #f7f7f7;
            border: none;
            text-align: center;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form-control, .form-check-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #4285f4;
            outline: none;
        }

        .form-check-input {
            margin-top: 3px;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
        }

        .invalid-feedback {
            font-size: 12px;
            color: #dc3545;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-close {
            font-size: 24px;
            border: none;
            background: transparent;
            color: #aaa;
            cursor: pointer;
        }

        .btn-close:hover {
            color: #333;
        }

        /* Avatar styling */
        .avatar-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar-container img {
            margin-right: 10px;
            width: 50px;
            height: 50px;
        }

        .card-footer {
            text-align: center;
        }

        .card-footer button {
            background-color: #4285f4;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: bold;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            .form-group {
                gap: 8px;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "

    ";
        // line 125
        yield "    <div class=\"form-container\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3 class=\"mb-0\">Créer une publication</h3>
                <button class=\"btn btn-close\" onclick=\"closeForm()\">×</button>
            </div>
            <div class=\"card-body\">
                ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                ";
        // line 135
        yield "                <div class=\"form-group\">
                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "nom", [], "any", false, false, false, 136), 'label', ["label" => "Nom"]);
        yield "
                    ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "nom", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "nom", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 138
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "nom", [], "any", false, false, false, 138), "vars", [], "any", false, false, false, 138), "errors", [], "any", false, false, false, 138)) > 0)) {
            // line 139
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 140
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "nom", [], "any", false, false, false, 140), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 143
        yield "                </div>

                ";
        // line 146
        yield "                <div class=\"form-group\">
                    ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "content", [], "any", false, false, false, 147), 'label', ["label" => "Contenu"]);
        yield "
                    ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "content", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "content", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "errors", [], "any", false, false, false, 148)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 149
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "content", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "errors", [], "any", false, false, false, 149)) > 0)) {
            // line 150
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 151
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "content", [], "any", false, false, false, 151), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 154
        yield "                </div>

                ";
        // line 157
        yield "                <div class=\"form-group\">
                    ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "created", [], "any", false, false, false, 158), 'label', ["label" => "Date de création"]);
        yield "
                    ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "created", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "created", [], "any", false, false, false, 159), "vars", [], "any", false, false, false, 159), "errors", [], "any", false, false, false, 159)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 160
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "created", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "errors", [], "any", false, false, false, 160)) > 0)) {
            // line 161
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 162
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "created", [], "any", false, false, false, 162), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 165
        yield "                </div>

                ";
        // line 168
        yield "                <div class=\"form-group\">
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "updated", [], "any", false, false, false, 169), 'label', ["label" => "Date de mise à jour"]);
        yield "
                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "updated", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "updated", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "errors", [], "any", false, false, false, 170)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 171
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "updated", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "errors", [], "any", false, false, false, 171)) > 0)) {
            // line 172
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 173
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "updated", [], "any", false, false, false, 173), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 176
        yield "                </div>

                ";
        // line 179
        yield "                <div class=\"form-group\">
                    ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "categorie", [], "any", false, false, false, 180), 'label', ["label" => "Catégorie"]);
        yield "
                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "categorie", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "categorie", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "errors", [], "any", false, false, false, 181)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 182
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "categorie", [], "any", false, false, false, 182), "vars", [], "any", false, false, false, 182), "errors", [], "any", false, false, false, 182)) > 0)) {
            // line 183
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 184
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "categorie", [], "any", false, false, false, 184), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 187
        yield "                </div>

                ";
        // line 190
        yield "                <div class=\"form-group\">
                    ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 191), 'label', ["label" => "Disponible à domicile"]);
        yield "
                    ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => ("form-check-input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "errors", [], "any", false, false, false, 192)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 193
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "errors", [], "any", false, false, false, 193)) > 0)) {
            // line 194
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 195
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 195), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 198
        yield "                </div>

                ";
        // line 201
        yield "                <div class=\"form-group\">
                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "duree", [], "any", false, false, false, 202), 'label', ["label" => "Durée (en minutes)"]);
        yield "
                    ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "duree", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "duree", [], "any", false, false, false, 203), "vars", [], "any", false, false, false, 203), "errors", [], "any", false, false, false, 203)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 204
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "duree", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "errors", [], "any", false, false, false, 204)) > 0)) {
            // line 205
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 206
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "duree", [], "any", false, false, false, 206), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 209
        yield "                </div>

                ";
        // line 212
        yield "                <div class=\"form-group\">
                    ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "prix", [], "any", false, false, false, 213), 'label', ["label" => "Prix (€)"]);
        yield "
                    ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "prix", [], "any", false, false, false, 214), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "prix", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "errors", [], "any", false, false, false, 214)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                    ";
        // line 215
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "prix", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "errors", [], "any", false, false, false, 215)) > 0)) {
            // line 216
            yield "                        <div class=\"invalid-feedback\">
                            ";
            // line 217
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "prix", [], "any", false, false, false, 217), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 220
        yield "                </div>

                ";
        // line 223
        yield "                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn\">Ajouter</button>
                </div>

                ";
        // line 227
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 233
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

        // line 234
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        function closeForm() {
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
        return array (  480 => 234,  467 => 233,  451 => 227,  445 => 223,  441 => 220,  435 => 217,  432 => 216,  430 => 215,  426 => 214,  422 => 213,  419 => 212,  415 => 209,  409 => 206,  406 => 205,  404 => 204,  400 => 203,  396 => 202,  393 => 201,  389 => 198,  383 => 195,  380 => 194,  378 => 193,  374 => 192,  370 => 191,  367 => 190,  363 => 187,  357 => 184,  354 => 183,  352 => 182,  348 => 181,  344 => 180,  341 => 179,  337 => 176,  331 => 173,  328 => 172,  326 => 171,  322 => 170,  318 => 169,  315 => 168,  311 => 165,  305 => 162,  302 => 161,  300 => 160,  296 => 159,  292 => 158,  289 => 157,  285 => 154,  279 => 151,  276 => 150,  274 => 149,  270 => 148,  266 => 147,  263 => 146,  259 => 143,  253 => 140,  250 => 139,  248 => 138,  244 => 137,  240 => 136,  237 => 135,  232 => 132,  223 => 125,  219 => 122,  206 => 121,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .form-container {
            background: white;
            padding: 40px 40px 30px;
            border-radius: 16px;
            width: 600px;
            max-width: 100%;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        .card-header {
            padding: 10px 15px;
            background-color: #f7f7f7;
            border: none;
            text-align: center;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .form-control, .form-check-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #4285f4;
            outline: none;
        }

        .form-check-input {
            margin-top: 3px;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
        }

        .invalid-feedback {
            font-size: 12px;
            color: #dc3545;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .btn-close {
            font-size: 24px;
            border: none;
            background: transparent;
            color: #aaa;
            cursor: pointer;
        }

        .btn-close:hover {
            color: #333;
        }

        /* Avatar styling */
        .avatar-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar-container img {
            margin-right: 10px;
            width: 50px;
            height: 50px;
        }

        .card-footer {
            text-align: center;
        }

        .card-footer button {
            background-color: #4285f4;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-weight: bold;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            .form-group {
                gap: 8px;
            }
        }
    </style>
{% endblock %}

{% block body %}


    {# Form Container #}
    <div class=\"form-container\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3 class=\"mb-0\">Créer une publication</h3>
                <button class=\"btn btn-close\" onclick=\"closeForm()\">×</button>
            </div>
            <div class=\"card-body\">
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
                <div class=\"card-footer\">
                    <button type=\"submit\" class=\"btn\">Ajouter</button>
                </div>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function closeForm() {
            document.getElementById('form-overlay').style.display = 'none';
        }
    </script>
{% endblock %}", "services/add.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\add.html.twig");
    }
}

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
        .form-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

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

    // line 135
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

        // line 136
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
        // line 149
        yield "    <div id=\"form-overlay\" class=\"form-overlay\">
        <div class=\"form-container\">
            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Créer une publication</h5>
                    <button class=\"btn btn-close\" onclick=\"closeForm()\">×</button>
                </div>
                <div class=\"card-body\">

                    ";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    ";
        // line 161
        yield "                    <div class=\"form-group\">
                        ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "nom", [], "any", false, false, false, 162), 'label', ["label" => "Nom"]);
        yield "
                        ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "nom", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "nom", [], "any", false, false, false, 163), "vars", [], "any", false, false, false, 163), "errors", [], "any", false, false, false, 163)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 164
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "errors", [], "any", false, false, false, 164)) > 0)) {
            // line 165
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 166
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "nom", [], "any", false, false, false, 166), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 169
        yield "                    </div>

                    ";
        // line 172
        yield "                    <div class=\"form-group\">
                        ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "content", [], "any", false, false, false, 173), 'label', ["label" => "Contenu"]);
        yield "
                        ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "content", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "content", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "errors", [], "any", false, false, false, 174)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 175
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "content", [], "any", false, false, false, 175), "vars", [], "any", false, false, false, 175), "errors", [], "any", false, false, false, 175)) > 0)) {
            // line 176
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 177
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "content", [], "any", false, false, false, 177), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 180
        yield "                    </div>

                    ";
        // line 183
        yield "                    <div class=\"form-group\">
                        ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "created", [], "any", false, false, false, 184), 'label', ["label" => "Date de création"]);
        yield "
                        ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "created", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "created", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 186
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "created", [], "any", false, false, false, 186), "vars", [], "any", false, false, false, 186), "errors", [], "any", false, false, false, 186)) > 0)) {
            // line 187
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 188
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "created", [], "any", false, false, false, 188), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 191
        yield "                    </div>

                    ";
        // line 194
        yield "                    <div class=\"form-group\">
                        ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "updated", [], "any", false, false, false, 195), 'label', ["label" => "Date de mise à jour"]);
        yield "
                        ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "updated", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "updated", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "errors", [], "any", false, false, false, 196)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 197
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "updated", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "errors", [], "any", false, false, false, 197)) > 0)) {
            // line 198
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 199
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "updated", [], "any", false, false, false, 199), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 202
        yield "                    </div>

                    ";
        // line 205
        yield "                    <div class=\"form-group\">
                        ";
        // line 206
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "categorie", [], "any", false, false, false, 206), 'label', ["label" => "Catégorie"]);
        yield "
                        ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "categorie", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "categorie", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "errors", [], "any", false, false, false, 207)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 208
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "categorie", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "errors", [], "any", false, false, false, 208)) > 0)) {
            // line 209
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 210
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "categorie", [], "any", false, false, false, 210), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 213
        yield "                    </div>

                    ";
        // line 216
        yield "                    <div class=\"form-group\">
                        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 217), 'label', ["label" => "Disponible à domicile"]);
        yield "
                        ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => ("form-check-input" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 218), "vars", [], "any", false, false, false, 218), "errors", [], "any", false, false, false, 218)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 219
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "errors", [], "any", false, false, false, 219)) > 0)) {
            // line 220
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 221
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "dispoDomicile", [], "any", false, false, false, 221), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 224
        yield "                    </div>

                    ";
        // line 227
        yield "                    <div class=\"form-group\">
                        ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "duree", [], "any", false, false, false, 228), 'label', ["label" => "Durée (en minutes)"]);
        yield "
                        ";
        // line 229
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "duree", [], "any", false, false, false, 229), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "duree", [], "any", false, false, false, 229), "vars", [], "any", false, false, false, 229), "errors", [], "any", false, false, false, 229)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 230
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "duree", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "errors", [], "any", false, false, false, 230)) > 0)) {
            // line 231
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "duree", [], "any", false, false, false, 232), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 235
        yield "                    </div>

                    ";
        // line 238
        yield "                    <div class=\"form-group\">
                        ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "prix", [], "any", false, false, false, 239), 'label', ["label" => "Prix (€)"]);
        yield "
                        ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "prix", [], "any", false, false, false, 240), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "prix", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "errors", [], "any", false, false, false, 240)) > 0)) ? (" is-invalid") : ("")))]]);
        yield "
                        ";
        // line 241
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "prix", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "errors", [], "any", false, false, false, 241)) > 0)) {
            // line 242
            yield "                            <div class=\"invalid-feedback\">
                                ";
            // line 243
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "prix", [], "any", false, false, false, 243), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 246
        yield "                    </div>

                    ";
        // line 249
        yield "                    <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn\">Ajouter</button>
                    </div>

                    ";
        // line 253
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), 'form_end');
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

    // line 260
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

        // line 261
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
        return array (  507 => 261,  494 => 260,  477 => 253,  471 => 249,  467 => 246,  461 => 243,  458 => 242,  456 => 241,  452 => 240,  448 => 239,  445 => 238,  441 => 235,  435 => 232,  432 => 231,  430 => 230,  426 => 229,  422 => 228,  419 => 227,  415 => 224,  409 => 221,  406 => 220,  404 => 219,  400 => 218,  396 => 217,  393 => 216,  389 => 213,  383 => 210,  380 => 209,  378 => 208,  374 => 207,  370 => 206,  367 => 205,  363 => 202,  357 => 199,  354 => 198,  352 => 197,  348 => 196,  344 => 195,  341 => 194,  337 => 191,  331 => 188,  328 => 187,  326 => 186,  322 => 185,  318 => 184,  315 => 183,  311 => 180,  305 => 177,  302 => 176,  300 => 175,  296 => 174,  292 => 173,  289 => 172,  285 => 169,  279 => 166,  276 => 165,  274 => 164,  270 => 163,  266 => 162,  263 => 161,  258 => 158,  247 => 149,  233 => 136,  220 => 135,  78 => 4,  65 => 3,  42 => 1,);
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
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1050;
        }

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
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function closeForm() {
            document.getElementById('form-overlay').style.display = 'none';
        }
    </script>
{% endblock %}
", "services/add.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\services\\add.html.twig");
    }
}

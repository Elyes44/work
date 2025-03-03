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

/* base.html.twig */
class __TwigTemplate_e9779dc0c19786e3f3b15b5eb59d7e58 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'low' => [$this, 'block_low'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset=\"utf-8\">
  <title>Novena- Health Care &amp; Medical template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Health Care Medical Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Novena HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"novena\" />

  <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"/image/x-icon\" href=\"/images/favicon.png\" />
";
        // line 31
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 43
        yield "</head>

<body id=\"top\">

<header>
\t<div class=\"header-top-bar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\">
\t\t\t\t\t\t\t<span>Call Now : </span>
\t\t\t\t\t\t\t<span class=\"h4\">823-4565-13456</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">
\t\t\t\t<img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
\t\t\t</a>

\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\"
\t\t\t\taria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"icofont-navigation-menu\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarmain\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Home</a>
</li>\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Rendez vous <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rendezVous");
        yield "\">To make an appointment</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Available services</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_rendezVous");
        yield "\">Requested appointments</a></li>

\t\t\t\t\t\t\t<li class=\"dropdown dropdown-submenu dropright\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0301\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>
\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>

\t\t\t\t\t\t\t<li class=\"dropdown dropdown-submenu dropleft\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>
\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>


<!-- Slider Start -->
<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-7\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
\t\t\t\t\t<h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
\t\t\t\t\t
\t\t\t\t\t<p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t<a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rendezVous");
        yield "\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">
    \t\t\t\tMake appointment <i class=\"icofont-simple-right ml-2\"></i>
\t\t\t\t\t</a>\t\t\t\t\t
\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"feature-block d-lg-flex\">
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-surgeon-alt\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>24 Hours Service</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Online Appoinment</h4>
\t\t\t\t\t\t<p class=\"mb-4\">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
\t\t\t\t\t\t<a href=\"appoinment.html\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\">
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Sat - sun : <span>10:00 - 17:00</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">1-800-700-6200</h4>
\t\t\t\t\t\t<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"section about\">
\t";
        // line 205
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 206
        yield "</section>
<section class=\"cta-section \">
\t<div class=\"container\">
\t\t<div class=\"cta position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-doctor\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"58\">0</span>k
\t\t\t\t\t\t<p>Happy People</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-flag\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"700\">0</span>+
\t\t\t\t\t\t<p>Surgery Comepleted</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-badge\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"40\">0</span>+
\t\t\t\t\t\t<p>Expert Doctors</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-globe\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"20\">0</span>
\t\t\t\t\t\t<p>Worldwide Branch</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Award winning patient care</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-heart-beat-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Heart Disease</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-tooth text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Dental Care</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-crutch text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Body Surgery</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 334
        yield from $this->unwrap()->yieldBlock('low', $context, $blocks);
        // line 416
        yield "<section class=\"section testimonial-2 gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>We served over 5000+ Patients</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12 testimonial-wrap-2\">
\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>

\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info \">
\t\t\t\t\t\t<h4>Amazing service!</h4>
\t\t\t\t\t\t<span>John Partho</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Expert doctors!</h4>
\t\t\t\t\t\t<span>Mullar Sarth</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Good Support!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Nice Environment!</h4>
\t\t\t\t\t\t<span>Partho Sarothi</span>
\t\t\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Modern Service!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row clients-logo\">
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/1.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/2.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Department</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#!\">Surgery </a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Wome's Health</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Radiology</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Cardioc</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Medicine</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#!\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Company Support </a></li>
\t\t\t\t\t\t<li><a href=\"#!\">FAQuestions</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Company Licence</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget widget-contact mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<div class=\"footer-contact-block mb-4\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-email mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Support Available for 24/7</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"mailto:support@email.com\">Support@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-btm py-4 mt-5\">
\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\tCopyright &copy; 2021, Designed &amp; Developed by <a href=\"https://themefisher.com/\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
\t\t\t\t\t\t<form action=\"#\" class=\"subscribe\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\" required>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main-2 btn-round-full\">Subscribe</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a class=\"backtop scroll-top-to\" href=\"#top\">
\t\t\t\t\t\t<i class=\"icofont-long-arrow-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

";
        // line 688
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 704
        yield "  </body>
  </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel=\"stylesheet\" href=\"/plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/icofont/icofont.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick-theme.css\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"/css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 205
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 334
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_low(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "low"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "low"));

        // line 335
        yield "<section class=\"section appoinment\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-6 \">
\t\t\t\t<div class=\"appoinment-content\">
\t\t\t\t\t<img src=\"images/about/img-3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t<div class=\"emergency\">
\t\t\t\t\t\t<h2 class=\"text-lg\"><i class=\"icofont-phone-circle text-lg\"></i>+23 345 67980</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-10 \">
\t\t\t\t<div class=\"appoinment-wrap mt-5 mt-lg-0\">
\t\t\t\t\t<h2 class=\"mb-2 title-color\">Book appoinment</h2>
\t\t\t\t\t<p class=\"mb-4\">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
\t\t\t\t\t     <form id=\"#\" class=\"appoinment-form\" method=\"post\" action=\"#\">
                    <div class=\"row\">
                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"exampleFormControlSelect2\">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>

                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"date\" id=\"date\" type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\">
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"time\" id=\"time\" type=\"text\" class=\"form-control\" placeholder=\"Time\">
                            </div>
                        </div>
                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Full Name\">
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"phone\" id=\"phone\" type=\"Number\" class=\"form-control\" placeholder=\"Phone Number\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group-2 mb-4\">
                        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"6\" placeholder=\"Your Message\"></textarea>
                    </div>

                    <a class=\"btn btn-main btn-round-full\" href=\"appoinment.html\" >Make Appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
                </form>\t
            </div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 688
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 689
        yield "
    <!-- 
    Essential Scripts
    =====================================-->
    <script src=\"/plugins/jquery/jquery.js\"></script>
    <script src=\"/plugins/bootstrap/bootstrap.min.js\"></script>
    <script src=\"/plugins/slick-carousel/slick/slick.min.js\"></script>
    <script src=\"/plugins/shuffle/shuffle.min.js\"></script>

    <!-- Google Map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA\"></script>
    <script src=\"/plugins/google-map/gmap.js\"></script>
    
    <script src=\"js/script.js\"></script>
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
        return "base.html.twig";
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
        return array (  865 => 689,  852 => 688,  761 => 335,  748 => 334,  725 => 205,  704 => 32,  691 => 31,  678 => 704,  676 => 688,  402 => 416,  400 => 334,  270 => 206,  268 => 205,  212 => 152,  149 => 92,  145 => 91,  141 => 90,  130 => 82,  115 => 70,  86 => 43,  84 => 31,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset=\"utf-8\">
  <title>Novena- Health Care &amp; Medical template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Health Care Medical Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Novena HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"novena\" />

  <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"/image/x-icon\" href=\"/images/favicon.png\" />
{%block stylesheets%}
  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel=\"stylesheet\" href=\"/plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/icofont/icofont.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick-theme.css\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"/css/style.css\">
{%endblock%}
</head>

<body id=\"top\">

<header>
\t<div class=\"header-top-bar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
\t\t\t\t\t\t<a href=\"tel:+23-345-67890\">
\t\t\t\t\t\t\t<span>Call Now : </span>
\t\t\t\t\t\t\t<span class=\"h4\">823-4565-13456</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">
\t\t\t\t<img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
\t\t\t</a>

\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\"
\t\t\t\taria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"icofont-navigation-menu\"></span>
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarmain\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"{{ path('app_index') }}\">Home</a>
</li>\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about.html\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"service.html\">Services</a></li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Rendez vous <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path ('add_rendezVous') }}\">To make an appointment</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path ('app_services') }}\">Available services</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path ('afficher_rendezVous') }}\">Requested appointments</a></li>

\t\t\t\t\t\t\t<li class=\"dropdown dropdown-submenu dropright\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0301\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>
\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>

\t\t\t\t\t\t\t<li class=\"dropdown dropdown-submenu dropleft\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>
\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>


<!-- Slider Start -->
<section class=\"banner\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-12 col-xl-7\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<span class=\"text-uppercase text-sm letter-spacing \">Total Health care solution</span>
\t\t\t\t\t<h1 class=\"mb-3 mt-3\">Your most trusted health partner</h1>
\t\t\t\t\t
\t\t\t\t\t<p class=\"mb-4 pr-5\">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
\t\t\t\t\t<div class=\"btn-container \">
\t\t\t\t\t<a href=\"{{ path('add_rendezVous') }}\" target=\"_blank\" class=\"btn btn-main-2 btn-icon btn-round-full\">
    \t\t\t\tMake appointment <i class=\"icofont-simple-right ml-2\"></i>
\t\t\t\t\t</a>\t\t\t\t\t
\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"features\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"feature-block d-lg-flex\">
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-surgeon-alt\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>24 Hours Service</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Online Appoinment</h4>
\t\t\t\t\t\t<p class=\"mb-4\">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
\t\t\t\t\t\t<a href=\"appoinment.html\" class=\"btn btn-main btn-round-full\">Make a appoinment</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-ui-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Timing schedule</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">Working Hours</h4>
\t\t\t\t\t\t<ul class=\"w-hours list-unstyled\">
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Sun - Wed : <span>8:00 - 17:00</span></li>
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Thu - Fri : <span>9:00 - 17:00</span></li>
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">Sat - sun : <span>10:00 - 17:00</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"feature-item mb-5 mb-lg-0\">
\t\t\t\t\t\t<div class=\"feature-icon mb-4\">
\t\t\t\t\t\t\t<i class=\"icofont-support\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span>Emegency Cases</span>
\t\t\t\t\t\t<h4 class=\"mb-3\">1-800-700-6200</h4>
\t\t\t\t\t\t<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"section about\">
\t{%block body%} {%endblock%}
</section>
<section class=\"cta-section \">
\t<div class=\"container\">
\t\t<div class=\"cta position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-doctor\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"58\">0</span>k
\t\t\t\t\t\t<p>Happy People</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-flag\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"700\">0</span>+
\t\t\t\t\t\t<p>Surgery Comepleted</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-badge\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"40\">0</span>+
\t\t\t\t\t\t<p>Expert Doctors</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t\t<div class=\"counter-stat\">
\t\t\t\t\t\t<i class=\"icofont-globe\"></i>
\t\t\t\t\t\t<span class=\"h3 counter\" data-count=\"20\">0</span>
\t\t\t\t\t\t<p>Worldwide Branch</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section service gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h2>Award winning patient care</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-laboratory text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Laboratory services</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-heart-beat-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Heart Disease</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-tooth text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Dental Care</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-crutch text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Body Surgery</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-brain-alt text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Neurology Sargery</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"service-item mb-4\">
\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t<i class=\"icofont-dna-alt-1 text-lg\"></i>
\t\t\t\t\t\t<h4 class=\"mt-3 mb-3\">Gynecology</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<p class=\"mb-4\">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{%block low%}
<section class=\"section appoinment\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-6 \">
\t\t\t\t<div class=\"appoinment-content\">
\t\t\t\t\t<img src=\"images/about/img-3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t<div class=\"emergency\">
\t\t\t\t\t\t<h2 class=\"text-lg\"><i class=\"icofont-phone-circle text-lg\"></i>+23 345 67980</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-10 \">
\t\t\t\t<div class=\"appoinment-wrap mt-5 mt-lg-0\">
\t\t\t\t\t<h2 class=\"mb-2 title-color\">Book appoinment</h2>
\t\t\t\t\t<p class=\"mb-4\">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
\t\t\t\t\t     <form id=\"#\" class=\"appoinment-form\" method=\"post\" action=\"#\">
                    <div class=\"row\">
                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"exampleFormControlSelect1\">
                                  <option>Choose Department</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" id=\"exampleFormControlSelect2\">
                                  <option>Select Doctors</option>
                                  <option>Software Design</option>
                                  <option>Development cycle</option>
                                  <option>Software Development</option>
                                  <option>Maintenance</option>
                                  <option>Process Query</option>
                                  <option>Cost and Duration</option>
                                  <option>Modal Delivery</option>
                                </select>
                            </div>
                        </div>

                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"date\" id=\"date\" type=\"text\" class=\"form-control\" placeholder=\"dd/mm/yyyy\">
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"time\" id=\"time\" type=\"text\" class=\"form-control\" placeholder=\"Time\">
                            </div>
                        </div>
                         <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"name\" id=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Full Name\">
                            </div>
                        </div>

                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <input name=\"phone\" id=\"phone\" type=\"Number\" class=\"form-control\" placeholder=\"Phone Number\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group-2 mb-4\">
                        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"6\" placeholder=\"Your Message\"></textarea>
                    </div>

                    <a class=\"btn btn-main btn-round-full\" href=\"appoinment.html\" >Make Appoinment <i class=\"icofont-simple-right ml-2  \"></i></a>
                </form>\t
            </div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{%endblock%}
<section class=\"section testimonial-2 gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>We served over 5000+ Patients</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-12 testimonial-wrap-2\">
\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>

\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info \">
\t\t\t\t\t\t<h4>Amazing service!</h4>
\t\t\t\t\t\t<span>John Partho</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb2.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Expert doctors!</h4>
\t\t\t\t\t\t<span>Mullar Sarth</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb3.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Good Support!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb4.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Nice Environment!</h4>
\t\t\t\t\t\t<span>Partho Sarothi</span>
\t\t\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-block style-2  gray-bg\">
\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t<img src=\"images/team/test-thumb1.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"client-info\">
\t\t\t\t\t\t<h4>Modern Service!</h4>
\t\t\t\t\t\t<span>Kolis Mullar</span>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tThey provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"icofont-quote-right\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section clients\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"section-title text-center\">
\t\t\t\t\t<h2>Partners who support us</h2>
\t\t\t\t\t<div class=\"divider mx-auto my-4\"></div>
\t\t\t\t\t<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"container\">
\t\t<div class=\"row clients-logo\">
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/1.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/2.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/3.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/4.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/5.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2\">
\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t<img src=\"images/about/6.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- footer Start -->
<footer class=\"footer section gray-bg\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 mr-auto col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<div class=\"logo mb-4\">
\t\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t</div>
\t\t\t\t\t<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

\t\t\t\t\t<ul class=\"list-inline footer-socials mt-4\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Department</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#!\">Surgery </a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Wome's Health</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Radiology</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Cardioc</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Medicine</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-2 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Support</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-35\">
\t\t\t\t\t\t<li><a href=\"#!\">Terms & Conditions</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Company Support </a></li>
\t\t\t\t\t\t<li><a href=\"#!\">FAQuestions</a></li>
\t\t\t\t\t\t<li><a href=\"#!\">Company Licence</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"widget widget-contact mb-5 mb-lg-0\">
\t\t\t\t\t<h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
\t\t\t\t\t<div class=\"divider mb-4\"></div>

\t\t\t\t\t<div class=\"footer-contact-block mb-4\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-email mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Support Available for 24/7</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"mailto:support@email.com\">Support@email.com</a></h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"footer-contact-block\">
\t\t\t\t\t\t<div class=\"icon d-flex align-items-center\">
\t\t\t\t\t\t\t<i class=\"icofont-support mr-3\"></i>
\t\t\t\t\t\t\t<span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-btm py-4 mt-5\">
\t\t\t<div class=\"row align-items-center justify-content-between\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\tCopyright &copy; 2021, Designed &amp; Developed by <a href=\"https://themefisher.com/\">Themefisher</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
\t\t\t\t\t\t<form action=\"#\" class=\"subscribe\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\" required>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-main-2 btn-round-full\">Subscribe</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a class=\"backtop scroll-top-to\" href=\"#top\">
\t\t\t\t\t\t<i class=\"icofont-long-arrow-up\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

{%block javascript%}

    <!-- 
    Essential Scripts
    =====================================-->
    <script src=\"/plugins/jquery/jquery.js\"></script>
    <script src=\"/plugins/bootstrap/bootstrap.min.js\"></script>
    <script src=\"/plugins/slick-carousel/slick/slick.min.js\"></script>
    <script src=\"/plugins/shuffle/shuffle.min.js\"></script>

    <!-- Google Map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA\"></script>
    <script src=\"/plugins/google-map/gmap.js\"></script>
    
    <script src=\"js/script.js\"></script>
{%endblock%}
  </body>
  </html>
", "base.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\base.html.twig");
    }
}

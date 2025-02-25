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

/* home.html.twig */
class __TwigTemplate_0013a14be12f7a87d6bb6cdc8d511911 extends Template
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
            'section' => [$this, 'block_section'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

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
        // line 69
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
\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Services</a></li>

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Rendez vous <i class=\"icofont-thin-down\"></i></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rendezVous");
        yield "\">To make an appointment</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Available services</a></li>
\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_rendezVous");
        yield "\">Requested appointments</a></li>

\t\t\t\t\t\t\t<li class=\"dropdown dropdown-submenu dropright\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0301\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu</a>
\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0301\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Submenu 02</a></li>
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
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>

";
        // line 137
        yield from $this->unwrap()->yieldBlock('section', $context, $blocks);
        // line 140
        yield "
";
        // line 141
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 249
        yield "

";
        // line 251
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 267
        yield "  </body>
  </html>";
        
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

    // line 137
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

        // line 138
        yield "hello
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 142
        yield "<!-- footer Start -->
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 251
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

        // line 252
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
        return "home.html.twig";
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
        return array (  424 => 252,  411 => 251,  294 => 142,  281 => 141,  269 => 138,  256 => 137,  235 => 32,  222 => 31,  210 => 267,  208 => 251,  204 => 249,  202 => 141,  199 => 140,  197 => 137,  147 => 90,  143 => 89,  139 => 88,  128 => 80,  114 => 69,  86 => 43,  84 => 31,  52 => 1,);
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
\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"{{ path('app_index') }}\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Services</a></li>

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
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Submenu 01</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"#\">Submenu 02</a></li>
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
\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>

{%block section%}
hello
{%endblock%}

{%block footer%}
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
{%endblock%}


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
  </html>", "home.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\home.html.twig");
    }
}

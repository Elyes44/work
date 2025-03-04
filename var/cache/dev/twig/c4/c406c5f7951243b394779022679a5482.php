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

/* admin.html.twig */
class __TwigTemplate_e4c1a2bcd52c62d9f71053e8621cf292 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.\">
    <title>Formation Form - Sleek Admin Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500\" rel=\"stylesheet\" />
    <link href=\"https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css\" rel=\"stylesheet\" />

    <!-- PLUGINS CSS STYLE -->
    <link href=\"/assets/plugins/simplebar/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"/assets/plugins/nprogress/nprogress.css\" rel=\"stylesheet\" />
  
    <!-- No Extra plugin used -->
    <link href='/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='/assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    
    <link href='/assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id=\"sleek-css\" rel=\"stylesheet\" href=\"/assets/css/sleek.css\" />
  
    <!-- FAVICON -->
    <link href=\"/assets/img/favicon.png\" rel=\"shortcut icon\" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"/assets/plugins/nprogress/nprogress.js\"></script>
        ";
        // line 47
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 50
        yield "</head>

<body class=\"header-fixed sidebar-fixed sidebar-dark header-light\" id=\"body\">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <!-- ==================================== ——— WRAPPER ===================================== -->
    <div class=\"wrapper\">
        <!-- Github Link -->
        <a href=\"https://github.com/tafcoder/sleek-dashboard\" target=\"_blank\" class=\"github-link\">
            <svg width=\"70\" height=\"70\" viewBox=\"0 0 250 250\" aria-hidden=\"true\">
                <defs>
                    <linearGradient id=\"grad1\" x1=\"0%\" y1=\"75%\" x2=\"100%\" y2=\"0%\">
                        <stop offset=\"0%\" style=\"stop-color:#896def;stop-opacity:1\" />
                        <stop offset=\"100%\" style=\"stop-color:#482271;stop-opacity:1\" />
                    </linearGradient>
                </defs>
                <path d=\"M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z\" fill=\"url(#grad1)\"></path>
            </svg>
            <i class=\"mdi mdi-github-circle\"></i>
        </a>

        <!-- ==================================== ——— LEFT SIDEBAR WITH OUT FOOTER ===================================== -->
        <aside class=\"left-sidebar bg-sidebar\">
            <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
                <!-- Application Brand -->
                <div class=\"app-brand\">
                    <a href=\"/\">
                        <svg class=\"brand-icon\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid\" width=\"30\" height=\"33\" viewBox=\"0 0 30 33\">
                            <g fill=\"none\" fill-rule=\"evenodd\">
                                <path class=\"logo-fill-blue\" fill=\"#7DBCFF\" d=\"M0 4v25l8 4V0zM22 4v25l8 4V0z\" />
                                <path class=\"logo-fill-white\" fill=\"#FFF\" d=\"M11 4v25l8 4V0z\" />
                            </g>
                        </svg>
                        <span class=\"brand-name text-truncate\">Sleek Dashboard</span>
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <div class=\"\" data-simplebar style=\"height: 100%;\">
                    <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">
                        <!-- Sidebar items here -->
                        <li class=\"has-sub\">
                            <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#formations\" aria-expanded=\"false\" aria-controls=\"formations\">
                                <i class=\"mdi mdi-email-mark-as-unread\"></i>
                                <span class=\"nav-text\">Gestion Rendez-vous</span> <b class=\"caret\"></b>
                            </a>
                            <ul class=\"collapse\" id=\"formations\" data-parent=\"#sidebar-menu\">
                                <div class=\"sub-menu\">
                                    
                                    <li>
                                        <a href=\"add_services\">Ajouter Services</a>
                                    </li>
                                    <li>
                                        <a href=\"allservices\">Liste des Services</a>
                                    </li>
                                    <li>
                                        <a href=\"afficher_rendezVous\">Liste des Rendez-vous</a>
                                    </li>
                                    
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Footer -->
                <div class=\"sidebar-footer\">
                    <hr class=\"separator mb-0\" />
                    <div class=\"sidebar-footer-content\">
                        <h6 class=\"text-uppercase\">Cpu Uses <span class=\"float-right\">40%</span></h6>
                        <div class=\"progress progress-xs\">
                            <div class=\"progress-bar active\" style=\"width: 40%;\" role=\"progressbar\"></div>
                        </div>
                        <h6 class=\"text-uppercase\">Memory Uses <span class=\"float-right\">65%</span></h6>
                        <div class=\"progress progress-xs\">
                            <div class=\"progress-bar progress-bar-warning\" style=\"width: 65%;\" role=\"progressbar\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- ==================================== ——— PAGE WRAPPER ===================================== -->
        <div class=\"page-wrapper\">
            <!-- Header -->
            <header class=\"main-header\" id=\"header\">
                <nav class=\"navbar navbar-static-top navbar-expand-lg\">
                    <!-- Sidebar toggle button -->
                    <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </button>
                    <!-- Search form -->
                    <div class=\"search-form d-none d-lg-inline-block\">
                        <div class=\"input-group\">
                            <button type=\"button\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\">
                                <i class=\"mdi mdi-magnify\"></i>
                            </button>
                            <input type=\"text\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"'button', 'chart' etc.\" autofocus autocomplete=\"off\" />
                        </div>
                        <div id=\"search-results-container\">
                            <ul id=\"search-results\"></ul>
                        </div>
                    </div>

                    <div class=\"navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Notifications and User Account dropdowns here -->
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- ==================================== ——— CONTENT WRAPPER ===================================== -->
            <div class=\"content-wrapper\">
                <div class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto\">
                            <div class=\"card card-default\">
                              ";
        // line 171
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 172
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src=\"/assets/plugins/jquery/jquery.min.js\"></script>
    <script src=\"/assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/assets/plugins/simplebar/simplebar.min.js\"></script>
 
    <script src='/assets/plugins/charts/Chart.min.js'></script>
    <script src='/assets/js/chart.js'></script>

    
    

    <script src='/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='/assets/js/vector-map.js'></script>

    <script src='/assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='/assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='/assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='/assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src=\"/assets/js/sleek.js\"></script>
  <link href=\"/assets/options/optionswitch.css\" rel=\"stylesheet\">
<script src=\"/assets/options/optionswitcher.js\"></script>
</body>

</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "        <!-- Additional stylesheets or custom CSS can be added here by child templates -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  315 => 171,  303 => 48,  290 => 47,  225 => 172,  223 => 171,  100 => 50,  98 => 47,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"description\" content=\"Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.\">
    <title>Formation Form - Sleek Admin Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500\" rel=\"stylesheet\" />
    <link href=\"https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css\" rel=\"stylesheet\" />

    <!-- PLUGINS CSS STYLE -->
    <link href=\"/assets/plugins/simplebar/simplebar.css\" rel=\"stylesheet\" />
    <link href=\"/assets/plugins/nprogress/nprogress.css\" rel=\"stylesheet\" />
  
    <!-- No Extra plugin used -->
    <link href='/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='/assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    
    <link href='/assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id=\"sleek-css\" rel=\"stylesheet\" href=\"/assets/css/sleek.css\" />
  
    <!-- FAVICON -->
    <link href=\"/assets/img/favicon.png\" rel=\"shortcut icon\" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"/assets/plugins/nprogress/nprogress.js\"></script>
        {% block stylesheets %}
        <!-- Additional stylesheets or custom CSS can be added here by child templates -->
    {% endblock %}
</head>

<body class=\"header-fixed sidebar-fixed sidebar-dark header-light\" id=\"body\">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <!-- ==================================== ——— WRAPPER ===================================== -->
    <div class=\"wrapper\">
        <!-- Github Link -->
        <a href=\"https://github.com/tafcoder/sleek-dashboard\" target=\"_blank\" class=\"github-link\">
            <svg width=\"70\" height=\"70\" viewBox=\"0 0 250 250\" aria-hidden=\"true\">
                <defs>
                    <linearGradient id=\"grad1\" x1=\"0%\" y1=\"75%\" x2=\"100%\" y2=\"0%\">
                        <stop offset=\"0%\" style=\"stop-color:#896def;stop-opacity:1\" />
                        <stop offset=\"100%\" style=\"stop-color:#482271;stop-opacity:1\" />
                    </linearGradient>
                </defs>
                <path d=\"M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z\" fill=\"url(#grad1)\"></path>
            </svg>
            <i class=\"mdi mdi-github-circle\"></i>
        </a>

        <!-- ==================================== ——— LEFT SIDEBAR WITH OUT FOOTER ===================================== -->
        <aside class=\"left-sidebar bg-sidebar\">
            <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
                <!-- Application Brand -->
                <div class=\"app-brand\">
                    <a href=\"/\">
                        <svg class=\"brand-icon\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid\" width=\"30\" height=\"33\" viewBox=\"0 0 30 33\">
                            <g fill=\"none\" fill-rule=\"evenodd\">
                                <path class=\"logo-fill-blue\" fill=\"#7DBCFF\" d=\"M0 4v25l8 4V0zM22 4v25l8 4V0z\" />
                                <path class=\"logo-fill-white\" fill=\"#FFF\" d=\"M11 4v25l8 4V0z\" />
                            </g>
                        </svg>
                        <span class=\"brand-name text-truncate\">Sleek Dashboard</span>
                    </a>
                </div>

                <!-- Sidebar Menu -->
                <div class=\"\" data-simplebar style=\"height: 100%;\">
                    <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">
                        <!-- Sidebar items here -->
                        <li class=\"has-sub\">
                            <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#formations\" aria-expanded=\"false\" aria-controls=\"formations\">
                                <i class=\"mdi mdi-email-mark-as-unread\"></i>
                                <span class=\"nav-text\">Gestion Rendez-vous</span> <b class=\"caret\"></b>
                            </a>
                            <ul class=\"collapse\" id=\"formations\" data-parent=\"#sidebar-menu\">
                                <div class=\"sub-menu\">
                                    
                                    <li>
                                        <a href=\"add_services\">Ajouter Services</a>
                                    </li>
                                    <li>
                                        <a href=\"allservices\">Liste des Services</a>
                                    </li>
                                    <li>
                                        <a href=\"afficher_rendezVous\">Liste des Rendez-vous</a>
                                    </li>
                                    
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar Footer -->
                <div class=\"sidebar-footer\">
                    <hr class=\"separator mb-0\" />
                    <div class=\"sidebar-footer-content\">
                        <h6 class=\"text-uppercase\">Cpu Uses <span class=\"float-right\">40%</span></h6>
                        <div class=\"progress progress-xs\">
                            <div class=\"progress-bar active\" style=\"width: 40%;\" role=\"progressbar\"></div>
                        </div>
                        <h6 class=\"text-uppercase\">Memory Uses <span class=\"float-right\">65%</span></h6>
                        <div class=\"progress progress-xs\">
                            <div class=\"progress-bar progress-bar-warning\" style=\"width: 65%;\" role=\"progressbar\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- ==================================== ——— PAGE WRAPPER ===================================== -->
        <div class=\"page-wrapper\">
            <!-- Header -->
            <header class=\"main-header\" id=\"header\">
                <nav class=\"navbar navbar-static-top navbar-expand-lg\">
                    <!-- Sidebar toggle button -->
                    <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </button>
                    <!-- Search form -->
                    <div class=\"search-form d-none d-lg-inline-block\">
                        <div class=\"input-group\">
                            <button type=\"button\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\">
                                <i class=\"mdi mdi-magnify\"></i>
                            </button>
                            <input type=\"text\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"'button', 'chart' etc.\" autofocus autocomplete=\"off\" />
                        </div>
                        <div id=\"search-results-container\">
                            <ul id=\"search-results\"></ul>
                        </div>
                    </div>

                    <div class=\"navbar-right\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Notifications and User Account dropdowns here -->
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- ==================================== ——— CONTENT WRAPPER ===================================== -->
            <div class=\"content-wrapper\">
                <div class=\"content\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 mx-auto\">
                            <div class=\"card card-default\">
                              {%block body%}{%endblock%}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src=\"/assets/plugins/jquery/jquery.min.js\"></script>
    <script src=\"/assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/assets/plugins/simplebar/simplebar.min.js\"></script>
 
    <script src='/assets/plugins/charts/Chart.min.js'></script>
    <script src='/assets/js/chart.js'></script>

    
    

    <script src='/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='/assets/js/vector-map.js'></script>

    <script src='/assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='/assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='/assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='/assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src=\"/assets/js/sleek.js\"></script>
  <link href=\"/assets/options/optionswitch.css\" rel=\"stylesheet\">
<script src=\"/assets/options/optionswitcher.js\"></script>
</body>

</html>

", "admin.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\admin.html.twig");
    }
}

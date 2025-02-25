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

/* calendar.html.twig */
class __TwigTemplate_c210f3bc9d59cbbebe1f69a5ebd00bb7 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <!-- Basic Page Needs -->
  <meta charset=\"utf-8\">
  <title>Novena - Health Care &amp; Medical Template</title>

  <!-- Mobile Specific Metas -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Health Care Medical Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Novena HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"novena\" />

  <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/images/favicon.png\" />

  <!-- Essential stylesheets -->
  <link rel=\"stylesheet\" href=\"/plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/icofont/icofont.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick-theme.css\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"/css/style.css\">

  <!-- FullCalendar Styles -->
  <script type=\"importmap\">
    {
      \"imports\": {
        \"@fullcalendar/core\": \"https://cdn.skypack.dev/@fullcalendar/core@6.1.15\",
        \"@fullcalendar/daygrid\": \"https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.15\",
        \"@fullcalendar/timegrid\": \"https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.15\",
        \"@fullcalendar/interaction\": \"https://cdn.skypack.dev/@fullcalendar/interaction@6.1.15\"
      }
    }
  </script>

  <!-- Custom CSS for Card and Shadow -->
  <style>
    .calendar-card {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px auto;
      max-width: 1100px;
      width: 90%;
    }

    .calendar-card #calendar {
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
    }
  </style>
</head>
<body id=\"top\">

<!-- Header -->
<header>
  <div class=\"header-top-bar\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
          <ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
            <li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
            <li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
          </ul>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
            <a href=\"tel:+23-345-67890\">
              <span>Call Now : </span>
              <span class=\"h4\">823-4565-13456</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">
        <img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
      </a>

      <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\"
        aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"icofont-navigation-menu\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\"><a class=\"nav-link\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        yield "\">Home</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">About</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Services</a></li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Rendez vous <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_rendezVous");
        yield "\">To make an appointment</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Available services</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_rendezVous");
        yield "\">Requested appointments</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
              <li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
              <li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
              <li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
              <li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
              <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
            </ul>
          </li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Calendar Section -->
<section class=\"section\">
  <div class=\"calendar-card\">
    <div id=\"calendar\"></div>
  </div>
</section>

<!-- Footer -->
<footer class=\"footer section gray-bg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4 mr-auto col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <div class=\"logo mb-4\">
            <img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
          </div>
          <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

          <ul class=\"list-inline footer-socials mt-4\">
            <li class=\"list-inline-item\">
              <a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-6 col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Department</h4>
          <div class=\"divider mb-4\"></div>

          <ul class=\"list-unstyled footer-menu lh-35\">
            <li><a href=\"#!\">Surgery </a></li>
            <li><a href=\"#!\">Wome's Health</a></li>
            <li><a href=\"#!\">Radiology</a></li>
            <li><a href=\"#!\">Cardioc</a></li>
            <li><a href=\"#!\">Medicine</a></li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-6 col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Support</h4>
          <div class=\"divider mb-4\"></div>

          <ul class=\"list-unstyled footer-menu lh-35\">
            <li><a href=\"#!\">Terms & Conditions</a></li>
            <li><a href=\"#!\">Privacy Policy</a></li>
            <li><a href=\"#!\">Company Support </a></li>
            <li><a href=\"#!\">FAQuestions</a></li>
            <li><a href=\"#!\">Company Licence</a></li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        <div class=\"widget widget-contact mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
          <div class=\"divider mb-4\"></div>

          <div class=\"footer-contact-block mb-4\">
            <div class=\"icon d-flex align-items-center\">
              <i class=\"icofont-email mr-3\"></i>
              <span class=\"h6 mb-0\">Support Available for 24/7</span>
            </div>
            <h4 class=\"mt-2\"><a href=\"mailto:support@email.com\">Support@email.com</a></h4>
          </div>

          <div class=\"footer-contact-block\">
            <div class=\"icon d-flex align-items-center\">
              <i class=\"icofont-support mr-3\"></i>
              <span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
            </div>
            <h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-btm py-4 mt-5\">
      <div class=\"row align-items-center justify-content-between\">
        <div class=\"col-lg-6\">
          <div class=\"copyright\">
            Copyright &copy; 2021, Designed &amp; Developed by <a href=\"https://themefisher.com/\">Themefisher</a>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
            <form action=\"#\" class=\"subscribe\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\" required>
              <button type=\"submit\" class=\"btn btn-main-2 btn-round-full\">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-4\">
          <a class=\"backtop scroll-top-to\" href=\"#top\">
            <i class=\"icofont-long-arrow-up\"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Essential Scripts -->
<script src=\"/plugins/jquery/jquery.js\"></script>
<script src=\"/plugins/bootstrap/bootstrap.min.js\"></script>
<script src=\"/plugins/slick-carousel/slick/slick.min.js\"></script>
<script src=\"/plugins/shuffle/shuffle.min.js\"></script>

<!-- FullCalendar Script -->
<script type=\"module\">
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import timeGridPlugin from '@fullcalendar/timegrid';
  import interactionPlugin from '@fullcalendar/interaction';

  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
      initialView: 'dayGridMonth',
      events: '/rendezvous/events',
      editable: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay',
      },
      eventDrop: function (info) {
        updateEvent(info.event);
      },
      eventResize: function (info) {
        updateEvent(info.event);
      },
      eventClick: function (info) {
        if (confirm(\"Are you sure you want to delete this event?\")) {
          deleteEvent(info.event);
        }
      },
      eventColor: '#3788d8',
      eventBackgroundColor: '#3788d8',
      eventBorderColor: '#3788d8',
      eventTextColor: '#ffffff',
    });

    calendar.render();

    function updateEvent(event) {
      const eventData = {
        id: event.id,
        start: event.start.toISOString(),
        end: event.end ? event.end.toISOString() : null,
      };

      fetch('/rendezvous/update', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(eventData),
      }).then(response => {
        if (!response.ok) {
          alert('Failed to update event.');
        }
      });
    }

    function deleteEvent(event) {
      fetch(`/deleterendez/\${event.id}`, {
        method: 'DELETE',
      }).then(response => {
        if (response.ok) {
          event.remove();
        } else {
          alert('Failed to delete event.');
        }
      });
    }
  });
</script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "calendar.html.twig";
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
        return array (  169 => 108,  165 => 107,  161 => 106,  150 => 98,  136 => 87,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <!-- Basic Page Needs -->
  <meta charset=\"utf-8\">
  <title>Novena - Health Care &amp; Medical Template</title>

  <!-- Mobile Specific Metas -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Health Care Medical Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Novena HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"novena\" />

  <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/images/favicon.png\" />

  <!-- Essential stylesheets -->
  <link rel=\"stylesheet\" href=\"/plugins/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/icofont/icofont.min.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick.css\">
  <link rel=\"stylesheet\" href=\"/plugins/slick-carousel/slick/slick-theme.css\">

  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"/css/style.css\">

  <!-- FullCalendar Styles -->
  <script type=\"importmap\">
    {
      \"imports\": {
        \"@fullcalendar/core\": \"https://cdn.skypack.dev/@fullcalendar/core@6.1.15\",
        \"@fullcalendar/daygrid\": \"https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.15\",
        \"@fullcalendar/timegrid\": \"https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.15\",
        \"@fullcalendar/interaction\": \"https://cdn.skypack.dev/@fullcalendar/interaction@6.1.15\"
      }
    }
  </script>

  <!-- Custom CSS for Card and Shadow -->
  <style>
    .calendar-card {
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px auto;
      max-width: 1100px;
      width: 90%;
    }

    .calendar-card #calendar {
      background: #ffffff;
      border-radius: 8px;
      overflow: hidden;
    }
  </style>
</head>
<body id=\"top\">

<!-- Header -->
<header>
  <div class=\"header-top-bar\">
    <div class=\"container\">
      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\">
          <ul class=\"top-bar-info list-inline-item pl-0 mb-0\">
            <li class=\"list-inline-item\"><a href=\"mailto:support@gmail.com\"><i class=\"icofont-support-faq mr-2\"></i>support@novena.com</a></li>
            <li class=\"list-inline-item\"><i class=\"icofont-location-pin mr-2\"></i>Address Ta-134/A, New York, USA </li>
          </ul>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"text-lg-right top-right-bar mt-2 mt-lg-0\">
            <a href=\"tel:+23-345-67890\">
              <span>Call Now : </span>
              <span class=\"h4\">823-4565-13456</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class=\"navbar navbar-expand-lg navigation\" id=\"navbar\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{ path('app_index') }}\">
        <img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
      </a>

      <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarmain\"
        aria-controls=\"navbarmain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"icofont-navigation-menu\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarmain\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item active\"><a class=\"nav-link\" href=\"{{ path('app_index') }}\">Home</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">About</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Services</a></li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"department.html\" id=\"dropdown02\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Rendez vous <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown02\">
              <li><a class=\"dropdown-item\" href=\"{{ path ('add_rendezVous') }}\">To make an appointment</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path ('app_services') }}\">Available services</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path ('afficher_rendezVous') }}\">Requested appointments</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"doctor.html\" id=\"dropdown03\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Doctors <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
              <li><a class=\"dropdown-item\" href=\"doctor.html\">Doctors</a></li>
              <li><a class=\"dropdown-item\" href=\"doctor-single.html\">Doctor Single</a></li>
              <li><a class=\"dropdown-item\" href=\"appoinment.html\">Appoinment</a></li>
            </ul>
          </li>

          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"blog-sidebar.html\" id=\"dropdown05\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Blog <i class=\"icofont-thin-down\"></i></a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown05\">
              <li><a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog with Sidebar</a></li>
              <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Single</a></li>
            </ul>
          </li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Calendar Section -->
<section class=\"section\">
  <div class=\"calendar-card\">
    <div id=\"calendar\"></div>
  </div>
</section>

<!-- Footer -->
<footer class=\"footer section gray-bg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-4 mr-auto col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <div class=\"logo mb-4\">
            <img src=\"images/logo.png\" alt=\"\" class=\"img-fluid\">
          </div>
          <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

          <ul class=\"list-inline footer-socials mt-4\">
            <li class=\"list-inline-item\">
              <a href=\"https://www.facebook.com/themefisher\"><i class=\"icofont-facebook\"></i></a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"https://twitter.com/themefisher\"><i class=\"icofont-twitter\"></i></a>
            </li>
            <li class=\"list-inline-item\">
              <a href=\"https://www.pinterest.com/themefisher/\"><i class=\"icofont-linkedin\"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-6 col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Department</h4>
          <div class=\"divider mb-4\"></div>

          <ul class=\"list-unstyled footer-menu lh-35\">
            <li><a href=\"#!\">Surgery </a></li>
            <li><a href=\"#!\">Wome's Health</a></li>
            <li><a href=\"#!\">Radiology</a></li>
            <li><a href=\"#!\">Cardioc</a></li>
            <li><a href=\"#!\">Medicine</a></li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-2 col-md-6 col-sm-6\">
        <div class=\"widget mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Support</h4>
          <div class=\"divider mb-4\"></div>

          <ul class=\"list-unstyled footer-menu lh-35\">
            <li><a href=\"#!\">Terms & Conditions</a></li>
            <li><a href=\"#!\">Privacy Policy</a></li>
            <li><a href=\"#!\">Company Support </a></li>
            <li><a href=\"#!\">FAQuestions</a></li>
            <li><a href=\"#!\">Company Licence</a></li>
          </ul>
        </div>
      </div>

      <div class=\"col-lg-3 col-md-6 col-sm-6\">
        <div class=\"widget widget-contact mb-5 mb-lg-0\">
          <h4 class=\"text-capitalize mb-3\">Get in Touch</h4>
          <div class=\"divider mb-4\"></div>

          <div class=\"footer-contact-block mb-4\">
            <div class=\"icon d-flex align-items-center\">
              <i class=\"icofont-email mr-3\"></i>
              <span class=\"h6 mb-0\">Support Available for 24/7</span>
            </div>
            <h4 class=\"mt-2\"><a href=\"mailto:support@email.com\">Support@email.com</a></h4>
          </div>

          <div class=\"footer-contact-block\">
            <div class=\"icon d-flex align-items-center\">
              <i class=\"icofont-support mr-3\"></i>
              <span class=\"h6 mb-0\">Mon to Fri : 08:30 - 18:00</span>
            </div>
            <h4 class=\"mt-2\"><a href=\"tel:+23-345-67890\">+23-456-6588</a></h4>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-btm py-4 mt-5\">
      <div class=\"row align-items-center justify-content-between\">
        <div class=\"col-lg-6\">
          <div class=\"copyright\">
            Copyright &copy; 2021, Designed &amp; Developed by <a href=\"https://themefisher.com/\">Themefisher</a>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"subscribe-form text-lg-right mt-5 mt-lg-0\">
            <form action=\"#\" class=\"subscribe\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Your Email address\" required>
              <button type=\"submit\" class=\"btn btn-main-2 btn-round-full\">Subscribe</button>
            </form>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-4\">
          <a class=\"backtop scroll-top-to\" href=\"#top\">
            <i class=\"icofont-long-arrow-up\"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Essential Scripts -->
<script src=\"/plugins/jquery/jquery.js\"></script>
<script src=\"/plugins/bootstrap/bootstrap.min.js\"></script>
<script src=\"/plugins/slick-carousel/slick/slick.min.js\"></script>
<script src=\"/plugins/shuffle/shuffle.min.js\"></script>

<!-- FullCalendar Script -->
<script type=\"module\">
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import timeGridPlugin from '@fullcalendar/timegrid';
  import interactionPlugin from '@fullcalendar/interaction';

  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
      initialView: 'dayGridMonth',
      events: '/rendezvous/events',
      editable: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay',
      },
      eventDrop: function (info) {
        updateEvent(info.event);
      },
      eventResize: function (info) {
        updateEvent(info.event);
      },
      eventClick: function (info) {
        if (confirm(\"Are you sure you want to delete this event?\")) {
          deleteEvent(info.event);
        }
      },
      eventColor: '#3788d8',
      eventBackgroundColor: '#3788d8',
      eventBorderColor: '#3788d8',
      eventTextColor: '#ffffff',
    });

    calendar.render();

    function updateEvent(event) {
      const eventData = {
        id: event.id,
        start: event.start.toISOString(),
        end: event.end ? event.end.toISOString() : null,
      };

      fetch('/rendezvous/update', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(eventData),
      }).then(response => {
        if (!response.ok) {
          alert('Failed to update event.');
        }
      });
    }

    function deleteEvent(event) {
      fetch(`/deleterendez/\${event.id}`, {
        method: 'DELETE',
      }).then(response => {
        if (response.ok) {
          event.remove();
        } else {
          alert('Failed to delete event.');
        }
      });
    }
  });
</script>
</body>
</html>", "calendar.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\calendar.html.twig");
    }
}

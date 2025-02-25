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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Calendar App</title>
    <!-- Include Tippy.js -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"https://unpkg.com/tippy.js@6\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/tippy.js@6/animations/scale.css\" />
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
          eventMouseEnter: function (info) {
            // Add tooltip on hover
            tippy(info.el, {
              content: `
                <strong>\${info.event.title}</strong><br>
                Start: \${info.event.start.toLocaleString()}<br>
                End: \${info.event.end ? info.event.end.toLocaleString() : 'N/A'}
              `,
              allowHTML: true,
              animation: 'scale',
              placement: 'top',
              interactive: true,
            });
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
    <style>
      /* General Styling */
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      /* Calendar Container */
      #calendar {
        max-width: 1100px;
        width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      /* Header Toolbar */
      .fc-header-toolbar {
        margin-bottom: 20px;
      }

      .fc-toolbar-title {
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
      }

      .fc-button {
        background-color: #3788d8;
        border: none;
        color: white;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 0.9em;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .fc-button:hover {
        background-color: #2a6bb0;
      }

      /* Event Styling */
      .fc-event {
        border-radius: 4px;
        padding: 5px;
        font-size: 0.9em;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .fc-toolbar-title {
          font-size: 1.2em;
        }

        .fc-button {
          padding: 6px 10px;
          font-size: 0.8em;
        }

        #calendar {
          padding: 10px;
        }
      }
    </style>
</head>
<body>
    <div id=\"calendar\"></div>
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
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Calendar App</title>
    <!-- Include Tippy.js -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"https://unpkg.com/tippy.js@6\"></script>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/tippy.js@6/animations/scale.css\" />
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
          eventMouseEnter: function (info) {
            // Add tooltip on hover
            tippy(info.el, {
              content: `
                <strong>\${info.event.title}</strong><br>
                Start: \${info.event.start.toLocaleString()}<br>
                End: \${info.event.end ? info.event.end.toLocaleString() : 'N/A'}
              `,
              allowHTML: true,
              animation: 'scale',
              placement: 'top',
              interactive: true,
            });
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
    <style>
      /* General Styling */
      body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      /* Calendar Container */
      #calendar {
        max-width: 1100px;
        width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      /* Header Toolbar */
      .fc-header-toolbar {
        margin-bottom: 20px;
      }

      .fc-toolbar-title {
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
      }

      .fc-button {
        background-color: #3788d8;
        border: none;
        color: white;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 0.9em;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .fc-button:hover {
        background-color: #2a6bb0;
      }

      /* Event Styling */
      .fc-event {
        border-radius: 4px;
        padding: 5px;
        font-size: 0.9em;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .fc-toolbar-title {
          font-size: 1.2em;
        }

        .fc-button {
          padding: 6px 10px;
          font-size: 0.8em;
        }

        #calendar {
          padding: 10px;
        }
      }
    </style>
</head>
<body>
    <div id=\"calendar\"></div>
</body>
</html>", "calendar.html.twig", "C:\\Users\\medel\\Desktop\\New folder (2)\\work\\templates\\calendar.html.twig");
    }
}

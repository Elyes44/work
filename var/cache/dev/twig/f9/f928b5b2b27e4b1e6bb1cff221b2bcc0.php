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

/* statistics/index.html.twig */
class __TwigTemplate_6e9eec5deed63fcf3d3422b37fdb8759 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistics/index.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "statistics/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container\">
    <h1>Statistics</h1>

    <!-- Card for Camembert and Line Charts -->
    <div class=\"card\">
        <div class=\"card-body\">
            <!-- Row for Charts -->
            <div class=\"row\">
                <!-- Camembert Chart Section -->
                <div class=\"col-md-6\">
                    <h3>Consultation Types Distribution</h3>
                    <canvas id=\"camembertChart\" width=\"500\" height=\"500\"></canvas> <!-- Increased size -->
                </div>

                <!-- Line Chart Section -->
                <div class=\"col-md-6\">
                    <h3>Appointment Count Variations</h3>
                    <canvas id=\"appointmentsLineChart\" width=\"500\" height=\"500\"></canvas> <!-- Increased size -->
                </div>
            </div>
        </div>
    </div>

    <!-- Card for Histogram Chart -->
    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h3>Appointments by Month</h3>
            <canvas id=\"histogramChart\" width=\"800\" height=\"400\"></canvas> <!-- Increased size -->
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Camembert Chart Script -->
    <script>
        var ctxCamembert = document.getElementById('camembertChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Services for Camembert:\", ";
        // line 43
        yield (isset($context["servicesForCamembert"]) || array_key_exists("servicesForCamembert", $context) ? $context["servicesForCamembert"] : (function () { throw new RuntimeError('Variable "servicesForCamembert" does not exist.', 43, $this->source); })());
        yield ");
        console.log(\"Percentages for Camembert:\", ";
        // line 44
        yield (isset($context["percentagesForCamembert"]) || array_key_exists("percentagesForCamembert", $context) ? $context["percentagesForCamembert"] : (function () { throw new RuntimeError('Variable "percentagesForCamembert" does not exist.', 44, $this->source); })());
        yield ");

        var camembertChart = new Chart(ctxCamembert, {
            type: 'pie',
            data: {
                labels: ";
        // line 49
        yield (isset($context["servicesForCamembert"]) || array_key_exists("servicesForCamembert", $context) ? $context["servicesForCamembert"] : (function () { throw new RuntimeError('Variable "servicesForCamembert" does not exist.', 49, $this->source); })());
        yield ", // Service names
                datasets: [{
                    data: ";
        // line 51
        yield (isset($context["percentagesForCamembert"]) || array_key_exists("percentagesForCamembert", $context) ? $context["percentagesForCamembert"] : (function () { throw new RuntimeError('Variable "percentagesForCamembert" does not exist.', 51, $this->source); })());
        yield ", // Percentages
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                    hoverOffset: 4
                }]
            }
        });
    </script>

    <!-- Line Chart Script -->
    <script>
        var ctxLine = document.getElementById('appointmentsLineChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Dates for Line Chart:\", ";
        // line 64
        yield (isset($context["datesForLineChart"]) || array_key_exists("datesForLineChart", $context) ? $context["datesForLineChart"] : (function () { throw new RuntimeError('Variable "datesForLineChart" does not exist.', 64, $this->source); })());
        yield ");
        console.log(\"Counts for Line Chart:\", ";
        // line 65
        yield (isset($context["countsForLineChart"]) || array_key_exists("countsForLineChart", $context) ? $context["countsForLineChart"] : (function () { throw new RuntimeError('Variable "countsForLineChart" does not exist.', 65, $this->source); })());
        yield ");

        var appointmentsLineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ";
        // line 70
        yield (isset($context["datesForLineChart"]) || array_key_exists("datesForLineChart", $context) ? $context["datesForLineChart"] : (function () { throw new RuntimeError('Variable "datesForLineChart" does not exist.', 70, $this->source); })());
        yield ",  // X-axis (Dates)
                datasets: [{
                    label: 'Number of Appointments',
                    data: ";
        // line 73
        yield (isset($context["countsForLineChart"]) || array_key_exists("countsForLineChart", $context) ? $context["countsForLineChart"] : (function () { throw new RuntimeError('Variable "countsForLineChart" does not exist.', 73, $this->source); })());
        yield ",  // Y-axis (Counts)
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Appointments Count'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Histogram Chart Script -->
    <script>
        var ctxHistogram = document.getElementById('histogramChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Months for Histogram:\", ";
        // line 105
        yield (isset($context["monthsForHistogram"]) || array_key_exists("monthsForHistogram", $context) ? $context["monthsForHistogram"] : (function () { throw new RuntimeError('Variable "monthsForHistogram" does not exist.', 105, $this->source); })());
        yield ");
        console.log(\"Counts for Histogram:\", ";
        // line 106
        yield (isset($context["countsForHistogram"]) || array_key_exists("countsForHistogram", $context) ? $context["countsForHistogram"] : (function () { throw new RuntimeError('Variable "countsForHistogram" does not exist.', 106, $this->source); })());
        yield ");

        var histogramChart = new Chart(ctxHistogram, {
            type: 'bar',
            data: {
                labels: ";
        // line 111
        yield (isset($context["monthsForHistogram"]) || array_key_exists("monthsForHistogram", $context) ? $context["monthsForHistogram"] : (function () { throw new RuntimeError('Variable "monthsForHistogram" does not exist.', 111, $this->source); })());
        yield ",  // X-axis (Months)
                datasets: [{
                    label: 'Number of Appointments',
                    data: ";
        // line 114
        yield (isset($context["countsForHistogram"]) || array_key_exists("countsForHistogram", $context) ? $context["countsForHistogram"] : (function () { throw new RuntimeError('Variable "countsForHistogram" does not exist.', 114, $this->source); })());
        yield ",  // Y-axis (Counts)
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Appointments Count'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
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
        return "statistics/index.html.twig";
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
        return array (  221 => 114,  215 => 111,  207 => 106,  203 => 105,  168 => 73,  162 => 70,  154 => 65,  150 => 64,  134 => 51,  129 => 49,  121 => 44,  117 => 43,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1>Statistics</h1>

    <!-- Card for Camembert and Line Charts -->
    <div class=\"card\">
        <div class=\"card-body\">
            <!-- Row for Charts -->
            <div class=\"row\">
                <!-- Camembert Chart Section -->
                <div class=\"col-md-6\">
                    <h3>Consultation Types Distribution</h3>
                    <canvas id=\"camembertChart\" width=\"500\" height=\"500\"></canvas> <!-- Increased size -->
                </div>

                <!-- Line Chart Section -->
                <div class=\"col-md-6\">
                    <h3>Appointment Count Variations</h3>
                    <canvas id=\"appointmentsLineChart\" width=\"500\" height=\"500\"></canvas> <!-- Increased size -->
                </div>
            </div>
        </div>
    </div>

    <!-- Card for Histogram Chart -->
    <div class=\"card mt-4\">
        <div class=\"card-body\">
            <h3>Appointments by Month</h3>
            <canvas id=\"histogramChart\" width=\"800\" height=\"400\"></canvas> <!-- Increased size -->
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <!-- Camembert Chart Script -->
    <script>
        var ctxCamembert = document.getElementById('camembertChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Services for Camembert:\", {{ servicesForCamembert|raw }});
        console.log(\"Percentages for Camembert:\", {{ percentagesForCamembert|raw }});

        var camembertChart = new Chart(ctxCamembert, {
            type: 'pie',
            data: {
                labels: {{ servicesForCamembert|raw }}, // Service names
                datasets: [{
                    data: {{ percentagesForCamembert|raw }}, // Percentages
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                    hoverOffset: 4
                }]
            }
        });
    </script>

    <!-- Line Chart Script -->
    <script>
        var ctxLine = document.getElementById('appointmentsLineChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Dates for Line Chart:\", {{ datesForLineChart|raw }});
        console.log(\"Counts for Line Chart:\", {{ countsForLineChart|raw }});

        var appointmentsLineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: {{ datesForLineChart|raw }},  // X-axis (Dates)
                datasets: [{
                    label: 'Number of Appointments',
                    data: {{ countsForLineChart|raw }},  // Y-axis (Counts)
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Appointments Count'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Histogram Chart Script -->
    <script>
        var ctxHistogram = document.getElementById('histogramChart').getContext('2d');
        
        // Debug: Output the data passed to JavaScript
        console.log(\"Months for Histogram:\", {{ monthsForHistogram|raw }});
        console.log(\"Counts for Histogram:\", {{ countsForHistogram|raw }});

        var histogramChart = new Chart(ctxHistogram, {
            type: 'bar',
            data: {
                labels: {{ monthsForHistogram|raw }},  // X-axis (Months)
                datasets: [{
                    label: 'Number of Appointments',
                    data: {{ countsForHistogram|raw }},  // Y-axis (Counts)
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Appointments Count'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>
{% endblock %}", "statistics/index.html.twig", "C:\\Users\\medel\\Desktop\\work\\templates\\statistics\\index.html.twig");
    }
}

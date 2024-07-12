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

/* admin/dashboard.html.twig */
class __TwigTemplate_16d2f4d384e597ab0efd895a6e760d83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                    <h5 class=\"mb-4\">Nombre de membres</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 membres</h3>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre d'entreprises </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 entreprises</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre d'abonnements pris</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">500</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12 mt-5 mb-5\">
                <div class=\"card table-card\">
                        <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                            <h5>Nouveaux comptes</h5>
                            <div class=\"dropdown\">
                                <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\"
                                    href=\"#\">
                                   Voir plus
                                </a>
                            </div>
                        </div>
                        <div class=\"card-body py-2 px-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover table-borderless table-sm mb-0\">
                                    <tbody>
                                    
                                        <tr>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">email</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"text-end p-3\">
                                                <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> 12/12/12</p>
                                            </td>
                                        </tr>
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                    <h5 class=\"mb-4\">Nombre Total de Tickets Vendus</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 tickets</h3>
                    <span class=\"badge bg-light-success ms-2\">2%</span>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Revenus Totaux</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">2490 €</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre de tickets invendus</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">500</h3>
                            <span class=\"badge bg-light-success ms-2\">98%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title %}Dashboard{% endblock %}

{% block main %}
    <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                    <h5 class=\"mb-4\">Nombre de membres</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 membres</h3>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre d'entreprises </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 entreprises</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 p-5\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre d'abonnements pris</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">500</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12 mt-5 mb-5\">
                <div class=\"card table-card\">
                        <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                            <h5>Nouveaux comptes</h5>
                            <div class=\"dropdown\">
                                <a class=\"avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none\"
                                    href=\"#\">
                                   Voir plus
                                </a>
                            </div>
                        </div>
                        <div class=\"card-body py-2 px-0\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover table-borderless table-sm mb-0\">
                                    <tbody>
                                    
                                        <tr>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">email</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"text-end p-3\">
                                                <p class=\"mb-0\"><i class=\"ph-duotone ph-circle text-warning f-12\"></i> 12/12/12</p>
                                            </td>
                                        </tr>
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                    <h5 class=\"mb-4\">Nombre Total de Tickets Vendus</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">24 tickets</h3>
                    <span class=\"badge bg-light-success ms-2\">2%</span>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Revenus Totaux</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">2490 €</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <img src=\"https://html.phoenixcoded.net/light-able/bootstrap/assets/images/widget/img-status-4.svg\" alt=\"img\" class=\"img-fluid img-bg\" >
                        <h5 class=\"mb-4\">Nombre de tickets invendus</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">500</h3>
                            <span class=\"badge bg-light-success ms-2\">98%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "admin/dashboard.html.twig", "/Users/hantour/Documents/FERIEL/forest-hill/templates/admin/dashboard.html.twig");
    }
}

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
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <h5 class=\"mb-4\">Compte utilisateur</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numTotalUsers"]) || array_key_exists("numTotalUsers", $context) ? $context["numTotalUsers"] : (function () { throw new RuntimeError('Variable "numTotalUsers" does not exist.', 12, $this->source); })()), "html", null, true);
        yield " comptes</h3>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Compte membres pacha </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numuserpacha"]) || array_key_exists("numuserpacha", $context) ? $context["numuserpacha"] : (function () { throw new RuntimeError('Variable "numuserpacha" does not exist.', 22, $this->source); })()), "html", null, true);
        yield " membres</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Comptes membre Fréquence </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numuserfreq"]) || array_key_exists("numuserfreq", $context) ? $context["numuserfreq"] : (function () { throw new RuntimeError('Variable "numuserfreq" does not exist.', 32, $this->source); })()), "html", null, true);
        yield " membres</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Compte non membre</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["numusernon"]) || array_key_exists("numusernon", $context) ? $context["numusernon"] : (function () { throw new RuntimeError('Variable "numusernon" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12 mt-5 mb-5\">
                <div class=\"card table-card\">
                        <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                            <h5>Nouveaux comptes</h5>
                            <div class=\"dropdown\">
                                <a class=\"avtar avtar-xs btn-link-secondary\"href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\">
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
                                                        <h6 class=\"m-b-0\">Prénom</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">Nom</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">Email</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">  Date de naissance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["FourLastestUser"]) || array_key_exists("FourLastestUser", $context) ? $context["FourLastestUser"] : (function () { throw new RuntimeError('Variable "FourLastestUser" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 93
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 97), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 104), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 112), "html", null, true);
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">  ";
            // line 119
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "birth", [], "any", false, false, false, 119)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "birth", [], "any", false, false, false, 119), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                                    </tbody>
                                </table>
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
        return array (  246 => 125,  234 => 119,  224 => 112,  213 => 104,  203 => 97,  197 => 93,  193 => 92,  150 => 52,  137 => 42,  124 => 32,  111 => 22,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title %}Dashboard{% endblock %}

{% block main %}
    <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                <div class=\"card-body\">
                    <h5 class=\"mb-4\">Compte utilisateur</h5>
                    <div class=\"d-flex align-items-center mt-3\">
                    <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">{{numTotalUsers}} comptes</h3>
                    </div>
                </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Compte membres pacha </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">{{numuserpacha}} membres</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Comptes membre Fréquence </h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">{{numuserfreq}} membres</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 p-3\">
                <div class=\"card statistics-card-1 overflow-hidden \">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4\">Compte non membre</h5>
                        <div class=\"d-flex align-items-center mt-3\">
                            <h3 class=\"f-w-300 d-flex align-items-center m-b-0\">{{numusernon}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-xl-12 mt-5 mb-5\">
                <div class=\"card table-card\">
                        <div class=\"card-header d-flex align-items-center justify-content-between py-3\">
                            <h5>Nouveaux comptes</h5>
                            <div class=\"dropdown\">
                                <a class=\"avtar avtar-xs btn-link-secondary\"href=\"{{ url }}\">
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
                                                        <h6 class=\"m-b-0\">Prénom</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">Nom</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">Email</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">  Date de naissance</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% for user in FourLastestUser %}
                                        <tr>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">{{ user.firstname }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">{{ user.lastname }}</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">{{ user.email }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=\"d-inline-block align-middle\">
                                                    <div class=\"d-inline-block p-3\">
                                                        <h6 class=\"m-b-0\">  {{ user.birth ? user.birth|date('Y-m-d') : '' }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
{% endblock %}", "admin/dashboard.html.twig", "/Users/hantour/Documents/FERIEL/forest-hill/templates/admin/dashboard.html.twig");
    }
}

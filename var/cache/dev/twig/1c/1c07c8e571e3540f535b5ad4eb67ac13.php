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

/* registration/register.html.twig */
class __TwigTemplate_e756e7dd48174004d46db221bc6c270c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    ";
        // line 15
        yield "
    <div class=\"auth-main v1\">
    <div class=\"auth-wrapper\">
        <div class=\"auth-form\">
            <div class=\"card my-5\">
                <div class=\"card-body\">
                    <div class=\"text-center\">
                        ";
        // line 23
        yield "                        <h4 class=\"f-w-500 mb-1\">Inscription</h4>
                        ";
        // line 25
        yield "                    </div>
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), 'errors');
        yield "

                    ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Votre profil
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "profile", [], "any", false, false, false, 35), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Prénom
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "firstname", [], "any", false, false, false, 45), 'row');
        yield "
                            </div>
                        </div>
                        
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Nom
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "lastname", [], "any", false, false, false, 56), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Date de naissance
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "birth", [], "any", false, false, false, 66), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Email
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                               Mot de passe
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "plainPassword", [], "any", false, false, false, 86), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5 form-check\">
                        <div class=\"row mb-0\">
                            <div class=\"col-md-3 col-sm-12\">
                              ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "agreeTerms", [], "any", false, false, false, 93), 'row');
        yield "
                            </div>
                            <label class=\"form-check-label col-md-9 col-sm-12 text-muted\">
                                J'accepte les conditions générale
                            </label>
                        </div>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Captcha
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "captcha", [], "any", false, false, false, 106), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"d-grid mt-4 mb-5\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                    </div>
                    ";
        // line 113
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 113, $this->source); })()), 'form_end');
        yield "

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
        return "registration/register.html.twig";
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
        return array (  224 => 113,  214 => 106,  198 => 93,  188 => 86,  175 => 76,  162 => 66,  149 => 56,  135 => 45,  122 => 35,  112 => 28,  107 => 26,  104 => 25,  101 => 23,  92 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {# <h1>Register</h1>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        

        <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }} #}

    <div class=\"auth-main v1\">
    <div class=\"auth-wrapper\">
        <div class=\"auth-form\">
            <div class=\"card my-5\">
                <div class=\"card-body\">
                    <div class=\"text-center\">
                        {# <img src=\"{{ asset('images/authentication/img-auth-login.png') }}\" alt=\"images\" class=\"img-fluid mb-3\" /> #}
                        <h4 class=\"f-w-500 mb-1\">Inscription</h4>
                        {# <p class=\"mb-3\">Vous êtes déjà inscrit ? <a href=\"{{path('app_login')}}\" class=\"link-primary ms-1\">Connectez-vous !</a></p> #}
                    </div>
                    {{ form_errors(registrationForm) }}

                    {{ form_start(registrationForm) }}
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Votre profil
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                {{ form_row(registrationForm.profile) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Prénom
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                {{ form_row(registrationForm.firstname) }}
                            </div>
                        </div>
                        
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Nom
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                                {{ form_row(registrationForm.lastname) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Date de naissance
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               {{ form_row(registrationForm.birth) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\"> 
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Email
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               {{ form_row(registrationForm.email) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                               Mot de passe
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               {{ form_row(registrationForm.plainPassword) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"mb-5 form-check\">
                        <div class=\"row mb-0\">
                            <div class=\"col-md-3 col-sm-12\">
                              {{ form_row(registrationForm.agreeTerms) }}
                            </div>
                            <label class=\"form-check-label col-md-9 col-sm-12 text-muted\">
                                J'accepte les conditions générale
                            </label>
                        </div>
                    </div>
                    <div class=\"mb-5\">
                        <div class=\"row mb-0\">
                            <label class=\"col-form-label col-md-3 col-sm-12 text-md-end\">
                                Captcha
                            </label>
                            <div class=\"col-md-9 col-sm-12\">
                               {{ form_row(registrationForm.captcha) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"d-grid mt-4 mb-5\">
                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                    </div>
                    {{ form_end(registrationForm) }}

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "/Users/hantour/Documents/FERIEL/forest-hill/templates/registration/register.html.twig");
    }
}

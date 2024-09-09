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

/* registration/register_membre.html.twig */
class __TwigTemplate_ae12771e5621c30134e6436f2e472ab6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_membre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_membre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_membre.html.twig", 1);
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

        yield "Enregistrement";
        
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "
<div class=\"register-formulaire-background\">
    <h4>S'inscrire en tant que membre</h4>

    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 13, $this->source); })()), 'errors');
        yield "
    <div class=\"formulaire\">

        ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 23, $this->source); })()), "pseudo", [], "any", false, false, false, 23), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 38, $this->source); })()), "numTelephone", [], "any", false, false, false, 38), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 41, $this->source); })()), "dateNaissance", [], "any", false, false, false, 41), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'row');
        yield "
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 51, $this->source); })()), "cp", [], "any", false, false, false, 51), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 54, $this->source); })()), "ville", [], "any", false, false, false, 54), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'row', ["label" => "Password"]);
        // line 61
        yield "
        </div>

        <div class=\"row-form\">
            <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 65, $this->source); })()), "agreeTerms", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\">
                J'accepte les <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_home");
        yield "\" target=\"_blank\">conditions d'utilisation</a> du site.
                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 67, $this->source); })()), "agreeTerms", [], "any", false, false, false, 67), 'widget');
        yield "
        </label>
        </div>

        <button type=\"submit\" class=\"btn\">Register</button>
        
        ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationMembreForm"]) || array_key_exists("registrationMembreForm", $context) ? $context["registrationMembreForm"] : (function () { throw new RuntimeError('Variable "registrationMembreForm" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
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
        return "registration/register_membre.html.twig";
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
        return array (  214 => 73,  205 => 67,  201 => 66,  197 => 65,  191 => 61,  189 => 59,  181 => 54,  175 => 51,  167 => 46,  159 => 41,  153 => 38,  144 => 32,  138 => 29,  129 => 23,  123 => 20,  116 => 16,  110 => 13,  104 => 9,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Enregistrement{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

<div class=\"register-formulaire-background\">
    <h4>S'inscrire en tant que membre</h4>

    {{ form_errors(registrationMembreForm) }}
    <div class=\"formulaire\">

        {{ form_start(registrationMembreForm) }}
        
        <div class=\"row-form\">
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.email) }}
            </div>
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.pseudo) }}
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.nom) }}
            </div>
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.prenom) }}
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.numTelephone) }}
            </div>
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.dateNaissance) }}
            </div>
        </div>

        <div class=\"row-form\">
                {{ form_row(registrationMembreForm.adresse) }}
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.cp) }}
            </div>
            <div class=\"col-form\">
                {{ form_row(registrationMembreForm.ville) }}
            </div>
        </div>

        <div class=\"row-form\">
            {{ form_row(registrationMembreForm.plainPassword, {
                label: 'Password'
            }) }}
        </div>

        <div class=\"row-form\">
            <label for=\"{{ registrationMembreForm.agreeTerms.vars.id }}\">
                J'accepte les <a href=\"{{ path('mentions_home') }}\" target=\"_blank\">conditions d'utilisation</a> du site.
                {{ form_widget(registrationMembreForm.agreeTerms) }}
        </label>
        </div>

        <button type=\"submit\" class=\"btn\">Register</button>
        
        {{ form_end(registrationMembreForm) }}
    </div>
</div>
{% endblock %}", "registration/register_membre.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\registration\\register_membre.html.twig");
    }
}

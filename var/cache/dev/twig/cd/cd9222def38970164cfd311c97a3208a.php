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

/* membre/show.html.twig */
class __TwigTemplate_aaeb81348e8c39813a6a3505bc2feef3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/show.html.twig", 1);
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

        // line 4
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "isAdmin", [], "method", false, false, false, 4))) {
            // line 5
            yield "        Détails membre
    ";
        } else {
            // line 7
            yield "        Page introuvable
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "
";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "isAdmin", [], "method", false, false, false, 13))) {
            // line 14
            yield "    <div class=\"membre-container\">
        <h4>Détails de ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
            yield "</h4>

        <p>
            Nom : ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
            yield " <br>
            Prénom : ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
            yield " <br>

            Numéro de Licence : ";
            // line 21
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 21, $this->source); })()), "numLicence", [], "any", false, false, false, 21)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 21, $this->source); })()), "numLicence", [], "any", false, false, false, 21), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Date d'Inscription : ";
            // line 22
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 22, $this->source); })()), "dateInscription", [], "any", false, false, false, 22)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 22, $this->source); })()), "dateInscription", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Numéro de Téléphone : ";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 23, $this->source); })()), "numTelephone", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 23, $this->source); })()), "numTelephone", [], "any", false, false, false, 23), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Adresse : ";
            // line 24
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Ville : ";
            // line 25
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 25, $this->source); })()), "ville", [], "any", false, false, false, 25)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 25, $this->source); })()), "ville", [], "any", false, false, false, 25), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Code Postal : ";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 26, $this->source); })()), "cp", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 26, $this->source); })()), "cp", [], "any", false, false, false, 26), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>
            Date de Naissance : ";
            // line 27
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 27, $this->source); })()), "dateNaissance", [], "any", false, false, false, 27)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 27, $this->source); })()), "dateNaissance", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true)) : (yield "Non renseigné"));
            yield " <br>

            ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 29, $this->source); })()), "photo", [], "any", false, false, false, 29)) {
                // line 30
                yield "                Photo : <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 30, $this->source); })()), "photo", [], "any", false, false, false, 30))), "html", null, true);
                yield "\" alt=\"Photo de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
                yield "\"> <br>
            ";
            } else {
                // line 32
                yield "                Photo : Non renseigné <br>
            ";
            }
            // line 34
            yield "        </p>

    </div>
";
        } else {
            // line 38
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "membre/show.html.twig";
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
        return array (  176 => 38,  170 => 34,  166 => 32,  156 => 30,  154 => 29,  149 => 27,  145 => 26,  141 => 25,  137 => 24,  133 => 23,  129 => 22,  125 => 21,  120 => 19,  116 => 18,  108 => 15,  105 => 14,  103 => 13,  100 => 12,  90 => 11,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user  and app.user.isAdmin() %}
        Détails membre
    {% else %}
        Page introuvable
    {% endif %}
{% endblock %}

{% block body %}

{% if app.user  and app.user.isAdmin() %}
    <div class=\"membre-container\">
        <h4>Détails de {{ membre.prenom }} {{ membre.nom }}</h4>

        <p>
            Nom : {{ membre.nom }} <br>
            Prénom : {{ membre.prenom }} <br>

            Numéro de Licence : {{ membre.numLicence ? membre.numLicence : 'Non renseigné' }} <br>
            Date d'Inscription : {{ membre.dateInscription ? membre.dateInscription|date('d/m/Y') : 'Non renseigné' }} <br>
            Numéro de Téléphone : {{ membre.numTelephone ? membre.numTelephone : 'Non renseigné' }} <br>
            Adresse : {{ membre.adresse ? membre.adresse : 'Non renseigné' }} <br>
            Ville : {{ membre.ville ? membre.ville : 'Non renseigné' }} <br>
            Code Postal : {{ membre.cp ? membre.cp : 'Non renseigné' }} <br>
            Date de Naissance : {{ membre.dateNaissance ? membre.dateNaissance|date('d/m/Y') : 'Non renseigné' }} <br>

            {% if membre.photo %}
                Photo : <img src=\"{{ asset('uploads/photos/' ~ membre.photo) }}\" alt=\"Photo de {{ membre.prenom }} {{ membre.nom }}\"> <br>
            {% else %}
                Photo : Non renseigné <br>
            {% endif %}
        </p>

    </div>
{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}
{% endblock %}



    {# <p>Date d'inscription : {{ membre.dateInscriptionFormatee}}</p> #}", "membre/show.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\membre\\show.html.twig");
    }
}

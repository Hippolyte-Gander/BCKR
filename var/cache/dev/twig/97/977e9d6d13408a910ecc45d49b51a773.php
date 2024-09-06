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

/* home/mentions.html.twig */
class __TwigTemplate_1996cf76b64359c635983b7ad4670532 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
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

        yield "Mentions Légales";
        
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
        yield "
<div class=\"mentions-legales-background\">
    <div class=\"mentions-bloc-texte\">
        <div class=\"titre-texte\">
            <h3 class=\"mentions-h3\">Mentions Légales et utilisation des données</h3>
            <p>
                Bienvenue sur le site du BCKR,
                <br>
                <br>
                Ce site a pour but une présentation de l'association ainsi que la gestion globale du club en allant des événements organisés jusqu'à la partie administrative.
                <br>
                En utilisant ce site, vous acceptez les présentes conditions d'utilisation.
            </p>
        </div>   
        <div class=\"titre-texte\">
            <h5>Données collectées et finalités</h5>
            <p>
                <ul>
                    <li>
                        Utilisateurs : pseudo, email.
                    </li>
                    <li>
                        Membres : pseudo, email, nom, prénom, numéro de licence, date de naissance, adresse, photo.
                    </li>
                </ul>
            </p>
            <p>
                Ces données sont utilisées pour gérer les comptes, communiquer et organiser des événements. Les données des membres ont pour but d'aider à la gestion du club.
                <br>
                Elles sont traitées sur la base du consentement, resteront internes au club et ne seront partagées qu'en cas d'obligation légale.
            </p>
        </div>
        <div class=\"titre-texte\">
            <h5>Droits des utilisateurs</h5>
            <p>
                Les utilisateurs peuvent accéder, rectifier, supprimer vos données, et exercer d'autres droits en contactant <b> badminton.bckr@gmail.com</b>.
            </p>
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
        return "home/mentions.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mentions Légales{% endblock %}

{% block body %}

<div class=\"mentions-legales-background\">
    <div class=\"mentions-bloc-texte\">
        <div class=\"titre-texte\">
            <h3 class=\"mentions-h3\">Mentions Légales et utilisation des données</h3>
            <p>
                Bienvenue sur le site du BCKR,
                <br>
                <br>
                Ce site a pour but une présentation de l'association ainsi que la gestion globale du club en allant des événements organisés jusqu'à la partie administrative.
                <br>
                En utilisant ce site, vous acceptez les présentes conditions d'utilisation.
            </p>
        </div>   
        <div class=\"titre-texte\">
            <h5>Données collectées et finalités</h5>
            <p>
                <ul>
                    <li>
                        Utilisateurs : pseudo, email.
                    </li>
                    <li>
                        Membres : pseudo, email, nom, prénom, numéro de licence, date de naissance, adresse, photo.
                    </li>
                </ul>
            </p>
            <p>
                Ces données sont utilisées pour gérer les comptes, communiquer et organiser des événements. Les données des membres ont pour but d'aider à la gestion du club.
                <br>
                Elles sont traitées sur la base du consentement, resteront internes au club et ne seront partagées qu'en cas d'obligation légale.
            </p>
        </div>
        <div class=\"titre-texte\">
            <h5>Droits des utilisateurs</h5>
            <p>
                Les utilisateurs peuvent accéder, rectifier, supprimer vos données, et exercer d'autres droits en contactant <b> badminton.bckr@gmail.com</b>.
            </p>
        </div>
    </div>
</div>

{% endblock %}", "home/mentions.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\home\\mentions.html.twig");
    }
}

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

/* home/club.html.twig */
class __TwigTemplate_088f9d4e7c138148504518f6b9e15481 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/club.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/club.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/club.html.twig", 1);
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

        yield "Le club";
        
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
<div class=\"club-background\">
    <div class=\"club-titre-texte\">
        <h2>BCKR</h2>
        <p>
            Le Badminton Club Kriegsheim Rottelsheim (ou BCKR) a été fondé en 1996 et compte aujourd'hui près d'une soixantaine de membres.
            Uniquement composé de sportives et sportifs amateurs, se dépenser dans la bonne humeur est la seule chose requise pour intégrer le club ! <br>
            Tous les niveaux sont accueillis et ici tout le monde joue avec tout le monde grâce à un modèle de tirage au sort que vous n'avez jamais vu ailleurs.
            <br><br>
            En plus des entraînements, notre club propose d'autres activités, qu'elles soient basées sur le sport ou non.
            Cela va des rencontres sportives amicales avec d'autres clubs jusqu'à l'organisation grands repas dans la convivialité.
        </p>
    </div>
    <img class=\"img-president\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discours-president.jpg"), "html", null, true);
        yield "\" alt=\"photo du président du club faisant un discours\">
    <div class=\"club-titre-texte\">
        <h2>Entraînements</h2>
        <p>
            Les entraînements se déroulent tous les mardis et vendredis au gymnase de Kriegsheim (17 rue de Rottelsheim, 67170 Kriegsheim) à partir de 20h30 pendant toute l'année, été et vacances scolaires comprises.
            L'inscription à l'année coûte 60€ et comprend une salle chauffées, une raquette de prêt si nécessaire, des volants, des vestiaires et des douches. <br>
            Il y a la possibilité de venir à 3 séances gratuitement afin de vous forger votre propre avis ! <br>
            Les débutants seront bien évidemment encadrés par des membres plus expérimentés. <br>
            Les séances commencent à 20h30 et n'ont pas d'heure de fin prédéfinie. La raison ? Chacun arrête quand bon lui semble et il arrive que les plus téméraires jouent jusqu'à minuit. <br>
            Aucun minimum de présence n'est requis aux entraînements, venez quand vous le voulez, que ce soit deux fois par semaine ou une fois par mois. <br> <br>
            La bonne ambiance est le seul prérequis pour nous rejoindre !
        </p>
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
        return "home/club.html.twig";
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
        return array (  105 => 19,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Le club{% endblock %}

{% block body %}

<div class=\"club-background\">
    <div class=\"club-titre-texte\">
        <h2>BCKR</h2>
        <p>
            Le Badminton Club Kriegsheim Rottelsheim (ou BCKR) a été fondé en 1996 et compte aujourd'hui près d'une soixantaine de membres.
            Uniquement composé de sportives et sportifs amateurs, se dépenser dans la bonne humeur est la seule chose requise pour intégrer le club ! <br>
            Tous les niveaux sont accueillis et ici tout le monde joue avec tout le monde grâce à un modèle de tirage au sort que vous n'avez jamais vu ailleurs.
            <br><br>
            En plus des entraînements, notre club propose d'autres activités, qu'elles soient basées sur le sport ou non.
            Cela va des rencontres sportives amicales avec d'autres clubs jusqu'à l'organisation grands repas dans la convivialité.
        </p>
    </div>
    <img class=\"img-president\" src=\"{{ asset('img/discours-president.jpg')}}\" alt=\"photo du président du club faisant un discours\">
    <div class=\"club-titre-texte\">
        <h2>Entraînements</h2>
        <p>
            Les entraînements se déroulent tous les mardis et vendredis au gymnase de Kriegsheim (17 rue de Rottelsheim, 67170 Kriegsheim) à partir de 20h30 pendant toute l'année, été et vacances scolaires comprises.
            L'inscription à l'année coûte 60€ et comprend une salle chauffées, une raquette de prêt si nécessaire, des volants, des vestiaires et des douches. <br>
            Il y a la possibilité de venir à 3 séances gratuitement afin de vous forger votre propre avis ! <br>
            Les débutants seront bien évidemment encadrés par des membres plus expérimentés. <br>
            Les séances commencent à 20h30 et n'ont pas d'heure de fin prédéfinie. La raison ? Chacun arrête quand bon lui semble et il arrive que les plus téméraires jouent jusqu'à minuit. <br>
            Aucun minimum de présence n'est requis aux entraînements, venez quand vous le voulez, que ce soit deux fois par semaine ou une fois par mois. <br> <br>
            La bonne ambiance est le seul prérequis pour nous rejoindre !
        </p>
    </div>
</div>

{% endblock %}", "home/club.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\home\\club.html.twig");
    }
}

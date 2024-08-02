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

/* home/index.html.twig */
class __TwigTemplate_e1b932efe80f07fe2442c90a2a71c42a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "<main>
    <div class=\"nom-club\">
        <h1>Badminton Club <br>Kriegsheim Rottelsheim</h1>
    </div>

    <div class=\"accueil\">

        <div class=\"a-venir\">
            <h3>Événements à venir</h3>

            <div class=\"titre-texte\">

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 19
            yield "                    <div class=\"boucle-for-evenement\">
                        <h5> <a href=\" ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield " \"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 20), "html", null, true);
            yield "</a></h5>

                        <p class=\"texte-utilisateur\">Début : ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 22), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 22), "html", null, true);
            yield "</p><br>
                        <p>Fin : ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 23), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 23), "html", null, true);
            yield "</p><br>
                        <p>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            </div>
        </div>

        <div class=\"club\">
            <div class=\"club-description\">
                <div class=\"titre-texte\">
                    <h3>Le club</h3>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de badminton en loisir et compte actuellement une soixantaine de membres.
                        <br>
                        <br>
                        ";
        // line 40
        yield "                        Uniquement dotés de sportives et sportifs amateurs, la bonne ambiance et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                        <br>
                        <br>
                        
                        Mouiller le maillot est notre devise !
                    </p>
                </div>
                <img class=\"img-president\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discours-president.jpg"), "html", null, true);
        yield "\" alt=\"photo du président du club faisant un discours\">
            </div>
            <div class=\"club-entrainements\">
                <img class=\"img-entrainement\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/entrainement2.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <h3>Les entraînements</h3>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes tirées au sort avec une méthode de tirage absolument unique et totalement impartial !
                            <br>
                            <br>
                            Venez essayer gratuitement, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </div>
            <div class=\"club-activites\">
                <div class=\"titre-texte\">
                    <h3>Autres activités</h3>
                        <p>
                            En plus des entraînements, le club est à l’initiative de divers événements tels que des tournois amicaux internes ou externes, des repas ou des marches en groupe.
                            <br>
                            <br>
                            Toujours dans une ambiance chaleureuse et dans le but de passer des bons moments.
                        </p>
                </div>
                <img class=\"img-paella\" src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/paella.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
            </div>
        </div>
    </div>
</main>

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
        return "home/index.html.twig";
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
        return array (  193 => 73,  167 => 50,  161 => 47,  152 => 40,  139 => 27,  130 => 24,  124 => 23,  118 => 22,  111 => 20,  108 => 19,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<main>
    <div class=\"nom-club\">
        <h1>Badminton Club <br>Kriegsheim Rottelsheim</h1>
    </div>

    <div class=\"accueil\">

        <div class=\"a-venir\">
            <h3>Événements à venir</h3>

            <div class=\"titre-texte\">

                {% for evenement in evenements %}
                    <div class=\"boucle-for-evenement\">
                        <h5> <a href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.titre }}</a></h5>

                        <p class=\"texte-utilisateur\">Début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</p><br>
                        <p>Fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</p><br>
                        <p>{{ evenement.description }}</p>
                    </div>
                {% endfor %}
            </div>
        </div>

        <div class=\"club\">
            <div class=\"club-description\">
                <div class=\"titre-texte\">
                    <h3>Le club</h3>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de badminton en loisir et compte actuellement une soixantaine de membres.
                        <br>
                        <br>
                        {# Chez nous, pas de prise de tête, tout le monde joue avec tout le monde, avec comme objectif principal de transpirer.
                        <br> #}
                        Uniquement dotés de sportives et sportifs amateurs, la bonne ambiance et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                        <br>
                        <br>
                        
                        Mouiller le maillot est notre devise !
                    </p>
                </div>
                <img class=\"img-president\" src=\"{{ asset('img/discours-president.jpg')}}\" alt=\"photo du président du club faisant un discours\">
            </div>
            <div class=\"club-entrainements\">
                <img class=\"img-entrainement\" src=\"{{ asset('img/entrainement2.jpg')}}\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <h3>Les entraînements</h3>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes tirées au sort avec une méthode de tirage absolument unique et totalement impartial !
                            <br>
                            <br>
                            Venez essayer gratuitement, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </div>
            <div class=\"club-activites\">
                <div class=\"titre-texte\">
                    <h3>Autres activités</h3>
                        <p>
                            En plus des entraînements, le club est à l’initiative de divers événements tels que des tournois amicaux internes ou externes, des repas ou des marches en groupe.
                            <br>
                            <br>
                            Toujours dans une ambiance chaleureuse et dans le but de passer des bons moments.
                        </p>
                </div>
                <img class=\"img-paella\" src=\"{{ asset('img/paella.jpg')}}\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
            </div>
        </div>
    </div>
</main>

{% endblock %}", "home/index.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\home\\index.html.twig");
    }
}

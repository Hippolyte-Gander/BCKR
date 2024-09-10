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
class __TwigTemplate_c759676ac7c4a28db5d48317c3b5e829 extends Template
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

        <section class=\"a-venir\">
            <a href=\" ";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \"><h2>Événements à venir</h2></a>

            <div class=\"titre-texte\">

                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 19
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 19) == "tous")) {
                // line 20
                yield "                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 21), "html", null, true);
                yield "</a></h5>

                            <p class=\"texte-user\">Début : ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 23), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 23), "html", null, true);
                yield "</p><br>
                            <p>Fin : ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 24), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 24), "html", null, true);
                yield "</p><br>
                            <p>";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 25), "html", null, true);
                yield "</p>
                        </div>
                    ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 27
$context["evenement"], "visibilite", [], "any", false, false, false, 27) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "isMembre", [], "method", false, false, false, 27) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "isAdmin", [], "method", false, false, false, 27)))) {
                // line 28
                yield "                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 29), "html", null, true);
                yield "</a></h5>

                            <p class=\"texte-user\">Début : ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 31), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 31), "html", null, true);
                yield "</p><br>
                            <p>Fin : ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 32), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 32), "html", null, true);
                yield "</p><br>
                            <p>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 33), "html", null, true);
                yield "</p>
                        </div>
                    ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 35
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35) && (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 35) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "isAdmin", [], "method", false, false, false, 35))) {
                // line 36
                yield "                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 37), "html", null, true);
                yield "</a></h5>

                            <p class=\"texte-user\">Début : ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 39), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 39), "html", null, true);
                yield "</p><br>
                            <p>Fin : ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 40), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 40), "html", null, true);
                yield "</p><br>
                            <p>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 41), "html", null, true);
                yield "</p>
                        </div>
                    ";
            }
            // line 44
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "            </div>
        </section>

        <section class=\"club\">
            <article class=\"club-description\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_home");
        yield " \"><h2>Le club</h2></a>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de badminton en loisir et compte actuellement une soixantaine de membres.
                    </p>
                    <p>
                        ";
        // line 58
        yield "                        Uniquement dotés de sportives et sportifs amateurs, la bonne ambiance et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                    </p>
                    <p>                       
                        Mouiller le maillot est notre devise !
                    </p>
                    <p class=\"p_underline\">
                        Retrouvez-nous aussi sur Facebook 
                        <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
                    </p>

                </div>
                <img class=\"img-president\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discours-president.jpg"), "html", null, true);
        yield "\" alt=\"photo du président du club faisant un discours\">
            </article>
            <article class=\"club-entrainements\">
                <img class=\"img-entrainement\" src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/entrainement2.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entrainements");
        yield " \"><h2>Les entraînements</h2></a>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes tirées au sort avec une méthode de tirage absolument unique et totalement impartial !
                            <br>
                            <br>
                            Venez essayer gratuitement, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </article>
            <article class=\"club-activites\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \"><h2>Autres activités</h2></a>
                        <p>
                            En plus des entraînements, le club est à l’initiative de divers événements tels que des tournois amicaux internes ou externes, des repas ou des marches en groupe.
                            <br>
                            <br>
                            Toujours dans une ambiance chaleureuse et dans le but de passer des bons moments.
                        </p>
                </div>
                <img class=\"img-paella\" src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/paella.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
            </article>
        </section>
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
        return array (  273 => 95,  262 => 87,  246 => 74,  241 => 72,  235 => 69,  222 => 58,  214 => 51,  206 => 45,  200 => 44,  194 => 41,  188 => 40,  182 => 39,  175 => 37,  172 => 36,  170 => 35,  165 => 33,  159 => 32,  153 => 31,  146 => 29,  143 => 28,  141 => 27,  136 => 25,  130 => 24,  124 => 23,  117 => 21,  114 => 20,  111 => 19,  107 => 18,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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

        <section class=\"a-venir\">
            <a href=\" {{ path('app_evenement') }} \"><h2>Événements à venir</h2></a>

            <div class=\"titre-texte\">

                {% for evenement in evenements %}
                    {% if (evenement.visibilite == 'tous') %}
                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.titre }}</a></h5>

                            <p class=\"texte-user\">Début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</p><br>
                            <p>Fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</p><br>
                            <p>{{ evenement.description }}</p>
                        </div>
                    {% elseif (evenement.visibilite == 'membres') and app.user and (app.user.isMembre() or app.user.isAdmin()) %}
                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.titre }}</a></h5>

                            <p class=\"texte-user\">Début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</p><br>
                            <p>Fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</p><br>
                            <p>{{ evenement.description }}</p>
                        </div>
                    {% elseif app.user and evenement.visibilite == 'admins' and app.user.isAdmin() %}
                        <div class=\"boucle-for-evenement\">
                            <h5> <a href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.titre }}</a></h5>

                            <p class=\"texte-user\">Début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</p><br>
                            <p>Fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</p><br>
                            <p>{{ evenement.description }}</p>
                        </div>
                    {% endif %}
                {% endfor %}
            </div>
        </section>

        <section class=\"club\">
            <article class=\"club-description\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('club_home') }} \"><h2>Le club</h2></a>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de badminton en loisir et compte actuellement une soixantaine de membres.
                    </p>
                    <p>
                        {# Chez nous, pas de prise de tête, tout le monde joue avec tout le monde, avec comme objectif principal de transpirer.
                        <br> #}
                        Uniquement dotés de sportives et sportifs amateurs, la bonne ambiance et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                    </p>
                    <p>                       
                        Mouiller le maillot est notre devise !
                    </p>
                    <p class=\"p_underline\">
                        Retrouvez-nous aussi sur Facebook 
                        <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
                    </p>

                </div>
                <img class=\"img-president\" src=\"{{ asset('img/discours-president.jpg')}}\" alt=\"photo du président du club faisant un discours\">
            </article>
            <article class=\"club-entrainements\">
                <img class=\"img-entrainement\" src=\"{{ asset('img/entrainement2.jpg')}}\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('app_entrainements') }} \"><h2>Les entraînements</h2></a>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes tirées au sort avec une méthode de tirage absolument unique et totalement impartial !
                            <br>
                            <br>
                            Venez essayer gratuitement, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </article>
            <article class=\"club-activites\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('app_evenement') }} \"><h2>Autres activités</h2></a>
                        <p>
                            En plus des entraînements, le club est à l’initiative de divers événements tels que des tournois amicaux internes ou externes, des repas ou des marches en groupe.
                            <br>
                            <br>
                            Toujours dans une ambiance chaleureuse et dans le but de passer des bons moments.
                        </p>
                </div>
                <img class=\"img-paella\" src=\"{{ asset('img/paella.jpg')}}\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
            </article>
        </section>
    </div>
</main>

{% endblock %}", "home/index.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\home\\index.html.twig");
    }
}

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
class __TwigTemplate_490657fd7cb498e2f375c4186911a59d extends Template
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
            <h2>Événements à venir</h2>

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
        </div>

        <div class=\"club\">
            <div class=\"club-description\">
                <div class=\"titre-texte\">
                    <h2>Le club</h2>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de badminton en loisir et compte actuellement une soixantaine de membres.
                        <br>
                        <br>
                        ";
        // line 58
        yield "                        Uniquement dotés de sportives et sportifs amateurs, la bonne ambiance et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                        <br>
                        <br>
                        
                        Mouiller le maillot est notre devise !
                    </p>
                </div>
                <img class=\"img-president\" src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/discours-president.jpg"), "html", null, true);
        yield "\" alt=\"photo du président du club faisant un discours\">
            </div>
            <div class=\"club-entrainements\">
                <img class=\"img-entrainement\" src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/entrainement2.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <h2>Les entraînements</h2>
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
                    <h2>Autres activités</h2>
                        <p>
                            En plus des entraînements, le club est à l’initiative de divers événements tels que des tournois amicaux internes ou externes, des repas ou des marches en groupe.
                            <br>
                            <br>
                            Toujours dans une ambiance chaleureuse et dans le but de passer des bons moments.
                        </p>
                </div>
                <img class=\"img-paella\" src=\"";
        // line 91
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
        return array (  257 => 91,  231 => 68,  225 => 65,  216 => 58,  203 => 45,  197 => 44,  191 => 41,  185 => 40,  179 => 39,  172 => 37,  169 => 36,  167 => 35,  162 => 33,  156 => 32,  150 => 31,  143 => 29,  140 => 28,  138 => 27,  133 => 25,  127 => 24,  121 => 23,  114 => 21,  111 => 20,  108 => 19,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
            <h2>Événements à venir</h2>

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
        </div>

        <div class=\"club\">
            <div class=\"club-description\">
                <div class=\"titre-texte\">
                    <h2>Le club</h2>
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
                    <h2>Les entraînements</h2>
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
                    <h2>Autres activités</h2>
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

{% endblock %}", "home/index.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\home\\index.html.twig");
    }
}

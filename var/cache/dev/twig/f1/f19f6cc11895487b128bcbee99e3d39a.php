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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "<main class=\"homepage\">
    <div class=\"wrapper\">
        <section class=\"titre-homepage\">
            <h1>Badminton Club<br>Kriegsheim Rottelsheim</h1>

            
            ";
        // line 15
        yield "        </section>

        <section class=\"club\">
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/le-club1.jpg"), "html", null, true);
        yield "\" alt=\"photo du président du club faisant un discours\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_home");
        yield " \"><h2>Le club</h2></a>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de <strong>badminton en loisir</strong> et compte actuellement une soixantaine de membres.
                    </p>
                    <p>
                        ";
        // line 28
        yield "                        Uniquement dotés de sportives et sportifs amateurs, la <strong>bonne ambiance</strong> et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                    </p>
                    <p>                       
                        <strong>Mouiller le maillot est notre devise !</strong>
                    </p>
                </div>
            </article>
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/le-club2.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entrainements");
        yield " \"><h2>Les entraînements</h2></a>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes <strong>tirées au sort</strong> avec une méthode de tirage absolument unique et totalement impartial !
                        </p>
                        <p>
                            <strong>Venez essayer gratuitement</strong>, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </article>
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/le-club3.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
                <div class=\"titre-texte\">
                    <a href=\" ";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \"><h2>Autres activités</h2></a>
                    <p>
                        En plus des entraînements, le club est à l’initiative de divers événements tels que des <strong>tournois amicaux</strong> internes ou externes, des <strong>repas</strong> ou des <strong>marches</strong> en groupe.
                        <br>
                        <br>
                        Toujours dans une <strong>ambiance chaleureuse</strong> et dans le but de passer des bons moments.
                    </p>
                </div>
            </article>
        </section>

        <section class=\"a-venir\">
            <a href=\" ";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \"><h2>Événements à venir</h2></a>
            <div class=\"evenement-wrapper\">
                
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 68
            yield "                    <div class=\"card-evenement\">
                        <div class=\"evenement-card-top\">
                            <div class=\"affiche-event\">
                                ";
            // line 71
            if (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "affiche", [], "any", false, false, false, 71)) {
                // line 72
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "affiche", [], "any", false, false, false, 72), "html", null, true);
                yield "
                                ";
            } else {
                // line 74
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/le-club3.jpg"), "html", null, true);
                yield "\" alt=\"Photo d'une rencontre sportive\">
                                ";
            }
            // line 76
            yield "                            </div>
                            <div class=\"evenement-infos\">
                                <h5> <a href=\" ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield " \"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "</a></h5>
                                <div class=\"date-event\">Début : ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 79), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 79), "html", null, true);
            yield "</div>
                                <div class=\"date-event\">Fin : ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 80), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 80), "html", null, true);
            yield "</div>
                                <p class=\"descr-event\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>
                                
                            </div>
                        </div>
                        ";
            // line 85
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 85)) < 15)) {
                // line 86
                yield "                            <p class=\"evenement-descr\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quo totam earum omnis. Inventore perspiciatis possimus ipsum soluta itaque similique eveniet, maiores reiciendis alias velit. Reprehenderit minus quibusdam cum autem.</p>
                        ";
            } else {
                // line 88
                yield "                            <p class=\"evenement-descr\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 88), "html", null, true);
                yield "</p>
                        ";
            }
            // line 90
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "            </div>
            <div class=\"navigation\">
                ";
        // line 94
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 94, $this->source); })()));
        yield "
            </div>
        </section>

        <section class=\"carrousel\">
            <div class=\"swiper\">
                <!-- Additional required wrapper -->
                <div class=\"swiper-wrapper\">
                  <!-- Slides -->
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carrou/1.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carrou/2.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carrou/3.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carrou/4.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carrou/5.jpg"), "html", null, true);
        yield "\" alt=\"photo d'un entraînement du club\"></div>
                  ...
                </div>
                <!-- If we need pagination -->
                <div class=\"swiper-pagination\"></div>
              
                <!-- If we need navigation buttons -->
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              
                <!-- If we need scrollbar -->
                <div class=\"swiper-scrollbar\"></div>
              </div>
        </section>
        
    </div>
</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
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
        return array (  317 => 127,  307 => 126,  277 => 107,  273 => 106,  269 => 105,  265 => 104,  261 => 103,  249 => 94,  245 => 92,  238 => 90,  232 => 88,  228 => 86,  226 => 85,  219 => 81,  213 => 80,  207 => 79,  201 => 78,  197 => 76,  191 => 74,  185 => 72,  183 => 71,  178 => 68,  174 => 67,  168 => 64,  153 => 52,  148 => 50,  133 => 38,  128 => 36,  118 => 28,  110 => 21,  105 => 19,  99 => 15,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<main class=\"homepage\">
    <div class=\"wrapper\">
        <section class=\"titre-homepage\">
            <h1>Badminton Club<br>Kriegsheim Rottelsheim</h1>

            
            {# <div class=\"annonce\">

            </div> #}
        </section>

        <section class=\"club\">
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"{{ asset('img/le-club1.jpg')}}\" alt=\"photo du président du club faisant un discours\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('club_home') }} \"><h2>Le club</h2></a>
                    <p>
                        Le badminton club de Kriegsheim-Rottelsheim a été fondé en 1996, il propose des séances de <strong>badminton en loisir</strong> et compte actuellement une soixantaine de membres.
                    </p>
                    <p>
                        {# Chez nous, pas de prise de tête, tout le monde joue avec tout le monde, avec comme objectif principal de transpirer.
                        <br> #}
                        Uniquement dotés de sportives et sportifs amateurs, la <strong>bonne ambiance</strong> et  la bonne humeur sont les premières qualités recherchées pour les futurs  nouveaux membres.
                    </p>
                    <p>                       
                        <strong>Mouiller le maillot est notre devise !</strong>
                    </p>
                </div>
            </article>
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"{{ asset('img/le-club2.jpg')}}\" alt=\"photo d'un entraînement du club\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('app_entrainements') }} \"><h2>Les entraînements</h2></a>
                        <p>
                            Accueillant des joueurs de tout niveau, les entraînements sont sans prises de têtes avec des équipes <strong>tirées au sort</strong> avec une méthode de tirage absolument unique et totalement impartial !
                        </p>
                        <p>
                            <strong>Venez essayer gratuitement</strong>, c’est le meilleur moyen de vous faire votre propre avis !
                            <br>
                            Les entraînements commencent à 20h30 mais ne se terminent qu’à l’épuisement (ou l’apéro selon les envies).
                        </p>
                </div>
            </article>
            <article class=\"card-club\">
                <img class=\"club-img\" src=\"{{ asset('img/le-club3.jpg')}}\" alt=\"photo d'un membre du club faisant une très grande paëlla\">
                <div class=\"titre-texte\">
                    <a href=\" {{ path('app_evenement') }} \"><h2>Autres activités</h2></a>
                    <p>
                        En plus des entraînements, le club est à l’initiative de divers événements tels que des <strong>tournois amicaux</strong> internes ou externes, des <strong>repas</strong> ou des <strong>marches</strong> en groupe.
                        <br>
                        <br>
                        Toujours dans une <strong>ambiance chaleureuse</strong> et dans le but de passer des bons moments.
                    </p>
                </div>
            </article>
        </section>

        <section class=\"a-venir\">
            <a href=\" {{ path('app_evenement') }} \"><h2>Événements à venir</h2></a>
            <div class=\"evenement-wrapper\">
                
                {% for evenement in pagination %}
                    <div class=\"card-evenement\">
                        <div class=\"evenement-card-top\">
                            <div class=\"affiche-event\">
                                {% if evenement.affiche %}
                                    {{ evenement.affiche }}
                                {% else %}
                                    <img src=\"{{ asset('img/le-club3.jpg')}}\" alt=\"Photo d'une rencontre sportive\">
                                {% endif %}
                            </div>
                            <div class=\"evenement-infos\">
                                <h5> <a href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.titre }}</a></h5>
                                <div class=\"date-event\">Début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</div>
                                <div class=\"date-event\">Fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</div>
                                <p class=\"descr-event\">{{ evenement.description }}</p>
                                
                            </div>
                        </div>
                        {% if evenement.description|length < 15 %}
                            <p class=\"evenement-descr\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis doloribus quo totam earum omnis. Inventore perspiciatis possimus ipsum soluta itaque similique eveniet, maiores reiciendis alias velit. Reprehenderit minus quibusdam cum autem.</p>
                        {% else %}
                            <p class=\"evenement-descr\">{{ evenement.description }}</p>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </section>

        <section class=\"carrousel\">
            <div class=\"swiper\">
                <!-- Additional required wrapper -->
                <div class=\"swiper-wrapper\">
                  <!-- Slides -->
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"{{ asset('img/carrou/1.jpg')}}\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"{{ asset('img/carrou/2.jpg')}}\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"{{ asset('img/carrou/3.jpg')}}\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"{{ asset('img/carrou/4.jpg')}}\" alt=\"photo d'un entraînement du club\"></div>
                  <div class=\"swiper-slide\"><img class=\"club-img\" src=\"{{ asset('img/carrou/5.jpg')}}\" alt=\"photo d'un entraînement du club\"></div>
                  ...
                </div>
                <!-- If we need pagination -->
                <div class=\"swiper-pagination\"></div>
              
                <!-- If we need navigation buttons -->
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              
                <!-- If we need scrollbar -->
                <div class=\"swiper-scrollbar\"></div>
              </div>
        </section>
        
    </div>
</main>

{% endblock %}
{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
{% endblock %}", "home/index.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\home\\index.html.twig");
    }
}

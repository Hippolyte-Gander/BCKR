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

/* base.html.twig */
class __TwigTemplate_3199933a94c03b43f8f75370938f0bf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 13
        yield "    </head>
    <body>
        <header>
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-BCKR.jpg"), "html", null, true);
        yield "\" alt=\"logo du club\" class=\"img-logo\"></a>
            <nav>
                    <div class=\"liens\">
                        <a href=\" ";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield " \">Accueil</a>
                        <a href=\" ";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_home");
        yield " \">Le club</a>
                        ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isAdmin", [], "method", false, false, false, 21))) {
            // line 22
            yield "                            <a href=\" ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            yield " \">Liste Users</a>
                            <a href=\" ";
            // line 23
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre");
            yield " \">Liste Membres</a>
                            <a href=\" ";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_evenement");
            yield " \">Créer un événement</a>
                        ";
        }
        // line 26
        yield "                        <a href=\" ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \">Les événements</a>
                        <a href=\" ";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entrainements_home");
        yield " \">Les entraînements</a>
                    </div>
            </nav>
            <div class=\"login\">
                ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "                    <a href=\"#\" class=\"pseudo-utilisateur\">Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "pseudo", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 33
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageperso_user");
            yield "\" class=\"connexion\">Espace Personnel</a>
                    <a href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"deconnexion\">Se déconnecter</a>
                ";
        } else {
            // line 36
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"connexion\">Se connecter</a>
                    <a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"inscription\">S'inscrire</a>
                ";
        }
        // line 39
        yield "            </div>

            <div class=\"menu-mobile\">
                <div class=\"mobile-menu\">
                    <i class=\"fa-solid fa-bars\"></i>
                </div>
                <div class=\"mobile-croix\">
                    <i class=\"fa-solid fa-x\"></i>
                </div>
                    <a href=\" ";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield " \">Home</a>
                    <a href=\" ";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield " \">Liste Users</a>
                    <a href=\" ";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membre");
        yield " \">Liste Membres</a>
                    <a href=\" ";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \">Liste Événements</a>
                    <a href=\" ";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_evenement");
        yield " \">Créer un événement</a>
                <div class=\"login\">
                    <a href=\"#\" class=\"connexion\">Se connecter</a>
                    <a href=\"#\" class=\"deconnexion\">Se déconnecter</a>
                    <a href=\"#\" class=\"inscription\">S'inscrire</a>
                </div>
            </div>
        </header>



        ";
        // line 63
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 64
        yield "
        <footer>
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-BCKR.jpg"), "html", null, true);
        yield "\" alt=\"logo du club\" class=\"img-logo\"></a>

            <div class=\"lien-footer\">
                <a href=\"#\" class=\"texte-footer\">Retour en haut</a>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_home");
        yield "\" class=\"texte-footer\">Mentions légales</a>
                ";
        // line 72
        yield "                <a href=\"#\" class=\"texte-footer\">Contact</a>
            </div>
            
            <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" class=\"texte-footer\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
        </footer>
    </body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  286 => 63,  275 => 12,  265 => 11,  252 => 9,  249 => 8,  239 => 7,  219 => 5,  199 => 72,  195 => 70,  186 => 66,  182 => 64,  180 => 63,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  150 => 48,  139 => 39,  134 => 37,  129 => 36,  124 => 34,  120 => 33,  115 => 32,  113 => 31,  106 => 27,  101 => 26,  96 => 24,  92 => 23,  87 => 22,  85 => 21,  81 => 20,  77 => 19,  69 => 16,  64 => 13,  61 => 11,  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">
        {% endblock %}
        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
        <header>
            <a href=\"{{ path('app_home') }}\" class=\"logo\"><img src=\"{{ asset('img/logo-BCKR.jpg')}}\" alt=\"logo du club\" class=\"img-logo\"></a>
            <nav>
                    <div class=\"liens\">
                        <a href=\" {{ path('app_home') }} \">Accueil</a>
                        <a href=\" {{ path('club_home') }} \">Le club</a>
                        {% if app.user  and app.user.isAdmin() %}
                            <a href=\" {{ path('app_user') }} \">Liste Users</a>
                            <a href=\" {{ path('app_membre') }} \">Liste Membres</a>
                            <a href=\" {{ path('new_evenement') }} \">Créer un événement</a>
                        {% endif %}
                        <a href=\" {{ path('app_evenement') }} \">Les événements</a>
                        <a href=\" {{ path('entrainements_home') }} \">Les entraînements</a>
                    </div>
            </nav>
            <div class=\"login\">
                {% if app.user %}
                    <a href=\"#\" class=\"pseudo-utilisateur\">Bonjour {{ app.user.pseudo }}</a>
                    <a href=\"{{ path('pageperso_user') }}\" class=\"connexion\">Espace Personnel</a>
                    <a href=\"{{ path('app_logout') }}\" class=\"deconnexion\">Se déconnecter</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"connexion\">Se connecter</a>
                    <a href=\"{{ path('app_register') }}\" class=\"inscription\">S'inscrire</a>
                {% endif %}
            </div>

            <div class=\"menu-mobile\">
                <div class=\"mobile-menu\">
                    <i class=\"fa-solid fa-bars\"></i>
                </div>
                <div class=\"mobile-croix\">
                    <i class=\"fa-solid fa-x\"></i>
                </div>
                    <a href=\" {{ path('app_home') }} \">Home</a>
                    <a href=\" {{ path('app_user') }} \">Liste Users</a>
                    <a href=\" {{ path('app_membre') }} \">Liste Membres</a>
                    <a href=\" {{ path('app_evenement') }} \">Liste Événements</a>
                    <a href=\" {{ path('new_evenement') }} \">Créer un événement</a>
                <div class=\"login\">
                    <a href=\"#\" class=\"connexion\">Se connecter</a>
                    <a href=\"#\" class=\"deconnexion\">Se déconnecter</a>
                    <a href=\"#\" class=\"inscription\">S'inscrire</a>
                </div>
            </div>
        </header>



        {% block body %}{% endblock %}

        <footer>
            <a href=\"{{ path('app_home') }}\" class=\"logo\"><img src=\"{{ asset('img/logo-BCKR.jpg')}}\" alt=\"logo du club\" class=\"img-logo\"></a>

            <div class=\"lien-footer\">
                <a href=\"#\" class=\"texte-footer\">Retour en haut</a>
                <a href=\"{{ path('mentions_home') }}\" class=\"texte-footer\">Mentions légales</a>
                {# <a href=\"#\" class=\"texte-footer\">Sécurité</a> #}
                <a href=\"#\" class=\"texte-footer\">Contact</a>
            </div>
            
            <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" class=\"texte-footer\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
        </footer>
    </body>
</html>


{# SOURCES
- icon navbar : <a href=\"https://www.flaticon.com/fr/icones-gratuites/badminton\" title=\"badminton icônes\">Badminton icônes créées par AmethystDesign - Flaticon</a>

- photo pile de volants : Photo de <a href=\"https://unsplash.com/fr/@saif71?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Saif71.com</a> sur <a href=\"https://unsplash.com/fr/photos/decor-en-forme-de-cone-en-bois-blanc-7CfNSmPJBiU?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Unsplash</a>

- photo de court (background) : Photo de <a href=\"https://unsplash.com/fr/@vishwanth07?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Vishwanth Pindiboina</a> sur <a href=\"https://unsplash.com/fr/photos/couloir-en-beton-gris-sans-personne-eBnKgT__Bsg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Unsplash</a>

- photo terrain + raquette : Photo de SHVETS production: https://www.pexels.com/fr-fr/photo/sport-lignes-court-terrain-8007493/

- photo-terrain-et-raquettes-sombre : Photo de eric anada sur Pexels: https://www.pexels.com/fr-fr/photo/terrain-vert-et-blanc-avec-raquettes-de-badminton-3660204/


#}", "base.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\base.html.twig");
    }
}

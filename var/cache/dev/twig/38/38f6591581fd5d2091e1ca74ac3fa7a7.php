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
class __TwigTemplate_c943da86b03cdb5d3146e14fe46f8204 extends Template
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
        <meta name=\"viewport\" content=\"initial-scale=1, width=device-width\" />
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "        ";
        // line 17
        yield "    </head>
    <body>
        <header>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\">
                <svg width=\"55\" height=\"70\" viewBox=\"0 0 141 201\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M91.9997 145.5C85.1997 167.9 63.1665 188.998 51.9998 196.998C50.4999 198.332 48.7 200.998 53.5 200.998C58.3 200.998 104.167 200.333 126.5 200C122 169 93.214 141.5 91.9997 145.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M85.4997 117.5C127.5 150.5 133.5 188.801 133.5 198.301C133.5 200.301 140 200.801 140 198.301C140 193.829 140.833 64.8333 140 0.5H0V200.998H40.5C69.5001 169.998 75.4351 132.479 75 131C72.5 122.5 18.5 105.5 11.4998 53.4999C10.8669 48.7989 20 76.5 30.4998 84C37.4997 89 54.7998 94 49.9998 86C43.9998 76 44.5 69.4999 45.5 66.4999C47.1493 61.5522 51.0485 59.4902 53.5 58.9999C56 58.5 61.9 59.6 65.5 66C68.0313 70.5001 68 78.5 65.5 81.5C65.5 81.5 63.5 84 63.9998 84C76.5601 84 92.8331 68.1666 99.4997 58.9999C95.4997 88.4999 75.9997 97.0625 77.4997 99.5C80.6997 104.7 84.1664 114 85.4997 117.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5L88 25L95.5 19L88 10.5L115.5 15C118.167 15.5 123.078 15.5162 123.5 21C124 27.5 118.167 27.1667 115.5 28Z\" fill=\"#FFFF0F\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5M115.5 28V23.5M115.5 28C118.167 27.1667 124 27.5 123.5 21C123.078 15.5162 118.167 15.5 115.5 15M115.5 15L88 10.5L95.5 19M115.5 15V20M95.5 19L88 25L95 29.5M95.5 19L115.5 20M95 29.5L115.5 23.5M115.5 23.5V20\" stroke=\"#0C0AED\" stroke-width=\"2\"/>
                    </svg>
                    
            </a>
            <nav>
                    <div class=\"liens\">
                        <a href=\" ";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield " \">Accueil</a>
                        <a href=\" ";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_home");
        yield " \">Le club</a>
                        ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "isAdmin", [], "method", false, false, false, 33))) {
            // line 34
            yield "                            <a href=\" ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            yield " \">Liste Users</a>
                            <a href=\" ";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_evenement");
            yield " \">Créer un événement</a>
                        ";
        }
        // line 37
        yield "                        <a href=\" ";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \">Les événements</a>
                        ";
        // line 39
        yield "                    </div>
            </nav>
            <div class=\"login\">
                ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            yield "                    <a href=\"#\" class=\"pseudo-utilisateur\">Bonjour ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "pseudo", [], "any", false, false, false, 43), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageperso_user");
            yield "\" class=\"btn-espace-perso\">Espace Personnel</a>
                    <a class=\"btn-deconnexion\" href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                ";
        } else {
            // line 47
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn-connexion\">Se connecter</a>
                    <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn-inscription\">S'inscrire</a>
                    <a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_membre");
            yield "\" class=\"btn-inscription\">S'inscrire en tant que membre</a>
                ";
        }
        // line 51
        yield "            </div>

            <div class=\"menu-mobile\">
                <div class=\"mobile-menu\">
                    <i class=\"fa-solid fa-bars\"></i>
                </div>
                <div class=\"mobile-croix\">
                    <i class=\"fa-solid fa-x\"></i>
                </div>
                    <a href=\" ";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield " \">Home</a>
                    <a href=\" ";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield " \">Liste Users</a>
                    <a href=\" ";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement");
        yield " \">Liste Événements</a>
                    <a href=\" ";
        // line 63
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
        // line 74
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "
        <footer>
            <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"logo\">
                <svg width=\"55\" height=\"70\" viewBox=\"0 0 141 201\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M91.9997 145.5C85.1997 167.9 63.1665 188.998 51.9998 196.998C50.4999 198.332 48.7 200.998 53.5 200.998C58.3 200.998 104.167 200.333 126.5 200C122 169 93.214 141.5 91.9997 145.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M85.4997 117.5C127.5 150.5 133.5 188.801 133.5 198.301C133.5 200.301 140 200.801 140 198.301C140 193.829 140.833 64.8333 140 0.5H0V200.998H40.5C69.5001 169.998 75.4351 132.479 75 131C72.5 122.5 18.5 105.5 11.4998 53.4999C10.8669 48.7989 20 76.5 30.4998 84C37.4997 89 54.7998 94 49.9998 86C43.9998 76 44.5 69.4999 45.5 66.4999C47.1493 61.5522 51.0485 59.4902 53.5 58.9999C56 58.5 61.9 59.6 65.5 66C68.0313 70.5001 68 78.5 65.5 81.5C65.5 81.5 63.5 84 63.9998 84C76.5601 84 92.8331 68.1666 99.4997 58.9999C95.4997 88.4999 75.9997 97.0625 77.4997 99.5C80.6997 104.7 84.1664 114 85.4997 117.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5L88 25L95.5 19L88 10.5L115.5 15C118.167 15.5 123.078 15.5162 123.5 21C124 27.5 118.167 27.1667 115.5 28Z\" fill=\"#FFFF0F\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5M115.5 28V23.5M115.5 28C118.167 27.1667 124 27.5 123.5 21C123.078 15.5162 118.167 15.5 115.5 15M115.5 15L88 10.5L95.5 19M115.5 15V20M95.5 19L88 25L95 29.5M95.5 19L115.5 20M95 29.5L115.5 23.5M115.5 23.5V20\" stroke=\"#0C0AED\" stroke-width=\"2\"/>
                    </svg>
                    
            </a>

            <div class=\"lien-footer\">
                <div class=\"liens-internes\">
                    <a href=\"#\" class=\"texte-footer\">Retour en haut</a>
                    <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"texte-footer\">Accueil</a>
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_home");
        yield "\" class=\"texte-footer\">Mentions légales</a>
                    ";
        // line 93
        yield "                    <a href=\"#\" class=\"texte-footer\">Contact</a>
                </div>
                <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" class=\"texte-footer\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
            </div>
            
        </footer>
    </body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
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

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\"/>
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 74
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
        return array (  303 => 74,  291 => 14,  281 => 13,  268 => 11,  264 => 9,  254 => 8,  234 => 6,  213 => 93,  209 => 91,  205 => 90,  189 => 77,  185 => 75,  183 => 74,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  146 => 51,  141 => 49,  137 => 48,  132 => 47,  127 => 45,  123 => 44,  118 => 43,  116 => 42,  111 => 39,  106 => 37,  101 => 35,  96 => 34,  94 => 33,  90 => 32,  86 => 31,  72 => 20,  67 => 17,  65 => 16,  62 => 13,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"initial-scale=1, width=device-width\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css\"/>
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\">
        {% endblock %}
        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js\"></script>
        {% endblock %}
        {# {{ knp_pagination_rel_links(pagination) }} #}
    </head>
    <body>
        <header>
            <a href=\"{{ path('app_home') }}\" class=\"logo\">
                <svg width=\"55\" height=\"70\" viewBox=\"0 0 141 201\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M91.9997 145.5C85.1997 167.9 63.1665 188.998 51.9998 196.998C50.4999 198.332 48.7 200.998 53.5 200.998C58.3 200.998 104.167 200.333 126.5 200C122 169 93.214 141.5 91.9997 145.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M85.4997 117.5C127.5 150.5 133.5 188.801 133.5 198.301C133.5 200.301 140 200.801 140 198.301C140 193.829 140.833 64.8333 140 0.5H0V200.998H40.5C69.5001 169.998 75.4351 132.479 75 131C72.5 122.5 18.5 105.5 11.4998 53.4999C10.8669 48.7989 20 76.5 30.4998 84C37.4997 89 54.7998 94 49.9998 86C43.9998 76 44.5 69.4999 45.5 66.4999C47.1493 61.5522 51.0485 59.4902 53.5 58.9999C56 58.5 61.9 59.6 65.5 66C68.0313 70.5001 68 78.5 65.5 81.5C65.5 81.5 63.5 84 63.9998 84C76.5601 84 92.8331 68.1666 99.4997 58.9999C95.4997 88.4999 75.9997 97.0625 77.4997 99.5C80.6997 104.7 84.1664 114 85.4997 117.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5L88 25L95.5 19L88 10.5L115.5 15C118.167 15.5 123.078 15.5162 123.5 21C124 27.5 118.167 27.1667 115.5 28Z\" fill=\"#FFFF0F\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5M115.5 28V23.5M115.5 28C118.167 27.1667 124 27.5 123.5 21C123.078 15.5162 118.167 15.5 115.5 15M115.5 15L88 10.5L95.5 19M115.5 15V20M95.5 19L88 25L95 29.5M95.5 19L115.5 20M95 29.5L115.5 23.5M115.5 23.5V20\" stroke=\"#0C0AED\" stroke-width=\"2\"/>
                    </svg>
                    
            </a>
            <nav>
                    <div class=\"liens\">
                        <a href=\" {{ path('app_home') }} \">Accueil</a>
                        <a href=\" {{ path('club_home') }} \">Le club</a>
                        {% if app.user  and app.user.isAdmin() %}
                            <a href=\" {{ path('app_user') }} \">Liste Users</a>
                            <a href=\" {{ path('new_evenement') }} \">Créer un événement</a>
                        {% endif %}
                        <a href=\" {{ path('app_evenement') }} \">Les événements</a>
                        {# <a href=\" {{ path('entrainements_home') }} \">Les entraînements</a> #}
                    </div>
            </nav>
            <div class=\"login\">
                {% if app.user %}
                    <a href=\"#\" class=\"pseudo-utilisateur\">Bonjour {{ app.user.pseudo }}</a>
                    <a href=\"{{ path('pageperso_user') }}\" class=\"btn-espace-perso\">Espace Personnel</a>
                    <a class=\"btn-deconnexion\" href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"btn-connexion\">Se connecter</a>
                    <a href=\"{{ path('app_register') }}\" class=\"btn-inscription\">S'inscrire</a>
                    <a href=\"{{ path('app_register_membre') }}\" class=\"btn-inscription\">S'inscrire en tant que membre</a>
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
            <a href=\"{{ path('app_home') }}\" class=\"logo\">
                <svg width=\"55\" height=\"70\" viewBox=\"0 0 141 201\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M91.9997 145.5C85.1997 167.9 63.1665 188.998 51.9998 196.998C50.4999 198.332 48.7 200.998 53.5 200.998C58.3 200.998 104.167 200.333 126.5 200C122 169 93.214 141.5 91.9997 145.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M85.4997 117.5C127.5 150.5 133.5 188.801 133.5 198.301C133.5 200.301 140 200.801 140 198.301C140 193.829 140.833 64.8333 140 0.5H0V200.998H40.5C69.5001 169.998 75.4351 132.479 75 131C72.5 122.5 18.5 105.5 11.4998 53.4999C10.8669 48.7989 20 76.5 30.4998 84C37.4997 89 54.7998 94 49.9998 86C43.9998 76 44.5 69.4999 45.5 66.4999C47.1493 61.5522 51.0485 59.4902 53.5 58.9999C56 58.5 61.9 59.6 65.5 66C68.0313 70.5001 68 78.5 65.5 81.5C65.5 81.5 63.5 84 63.9998 84C76.5601 84 92.8331 68.1666 99.4997 58.9999C95.4997 88.4999 75.9997 97.0625 77.4997 99.5C80.6997 104.7 84.1664 114 85.4997 117.5Z\" fill=\"#807FFF\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5L88 25L95.5 19L88 10.5L115.5 15C118.167 15.5 123.078 15.5162 123.5 21C124 27.5 118.167 27.1667 115.5 28Z\" fill=\"#FFFF0F\"/>
                    <path d=\"M115.5 28L89.5 39L95 29.5M115.5 28V23.5M115.5 28C118.167 27.1667 124 27.5 123.5 21C123.078 15.5162 118.167 15.5 115.5 15M115.5 15L88 10.5L95.5 19M115.5 15V20M95.5 19L88 25L95 29.5M95.5 19L115.5 20M95 29.5L115.5 23.5M115.5 23.5V20\" stroke=\"#0C0AED\" stroke-width=\"2\"/>
                    </svg>
                    
            </a>

            <div class=\"lien-footer\">
                <div class=\"liens-internes\">
                    <a href=\"#\" class=\"texte-footer\">Retour en haut</a>
                    <a href=\"{{ path('app_home') }}\" class=\"texte-footer\">Accueil</a>
                    <a href=\"{{ path('mentions_home') }}\" class=\"texte-footer\">Mentions légales</a>
                    {# <a href=\"#\" class=\"texte-footer\">Sécurité</a> #}
                    <a href=\"#\" class=\"texte-footer\">Contact</a>
                </div>
                <a href=\"https://www.facebook.com/people/Badminton-Club-Kriegsheim-Rottelsheim/100068341596055/\" class=\"texte-footer\" target=\"_blank\"><i class=\"fa-brands fa-facebook\"></i></a>
            </div>
            
        </footer>
    </body>
</html>


{# SOURCES
- icon navbar : <a href=\"https://www.flaticon.com/fr/icones-gratuites/badminton\" title=\"badminton icônes\">Badminton icônes créées par AmethystDesign - Flaticon</a>

- photo pile de volants : Photo de <a href=\"https://unsplash.com/fr/@saif71?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Saif71.com</a> sur <a href=\"https://unsplash.com/fr/photos/decor-en-forme-de-cone-en-bois-blanc-7CfNSmPJBiU?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Unsplash</a>

- photo de court (background) : Photo de <a href=\"https://unsplash.com/fr/@vishwanth07?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Vishwanth Pindiboina</a> sur <a href=\"https://unsplash.com/fr/photos/couloir-en-beton-gris-sans-personne-eBnKgT__Bsg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash\">Unsplash</a>

- photo terrain + raquette : Photo de SHVETS production: https://www.pexels.com/fr-fr/photo/sport-lignes-court-terrain-8007493/

- photo-terrain-et-raquettes-sombre : Photo de eric anada sur Pexels: https://www.pexels.com/fr-fr/photo/terrain-vert-et-blanc-avec-raquettes-de-badminton-3660204/


#}", "base.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\base.html.twig");
    }
}

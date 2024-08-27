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

/* evenement/show.html.twig */
class __TwigTemplate_be6829e870639ab6ca52e81976a33339 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/show.html.twig", 1);
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

        yield "Détails événement";
        
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
";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 7, $this->source); })()), "visibilite", [], "any", false, false, false, 7) == "tous")) {
            // line 8
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 18), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 18), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 19), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 19), "html", null, true);
            yield "
        </p>

        <p>Visibilité : ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 22, $this->source); })()), "visibilite", [], "any", false, false, false, 22), "html", null, true);
            yield "</p>
        <p>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 23, $this->source); })()), "contenu", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>

        <p> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 25, $this->source); })()), "placesPrises", [], "any", false, false, false, 25), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 25, $this->source); })()), "places", [], "any", false, false, false, 25), "html", null, true);
            yield " places prises.</p>

        ";
            // line 28
            yield "            <p>Aucun inscrit pour le moment</p>
        ";
            // line 30
            yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 33, $this->source); })()), "participants", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 34
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 34), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                </ul>
            </div>
        ";
            // line 39
            yield "
    ";
            // line 41
            yield "        ";
            // line 59
            yield "
    ";
            // line 61
            yield "        ";
            // line 75
            yield "    </div>

";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 77, $this->source); })()), "visibilite", [], "any", false, false, false, 77) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "isMembre", [], "method", false, false, false, 77) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "isAdmin", [], "method", false, false, false, 77)))) {
            // line 78
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 81, $this->source); })()), "titre", [], "any", false, false, false, 81), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 88, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 88), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 88, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 88), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 89), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 89), "html", null, true);
            yield "
        </p>

        <p>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 92, $this->source); })()), "contenu", [], "any", false, false, false, 92), "html", null, true);
            yield "</p>

        ";
            // line 95
            yield "            <p>Aucun inscrit pour le moment</p>
        ";
            // line 97
            yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 100, $this->source); })()), "participants", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 101
                yield "                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 101), "html", null, true);
                yield "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "                </ul>
            </div>
        ";
            // line 106
            yield "
        ";
            // line 108
            yield "        ";
            // line 123
            yield "
            ";
            // line 125
            yield "            ";
            // line 140
            yield "
    </div>

";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 143
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 143, $this->source); })()), "visibilite", [], "any", false, false, false, 143) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "isAdmin", [], "method", false, false, false, 143))) {
            // line 144
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 147, $this->source); })()), "titre", [], "any", false, false, false, 147), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 154), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 154), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 155, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 155), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 155, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 155), "html", null, true);
            yield "
        </p>

        <p>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 158, $this->source); })()), "contenu", [], "any", false, false, false, 158), "html", null, true);
            yield "</p>

        ";
            // line 172
            yield "
        ";
            // line 174
            yield "        ";
            // line 190
            yield "
        ";
            // line 192
            yield "        ";
            // line 206
            yield "    </div>

    </div>

";
        } else {
            // line 211
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 215
        yield "
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
        return "evenement/show.html.twig";
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
        return array (  323 => 215,  317 => 211,  310 => 206,  308 => 192,  305 => 190,  303 => 174,  300 => 172,  295 => 158,  287 => 155,  281 => 154,  275 => 151,  268 => 147,  263 => 144,  261 => 143,  256 => 140,  254 => 125,  251 => 123,  249 => 108,  246 => 106,  242 => 103,  233 => 101,  229 => 100,  224 => 97,  221 => 95,  216 => 92,  208 => 89,  202 => 88,  196 => 85,  189 => 81,  184 => 78,  182 => 77,  178 => 75,  176 => 61,  173 => 59,  171 => 41,  168 => 39,  164 => 36,  155 => 34,  151 => 33,  146 => 30,  143 => 28,  136 => 25,  131 => 23,  127 => 22,  119 => 19,  113 => 18,  107 => 15,  100 => 11,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails événement{% endblock %}

{% block body %}

{% if (evenement.visibilite == 'tous') %}

    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : {{ evenement.titre }}</h4>

        <p>
            Description : <br>
            {{ evenement.description }}</p>

        <p>
            Date de début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }} <br>
            Date de fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}
        </p>

        <p>Visibilité : {{ evenement.visibilite }}</p>
        <p>{{ evenement.contenu }}</p>

        <p> {{ evenement.placesPrises }} / {{ evenement.places }} places prises.</p>

        {# {% if evenement.participants|length == 0 %} #}
            <p>Aucun inscrit pour le moment</p>
        {# {% else %} #}
            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    {% for participant in evenement.participants %}
                        <li>{{ participant.pseudo }}</li>
                    {% endfor %}
                </ul>
            </div>
        {# {% endif %} #}

    {#  section commentaires #}
        {# {% if evenement.commentaires | length > 0 %}
            <h4>Commentaires</h4>
            {% for commentaire in evenement.commentaires %}
                <div>
                    <p>
                        {{ commentaire.poste.pseudo }} ({{ commentaire.datePoste|date('d/m/Y H:i') }}):
                    </p>
                    <p>
                        {{ commentaire.message }}
                    </p>
                    {% if app.user.isAdmin() %}
                        <a class=\"btn-supprimer\" href=\"{{ path('suppr_commentaire', {'id': commentaire.id}) }}\">Supprimer</a>
                    {% endif %}
                </div>
            {% endfor %}
        {% else %}
                <p>Soyez le premier à commenter !</p>
        {% endif %} #}

    {#  formulaire commentaire #}
        {# <div class=\"commentaire\">
            <div class=\"formulaire\">
                {{ form_start(formAddCommentaire) }}

                <div class=\"col-form\">
                    {{ form_row(formAddCommentaire.message) }}    
                </div>
                <div class=\"bouton\">
                    {{ form_row(formAddCommentaire.valider) }}    
                </div>

                {{ form_end(formAddCommentaire) }}
            </div>
        </div> #}
    </div>

{% elseif (evenement.visibilite == 'membres') and app.user and (app.user.isMembre() or app.user.isAdmin()) %}

    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : {{ evenement.titre }}</h4>

        <p>
            Description : <br>
            {{ evenement.description }}</p>

        <p>
            Date de début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }} <br>
            Date de fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}
        </p>

        <p>{{ evenement.contenu }}</p>

        {# {% if evenement.participants|length == 0 %} #}
            <p>Aucun inscrit pour le moment</p>
        {# {% else %} #}
            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    {% for participant in evenement.participants %}
                        <li>{{ participant.pseudo }}</li>
                    {% endfor %}
                </ul>
            </div>
        {# {% endif %} #}

        {#  section commentaires #}
        {# {% if evenement.commentaires | length > 0 %}
            <h4>Commentaires</h4>
            {% for commentaire in evenement.commentaires %}
                <div>
                    <p>
                        {{ commentaire.poste.pseudo }} ({{ commentaire.datePoste|date('d/m/Y H:i') }}):
                    </p>
                    <p>
                        {{ commentaire.message }}
                    </p>
                </div>
            {% endfor %}
        {% else %}
                <p>Soyez le premier à commenter !</p>
        {% endif %} #}

            {#  formulaire commentaire #}
            {# <div class=\"commentaire\">
                <div class=\"formulaire\">
                    {{ form_start(formAddCommentaire) }}

                    <div class=\"col-form\">
                        {{ form_row(formAddCommentaire.message) }}    
                    </div>
                    <div class=\"bouton\">
                        {{ form_row(formAddCommentaire.valider) }}    
                    </div>

                    {{ form_end(formAddCommentaire) }}
                </div>
            </div>
        </div> #}

    </div>

{% elseif app.user and evenement.visibilite == 'admins' and app.user.isAdmin() %}

    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : {{ evenement.titre }}</h4>

        <p>
            Description : <br>
            {{ evenement.description }}</p>

        <p>
            Date de début : {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }} <br>
            Date de fin : {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}
        </p>

        <p>{{ evenement.contenu }}</p>

        {# {% if evenement.participants|length == 0 %}
            <p>Aucun inscrit pour le moment</p>
        {% else %}
            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    {% for participant in evenement.participants %}
                        <li>{{ participant.pseudo }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %} #}

        {#  section commentaires #}
        {# {% if evenement.commentaires | length > 0 %}
            <h4>Commentaires</h4>
            {% for commentaire in evenement.commentaires %}
                <div>
                    <p>
                        {{ commentaire.poste.pseudo }} ({{ commentaire.datePoste|date('d/m/Y H:i') }}):
                    </p>
                    <a class=\"btn-supprimer\" href=\"{{ path('suppr_commentaire', {'id': commentaire.id}) }}\">Supprimer</a>
                    <p>
                        {{ commentaire.message }}
                    </p>
                </div>
            {% endfor %}
        {% else %}
                <p>Soyez le premier à commenter !</p>
        {% endif %} #}

        {#  formulaire commentaire #}
        {# <div class=\"commentaire\">
            <div class=\"formulaire\">
                {{ form_start(formAddCommentaire) }}

                <div class=\"col-form\">
                    {{ form_row(formAddCommentaire.message) }}    
                </div>
                <div class=\"bouton\">
                    {{ form_row(formAddCommentaire.valider) }}    
                </div>

                {{ form_end(formAddCommentaire) }}
            </div>
        </div> #}
    </div>

    </div>

{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}", "evenement/show.html.twig", "C:\\laragon\\www\\Github\\BCKR\\BCKR\\templates\\evenement\\show.html.twig");
    }
}

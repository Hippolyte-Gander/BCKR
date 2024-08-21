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

/* evenement/index.html.twig */
class __TwigTemplate_f8aac2499c5e724bed4bd2f3baed5e74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 1);
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

        yield "Liste des événements";
        
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
<div class=\"liste-evenement-background\">

    <h4>Liste des événements</h4>
    <a class=\"texte-utilisateur\" href=\" ";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_evenement");
        yield " \">Créer un événement</a><br>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Visibilité</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Participation</td>
            ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "isAdmin", [], "method", false, false, false, 19))) {
            // line 20
            yield "                <td>Éditer</td>
                <td>Supprimer</td>
            ";
        }
        // line 23
        yield "        </tr>

        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 26
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 26) == "tous")) {
                // line 27
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 29), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 32), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 35), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 35), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 38), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 38), "html", null, true);
                yield "</a>
                    </td>
                    ";
                // line 40
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 40)) {
                    // line 41
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                    yield "\">paparticiper</a>
                        </td>
                    ";
                } else {
                    // line 45
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 49
                yield "
                    ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "isAdmin", [], "method", false, false, false, 50))) {
                    // line 51
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 58
                yield "                </tr>

            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 60
$context["evenement"], "visibilite", [], "any", false, false, false, 60) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "isMembre", [], "method", false, false, false, 60) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "isAdmin", [], "method", false, false, false, 60)))) {
                // line 61
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 63), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 66), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 69), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 69), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 72), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 72), "html", null, true);
                yield "</a>
                    </td>
                    ";
                // line 74
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 74)) {
                    // line 75
                    yield "                    <td>
                        <a class=\"valider-btn-formulaire\" href=\"";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                    yield "\">paparticiper</a>
                    </td>
                    ";
                } else {
                    // line 79
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 80
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 83
                yield "                    
                    ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "isAdmin", [], "method", false, false, false, 84))) {
                    // line 85
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 92
                yield "                </tr>

            ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94) && (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 94) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "isAdmin", [], "method", false, false, false, 94))) {
                // line 95
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 97), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 100)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 100), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 103)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 103), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 103), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 106), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 106), "html", null, true);
                yield "</a>
                    </td>

                    ";
                // line 109
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 109)) {
                    // line 110
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                    yield "\">paparticiper</a>
                        </td>
                    ";
                } else {
                    // line 114
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 118
                yield "
                    <td>
                        <a class=\"btn-editer\" href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">Éditer</a>
                    </td>
                    <td>
                        <a class=\"btn-supprimer\" href=\"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 123)]), "html", null, true);
                yield "\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            // line 127
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
    </table>

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
        return "evenement/index.html.twig";
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
        return array (  379 => 128,  373 => 127,  366 => 123,  360 => 120,  356 => 118,  350 => 115,  347 => 114,  341 => 111,  338 => 110,  336 => 109,  326 => 106,  316 => 103,  308 => 100,  300 => 97,  296 => 95,  294 => 94,  290 => 92,  284 => 89,  278 => 86,  275 => 85,  273 => 84,  270 => 83,  264 => 80,  261 => 79,  255 => 76,  252 => 75,  250 => 74,  241 => 72,  231 => 69,  223 => 66,  215 => 63,  211 => 61,  209 => 60,  205 => 58,  199 => 55,  193 => 52,  190 => 51,  188 => 50,  185 => 49,  179 => 46,  176 => 45,  170 => 42,  167 => 41,  165 => 40,  156 => 38,  146 => 35,  138 => 32,  130 => 29,  126 => 27,  123 => 26,  119 => 25,  115 => 23,  110 => 20,  108 => 19,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}

<div class=\"liste-evenement-background\">

    <h4>Liste des événements</h4>
    <a class=\"texte-utilisateur\" href=\" {{ path('new_evenement') }} \">Créer un événement</a><br>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Visibilité</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Participation</td>
            {% if app.user  and app.user.isAdmin() %}
                <td>Éditer</td>
                <td>Supprimer</td>
            {% endif %}
        </tr>

        {% for evenement in evenements %}
            {% if (evenement.visibilite == 'tous') %}
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.titre }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.visibilite }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</a>
                    </td>
                    {% if app.user.estCeQueParticipeDeja(evenement) %}
                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"{{ path('pas_participer_evenement', {'id': evenement.id}) }}\">paparticiper</a>
                        </td>
                    {% else %}
                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"{{ path('participer_evenement', {'id': evenement.id}) }}\">Participer</a>
                        </td>
                    {% endif %}

                    {% if app.user  and app.user.isAdmin() %}
                        <td>
                            <a class=\"btn-editer\" href=\"{{ path('edit_evenement', {'id': evenement.id}) }}\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"{{ path('suppr_evenement', {'id': evenement.id}) }}\">Supprimer</a>
                        </td>
                    {% endif %}
                </tr>

            {% elseif (evenement.visibilite == 'membres') and app.user and (app.user.isMembre() or app.user.isAdmin()) %}
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.titre }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.visibilite }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</a>
                    </td>
                    {% if app.user.estCeQueParticipeDeja(evenement) %}
                    <td>
                        <a class=\"valider-btn-formulaire\" href=\"{{ path('pas_participer_evenement', {'id': evenement.id}) }}\">paparticiper</a>
                    </td>
                    {% else %}
                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"{{ path('participer_evenement', {'id': evenement.id}) }}\">Participer</a>
                        </td>
                    {% endif %}
                    
                    {% if app.user  and app.user.isAdmin() %}
                        <td>
                            <a class=\"btn-editer\" href=\"{{ path('edit_evenement', {'id': evenement.id}) }}\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"{{ path('suppr_evenement', {'id': evenement.id}) }}\">Supprimer</a>
                        </td>
                    {% endif %}
                </tr>

            {% elseif app.user and evenement.visibilite == 'admins' and app.user.isAdmin() %}
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.titre }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.visibilite }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</a>
                    </td>

                    {% if app.user.estCeQueParticipeDeja(evenement) %}
                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"{{ path('pas_participer_evenement', {'id': evenement.id}) }}\">paparticiper</a>
                        </td>
                    {% else %}
                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"{{ path('participer_evenement', {'id': evenement.id}) }}\">Participer</a>
                        </td>
                    {% endif %}

                    <td>
                        <a class=\"btn-editer\" href=\"{{ path('edit_evenement', {'id': evenement.id}) }}\">Éditer</a>
                    </td>
                    <td>
                        <a class=\"btn-supprimer\" href=\"{{ path('suppr_evenement', {'id': evenement.id}) }}\">Supprimer</a>
                    </td>
                </tr>
            {% endif %}
        {% endfor %}

    </table>

</div>
{% endblock %}", "evenement/index.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\evenement\\index.html.twig");
    }
}

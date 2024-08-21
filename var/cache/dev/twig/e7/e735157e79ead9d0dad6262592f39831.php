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
            <td>Description</td>
            <td>Visibilité</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            <td>Participation</td>
            ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "isAdmin", [], "method", false, false, false, 20))) {
            // line 21
            yield "                <td>Éditer</td>
                <td>Supprimer</td>
            ";
        }
        // line 24
        yield "        </tr>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 27
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 27) == "tous")) {
                // line 28
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 30), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 33), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 36), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 39), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 39), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 42), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 42), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"btn-participer\" href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">Participer</a>
                    </td>
                    ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "isAdmin", [], "method", false, false, false, 47))) {
                    // line 48
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 55
                yield "                </tr>

            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["evenement"], "visibilite", [], "any", false, false, false, 57) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "isMembre", [], "method", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "isAdmin", [], "method", false, false, false, 57)))) {
                // line 58
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 60), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 63), "html", null, true);
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
                    <td>
                        <a class=\"btn-participer\" href=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                yield "\">Participer</a>
                    </td>
                    ";
                // line 77
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "isAdmin", [], "method", false, false, false, 77))) {
                    // line 78
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 85
                yield "                </tr>

            ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 87
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87) && (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 87) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "isAdmin", [], "method", false, false, false, 87))) {
                // line 88
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 90), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 93), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 96), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 99), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 99), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 102), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 102), "html", null, true);
                yield "</a>
                    </td>
                ";
                // line 104
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 104)) {
                    // line 105
                    yield "                    <td>
                        <a class=\"texte-utilisateur\">Ne plus participer</a>
                    </td>
                ";
                } else {
                    // line 109
                    yield "                    <td>
                        <a class=\"valider-btn-formulaire\" href=\"";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                    yield "\">Participer</a>
                    </td>
                ";
                }
                // line 113
                yield "                    <td>
                        <a class=\"btn-editer\" href=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 114)]), "html", null, true);
                yield "\">Éditer</a>
                    </td>
                    <td>
                        <a class=\"btn-supprimer\" href=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 117)]), "html", null, true);
                yield "\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            // line 121
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
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
        return array (  365 => 122,  359 => 121,  352 => 117,  346 => 114,  343 => 113,  337 => 110,  334 => 109,  328 => 105,  326 => 104,  317 => 102,  307 => 99,  299 => 96,  291 => 93,  283 => 90,  279 => 88,  277 => 87,  273 => 85,  267 => 82,  261 => 79,  258 => 78,  256 => 77,  251 => 75,  241 => 72,  231 => 69,  223 => 66,  215 => 63,  207 => 60,  203 => 58,  201 => 57,  197 => 55,  191 => 52,  185 => 49,  182 => 48,  180 => 47,  175 => 45,  165 => 42,  155 => 39,  147 => 36,  139 => 33,  131 => 30,  127 => 28,  124 => 27,  120 => 26,  116 => 24,  111 => 21,  109 => 20,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
            <td>Description</td>
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
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.description }}</a>
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
                    <td>
                        <a class=\"btn-participer\" href=\"{{ path('participer_evenement', {'id': evenement.id}) }}\">Participer</a>
                    </td>
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
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.description }}</a>
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
                    <td>
                        <a class=\"btn-participer\" href=\"{{ path('participer_evenement', {'id': evenement.id}) }}\">Participer</a>
                    </td>
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
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.description }}</a>
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
                        <a class=\"texte-utilisateur\">Ne plus participer</a>
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

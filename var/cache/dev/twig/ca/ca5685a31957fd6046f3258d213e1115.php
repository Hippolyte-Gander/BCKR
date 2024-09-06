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
class __TwigTemplate_1b10cd979a4008b61b5fe47aded8d878 extends Template
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

    <div class=\"message-participation\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>
    ";
        // line 20
        yield "    <div class=\"count\">
        ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
        yield "
    </div>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            yield "                <td>Participation</td>
            ";
        }
        // line 32
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "isAdmin", [], "method", false, false, false, 32))) {
            // line 33
            yield "                <td>Éditer</td>
                <td>Supprimer</td>
            ";
        }
        // line 36
        yield "        </tr>

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 39
            yield "        ";
            // line 40
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 40) == "tous")) {
                // line 41
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 43), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 46), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 46), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 49), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 49), "html", null, true);
                yield "</a>
                    </td>

                    ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 52))) {
                    // line 53
                    yield "                        <td>
                            <a class=\"suppr-btn-formulaire\" href=\"";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                    yield "\">Ne plus participer</a>
                        </td>
                    ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["evenement"], "placesPrises", [], "any", false, false, false, 56) == CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "places", [], "any", false, false, false, 56)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56))) {
                    // line 57
                    yield "                        <td>
                            <p>Événement complet</p>
                        </td>
                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 60
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60)) {
                    // line 61
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 65
                yield "
                    ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "isAdmin", [], "method", false, false, false, 66))) {
                    // line 67
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 74
                yield "                </tr>

            ";
            } elseif ((((CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["evenement"], "visibilite", [], "any", false, false, false, 76) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "isMembre", [], "method", false, false, false, 76) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "isAdmin", [], "method", false, false, false, 76)))) {
                // line 77
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 79), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 82), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 82), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 85), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 85), "html", null, true);
                yield "</a>
                    </td>
                    ";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 87)) {
                    // line 88
                    yield "                    <td>
                        <a class=\"valider-btn-formulaire\" href=\"";
                    // line 89
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                    yield "\">paparticiper</a>
                    </td>
                    ";
                } else {
                    // line 92
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 96
                yield "                    
                    ";
                // line 97
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "isAdmin", [], "method", false, false, false, 97))) {
                    // line 98
                    yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                    yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                    yield "\">Supprimer</a>
                        </td>
                    ";
                }
                // line 105
                yield "                </tr>

            ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 107
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107) && (CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "visibilite", [], "any", false, false, false, 107) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "isAdmin", [], "method", false, false, false, 107))) {
                // line 108
                yield "                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 110), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 113), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 113), "html", null, true);
                yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield " \"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 116), "html", null, true);
                yield " à ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 116), "html", null, true);
                yield "</a>
                    </td>

                    ";
                // line 119
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 119)) {
                    // line 120
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pas_participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 121)]), "html", null, true);
                    yield "\">paparticiper</a>
                        </td>
                    ";
                } else {
                    // line 124
                    yield "                        <td>
                            <a class=\"valider-btn-formulaire\" href=\"";
                    // line 125
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                    yield "\">Participer</a>
                        </td>
                    ";
                }
                // line 128
                yield "
                    <td>
                        <a class=\"btn-editer\" href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\">Éditer</a>
                    </td>
                    <td>
                        <a class=\"btn-supprimer\" href=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                yield "\">Supprimer</a>
                    </td>
                </tr>
            ";
            }
            // line 137
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "    </table>
    <div class=\"navigation\">
        ";
        // line 140
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 140, $this->source); })()));
        yield "
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
        return array (  412 => 140,  408 => 138,  402 => 137,  395 => 133,  389 => 130,  385 => 128,  379 => 125,  376 => 124,  370 => 121,  367 => 120,  365 => 119,  355 => 116,  345 => 113,  337 => 110,  333 => 108,  331 => 107,  327 => 105,  321 => 102,  315 => 99,  312 => 98,  310 => 97,  307 => 96,  301 => 93,  298 => 92,  292 => 89,  289 => 88,  287 => 87,  278 => 85,  268 => 82,  260 => 79,  256 => 77,  254 => 76,  250 => 74,  244 => 71,  238 => 68,  235 => 67,  233 => 66,  230 => 65,  224 => 62,  221 => 61,  219 => 60,  214 => 57,  212 => 56,  207 => 54,  204 => 53,  202 => 52,  192 => 49,  182 => 46,  174 => 43,  170 => 41,  167 => 40,  165 => 39,  161 => 38,  157 => 36,  152 => 33,  149 => 32,  145 => 30,  143 => 29,  132 => 21,  129 => 20,  126 => 18,  120 => 17,  111 => 15,  106 => 14,  102 => 13,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}

<div class=\"liste-evenement-background\">

    <h4>Liste des événements</h4>
    <a class=\"texte-utilisateur\" href=\" {{ path('new_evenement') }} \">Créer un événement</a><br>

    <div class=\"message-participation\">
        {% for label, messages in app.flashes %}
                {% for message in messages %}
                    {{ message }}
                {% endfor %}
        {% endfor %}
    </div>
    {# début image pagination #}
    <div class=\"count\">
        {{ pagination.getTotalItemCount }}
    </div>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            {% if app.user %}
                <td>Participation</td>
            {% endif %}
            {% if app.user  and app.user.isAdmin() %}
                <td>Éditer</td>
                <td>Supprimer</td>
            {% endif %}
        </tr>

        {% for evenement in pagination %}
        {# {{ dump(evenement.participants) }} #}
            {% if (evenement.visibilite == 'tous') %}
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.titre }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</a>
                    </td>

                    {% if app.user and app.user.estCeQueParticipeDeja(evenement) %}
                        <td>
                            <a class=\"suppr-btn-formulaire\" href=\"{{ path('pas_participer_evenement', {'id': evenement.id}) }}\">Ne plus participer</a>
                        </td>
                    {% elseif evenement.placesPrises == evenement.places and app.user %}
                        <td>
                            <p>Événement complet</p>
                        </td>
                    {% elseif app.user %}
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
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

</div>
{% endblock %}", "evenement/index.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\evenement\\index.html.twig");
    }
}

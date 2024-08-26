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
class __TwigTemplate_e3164196b6441b3e3a09eb8e4b68b32e extends Template
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
            // line 27
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "participants", [], "any", false, false, false, 27)) == 0)) {
                // line 28
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
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
            }
            // line 39
            yield "
    </div>

";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "visibilite", [], "any", false, false, false, 42) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "isMembre", [], "method", false, false, false, 42) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "isAdmin", [], "method", false, false, false, 42)))) {
            // line 43
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 46, $this->source); })()), "titre", [], "any", false, false, false, 46), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 53, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 53), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 53, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 53), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 54, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 54), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 54, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 54), "html", null, true);
            yield "
        </p>

        <p>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 57, $this->source); })()), "contenu", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>

        ";
            // line 59
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 59, $this->source); })()), "participants", [], "any", false, false, false, 59)) == 0)) {
                // line 60
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 62
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 65, $this->source); })()), "participants", [], "any", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 66
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 66), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "                </ul>
            </div>
        ";
            }
            // line 71
            yield "    </div>

";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 73
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 73, $this->source); })()), "visibilite", [], "any", false, false, false, 73) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "isAdmin", [], "method", false, false, false, 73))) {
            // line 74
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 77, $this->source); })()), "titre", [], "any", false, false, false, 77), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 84, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 84), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 84, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 84), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 85), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 85), "html", null, true);
            yield "
        </p>

        <p>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 88, $this->source); })()), "contenu", [], "any", false, false, false, 88), "html", null, true);
            yield "</p>

        ";
            // line 90
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 90, $this->source); })()), "participants", [], "any", false, false, false, 90)) == 0)) {
                // line 91
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 93
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 96, $this->source); })()), "participants", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 97
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 97), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "                </ul>
            </div>
        ";
            }
            // line 102
            yield "    </div>

";
        } else {
            // line 105
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 109
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
        return array (  328 => 109,  322 => 105,  317 => 102,  312 => 99,  303 => 97,  299 => 96,  294 => 93,  290 => 91,  288 => 90,  283 => 88,  275 => 85,  269 => 84,  263 => 81,  256 => 77,  251 => 74,  249 => 73,  245 => 71,  240 => 68,  231 => 66,  227 => 65,  222 => 62,  218 => 60,  216 => 59,  211 => 57,  203 => 54,  197 => 53,  191 => 50,  184 => 46,  179 => 43,  177 => 42,  172 => 39,  167 => 36,  158 => 34,  154 => 33,  149 => 30,  145 => 28,  143 => 27,  136 => 25,  131 => 23,  127 => 22,  119 => 19,  113 => 18,  107 => 15,  100 => 11,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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

        {% if evenement.participants|length == 0 %}
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
        {% endif %}

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

        {% if evenement.participants|length == 0 %}
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
        {% endif %}
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

        {% if evenement.participants|length == 0 %}
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
        {% endif %}
    </div>

{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}", "evenement/show.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\evenement\\show.html.twig");
    }
}

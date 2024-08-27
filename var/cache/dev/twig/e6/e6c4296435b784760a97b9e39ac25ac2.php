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
            // line 9
            yield "    <div class=\"det-evenement-background\">

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
     ";
            // line 41
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 41, $this->source); })()), "commentaires", [], "any", false, false, false, 41)) > 0)) {
                // line 42
                yield "            <h4>Commentaires</h4>
            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 43, $this->source); })()), "commentaires", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 44
                    yield "                <div>
                    <p>
                        ";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 46), "pseudo", [], "any", false, false, false, 46), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 46), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <p>
                        ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 49), "html", null, true);
                    yield "
                    </p>
                    ";
                    // line 51
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "isAdmin", [], "method", false, false, false, 51)) {
                        // line 52
                        yield "                        <a class=\"btn-supprimer\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                        yield "\">Supprimer</a>
                    ";
                    }
                    // line 54
                    yield "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                yield "        ";
            } else {
                // line 57
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 59
            yield "
    ";
            // line 61
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 63
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 63, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 66, $this->source); })()), "message", [], "any", false, false, false, 66), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 69, $this->source); })()), "valider", [], "any", false, false, false, 69), 'row');
            yield "    
                </div>

                ";
            // line 72
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 72, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

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
            // line 94
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 94, $this->source); })()), "participants", [], "any", false, false, false, 94)) == 0)) {
                // line 95
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
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
            }
            // line 106
            yield "
        ";
            // line 108
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 108, $this->source); })()), "commentaires", [], "any", false, false, false, 108)) > 0)) {
                // line 109
                yield "            <h4>Commentaires</h4>
            ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 110, $this->source); })()), "commentaires", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 111
                    yield "                <div>
                    <p>
                        ";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 113), "pseudo", [], "any", false, false, false, 113), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 113), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <p>
                        ";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 116), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "        ";
            } else {
                // line 121
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 123
            yield "
            ";
            // line 125
            yield "            <div class=\"commentaire\">
                <div class=\"formulaire\">
                    ";
            // line 127
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 127, $this->source); })()), 'form_start');
            yield "

                    <div class=\"col-form\">
                        ";
            // line 130
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 130, $this->source); })()), "message", [], "any", false, false, false, 130), 'row');
            yield "    
                    </div>
                    <div class=\"bouton\">
                        ";
            // line 133
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 133, $this->source); })()), "valider", [], "any", false, false, false, 133), 'row');
            yield "    
                    </div>

                    ";
            // line 136
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 136, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
    </div>

";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 142
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 142, $this->source); })()), "visibilite", [], "any", false, false, false, 142) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "isAdmin", [], "method", false, false, false, 142))) {
            // line 143
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 146, $this->source); })()), "titre", [], "any", false, false, false, 146), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 153, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 153), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 153, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 153), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 154), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 154, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 154), "html", null, true);
            yield "
        </p>

        <p>";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 157, $this->source); })()), "contenu", [], "any", false, false, false, 157), "html", null, true);
            yield "</p>

        ";
            // line 159
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 159, $this->source); })()), "participants", [], "any", false, false, false, 159)) == 0)) {
                // line 160
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 162
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 165, $this->source); })()), "participants", [], "any", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 166
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 166), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                yield "                </ul>
            </div>
        ";
            }
            // line 171
            yield "
        ";
            // line 173
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 173, $this->source); })()), "commentaires", [], "any", false, false, false, 173)) > 0)) {
                // line 174
                yield "            <h4>Commentaires</h4>
            ";
                // line 175
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 175, $this->source); })()), "commentaires", [], "any", false, false, false, 175));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 176
                    yield "                <div>
                    <p>
                        ";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 178), "pseudo", [], "any", false, false, false, 178), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 178), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <a class=\"btn-supprimer\" href=\"";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                    yield "\">Supprimer</a>
                    <p>
                        ";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 182), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                yield "        ";
            } else {
                // line 187
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 189
            yield "
        ";
            // line 191
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 193
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 193, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 196
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 196, $this->source); })()), "message", [], "any", false, false, false, 196), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 199
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 199, $this->source); })()), "valider", [], "any", false, false, false, 199), 'row');
            yield "    
                </div>

                ";
            // line 202
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 202, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

    </div>

";
        } else {
            // line 210
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 214
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
        return array (  556 => 214,  550 => 210,  539 => 202,  533 => 199,  527 => 196,  521 => 193,  517 => 191,  514 => 189,  510 => 187,  507 => 186,  497 => 182,  492 => 180,  485 => 178,  481 => 176,  477 => 175,  474 => 174,  471 => 173,  468 => 171,  463 => 168,  454 => 166,  450 => 165,  445 => 162,  441 => 160,  439 => 159,  434 => 157,  426 => 154,  420 => 153,  414 => 150,  407 => 146,  402 => 143,  400 => 142,  391 => 136,  385 => 133,  379 => 130,  373 => 127,  369 => 125,  366 => 123,  362 => 121,  359 => 120,  349 => 116,  341 => 113,  337 => 111,  333 => 110,  330 => 109,  327 => 108,  324 => 106,  319 => 103,  310 => 101,  306 => 100,  301 => 97,  297 => 95,  294 => 94,  290 => 92,  282 => 89,  276 => 88,  270 => 85,  263 => 81,  258 => 78,  256 => 77,  248 => 72,  242 => 69,  236 => 66,  230 => 63,  226 => 61,  223 => 59,  219 => 57,  216 => 56,  209 => 54,  203 => 52,  201 => 51,  196 => 49,  188 => 46,  184 => 44,  180 => 43,  177 => 42,  174 => 41,  171 => 39,  166 => 36,  157 => 34,  153 => 33,  148 => 30,  144 => 28,  142 => 27,  135 => 25,  130 => 23,  126 => 22,  118 => 19,  112 => 18,  106 => 15,  99 => 11,  95 => 9,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails événement{% endblock %}

{% block body %}

{% if (evenement.visibilite == 'tous') %}
{# {{ dump(evenement) }} #}
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

     {# section commentaires #}
        {% if evenement.commentaires | length > 0 %}
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
        {% endif %}

    {#  formulaire commentaire #}
        <div class=\"commentaire\">
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
{#  #}
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

        {#  section commentaires #}
        {% if evenement.commentaires | length > 0 %}
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
        {% endif %}

            {#  formulaire commentaire #}
            <div class=\"commentaire\">
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
        </div>
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

        {#  section commentaires #}
        {% if evenement.commentaires | length > 0 %}
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
        {% endif %}

        {#  formulaire commentaire #}
        <div class=\"commentaire\">
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

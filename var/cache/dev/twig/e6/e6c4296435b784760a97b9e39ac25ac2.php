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
                // line 29
                yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 29, $this->source); })()), "participants", [], "any", false, false, false, 29));
                yield "
        ";
            } else {
                // line 31
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 34, $this->source); })()), "participants", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 35
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 35), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                </ul>
            </div>
        ";
            }
            // line 40
            yield "
     ";
            // line 42
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 42, $this->source); })()), "commentaires", [], "any", false, false, false, 42)) > 0)) {
                // line 43
                yield "            <h4>Commentaires</h4>
            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 44, $this->source); })()), "commentaires", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 45
                    yield "                <div>
                    <p>
                        ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 47), "pseudo", [], "any", false, false, false, 47), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 47), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <p>
                        ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 50), "html", null, true);
                    yield "
                    </p>
                    ";
                    // line 52
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "isAdmin", [], "method", false, false, false, 52)) {
                        // line 53
                        yield "                        <a class=\"btn-supprimer\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                        yield "\">Supprimer</a>
                    ";
                    }
                    // line 55
                    yield "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "        ";
            } else {
                // line 58
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 60
            yield "
    ";
            // line 62
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 64
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 64, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 67, $this->source); })()), "message", [], "any", false, false, false, 67), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 70
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 70, $this->source); })()), "valider", [], "any", false, false, false, 70), 'row');
            yield "    
                </div>

                ";
            // line 73
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 73, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 78, $this->source); })()), "visibilite", [], "any", false, false, false, 78) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "isMembre", [], "method", false, false, false, 78) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "isAdmin", [], "method", false, false, false, 78)))) {
            // line 79
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 82, $this->source); })()), "titre", [], "any", false, false, false, 82), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "description", [], "any", false, false, false, 86), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 89), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 89), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 90, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 90), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 90, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 90), "html", null, true);
            yield "
        </p>

        <p>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "contenu", [], "any", false, false, false, 93), "html", null, true);
            yield "</p>
";
            // line 95
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 95, $this->source); })()), "participants", [], "any", false, false, false, 95)) == 0)) {
                // line 96
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 98
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 101, $this->source); })()), "participants", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 102
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 102), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                yield "                </ul>
            </div>
        ";
            }
            // line 107
            yield "
        ";
            // line 109
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 109, $this->source); })()), "commentaires", [], "any", false, false, false, 109)) > 0)) {
                // line 110
                yield "            <h4>Commentaires</h4>
            ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 111, $this->source); })()), "commentaires", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 112
                    yield "                <div>
                    <p>
                        ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 114), "pseudo", [], "any", false, false, false, 114), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 114), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <p>
                        ";
                    // line 117
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 117), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                yield "        ";
            } else {
                // line 122
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 124
            yield "
            ";
            // line 126
            yield "            <div class=\"commentaire\">
                <div class=\"formulaire\">
                    ";
            // line 128
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 128, $this->source); })()), 'form_start');
            yield "

                    <div class=\"col-form\">
                        ";
            // line 131
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 131, $this->source); })()), "message", [], "any", false, false, false, 131), 'row');
            yield "    
                    </div>
                    <div class=\"bouton\">
                        ";
            // line 134
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 134, $this->source); })()), "valider", [], "any", false, false, false, 134), 'row');
            yield "    
                    </div>

                    ";
            // line 137
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 137, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
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
            // line 160
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 160, $this->source); })()), "participants", [], "any", false, false, false, 160)) == 0)) {
                // line 161
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 163
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 166, $this->source); })()), "participants", [], "any", false, false, false, 166));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 167
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 167), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                yield "                </ul>
            </div>
        ";
            }
            // line 172
            yield "
        ";
            // line 174
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 174, $this->source); })()), "commentaires", [], "any", false, false, false, 174)) > 0)) {
                // line 175
                yield "            <h4>Commentaires</h4>
            ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 176, $this->source); })()), "commentaires", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 177
                    yield "                <div>
                    <p>
                        ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 179), "pseudo", [], "any", false, false, false, 179), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 179), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <a class=\"btn-supprimer\" href=\"";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 181)]), "html", null, true);
                    yield "\">Supprimer</a>
                    <p>
                        ";
                    // line 183
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 183), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                yield "        ";
            } else {
                // line 188
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 190
            yield "
        ";
            // line 192
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 194
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 194, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 197
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 197, $this->source); })()), "message", [], "any", false, false, false, 197), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 200
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 200, $this->source); })()), "valider", [], "any", false, false, false, 200), 'row');
            yield "    
                </div>

                ";
            // line 203
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 203, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

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
        return array (  560 => 215,  554 => 211,  543 => 203,  537 => 200,  531 => 197,  525 => 194,  521 => 192,  518 => 190,  514 => 188,  511 => 187,  501 => 183,  496 => 181,  489 => 179,  485 => 177,  481 => 176,  478 => 175,  475 => 174,  472 => 172,  467 => 169,  458 => 167,  454 => 166,  449 => 163,  445 => 161,  443 => 160,  438 => 158,  430 => 155,  424 => 154,  418 => 151,  411 => 147,  406 => 144,  404 => 143,  395 => 137,  389 => 134,  383 => 131,  377 => 128,  373 => 126,  370 => 124,  366 => 122,  363 => 121,  353 => 117,  345 => 114,  341 => 112,  337 => 111,  334 => 110,  331 => 109,  328 => 107,  323 => 104,  314 => 102,  310 => 101,  305 => 98,  301 => 96,  298 => 95,  294 => 93,  286 => 90,  280 => 89,  274 => 86,  267 => 82,  262 => 79,  260 => 78,  252 => 73,  246 => 70,  240 => 67,  234 => 64,  230 => 62,  227 => 60,  223 => 58,  220 => 57,  213 => 55,  207 => 53,  205 => 52,  200 => 50,  192 => 47,  188 => 45,  184 => 44,  181 => 43,  178 => 42,  175 => 40,  170 => 37,  161 => 35,  157 => 34,  152 => 31,  147 => 29,  144 => 28,  142 => 27,  135 => 25,  130 => 23,  126 => 22,  118 => 19,  112 => 18,  106 => 15,  99 => 11,  95 => 9,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
            {{ dump(evenement.participants) }}
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

{% endblock %}", "evenement/show.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\evenement\\show.html.twig");
    }
}

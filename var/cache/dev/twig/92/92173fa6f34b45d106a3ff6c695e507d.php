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
";
            // line 41
            yield "
";
            // line 44
            yield "        

        ";
            // line 46
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 46, $this->source); })()), "commentaires", [], "any", false, false, false, 46)) > 0)) {
                // line 47
                yield "            <h4>Commentaires</h4>
            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "commentaires", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 49
                    yield "                <div>
                    <p>";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 50), "pseudo", [], "any", false, false, false, 50), "html", null, true);
                    yield "</strong> (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
                    yield "):</p>
                    <p>";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 51), "html", null, true);
                    yield "</p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "        ";
            } else {
                // line 55
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 57
            yield "
";
            // line 59
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 61
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 61, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 64, $this->source); })()), "message", [], "any", false, false, false, 64), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 67, $this->source); })()), "valider", [], "any", false, false, false, 67), 'row');
            yield "    
                </div>
                ";
            // line 69
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 69, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 74, $this->source); })()), "visibilite", [], "any", false, false, false, 74) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "isMembre", [], "method", false, false, false, 74) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "isAdmin", [], "method", false, false, false, 74)))) {
            // line 75
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 78, $this->source); })()), "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 85), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 85), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 86), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 86, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 86), "html", null, true);
            yield "
        </p>

        <p>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "contenu", [], "any", false, false, false, 89), "html", null, true);
            yield "</p>

        ";
            // line 91
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 91, $this->source); })()), "participants", [], "any", false, false, false, 91)) == 0)) {
                // line 92
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 94
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "participants", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 98
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 98), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                yield "                </ul>
            </div>
        ";
            }
            // line 103
            yield "    </div>

";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 105, $this->source); })()), "visibilite", [], "any", false, false, false, 105) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "isAdmin", [], "method", false, false, false, 105))) {
            // line 106
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 109, $this->source); })()), "titre", [], "any", false, false, false, 109), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 113, $this->source); })()), "description", [], "any", false, false, false, 113), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 116, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 116), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 116, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 116), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 117, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 117), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 117, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 117), "html", null, true);
            yield "
        </p>

        <p>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 120, $this->source); })()), "contenu", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>

        ";
            // line 122
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 122, $this->source); })()), "participants", [], "any", false, false, false, 122)) == 0)) {
                // line 123
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 125
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 128, $this->source); })()), "participants", [], "any", false, false, false, 128));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 129
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 129), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                yield "                </ul>
            </div>
        ";
            }
            // line 134
            yield "    </div>

";
        } else {
            // line 137
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 141
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
        return array (  399 => 141,  393 => 137,  388 => 134,  383 => 131,  374 => 129,  370 => 128,  365 => 125,  361 => 123,  359 => 122,  354 => 120,  346 => 117,  340 => 116,  334 => 113,  327 => 109,  322 => 106,  320 => 105,  316 => 103,  311 => 100,  302 => 98,  298 => 97,  293 => 94,  289 => 92,  287 => 91,  282 => 89,  274 => 86,  268 => 85,  262 => 82,  255 => 78,  250 => 75,  248 => 74,  240 => 69,  235 => 67,  229 => 64,  223 => 61,  219 => 59,  216 => 57,  212 => 55,  209 => 54,  200 => 51,  194 => 50,  191 => 49,  187 => 48,  184 => 47,  182 => 46,  178 => 44,  175 => 41,  172 => 39,  167 => 36,  158 => 34,  154 => 33,  149 => 30,  145 => 28,  143 => 27,  136 => 25,  131 => 23,  127 => 22,  119 => 19,  113 => 18,  107 => 15,  100 => 11,  95 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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

{#  section commentaires #}

{# {% for c in evenement.commentaires %}
    {{ dump(c) }}
{% endfor %} #}        

        {% if evenement.commentaires | length > 0 %}
            <h4>Commentaires</h4>
            {% for commentaire in evenement.commentaires %}
                <div>
                    <p>{{ commentaire.poste.pseudo }}</strong> ({{ commentaire.datePoste|date('d/m/Y H:i') }}):</p>
                    <p>{{ commentaire.message }}</p>
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

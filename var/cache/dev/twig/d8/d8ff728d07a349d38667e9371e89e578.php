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
class __TwigTemplate_b002bf376b944aa46ee2c50f79d14d8f extends Template
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
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 8, $this->source); })()), "visibilite", [], "any", false, false, false, 8) == "tous")) {
            // line 10
            yield "    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 19), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 19), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 20), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 20, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 20), "html", null, true);
            yield "
        </p>

        <p>Visibilité : ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 23, $this->source); })()), "visibilite", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
        <p>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 24, $this->source); })()), "contenu", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>

        <p> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "placesPrises", [], "any", false, false, false, 26), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 26, $this->source); })()), "places", [], "any", false, false, false, 26), "html", null, true);
            yield " places prises.</p>

        ";
            // line 28
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 28, $this->source); })()), "participants", [], "any", false, false, false, 28)) == 0)) {
                // line 29
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 31
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
                    // line 32
                    yield "                <div class=\"participants-liste\">
                    <h4>Participants inscrits :</h4>
                    <ul>
                        ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 35, $this->source); })()), "participants", [], "any", false, false, false, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                        // line 36
                        yield "                            <a href=\" ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                        yield " \">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 36), "html", null, true);
                        yield "</a>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    yield "                    </ul>
                </div>
            ";
                }
                // line 41
                yield "        ";
            }
            // line 42
            yield "
        ";
            // line 44
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
                // line 45
                yield "            ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 45, $this->source); })()), "commentaires", [], "any", false, false, false, 45)) > 0)) {
                    // line 46
                    yield "                <h4>Commentaires</h4>
                ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 47, $this->source); })()), "commentaires", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                        // line 48
                        yield "                    <div>
                        <p>
                            ";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 50), "pseudo", [], "any", false, false, false, 50), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
                        yield "):
                        </p>
                        <p>
                            ";
                        // line 53
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 53), "html", null, true);
                        yield "
                        </p>
                        ";
                        // line 55
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "isAdmin", [], "method", false, false, false, 55)) {
                            // line 56
                            yield "                            <a class=\"btn-supprimer\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                            yield "\">Supprimer</a>
                        ";
                        }
                        // line 58
                        yield "                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    yield "            ";
                } else {
                    // line 61
                    yield "                    <p>Soyez le premier à commenter !</p>
            ";
                }
                // line 63
                yield "
            ";
                // line 65
                yield "            <div class=\"commentaire\">
                <div class=\"formulaire\">
                    ";
                // line 67
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 67, $this->source); })()), 'form_start');
                yield "

                    <div class=\"col-form\">
                        ";
                // line 70
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 70, $this->source); })()), "message", [], "any", false, false, false, 70), 'row');
                yield "    
                    </div>
                    <div class=\"bouton\">
                        ";
                // line 73
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 73, $this->source); })()), "valider", [], "any", false, false, false, 73), 'row');
                yield "    
                    </div>

                    ";
                // line 76
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 76, $this->source); })()), 'form_end');
                yield "
                </div>
            </div>
        ";
            } else {
                // line 80
                yield "            <p>Connectez-vous pour laisser un commentaire !</p>
        ";
            }
            // line 82
            yield "    </div>

";
        } elseif ((((CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 85, $this->source); })()), "visibilite", [], "any", false, false, false, 85) == "membres") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "isMembre", [], "method", false, false, false, 85) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "isAdmin", [], "method", false, false, false, 85)))) {
            // line 86
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 89, $this->source); })()), "titre", [], "any", false, false, false, 89), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 96, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 96), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 96, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 96), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 97), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 97, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 97), "html", null, true);
            yield "
        </p>

        <p>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 100, $this->source); })()), "contenu", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>

        ";
            // line 102
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 102, $this->source); })()), "participants", [], "any", false, false, false, 102)) == 0)) {
                // line 103
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 105
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 108, $this->source); })()), "participants", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 109
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 109), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "                </ul>
            </div>
        ";
            }
            // line 114
            yield "
        ";
            // line 116
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 116, $this->source); })()), "commentaires", [], "any", false, false, false, 116)) > 0)) {
                // line 117
                yield "            <h4>Commentaires</h4>
            ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 118, $this->source); })()), "commentaires", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 119
                    yield "                <div>
                    <p>
                        ";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 121), "pseudo", [], "any", false, false, false, 121), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 121), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <p>
                        ";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 124), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "        ";
            } else {
                // line 129
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 131
            yield "
            ";
            // line 133
            yield "            <div class=\"commentaire\">
                <div class=\"formulaire\">
                    ";
            // line 135
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 135, $this->source); })()), 'form_start');
            yield "

                    <div class=\"col-form\">
                        ";
            // line 138
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 138, $this->source); })()), "message", [], "any", false, false, false, 138), 'row');
            yield "    
                    </div>
                    <div class=\"bouton\">
                        ";
            // line 141
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 141, $this->source); })()), "valider", [], "any", false, false, false, 141), 'row');
            yield "    
                    </div>

                    ";
            // line 144
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 144, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
    </div>

";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 151
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 151, $this->source); })()), "visibilite", [], "any", false, false, false, 151) == "admins")) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "isAdmin", [], "method", false, false, false, 151))) {
            // line 152
            yield "
    <div class=\"det-evenement-background\">

        <h4>Détails de l'événement : ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 155, $this->source); })()), "titre", [], "any", false, false, false, 155), "html", null, true);
            yield "</h4>

        <p>
            Description : <br>
            ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 159, $this->source); })()), "description", [], "any", false, false, false, 159), "html", null, true);
            yield "</p>

        <p>
            Date de début : ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 162, $this->source); })()), "dateDebutFormatee", [], "any", false, false, false, 162), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 162, $this->source); })()), "heureDebutFormatee", [], "any", false, false, false, 162), "html", null, true);
            yield " <br>
            Date de fin : ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 163, $this->source); })()), "dateFinFormatee", [], "any", false, false, false, 163), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 163, $this->source); })()), "heureFinFormatee", [], "any", false, false, false, 163), "html", null, true);
            yield "
        </p>

        <p>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 166, $this->source); })()), "contenu", [], "any", false, false, false, 166), "html", null, true);
            yield "</p>

        ";
            // line 168
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 168, $this->source); })()), "participants", [], "any", false, false, false, 168)) == 0)) {
                // line 169
                yield "            <p>Aucun inscrit pour le moment</p>
        ";
            } else {
                // line 171
                yield "            <div class=\"participants-liste\">
                <h4>Participants inscrits :</h4>
                <ul>
                    ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 174, $this->source); })()), "participants", [], "any", false, false, false, 174));
                foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                    // line 175
                    yield "                        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "pseudo", [], "any", false, false, false, 175), "html", null, true);
                    yield "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                yield "                </ul>
            </div>
        ";
            }
            // line 180
            yield "
        ";
            // line 182
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 182, $this->source); })()), "commentaires", [], "any", false, false, false, 182)) > 0)) {
                // line 183
                yield "            <h4>Commentaires</h4>
            ";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 184, $this->source); })()), "commentaires", [], "any", false, false, false, 184));
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 185
                    yield "                <div>
                    <p>
                        ";
                    // line 187
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "poste", [], "any", false, false, false, 187), "pseudo", [], "any", false, false, false, 187), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "datePoste", [], "any", false, false, false, 187), "d/m/Y H:i"), "html", null, true);
                    yield "):
                    </p>
                    <a class=\"btn-supprimer\" href=\"";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_commentaire", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                    yield "\">Supprimer</a>
                    <p>
                        ";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 191), "html", null, true);
                    yield "
                    </p>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                yield "        ";
            } else {
                // line 196
                yield "                <p>Soyez le premier à commenter !</p>
        ";
            }
            // line 198
            yield "
        ";
            // line 200
            yield "        <div class=\"commentaire\">
            <div class=\"formulaire\">
                ";
            // line 202
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 202, $this->source); })()), 'form_start');
            yield "

                <div class=\"col-form\">
                    ";
            // line 205
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 205, $this->source); })()), "message", [], "any", false, false, false, 205), 'row');
            yield "    
                </div>
                <div class=\"bouton\">
                    ";
            // line 208
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 208, $this->source); })()), "valider", [], "any", false, false, false, 208), 'row');
            yield "    
                </div>

                ";
            // line 211
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddCommentaire"]) || array_key_exists("formAddCommentaire", $context) ? $context["formAddCommentaire"] : (function () { throw new RuntimeError('Variable "formAddCommentaire" does not exist.', 211, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>
    </div>

    </div>

";
        } else {
            // line 219
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 223
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
        return array (  574 => 223,  568 => 219,  557 => 211,  551 => 208,  545 => 205,  539 => 202,  535 => 200,  532 => 198,  528 => 196,  525 => 195,  515 => 191,  510 => 189,  503 => 187,  499 => 185,  495 => 184,  492 => 183,  489 => 182,  486 => 180,  481 => 177,  472 => 175,  468 => 174,  463 => 171,  459 => 169,  457 => 168,  452 => 166,  444 => 163,  438 => 162,  432 => 159,  425 => 155,  420 => 152,  418 => 151,  409 => 144,  403 => 141,  397 => 138,  391 => 135,  387 => 133,  384 => 131,  380 => 129,  377 => 128,  367 => 124,  359 => 121,  355 => 119,  351 => 118,  348 => 117,  345 => 116,  342 => 114,  337 => 111,  328 => 109,  324 => 108,  319 => 105,  315 => 103,  313 => 102,  308 => 100,  300 => 97,  294 => 96,  288 => 93,  281 => 89,  276 => 86,  274 => 85,  270 => 82,  266 => 80,  259 => 76,  253 => 73,  247 => 70,  241 => 67,  237 => 65,  234 => 63,  230 => 61,  227 => 60,  220 => 58,  214 => 56,  212 => 55,  207 => 53,  199 => 50,  195 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  179 => 42,  176 => 41,  171 => 38,  160 => 36,  156 => 35,  151 => 32,  148 => 31,  144 => 29,  142 => 28,  135 => 26,  130 => 24,  126 => 23,  118 => 20,  112 => 19,  106 => 16,  99 => 12,  95 => 10,  93 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails événement{% endblock %}

{% block body %}

{# ============= version tous ============= #}
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
            {% if app.user %}
                <div class=\"participants-liste\">
                    <h4>Participants inscrits :</h4>
                    <ul>
                        {% for participant in evenement.participants %}
                            <a href=\" {{ path('show_user', {'id': participant.id}) }} \">{{ participant.pseudo }}</a>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}
        {% endif %}

        {# ============= section commentaires ============= #}
        {% if app.user %}
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

            {# ============= formulaire commentaire ============= #}
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
        {% else %}
            <p>Connectez-vous pour laisser un commentaire !</p>
        {% endif %}
    </div>

{# ============= version membre ============= #}
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

        {# ============= section commentaires ============= #}
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

            {# ============= formulaire commentaire ============= #}
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

{# ============= version admin ============= #}
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

        {# ============= section commentaires ============= #}
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

        {# ============= formulaire commentaire ============= #}
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

{% endblock %}", "evenement/show.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\evenement\\show.html.twig");
    }
}

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

/* user/pageperso.html.twig */
class __TwigTemplate_cf91d64b3006bef448dc8a8c471aa04b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pageperso.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pageperso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/pageperso.html.twig", 1);
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

        // line 4
        yield "    Espace personnel
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "
";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            yield "    <div class=\"pagePerso-container\">
        <a class=\"btn-editer\" href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\">Éditer</a>
        <h4>Espace personnel : ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "pseudo", [], "any", false, false, false, 13), "html", null, true);
            yield "</h4>

        <div class=\"pagePerso-contenu\">

            <div class=\"infos-pagePerso\">

                    <p>Email : ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>

                    ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isMembre", [], "method", false, false, false, 21) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isAdmin", [], "method", false, false, false, 21))) {
                // line 22
                yield "                        <p>
                            Rôles : 
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 25
                    yield "                                    ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 26
                        yield "                                        Administrateur, 
                                    ";
                    } elseif ((                    // line 27
$context["role"] == "ROLE_MEMBRE")) {
                        // line 28
                        yield "                                        Membre, 
                                    ";
                    } elseif ((                    // line 29
$context["role"] == "ROLE_USER")) {
                        // line 30
                        yield "                                        Utilisateur
                                    ";
                    }
                    // line 32
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                        </p>
                    ";
            }
            // line 35
            yield "
                    ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "isMembre", [], "method", false, false, false, 36)) {
                // line 37
                yield "                        
                        <table>
                            <tr>
                                <td>
                                    Nom
                                </td>
                                <td>
                                    ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "membre", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
                yield "
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Prénom
                                </td>
                                <td>
                                    ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "membre", [], "any", false, false, false, 53), "prenom", [], "any", false, false, false, 53), "html", null, true);
                yield "
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de licence
                                </td>
                                <td>
                                    ";
                // line 62
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "membre", [], "any", false, false, false, 62), "numLicence", [], "any", false, false, false, 62)) {
                    // line 63
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "membre", [], "any", false, false, false, 63), "numLicence", [], "any", false, false, false, 63), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 65
                    yield "                                        Numéro de  licence non renseigné
                                    ";
                }
                // line 67
                yield "                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de téléphone
                                </td>
                                <td>
                                    ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "membre", [], "any", false, false, false, 75), "numTelephone", [], "any", false, false, false, 75)) {
                    // line 76
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "membre", [], "any", false, false, false, 76), "numTelephone", [], "any", false, false, false, 76), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 78
                    yield "                                        Numéro de  téléphone non renseigné
                                    ";
                }
                // line 80
                yield "                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Date de naissance
                                </td>
                                <td>
                                    ";
                // line 88
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "membre", [], "any", false, false, false, 88), "dateNaissance", [], "any", false, false, false, 88)) {
                    // line 89
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "membre", [], "any", false, false, false, 89), "dateNaissanceFormatee", [], "any", false, false, false, 89), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 91
                    yield "                                        Date de naissance non renseignée
                                    ";
                }
                // line 93
                yield "                                </td>
                            </tr>

                        </table>
                    ";
            }
            // line 98
            yield "            </div>

            <div class=\"evenements-pagePerso\">
                
                ";
            // line 102
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "isMembre", [], "method", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "membre", [], "any", false, false, false, 102), "photo", [], "any", false, false, false, 102))) {
                // line 103
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "membre", [], "any", false, false, false, 103), "photo", [], "any", false, false, false, 103), "html", null, true);
                yield "
                ";
            }
            // line 105
            yield "
                ";
            // line 106
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "participe", [], "any", false, false, false, 106)) > 0)) {
                // line 107
                yield "                    <h5>Inscrit aux événements :</h5>
                        <ul>
                            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "participe", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["evenementpresent"]) {
                    // line 110
                    yield "                                <li>
                                    <h6><a href=\" ";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                    yield " \">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["evenementpresent"], "html", null, true);
                    yield "</a></h6>
                                    ";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "description", [], "any", false, false, false, 112), "html", null, true);
                    yield "<br>
                                    Du ";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateDebutFormatee", [], "any", false, false, false, 113), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureDebutFormatee", [], "any", false, false, false, 113), "html", null, true);
                    yield "<br>
                                    Au ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateFinFormatee", [], "any", false, false, false, 114), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureFinFormatee", [], "any", false, false, false, 114), "html", null, true);
                    yield "<br>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenementpresent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "                        </ul>
                ";
            } else {
                // line 119
                yield "                    Inscrit à aucun événement.
                ";
            }
            // line 121
            yield "            </div>
        </div>
    </div>
";
        } else {
            // line 125
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 129
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
        return "user/pageperso.html.twig";
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
        return array (  333 => 129,  327 => 125,  321 => 121,  317 => 119,  313 => 117,  302 => 114,  296 => 113,  292 => 112,  286 => 111,  283 => 110,  279 => 109,  275 => 107,  273 => 106,  270 => 105,  264 => 103,  262 => 102,  256 => 98,  249 => 93,  245 => 91,  239 => 89,  237 => 88,  227 => 80,  223 => 78,  217 => 76,  215 => 75,  205 => 67,  201 => 65,  195 => 63,  193 => 62,  181 => 53,  169 => 44,  160 => 37,  158 => 36,  155 => 35,  151 => 33,  145 => 32,  141 => 30,  139 => 29,  136 => 28,  134 => 27,  131 => 26,  128 => 25,  124 => 24,  120 => 22,  118 => 21,  113 => 19,  104 => 13,  100 => 12,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Espace personnel
{% endblock %}


{% block body %}

{% if app.user %}
    <div class=\"pagePerso-container\">
        <a class=\"btn-editer\" href=\"{{ path('edit_user', {'id': app.user.id}) }}\">Éditer</a>
        <h4>Espace personnel : {{app.user.pseudo}}</h4>

        <div class=\"pagePerso-contenu\">

            <div class=\"infos-pagePerso\">

                    <p>Email : {{ app.user.email}}</p>

                    {% if app.user.isMembre() or app.user.isAdmin() %}
                        <p>
                            Rôles : 
                                {% for role in app.user.roles %}
                                    {% if role == 'ROLE_ADMIN' %}
                                        Administrateur, 
                                    {% elseif role == 'ROLE_MEMBRE' %}
                                        Membre, 
                                    {% elseif role == 'ROLE_USER' %}
                                        Utilisateur
                                    {% endif %}
                                {% endfor %}
                        </p>
                    {% endif %}

                    {% if app.user.isMembre() %}
                        
                        <table>
                            <tr>
                                <td>
                                    Nom
                                </td>
                                <td>
                                    {{ app.user.membre.nom }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Prénom
                                </td>
                                <td>
                                    {{ app.user.membre.prenom }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de licence
                                </td>
                                <td>
                                    {% if app.user.membre.numLicence %}
                                        {{ app.user.membre.numLicence }}
                                    {% else %}
                                        Numéro de  licence non renseigné
                                    {% endif %}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de téléphone
                                </td>
                                <td>
                                    {% if app.user.membre.numTelephone %}
                                        {{ app.user.membre.numTelephone }}
                                    {% else %}
                                        Numéro de  téléphone non renseigné
                                    {% endif %}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Date de naissance
                                </td>
                                <td>
                                    {% if app.user.membre.dateNaissance %}
                                        {{ app.user.membre.dateNaissanceFormatee }}
                                    {% else %}
                                        Date de naissance non renseignée
                                    {% endif %}
                                </td>
                            </tr>

                        </table>
                    {% endif %}
            </div>

            <div class=\"evenements-pagePerso\">
                
                {% if app.user.isMembre() and app.user.membre.photo %}
                    {{ app.user.membre.photo }}
                {% endif %}

                {% if app.user.participe|length > 0 %}
                    <h5>Inscrit aux événements :</h5>
                        <ul>
                            {% for evenementpresent in app.user.participe %}
                                <li>
                                    <h6><a href=\" {{ path('show_evenement', {'id': evenementpresent.id}) }} \">{{ evenementpresent }}</a></h6>
                                    {{ evenementpresent.description }}<br>
                                    Du {{ evenementpresent.dateDebutFormatee }} à {{ evenementpresent.heureDebutFormatee }}<br>
                                    Au {{ evenementpresent.dateFinFormatee }} à {{ evenementpresent.heureFinFormatee }}<br>
                                </li>
                            {% endfor %}
                        </ul>
                {% else %}
                    Inscrit à aucun événement.
                {% endif %}
            </div>
        </div>
    </div>
{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}", "user/pageperso.html.twig", "C:\\laragon\\www\\Github\\BCKR\\BCKR\\templates\\user\\pageperso.html.twig");
    }
}

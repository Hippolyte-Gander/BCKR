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
class __TwigTemplate_ee0dc8d85a76c37e459e2255ccd6cad6 extends Template
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
            // line 26
            yield "                    <table>
                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "membre", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Prénom
                            </td>
                            <td>
                                ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "membre", [], "any", false, false, false, 41), "prenom", [], "any", false, false, false, 41), "html", null, true);
            yield "
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de licence
                            </td>
                            <td>
                                ";
            // line 50
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "membre", [], "any", false, false, false, 50), "numLicence", [], "any", false, false, false, 50)) {
                // line 51
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "membre", [], "any", false, false, false, 51), "numLicence", [], "any", false, false, false, 51), "html", null, true);
                yield "
                                ";
            } else {
                // line 53
                yield "                                    Numéro de  licence non renseigné
                                ";
            }
            // line 55
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de téléphone
                            </td>
                            <td>
                                ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "membre", [], "any", false, false, false, 63), "numTelephone", [], "any", false, false, false, 63)) {
                // line 64
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "membre", [], "any", false, false, false, 64), "numTelephone", [], "any", false, false, false, 64), "html", null, true);
                yield "
                                ";
            } else {
                // line 66
                yield "                                    Numéro de  téléphone non renseigné
                                ";
            }
            // line 68
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Date de naissance
                            </td>
                            <td>
                                ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "membre", [], "any", false, false, false, 76), "dateNaissanceFormatee", [], "any", false, false, false, 76)) {
                // line 77
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "membre", [], "any", false, false, false, 77), "dateNaissanceFormatee", [], "any", false, false, false, 77), "html", null, true);
                yield "
                                ";
            } else {
                // line 79
                yield "                                Date de naissance non renseignée
                                ";
            }
            // line 81
            yield "                            </td>
                        </tr>

                    </table>
                    ";
            // line 104
            yield "            </div>

            <div class=\"evenements-pagePerso\">
                
                ";
            // line 108
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "participe", [], "any", false, false, false, 108)) > 0)) {
                // line 109
                yield "                    <h5>Inscrit aux événements :</h5>
                        <ul>
                            ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "participe", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["evenementpresent"]) {
                    // line 112
                    yield "                                <li>
                                    <h6>";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["evenementpresent"], "html", null, true);
                    yield "</h6>
                                    ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "description", [], "any", false, false, false, 114), "html", null, true);
                    yield " <br>
                                    Du ";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateDebutFormatee", [], "any", false, false, false, 115), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureDebutFormatee", [], "any", false, false, false, 115), "html", null, true);
                    yield "<br>
                                    Au ";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateFinFormatee", [], "any", false, false, false, 116), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureFinFormatee", [], "any", false, false, false, 116), "html", null, true);
                    yield "<br>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenementpresent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "                        </ul>
                ";
            } else {
                // line 121
                yield "                    Inscrit à aucun événement.
                ";
            }
            // line 123
            yield "            </div>
        </div>
    </div>
";
        } else {
            // line 127
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 131
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
        return array (  272 => 131,  266 => 127,  260 => 123,  256 => 121,  252 => 119,  241 => 116,  235 => 115,  231 => 114,  227 => 113,  224 => 112,  220 => 111,  216 => 109,  214 => 108,  208 => 104,  202 => 81,  198 => 79,  192 => 77,  190 => 76,  180 => 68,  176 => 66,  170 => 64,  168 => 63,  158 => 55,  154 => 53,  148 => 51,  146 => 50,  134 => 41,  122 => 32,  114 => 26,  110 => 19,  101 => 13,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
        
        <h4>Espace personnel : {{app.user.pseudo}}</h4>

        <div class=\"pagePerso-contenu\">

            <div class=\"infos-pagePerso\">

                    <p>Email : {{ app.user.email}}</p>
                    {# <p>
                        Rôles : 
                            {% for role in app.user.roles %}
                                {{ role }}, 
                            {% endfor %}
                    </p> #}
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
                                {% if app.user.membre.dateNaissanceFormatee %}
                                    {{ app.user.membre.dateNaissanceFormatee }}
                                {% else %}
                                Date de naissance non renseignée
                                {% endif %}
                            </td>
                        </tr>

                    </table>
                    {# {% if app.user.isMembre() %}
                        <p>Nom : {{ app.user.membre.nom }}</p>
                        <p>Prénom : {{ app.user.membre.prenom }}</p>
                    {% if app.user.membre.numLicence %}
                        <p> {{ app.user.membre.numLicence }}</p>
                    {% else %}
                        <p>Numéro de licence non renseigné</p>
                    {% endif %}
                    {% if app.user.membre.numTelephone %}
                        <p>Numéro de  téléphone : {{ app.user.membre.numTelephone }}</p>
                    {% else %}
                        <p>Numéro de  téléphone non renseigné</p>
                    {% endif %}
                    {% if app.user.membre.dateNaissanceFormatee %}
                        <p>Date de naissance : {{ app.user.membre.dateNaissanceFormatee }}</p>
                    {% else %}
                        <p>Date de naissance non renseignée</p>
                    {% endif %}
                {% endif %} #}
            </div>

            <div class=\"evenements-pagePerso\">
                
                {% if app.user.participe|length > 0 %}
                    <h5>Inscrit aux événements :</h5>
                        <ul>
                            {% for evenementpresent in app.user.participe %}
                                <li>
                                    <h6>{{ evenementpresent }}</h6>
                                    {{ evenementpresent.description }} <br>
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

{% endblock %}", "user/pageperso.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\user\\pageperso.html.twig");
    }
}

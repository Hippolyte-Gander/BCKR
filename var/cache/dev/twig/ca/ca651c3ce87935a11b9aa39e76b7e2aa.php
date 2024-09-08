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
class __TwigTemplate_b1ed6be49e05aaa26004b5f3ee61e47a extends Template
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
        <div>
            <a class=\"btn-editer-profile\" href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">Éditer</a>
        </div>
        <h4>Espace personnel : ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "pseudo", [], "any", false, false, false, 15), "html", null, true);
            yield "</h4>

        <div class=\"pagePerso-contenu\">

            <div class=\"infos-pagePerso\">

                    <p>Email : ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
            yield "</p>

                    ";
            // line 23
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "isMembre", [], "method", false, false, false, 23) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "isAdmin", [], "method", false, false, false, 23))) {
                // line 24
                yield "                        <p>
                            Rôles : 
                                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 27
                    yield "                                    ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 28
                        yield "                                        Administrateur, 
                                    ";
                    } elseif ((                    // line 29
$context["role"] == "ROLE_MEMBRE")) {
                        // line 30
                        yield "                                        Membre, 
                                    ";
                    } elseif ((                    // line 31
$context["role"] == "ROLE_USER")) {
                        // line 32
                        yield "                                        Utilisateur
                                    ";
                    }
                    // line 34
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                        </p>
                    ";
            }
            // line 37
            yield "
                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "isMembre", [], "method", false, false, false, 38)) {
                // line 39
                yield "                        
                        <table>
                            <tr>
                                <td>
                                    Nom
                                </td>
                                <td>
                                    ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "membre", [], "any", false, false, false, 46), "nom", [], "any", false, false, false, 46), "html", null, true);
                yield "
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Prénom
                                </td>
                                <td>
                                    ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "membre", [], "any", false, false, false, 55), "prenom", [], "any", false, false, false, 55), "html", null, true);
                yield "
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de licence
                                </td>
                                <td>
                                    ";
                // line 64
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "membre", [], "any", false, false, false, 64), "numLicence", [], "any", false, false, false, 64)) {
                    // line 65
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "membre", [], "any", false, false, false, 65), "numLicence", [], "any", false, false, false, 65), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 67
                    yield "                                        Numéro de  licence non renseigné
                                    ";
                }
                // line 69
                yield "                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Numéro de téléphone
                                </td>
                                <td>
                                    ";
                // line 77
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "membre", [], "any", false, false, false, 77), "numTelephone", [], "any", false, false, false, 77)) {
                    // line 78
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "membre", [], "any", false, false, false, 78), "numTelephone", [], "any", false, false, false, 78), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 80
                    yield "                                        Numéro de  téléphone non renseigné
                                    ";
                }
                // line 82
                yield "                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Date de naissance
                                </td>
                                <td>
                                    ";
                // line 90
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "membre", [], "any", false, false, false, 90), "dateNaissance", [], "any", false, false, false, 90)) {
                    // line 91
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "membre", [], "any", false, false, false, 91), "dateNaissanceFormatee", [], "any", false, false, false, 91), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 93
                    yield "                                        Date de naissance non renseignée
                                    ";
                }
                // line 95
                yield "                                </td>
                            </tr>

                        </table>
                    ";
            }
            // line 100
            yield "            </div>

            <div class=\"evenements-pagePerso\">
                
                ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "isMembre", [], "method", false, false, false, 104) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "membre", [], "any", false, false, false, 104), "photo", [], "any", false, false, false, 104))) {
                // line 105
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "membre", [], "any", false, false, false, 105), "photo", [], "any", false, false, false, 105), "html", null, true);
                yield "
                ";
            }
            // line 107
            yield "
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
                                    <h6><a href=\" ";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                    yield " \">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["evenementpresent"], "html", null, true);
                    yield "</a></h6>
                                    ";
                    // line 114
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "description", [], "any", false, false, false, 114), "html", null, true);
                    yield "<br>
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
        return array (  335 => 131,  329 => 127,  323 => 123,  319 => 121,  315 => 119,  304 => 116,  298 => 115,  294 => 114,  288 => 113,  285 => 112,  281 => 111,  277 => 109,  275 => 108,  272 => 107,  266 => 105,  264 => 104,  258 => 100,  251 => 95,  247 => 93,  241 => 91,  239 => 90,  229 => 82,  225 => 80,  219 => 78,  217 => 77,  207 => 69,  203 => 67,  197 => 65,  195 => 64,  183 => 55,  171 => 46,  162 => 39,  160 => 38,  157 => 37,  153 => 35,  147 => 34,  143 => 32,  141 => 31,  138 => 30,  136 => 29,  133 => 28,  130 => 27,  126 => 26,  122 => 24,  120 => 23,  115 => 21,  106 => 15,  101 => 13,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
        <div>
            <a class=\"btn-editer-profile\" href=\"{{ path('edit_user', {'id': app.user.id}) }}\">Éditer</a>
        </div>
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

{% endblock %}", "user/pageperso.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\user\\pageperso.html.twig");
    }
}

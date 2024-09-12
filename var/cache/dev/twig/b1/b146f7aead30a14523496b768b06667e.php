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

/* user/show.html.twig */
class __TwigTemplate_0e5b47a7715ca581388cbceae26a675d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "isAdmin", [], "method", false, false, false, 4))) {
            // line 5
            yield "        Détails utilisateur
    ";
        } else {
            // line 7
            yield "        Page introuvable
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "
    ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "isAdmin", [], "method", false, false, false, 14))) {
            // line 15
            yield "        <div class=\"utilisateurs-container\">

            <h4>Détails de ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "pseudo", [], "any", false, false, false, 17), "html", null, true);
            yield " </h4>

            <div class=\"utilisateur-content\">
                <p>
                    Email : ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), "html", null, true);
            yield "
                </p>
                <br>
                <p>
                    ";
            // line 25
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "roles", [], "any", false, false, false, 25)) == 1)) {
                // line 26
                yield "                        Rôle : 
                    ";
            } else {
                // line 28
                yield "                        Rôles : 
                    ";
            }
            // line 30
            yield "
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "roles", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 32
                yield "                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 33
                    yield "                            Administrateur
                        ";
                } elseif ((                // line 34
$context["role"] == "ROLE_MEMBRE")) {
                    // line 35
                    yield "                            Membre 
                        ";
                } elseif ((                // line 36
$context["role"] == "ROLE_USER")) {
                    // line 37
                    yield "                            Utilisateur
                        ";
                }
                // line 39
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                </p>
                <br>
                <p>
                    ";
            // line 43
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "participationsEvenement", [], "any", false, false, false, 43)) == 1)) {
                // line 44
                yield "                        Inscrit à aucun événement.
                    ";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 45
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "participationsEvenement", [], "any", false, false, false, 45)) > 1)) {
                // line 46
                yield "                        Inscrit aux événements :
                        ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "participationsEvenement", [], "any", false, false, false, 47));
                foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
                    // line 48
                    yield "                            <li>
                                <a href=\" ";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "inscriptions", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                    yield " \">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["participation"], "inscriptions", [], "any", false, false, false, 49), "titre", [], "any", false, false, false, 49), "html", null, true);
                    yield "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "                    ";
            }
            // line 53
            yield "                </p>

                ";
            // line 55
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "isMembre", [], "method", false, false, false, 55)) {
                // line 56
                yield "                    <table>
                        ";
                // line 57
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "isAdmin", [], "method", false, false, false, 57)) {
                    // line 58
                    yield "                        <tr>
                            <td>
                                Rôle
                            </td>
                            <td>
                                ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "roles", [], "any", false, false, false, 63));
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 64
                        yield "                                    ";
                        if (($context["role"] == "ROLE_ADMIN")) {
                            // line 65
                            yield "                                        Administrateur 
                                    ";
                        } elseif ((                        // line 66
$context["role"] == "ROLE_MEMBRE")) {
                            // line 67
                            yield "                                        Membre 
                                    ";
                        } elseif ((                        // line 68
$context["role"] == "ROLE_USER")) {
                            // line 69
                            yield "                                        Utilisateur 
                                    ";
                        }
                        // line 71
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    yield "                            </td>
                        </tr>
                        ";
                }
                // line 75
                yield "
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "email", [], "any", false, false, false, 81), "html", null, true);
                yield "
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                ";
                // line 90
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90)) {
                    // line 91
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "nom", [], "any", false, false, false, 91), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 93
                    yield "                                    Non renseigné
                                ";
                }
                // line 95
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                ";
                // line 103
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "nom", [], "any", false, false, false, 103)) {
                    // line 104
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "nom", [], "any", false, false, false, 104), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 106
                    yield "                                    Non renseigné
                                ";
                }
                // line 108
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Préom
                            </td>
                            <td>
                                ";
                // line 116
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "prenom", [], "any", false, false, false, 116)) {
                    // line 117
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117), "prenom", [], "any", false, false, false, 117), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 119
                    yield "                                    Non renseigné
                                ";
                }
                // line 121
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de licence
                            </td>
                            <td>
                                ";
                // line 129
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "numLicence", [], "any", false, false, false, 129)) {
                    // line 130
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130), "numLicence", [], "any", false, false, false, 130), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 132
                    yield "                                    Non renseigné
                                ";
                }
                // line 134
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de téléphone
                            </td>
                            <td>
                                ";
                // line 142
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "numTelephone", [], "any", false, false, false, 142)) {
                    // line 143
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143), "numTelephone", [], "any", false, false, false, 143), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 145
                    yield "                                    Non renseigné
                                ";
                }
                // line 147
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Date de naissance
                            </td>
                            <td>
                                ";
                // line 155
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "dateNaissance", [], "any", false, false, false, 155)) {
                    // line 156
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "dateNaissanceFormatee", [], "any", false, false, false, 156), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 158
                    yield "                                    Non renseigné
                                ";
                }
                // line 160
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Adresse
                            </td>
                            <td>
                                ";
                // line 168
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "adresse", [], "any", false, false, false, 168)) {
                    // line 169
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "adresse", [], "any", false, false, false, 169), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 171
                    yield "                                    Non renseigné
                                ";
                }
                // line 173
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Ville
                            </td>
                            <td>
                                ";
                // line 181
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181), "ville", [], "any", false, false, false, 181)) {
                    // line 182
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "ville", [], "any", false, false, false, 182), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 184
                    yield "                                    Non renseigné
                                ";
                }
                // line 186
                yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Code Postal
                            </td>
                            <td>
                                ";
                // line 194
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "cp", [], "any", false, false, false, 194)) {
                    // line 195
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "cp", [], "any", false, false, false, 195), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 197
                    yield "                                    Non renseigné
                                ";
                }
                // line 199
                yield "                            </td>
                        </tr>

                    </table>
                ";
            } else {
                // line 204
                yield "                    <br>
                    <p>Utilisateur standard, aucune information supplémentaire</p>
                ";
            }
            // line 207
            yield "            </div>
        </div>
    ";
        } else {
            // line 210
            yield "        <div class=\"error\">
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
        return "user/show.html.twig";
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
        return array (  480 => 214,  474 => 210,  469 => 207,  464 => 204,  457 => 199,  453 => 197,  447 => 195,  445 => 194,  435 => 186,  431 => 184,  425 => 182,  423 => 181,  413 => 173,  409 => 171,  403 => 169,  401 => 168,  391 => 160,  387 => 158,  381 => 156,  379 => 155,  369 => 147,  365 => 145,  359 => 143,  357 => 142,  347 => 134,  343 => 132,  337 => 130,  335 => 129,  325 => 121,  321 => 119,  315 => 117,  313 => 116,  303 => 108,  299 => 106,  293 => 104,  291 => 103,  281 => 95,  277 => 93,  271 => 91,  269 => 90,  257 => 81,  249 => 75,  244 => 72,  238 => 71,  234 => 69,  232 => 68,  229 => 67,  227 => 66,  224 => 65,  221 => 64,  217 => 63,  210 => 58,  208 => 57,  205 => 56,  203 => 55,  199 => 53,  196 => 52,  185 => 49,  182 => 48,  178 => 47,  175 => 46,  173 => 45,  170 => 44,  168 => 43,  163 => 40,  157 => 39,  153 => 37,  151 => 36,  148 => 35,  146 => 34,  143 => 33,  140 => 32,  136 => 31,  133 => 30,  129 => 28,  125 => 26,  123 => 25,  116 => 21,  109 => 17,  105 => 15,  103 => 14,  100 => 13,  90 => 12,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user  and app.user.isAdmin() %}
        Détails utilisateur
    {% else %}
        Page introuvable
    {% endif %}
{% endblock %}


{% block body %}

    {% if app.user  and app.user.isAdmin() %}
        <div class=\"utilisateurs-container\">

            <h4>Détails de {{ user.pseudo }} </h4>

            <div class=\"utilisateur-content\">
                <p>
                    Email : {{ user.email}}
                </p>
                <br>
                <p>
                    {% if user.roles|length == 1 %}
                        Rôle : 
                    {% else %}
                        Rôles : 
                    {% endif %}

                    {% for role in user.roles %}
                        {% if role == 'ROLE_ADMIN' %}
                            Administrateur
                        {% elseif role == 'ROLE_MEMBRE' %}
                            Membre 
                        {% elseif role == 'ROLE_USER' %}
                            Utilisateur
                        {% endif %}
                    {% endfor %}
                </p>
                <br>
                <p>
                    {% if user.participationsEvenement|length == 1 %}
                        Inscrit à aucun événement.
                    {% elseif user.participationsEvenement|length > 1 %}
                        Inscrit aux événements :
                        {% for participation in user.participationsEvenement %}
                            <li>
                                <a href=\" {{ path('show_evenement', {'id': participation.inscriptions.id}) }} \">{{ participation.inscriptions.titre }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                </p>

                {% if user.isMembre() %}
                    <table>
                        {% if app.user.isAdmin() %}
                        <tr>
                            <td>
                                Rôle
                            </td>
                            <td>
                                {% for role in app.user.roles %}
                                    {% if role == 'ROLE_ADMIN' %}
                                        Administrateur 
                                    {% elseif role == 'ROLE_MEMBRE' %}
                                        Membre 
                                    {% elseif role == 'ROLE_USER' %}
                                        Utilisateur 
                                    {% endif %}
                                {% endfor %}
                            </td>
                        </tr>
                        {% endif %}

                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                {{ app.user.email }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                {% if app.user.nom %}
                                    {{ app.user.nom }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                {% if app.user.nom %}
                                    {{ app.user.nom }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Préom
                            </td>
                            <td>
                                {% if app.user.prenom %}
                                    {{ app.user.prenom }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de licence
                            </td>
                            <td>
                                {% if app.user.numLicence %}
                                    {{ app.user.numLicence }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de téléphone
                            </td>
                            <td>
                                {% if app.user.numTelephone %}
                                    {{ app.user.numTelephone }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Date de naissance
                            </td>
                            <td>
                                {% if app.user.dateNaissance %}
                                    {{ app.user.dateNaissanceFormatee }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Adresse
                            </td>
                            <td>
                                {% if app.user.adresse %}
                                    {{ app.user.adresse }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Ville
                            </td>
                            <td>
                                {% if app.user.ville %}
                                    {{ app.user.ville }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Code Postal
                            </td>
                            <td>
                                {% if app.user.cp %}
                                    {{ app.user.cp }}
                                {% else %}
                                    Non renseigné
                                {% endif %}
                            </td>
                        </tr>

                    </table>
                {% else %}
                    <br>
                    <p>Utilisateur standard, aucune information supplémentaire</p>
                {% endif %}
            </div>
        </div>
    {% else %}
        <div class=\"error\">
            Page introuvable
        </div>
    {% endif %}

{% endblock %}", "user/show.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\user\\show.html.twig");
    }
}

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
class __TwigTemplate_72e3675760ff79200b68b7b2c44d98db extends Template
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
            ";
            // line 19
            yield "
            <div class=\"infos-pagePerso\">

                    <table>
                        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "isAdmin", [], "method", false, false, false, 23)) {
                // line 24
                yield "                        <tr>
                            <td>
                                Rôles
                            </td>
                            <td>
                                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "roles", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 30
                    yield "                                    ";
                    if (($context["role"] == "ROLE_ADMIN")) {
                        // line 31
                        yield "                                        Administrateur 
                                    ";
                    } elseif ((                    // line 32
$context["role"] == "ROLE_MEMBRE")) {
                        // line 33
                        yield "                                        Membre 
                                    ";
                    } elseif ((                    // line 34
$context["role"] == "ROLE_USER")) {
                        // line 35
                        yield "                                        Utilisateur 
                                    ";
                    }
                    // line 37
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "                            </td>
                        </tr>
                        ";
            }
            // line 41
            yield "
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            yield "
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                ";
            // line 56
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56)) {
                // line 57
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
                yield "
                                ";
            } else {
                // line 59
                yield "                                    Nom non renseigné
                                ";
            }
            // line 61
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Nom
                            </td>
                            <td>
                                ";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69)) {
                // line 70
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
                yield "
                                ";
            } else {
                // line 72
                yield "                                    Nom non renseigné
                                ";
            }
            // line 74
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Préom
                            </td>
                            <td>
                                ";
            // line 82
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "prenom", [], "any", false, false, false, 82)) {
                // line 83
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "prenom", [], "any", false, false, false, 83), "html", null, true);
                yield "
                                ";
            } else {
                // line 85
                yield "                                    Prénom non renseigné
                                ";
            }
            // line 87
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de licence
                            </td>
                            <td>
                                ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "numLicence", [], "any", false, false, false, 95)) {
                // line 96
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "numLicence", [], "any", false, false, false, 96), "html", null, true);
                yield "
                                ";
            } else {
                // line 98
                yield "                                    Numéro de  licence non renseigné
                                ";
            }
            // line 100
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Numéro de téléphone
                            </td>
                            <td>
                                ";
            // line 108
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "numTelephone", [], "any", false, false, false, 108)) {
                // line 109
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "numTelephone", [], "any", false, false, false, 109), "html", null, true);
                yield "
                                ";
            } else {
                // line 111
                yield "                                    Numéro de  téléphone non renseigné
                                ";
            }
            // line 113
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Date de naissance
                            </td>
                            <td>
                                ";
            // line 121
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "dateNaissance", [], "any", false, false, false, 121)) {
                // line 122
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "dateNaissanceFormatee", [], "any", false, false, false, 122), "html", null, true);
                yield "
                                ";
            } else {
                // line 124
                yield "                                    Date de naissance non renseignée
                                ";
            }
            // line 126
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Adresse
                            </td>
                            <td>
                                ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "adresse", [], "any", false, false, false, 134)) {
                // line 135
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "adresse", [], "any", false, false, false, 135), "html", null, true);
                yield "
                                ";
            } else {
                // line 137
                yield "                                Adresse non renseignée
                                ";
            }
            // line 139
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Ville
                            </td>
                            <td>
                                ";
            // line 147
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "ville", [], "any", false, false, false, 147)) {
                // line 148
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "ville", [], "any", false, false, false, 148), "html", null, true);
                yield "
                                ";
            } else {
                // line 150
                yield "                                Ville non renseignée
                                ";
            }
            // line 152
            yield "                            </td>
                        </tr>

                        <tr>
                            <td>
                                Code Postal
                            </td>
                            <td>
                                ";
            // line 160
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "cp", [], "any", false, false, false, 160)) {
                // line 161
                yield "                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "cp", [], "any", false, false, false, 161), "html", null, true);
                yield "
                                ";
            } else {
                // line 163
                yield "                                    Code Postal non renseignée
                                ";
            }
            // line 165
            yield "                            </td>
                        </tr>

                    </table>
            </div>

            <div class=\"evenements-pagePerso\">
                
                ";
            // line 173
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "photo", [], "any", false, false, false, 173)) {
                // line 174
                yield "                    <div class=\"photo-pagePerso\">
                        ";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "user", [], "any", false, false, false, 175), "photo", [], "any", false, false, false, 175), "html", null, true);
                yield "
                    </div>
                ";
            }
            // line 178
            yield "
                ";
            // line 179
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "participe", [], "any", false, false, false, 179)) > 0)) {
                // line 180
                yield "                    <h5>Inscrit aux événements :</h5>
                        <ul>
                            ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 182, $this->source); })()), "user", [], "any", false, false, false, 182), "participe", [], "any", false, false, false, 182));
                foreach ($context['_seq'] as $context["_key"] => $context["evenementpresent"]) {
                    // line 183
                    yield "                                <li>
                                    <h6><a href=\" ";
                    // line 184
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                    yield " \">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["evenementpresent"], "html", null, true);
                    yield "</a></h6>
                                    ";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "description", [], "any", false, false, false, 185), "html", null, true);
                    yield "<br>
                                    Du ";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateDebutFormatee", [], "any", false, false, false, 186), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureDebutFormatee", [], "any", false, false, false, 186), "html", null, true);
                    yield "<br>
                                    Au ";
                    // line 187
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "dateFinFormatee", [], "any", false, false, false, 187), "html", null, true);
                    yield " à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenementpresent"], "heureFinFormatee", [], "any", false, false, false, 187), "html", null, true);
                    yield "<br>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenementpresent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield "                        </ul>
                ";
            } else {
                // line 192
                yield "                    Inscrit à aucun événement.
                ";
            }
            // line 194
            yield "            </div>
        </div>
    </div>
";
        } else {
            // line 198
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 202
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
        return array (  451 => 202,  445 => 198,  439 => 194,  435 => 192,  431 => 190,  420 => 187,  414 => 186,  410 => 185,  404 => 184,  401 => 183,  397 => 182,  393 => 180,  391 => 179,  388 => 178,  382 => 175,  379 => 174,  377 => 173,  367 => 165,  363 => 163,  357 => 161,  355 => 160,  345 => 152,  341 => 150,  335 => 148,  333 => 147,  323 => 139,  319 => 137,  313 => 135,  311 => 134,  301 => 126,  297 => 124,  291 => 122,  289 => 121,  279 => 113,  275 => 111,  269 => 109,  267 => 108,  257 => 100,  253 => 98,  247 => 96,  245 => 95,  235 => 87,  231 => 85,  225 => 83,  223 => 82,  213 => 74,  209 => 72,  203 => 70,  201 => 69,  191 => 61,  187 => 59,  181 => 57,  179 => 56,  167 => 47,  159 => 41,  154 => 38,  148 => 37,  144 => 35,  142 => 34,  139 => 33,  137 => 32,  134 => 31,  131 => 30,  127 => 29,  120 => 24,  118 => 23,  112 => 19,  106 => 15,  101 => 13,  97 => 11,  95 => 10,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
            {# <a href=\"{{ url }}\" class=\"reset_password\" target=\"_blank\">Changer mot de passe</a> #}

            <div class=\"infos-pagePerso\">

                    <table>
                        {% if app.user.isAdmin() %}
                        <tr>
                            <td>
                                Rôles
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
                                    Nom non renseigné
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
                                    Nom non renseigné
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
                                    Prénom non renseigné
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
                                    Numéro de  licence non renseigné
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
                                    Numéro de  téléphone non renseigné
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
                                    Date de naissance non renseignée
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
                                Adresse non renseignée
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
                                Ville non renseignée
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
                                    Code Postal non renseignée
                                {% endif %}
                            </td>
                        </tr>

                    </table>
            </div>

            <div class=\"evenements-pagePerso\">
                
                {% if app.user.photo %}
                    <div class=\"photo-pagePerso\">
                        {{ app.user.photo }}
                    </div>
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

{% endblock %}", "user/pageperso.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\user\\pageperso.html.twig");
    }
}

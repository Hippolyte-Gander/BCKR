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

/* membre/index.html.twig */
class __TwigTemplate_d31122940e6a246de5e13757f026390f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/index.html.twig", 1);
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
            yield "        Liste membres
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

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "
    ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "isAdmin", [], "method", false, false, false, 13))) {
            // line 14
            yield "        <div class=\"membre-container\">

            <h4>Liste des membres</h4>
            
            <a class=\"texte-utilisateur\" href=\" ";
            // line 18
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_membre");
            yield " \">Ajouter un membre</a><br>

            <table>
                <tr class=\"titre-colonne\">
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Numéro de téléphone</td>
                    <td>Pseudo</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["membres"]) || array_key_exists("membres", $context) ? $context["membres"] : (function () { throw new RuntimeError('Variable "membres" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 29
                yield "                    <tr>
                        <td>
                            <a class=\"texte-membre\" href=\" ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "nom", [], "any", false, false, false, 31), "html", null, true);
                yield "</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "prenom", [], "any", false, false, false, 34), "html", null, true);
                yield "</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" ";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "numTelephone", [], "any", false, false, false, 37), "html", null, true);
                yield "</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" ";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield " \">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "utilisateur", [], "any", false, false, false, 40), "html", null, true);
                yield "</a>
                        </td>
                        <td>
                            <a class=\"btn-editer\" href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_membre", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["membre"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\">Supprimer</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "            </table>
        </div>

    ";
        } else {
            // line 54
            yield "        <div class=\"error\">
            Page introuvable
        </div>
    ";
        }
        // line 58
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
        return "membre/index.html.twig";
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
        return array (  192 => 58,  186 => 54,  180 => 50,  170 => 46,  164 => 43,  156 => 40,  148 => 37,  140 => 34,  132 => 31,  128 => 29,  124 => 28,  111 => 18,  105 => 14,  103 => 13,  100 => 12,  90 => 11,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user  and app.user.isAdmin() %}
        Liste membres
    {% else %}
        Page introuvable
    {% endif %}
{% endblock %}

{% block body %}

    {% if app.user  and app.user.isAdmin() %}
        <div class=\"membre-container\">

            <h4>Liste des membres</h4>
            
            <a class=\"texte-utilisateur\" href=\" {{ path('new_membre') }} \">Ajouter un membre</a><br>

            <table>
                <tr class=\"titre-colonne\">
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Numéro de téléphone</td>
                    <td>Pseudo</td>
                    <td>Modifier</td>
                    <td>Supprimer</td>
                {% for membre in membres %}
                    <tr>
                        <td>
                            <a class=\"texte-membre\" href=\" {{ path('show_membre', {'id': membre.id}) }} \">{{ membre.nom }}</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" {{ path('show_membre', {'id': membre.id}) }} \">{{ membre.prenom }}</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" {{ path('show_membre', {'id': membre.id}) }} \">{{ membre.numTelephone }}</a>
                        </td>
                        <td>
                            <a class=\"texte-membre\" href=\" {{ path('show_membre', {'id': membre.id}) }} \">{{ membre.utilisateur }}</a>
                        </td>
                        <td>
                            <a class=\"btn-editer\" href=\"{{ path('edit_membre', {'id': membre.id}) }}\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"{{ path('suppr_membre', {'id': membre.id}) }}\">Supprimer</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>
        </div>

    {% else %}
        <div class=\"error\">
            Page introuvable
        </div>
    {% endif %}

{% endblock %}", "membre/index.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\membre\\index.html.twig");
    }
}

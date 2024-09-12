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

/* evenement/index.html.twig */
class __TwigTemplate_1ecbcb6736049eb5b3e555eb05258072 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/index.html.twig", 1);
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

        yield "Liste des événements";
        
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
<div class=\"liste-evenement-background\">

    <h4>Liste des événements</h4>
    <a class=\"texte-utilisateur\" href=\" ";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_evenement");
        yield " \">Créer un événement</a><br>

    <div class=\"message-participation\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>
    ";
        // line 20
        yield "    <div class=\"count\">
        ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 21, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
        yield "
    </div>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            yield "                <td>Participation</td>
            ";
        }
        // line 32
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "isAdmin", [], "method", false, false, false, 32))) {
            // line 33
            yield "                <td>Éditer</td>
                <td>Supprimer</td>
            ";
        }
        // line 36
        yield "        </tr>

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 39
            yield "        
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield " \">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "titre", [], "any", false, false, false, 42), "html", null, true);
            yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield " \"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateDebutFormatee", [], "any", false, false, false, 45), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureDebutFormatee", [], "any", false, false, false, 45), "html", null, true);
            yield "</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield " \"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "dateFinFormatee", [], "any", false, false, false, 48), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "heureFinFormatee", [], "any", false, false, false, 48), "html", null, true);
            yield "</a>
                    </td>
                    ";
            // line 51
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
                // line 52
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "estCeQueParticipeDeja", [$context["evenement"]], "method", false, false, false, 52)) {
                    // line 53
                    yield "                            <td>
                                <div class=\"formulaire\">
                                    ";
                    // line 55
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsDel"]) || array_key_exists("formsDel", $context) ? $context["formsDel"] : (function () { throw new RuntimeError('Variable "formsDel" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 55), [], "array", false, false, false, 55), 'form_start');
                    yield "
                                    <div class=\"bouton\">
                                        ";
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsDel"]) || array_key_exists("formsDel", $context) ? $context["formsDel"] : (function () { throw new RuntimeError('Variable "formsDel" does not exist.', 57, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 57), [], "array", false, false, false, 57), "valider", [], "any", false, false, false, 57), 'widget');
                    yield "
                                    </div>
                                    ";
                    // line 59
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsDel"]) || array_key_exists("formsDel", $context) ? $context["formsDel"] : (function () { throw new RuntimeError('Variable "formsDel" does not exist.', 59, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 59), [], "array", false, false, false, 59), 'form_end');
                    yield "
                                </div>
                            </td>
                            ";
                } else {
                    // line 63
                    yield "                            <td>
                                <div class=\"formulaire\">
                                    ";
                    // line 65
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsAdd"]) || array_key_exists("formsAdd", $context) ? $context["formsAdd"] : (function () { throw new RuntimeError('Variable "formsAdd" does not exist.', 65, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 65), [], "array", false, false, false, 65), 'form_start');
                    yield "
                                    ";
                    // line 66
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsAdd"]) || array_key_exists("formsAdd", $context) ? $context["formsAdd"] : (function () { throw new RuntimeError('Variable "formsAdd" does not exist.', 66, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 66), [], "array", false, false, false, 66), "nbrParticipants", [], "any", false, false, false, 66), 'row');
                    yield "
                                    <div class=\"bouton\">
                                        ";
                    // line 68
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsAdd"]) || array_key_exists("formsAdd", $context) ? $context["formsAdd"] : (function () { throw new RuntimeError('Variable "formsAdd" does not exist.', 68, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 68), [], "array", false, false, false, 68), "valider", [], "any", false, false, false, 68), 'widget');
                    yield "
                                    </div>
                                    ";
                    // line 70
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formsAdd"]) || array_key_exists("formsAdd", $context) ? $context["formsAdd"] : (function () { throw new RuntimeError('Variable "formsAdd" does not exist.', 70, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 70), [], "array", false, false, false, 70), 'form_end');
                    yield "
                                </div>
                            </td>
                        ";
                }
                // line 74
                yield "                    ";
            }
            // line 75
            yield "
                    ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "isAdmin", [], "method", false, false, false, 76))) {
                // line 77
                yield "                        <td>
                            <a class=\"btn-editer\" href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppr_evenement", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\">Supprimer</a>
                        </td>
                    ";
            }
            // line 84
            yield "                </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "    </table>
    <div class=\"navigation\">
        ";
        // line 89
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 89, $this->source); })()));
        yield "
    </div>

</div>
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
        return "evenement/index.html.twig";
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
        return array (  284 => 89,  280 => 87,  272 => 84,  266 => 81,  260 => 78,  257 => 77,  255 => 76,  252 => 75,  249 => 74,  242 => 70,  237 => 68,  232 => 66,  228 => 65,  224 => 63,  217 => 59,  212 => 57,  207 => 55,  203 => 53,  200 => 52,  197 => 51,  188 => 48,  178 => 45,  170 => 42,  165 => 39,  161 => 38,  157 => 36,  152 => 33,  149 => 32,  145 => 30,  143 => 29,  132 => 21,  129 => 20,  126 => 18,  120 => 17,  111 => 15,  106 => 14,  102 => 13,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des événements{% endblock %}

{% block body %}

<div class=\"liste-evenement-background\">

    <h4>Liste des événements</h4>
    <a class=\"texte-utilisateur\" href=\" {{ path('new_evenement') }} \">Créer un événement</a><br>

    <div class=\"message-participation\">
        {% for label, messages in app.flashes %}
                {% for message in messages %}
                    {{ message }}
                {% endfor %}
        {% endfor %}
    </div>
    {# début image pagination #}
    <div class=\"count\">
        {{ pagination.getTotalItemCount }}
    </div>

    <table>
        <tr class=\"titre-colonne\">
            <td>Nom événement</td>
            <td>Date de début</td>
            <td>Date de fin</td>
            {% if app.user %}
                <td>Participation</td>
            {% endif %}
            {% if app.user  and app.user.isAdmin() %}
                <td>Éditer</td>
                <td>Supprimer</td>
            {% endif %}
        </tr>

        {% for evenement in pagination %}
        
                <tr>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \">{{ evenement.titre }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateDebutFormatee }} à {{ evenement.heureDebutFormatee }}</a>
                    </td>
                    <td>
                        <a class=\"texte-utilisateur\" href=\" {{ path('show_evenement', {'id': evenement.id}) }} \"> {{ evenement.dateFinFormatee }} à {{ evenement.heureFinFormatee }}</a>
                    </td>
                    {# ========== AJOUTER fonction participation ========== #}
                    {% if app.user %}
                        {% if app.user.estCeQueParticipeDeja(evenement)  %}
                            <td>
                                <div class=\"formulaire\">
                                    {{ form_start(formsDel[evenement.id]) }}
                                    <div class=\"bouton\">
                                        {{ form_widget(formsDel[evenement.id].valider) }}
                                    </div>
                                    {{ form_end(formsDel[evenement.id]) }}
                                </div>
                            </td>
                            {% else %}
                            <td>
                                <div class=\"formulaire\">
                                    {{ form_start(formsAdd[evenement.id]) }}
                                    {{ form_row(formsAdd[evenement.id].nbrParticipants) }}
                                    <div class=\"bouton\">
                                        {{ form_widget(formsAdd[evenement.id].valider) }}
                                    </div>
                                    {{ form_end(formsAdd[evenement.id]) }}
                                </div>
                            </td>
                        {% endif %}
                    {% endif %}

                    {% if app.user  and app.user.isAdmin() %}
                        <td>
                            <a class=\"btn-editer\" href=\"{{ path('edit_evenement', {'id': evenement.id}) }}\">Éditer</a>
                        </td>
                        <td>
                            <a class=\"btn-supprimer\" href=\"{{ path('suppr_evenement', {'id': evenement.id}) }}\">Supprimer</a>
                        </td>
                    {% endif %}
                </tr>

        {% endfor %}
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

</div>
{% endblock %}", "evenement/index.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\evenement\\index.html.twig");
    }
}

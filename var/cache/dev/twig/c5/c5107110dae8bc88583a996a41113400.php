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

/* evenement/new.html.twig */
class __TwigTemplate_53811bd0d4a108fbbed6a6342cbb5734 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenement/new.html.twig", 1);
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
            yield "        Ajouter un événement
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
            yield "    <div class=\"formulaire-background\">

        ";
            // line 17
            if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 17, $this->source); })())) {
                // line 18
                yield "            <h4>Modifier un événement</h4>
        ";
            } else {
                // line 20
                yield "            <h4>Créer un événement</h4>
        ";
            }
            // line 22
            yield "

        <div class=\"formulaire\">
            ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 25, $this->source); })()), 'form_start');
            yield "
            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), 'row');
            yield "    
                </div>
                <div class=\"col-form\">
                ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 37, $this->source); })()), "contenu", [], "any", false, false, false, 37), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 43, $this->source); })()), "dateDebut", [], "any", false, false, false, 43), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 46, $this->source); })()), "dateFin", [], "any", false, false, false, 46), 'row');
            yield "
                </div>
            </div>
            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 51, $this->source); })()), "visibilite", [], "any", false, false, false, 51), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 54, $this->source); })()), "cree", [], "any", false, false, false, 54), 'row');
            yield "
                </div>
            </div>
            <div class=\"bouton\">
                ";
            // line 58
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 58, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>

    </div>
";
        } else {
            // line 64
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 68
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
        return "evenement/new.html.twig";
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
        return array (  196 => 68,  190 => 64,  181 => 58,  174 => 54,  168 => 51,  160 => 46,  154 => 43,  145 => 37,  136 => 31,  130 => 28,  124 => 25,  119 => 22,  115 => 20,  111 => 18,  109 => 17,  105 => 15,  103 => 14,  100 => 13,  90 => 12,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user  and app.user.isAdmin() %}
        Ajouter un événement
    {% else %}
        Page introuvable
    {% endif %}
{% endblock %}


{% block body %}

{% if app.user  and app.user.isAdmin() %}
    <div class=\"formulaire-background\">

        {% if edit %}
            <h4>Modifier un événement</h4>
        {% else %}
            <h4>Créer un événement</h4>
        {% endif %}


        <div class=\"formulaire\">
            {{ form_start(formAddEvenement) }}
            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.titre) }}    
                </div>
                <div class=\"col-form\">
                {{ form_row(formAddEvenement.description) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.contenu) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.dateDebut) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.dateFin) }}
                </div>
            </div>
            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.visibilite) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddEvenement.cree) }}
                </div>
            </div>
            <div class=\"bouton\">
                {{ form_end(formAddEvenement) }}
            </div>
        </div>

    </div>
{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}



{# 
icône utilisateur
<i class=\"fa-regular fa-user\"></i>

icône cadenas
<i class=\"fa-solid fa-lock\"></i> #}", "evenement/new.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\evenement\\new.html.twig");
    }
}

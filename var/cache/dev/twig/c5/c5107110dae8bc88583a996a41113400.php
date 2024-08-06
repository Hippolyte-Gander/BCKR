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

        yield "Ajouter un événement";
        
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
<div class=\"formulaire-background\">

    ";
        // line 9
        if ((isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new RuntimeError('Variable "edit" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "        <h4>Modifier un événement</h4>
    ";
        } else {
            // line 12
            yield "        <h4>Créer un événement</h4>
    ";
        }
        // line 14
        yield "

    <div class=\"formulaire\">
        ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 17, $this->source); })()), 'form_start');
        yield "
        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), 'row');
        yield "    
            </div>
            <div class=\"col-form\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 29, $this->source); })()), "contenu", [], "any", false, false, false, 29), 'row');
        yield "
            </div>
        </div>

        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 35, $this->source); })()), "dateDebut", [], "any", false, false, false, 35), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 38, $this->source); })()), "dateFin", [], "any", false, false, false, 38), 'row');
        yield "
            </div>
        </div>
        <div class=\"row-form\">
            <div class=\"col-form\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 43, $this->source); })()), "visibilite", [], "any", false, false, false, 43), 'row');
        yield "
            </div>
            <div class=\"col-form\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 46, $this->source); })()), "cree", [], "any", false, false, false, 46), 'row');
        yield "
            </div>
        </div>
        <div class=\"bouton\">
            ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddEvenement"]) || array_key_exists("formAddEvenement", $context) ? $context["formAddEvenement"] : (function () { throw new RuntimeError('Variable "formAddEvenement" does not exist.', 50, $this->source); })()), 'form_end');
        yield "
        </div>
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
        return array (  167 => 50,  160 => 46,  154 => 43,  146 => 38,  140 => 35,  131 => 29,  122 => 23,  116 => 20,  110 => 17,  105 => 14,  101 => 12,  97 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un événement{% endblock %}

{% block body %}

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
{% endblock %}



{# 
icône utilisateur
<i class=\"fa-regular fa-user\"></i>

icône cadenas
<i class=\"fa-solid fa-lock\"></i> #}", "evenement/new.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\evenement\\new.html.twig");
    }
}

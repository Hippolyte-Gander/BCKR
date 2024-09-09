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

/* user/edit.html.twig */
class __TwigTemplate_a7ffa85534752ff6e2d280184c664898 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            yield "        Modification de profil
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            yield "    <div class=\"formulaire-background\">

        <h4>Modifier votre profil</h4>

        <div class=\"formulaire\">
            ";
            // line 19
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 19, $this->source); })()), 'form_start');
            yield "
            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 22, $this->source); })()), "pseudo", [], "any", false, false, false, 22), 'row');
            yield "    
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 37, $this->source); })()), "numTelephone", [], "any", false, false, false, 37), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 40, $this->source); })()), "dateNaissance", [], "any", false, false, false, 40), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 46, $this->source); })()), "adresse", [], "any", false, false, false, 46), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                ";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 52, $this->source); })()), "ville", [], "any", false, false, false, 52), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 55, $this->source); })()), "cp", [], "any", false, false, false, 55), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 61, $this->source); })()), "valider", [], "any", false, false, false, 61), 'row');
            yield "
                </div>
            </div>

            <div class=\"bouton\">
                ";
            // line 66
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEditUser"]) || array_key_exists("formEditUser", $context) ? $context["formEditUser"] : (function () { throw new RuntimeError('Variable "formEditUser" does not exist.', 66, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>

    </div>
";
        } else {
            // line 72
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 76
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
        return "user/edit.html.twig";
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
        return array (  201 => 76,  195 => 72,  186 => 66,  178 => 61,  169 => 55,  163 => 52,  154 => 46,  145 => 40,  139 => 37,  130 => 31,  124 => 28,  115 => 22,  109 => 19,  102 => 14,  100 => 13,  90 => 12,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user %}
        Modification de profil
        {% else %}
        Page introuvable
    {% endif %}
{% endblock %}


{% block body %}
{% if app.user %}
    <div class=\"formulaire-background\">

        <h4>Modifier votre profil</h4>

        <div class=\"formulaire\">
            {{ form_start(formEditUser) }}
            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formEditUser.pseudo) }}    
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                {{ form_row(formEditUser.nom) }}
                </div>
                <div class=\"col-form\">
                {{ form_row(formEditUser.prenom) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                {{ form_row(formEditUser.numTelephone) }}
                </div>
                <div class=\"col-form\">
                {{ form_row(formEditUser.dateNaissance) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                {{ form_row(formEditUser.adresse) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                {{ form_row(formEditUser.ville) }}
                </div>
                <div class=\"col-form\">
                {{ form_row(formEditUser.cp) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formEditUser.valider) }}
                </div>
            </div>

            <div class=\"bouton\">
                {{ form_end(formEditUser) }}
            </div>
        </div>

    </div>
{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}", "user/edit.html.twig", "C:\\laragon\\www\\HippolyteG\\Github\\BCKR\\templates\\user\\edit.html.twig");
    }
}

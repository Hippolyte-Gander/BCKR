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

/* security/reset_password.html.twig */
class __TwigTemplate_38742262cee4da82976989eb1a7c5765 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/reset_password.html.twig", 1);
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

        yield "Réinitialisation de mot de passe";
        
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
    <div class=\"login-background\">

            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <div class=\"logged-container\">
                    Vous êtes connecté en tant que  <a href=\"#\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "pseudo", [], "any", false, false, false, 11), "html", null, true);
            yield "</a>.
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
                // line 13
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    yield "                            <p>";
                    yield $context["message"];
                    yield "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "                </div>
            ";
        } else {
            // line 19
            yield "
            <div class=\"login-container\">

                <h4>Réinitialisation de mot de passe</h4>

                ";
            // line 32
            yield "
                ";
            // line 33
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 33, $this->source); })()), 'form_start');
            yield "

                <div class=\"input-box\">
                    ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 36, $this->source); })()), "plainPassword", [], "any", false, false, false, 36), "first", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "password-field"]]);
            yield "
                    ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), "first", [], "any", false, false, false, 37), 'errors');
            yield "
                </div>

                <div class=\"input-box\">
                    ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), "second", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "password-field"]]);
            yield "
                    ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), "second", [], "any", false, false, false, 42), 'errors');
            yield "
                </div>
                
                <!-- Submit Button -->
                <button type=\"submit\" class=\"reset-password-btn\">Envoyer</button>

                ";
            // line 48
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passForm"]) || array_key_exists("passForm", $context) ? $context["passForm"] : (function () { throw new RuntimeError('Variable "passForm" does not exist.', 48, $this->source); })()), 'form_end');
            yield "

            </div>

            ";
        }
        // line 53
        yield "
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
        return "security/reset_password.html.twig";
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
        return array (  180 => 53,  172 => 48,  163 => 42,  159 => 41,  152 => 37,  148 => 36,  142 => 33,  139 => 32,  132 => 19,  128 => 17,  122 => 16,  113 => 14,  108 => 13,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialisation de mot de passe{% endblock %}

{% block body %}

    <div class=\"login-background\">

            {% if app.user %}
                <div class=\"logged-container\">
                    Vous êtes connecté en tant que  <a href=\"#\">{{ app.user.pseudo }}</a>.
                    {% for messages in app.flashes %}
                        {% for message in messages %}
                            <p>{{ message|raw }}</p>
                        {% endfor %}
                    {% endfor %}
                </div>
            {% else %}

            <div class=\"login-container\">

                <h4>Réinitialisation de mot de passe</h4>

                {# {{ form_start(passForm) }}
                <div class=\"input-box\">
                    {{ form_row(passForm.plainPassword) }}
                </div>
                
                <button type=\"submit\" class=\"reset-password-btn\">Envoyer</button>

                {{ form_end(passForm) }} #}

                {{ form_start(passForm) }}

                <div class=\"input-box\">
                    {{ form_widget(passForm.plainPassword.first, {'attr': {'class': 'password-field'}}) }}
                    {{ form_errors(passForm.plainPassword.first) }}
                </div>

                <div class=\"input-box\">
                    {{ form_widget(passForm.plainPassword.second, {'attr': {'class': 'password-field'}}) }}
                    {{ form_errors(passForm.plainPassword.second) }}
                </div>
                
                <!-- Submit Button -->
                <button type=\"submit\" class=\"reset-password-btn\">Envoyer</button>

                {{ form_end(passForm) }}

            </div>

            {% endif %}

    </div>
{% endblock %}
", "security/reset_password.html.twig", "C:\\laragon\\www\\Github\\BCKR\\templates\\security\\reset_password.html.twig");
    }
}

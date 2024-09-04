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

/* membre/new.html.twig */
class __TwigTemplate_244a8f73d70e1d47aa11d947604e7906 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/new.html.twig", 1);
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
            yield "        Ajouter un membre
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
                yield "            <h4>Modifier les informations d'un membre</h4>
        ";
            } else {
                // line 20
                yield "            <h4>Ajouter un membre</h4>
        ";
            }
            // line 22
            yield "

        <div class=\"formulaire\">
            ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 25, $this->source); })()), 'form_start');
            yield "
            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'row');
            yield "    
                </div>
                <div class=\"col-form\">
                    ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'row');
            yield "    
                </div>
            </div>
            
            <div class=\"row-form\">
                <div class=\"col-form\">
                ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 37, $this->source); })()), "numLicence", [], "any", false, false, false, 37), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 40, $this->source); })()), "numTelephone", [], "any", false, false, false, 40), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 46, $this->source); })()), "dateNaissance", [], "any", false, false, false, 46), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 49, $this->source); })()), "dateInscription", [], "any", false, false, false, 49), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 55, $this->source); })()), "adresse", [], "any", false, false, false, 55), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 58, $this->source); })()), "cp", [], "any", false, false, false, 58), 'row');
            yield "
                </div>
            </div>
            
            <div class=\"row-form\">
                <div class=\"col-form\">
                    ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 64, $this->source); })()), "ville", [], "any", false, false, false, 64), 'row');
            yield "
                </div>
                <div class=\"col-form\">
                    ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 67, $this->source); })()), "photo", [], "any", false, false, false, 67), 'row');
            yield "
                </div>
            </div>

            <div class=\"row-form\">
                ";
            // line 72
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 72, $this->source); })()), "utilisateur", [], "any", false, false, false, 72), 'row');
            yield "
            </div>
            
            <div class=\"bouton\">
                ";
            // line 76
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAddMembre"]) || array_key_exists("formAddMembre", $context) ? $context["formAddMembre"] : (function () { throw new RuntimeError('Variable "formAddMembre" does not exist.', 76, $this->source); })()), 'form_end');
            yield "
            </div>
        </div>

    </div>
";
        } else {
            // line 82
            yield "    <div class=\"error\">
        Page introuvable
    </div>
";
        }
        // line 86
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
        return "membre/new.html.twig";
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
        return array (  226 => 86,  220 => 82,  211 => 76,  204 => 72,  196 => 67,  190 => 64,  181 => 58,  175 => 55,  166 => 49,  160 => 46,  151 => 40,  145 => 37,  136 => 31,  130 => 28,  124 => 25,  119 => 22,  115 => 20,  111 => 18,  109 => 17,  105 => 15,  103 => 14,  100 => 13,  90 => 12,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if app.user  and app.user.isAdmin() %}
        Ajouter un membre
    {% else %}
        Page introuvable
    {% endif %}
{% endblock %}


{% block body %}

{% if app.user  and app.user.isAdmin() %}
    <div class=\"formulaire-background\">

        {% if edit %}
            <h4>Modifier les informations d'un membre</h4>
        {% else %}
            <h4>Ajouter un membre</h4>
        {% endif %}


        <div class=\"formulaire\">
            {{ form_start(formAddMembre) }}
            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.prenom) }}    
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.nom) }}    
                </div>
            </div>
            
            <div class=\"row-form\">
                <div class=\"col-form\">
                {{ form_row(formAddMembre.numLicence) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.numTelephone) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.dateNaissance) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.dateInscription) }}
                </div>
            </div>

            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.adresse) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.cp) }}
                </div>
            </div>
            
            <div class=\"row-form\">
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.ville) }}
                </div>
                <div class=\"col-form\">
                    {{ form_row(formAddMembre.photo) }}
                </div>
            </div>

            <div class=\"row-form\">
                {{ form_row(formAddMembre.utilisateur) }}
            </div>
            
            <div class=\"bouton\">
                {{ form_end(formAddMembre) }}
            </div>
        </div>

    </div>
{% else %}
    <div class=\"error\">
        Page introuvable
    </div>
{% endif %}

{% endblock %}", "membre/new.html.twig", "C:\\laragon\\www\\hippolyte G\\Github\\BCKR\\templates\\membre\\new.html.twig");
    }
}

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

/* security/login.html.twig */
class __TwigTemplate_4040e4fc0150928f7e2ccf521b3b027b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Connexion";
        
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

        <form method=\"post\">
            
            ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            yield "                ";
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })())) {
                // line 13
                yield "                    <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageKey", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })()), "messageData", [], "any", false, false, false, 13), "security"), "html", null, true);
                yield "</div>
                ";
            }
            // line 15
            yield "                <div class=\"logged-container\">
                    Vous êtes connecté en tant que  <a href=\"#\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "pseudo", [], "any", false, false, false, 16), "html", null, true);
            yield "</a>.
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["messages"]) {
                // line 18
                yield "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    yield "                            <p>";
                    yield $context["message"];
                    yield "</p>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "                </div>

            ";
        } else {
            // line 25
            yield "
            <div class=\"login-container\">
                ";
            // line 27
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })())) {
                // line 28
                yield "                    <div class=\"alert alert-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageKey", [], "any", false, false, false, 28), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })()), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
                yield "</div>
                ";
            }
            // line 30
            yield "
            <h4>Connexion</h4>

            <div class=\"input-box\">
                <input placeholder=\"Email\" type=\"email\" value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>

                <i class=\"fa-regular fa-user\"></i>
            </div>

            <div class=\"input-box\">
                <input placeholder=\"Mot de passe\" type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

                <i class=\"fa-solid fa-lock\"></i>
            </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\">

                ";
            // line 55
            yield "                <div class=\"mot-de-passe-oublie\">
                    <a href=\" ";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotten_password");
            yield " \">Mot de passe oublié ?</a>
                </div>
                <button class=\"login-btn\" type=\"submit\">
                    Se connecter
                </button>

                <div class=\"register-link\">
                    <a href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Créer un compte</a>
                </div>

            </div>

            ";
        }
        // line 69
        yield "
        </form>
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
        return "security/login.html.twig";
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
        return array (  202 => 69,  193 => 63,  183 => 56,  180 => 55,  175 => 44,  162 => 34,  156 => 30,  150 => 28,  148 => 27,  144 => 25,  139 => 22,  133 => 21,  124 => 19,  119 => 18,  115 => 17,  111 => 16,  108 => 15,  102 => 13,  99 => 12,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

    <div class=\"login-background\">

        <form method=\"post\">
            
            {% if app.user %}
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
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
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

            <h4>Connexion</h4>

            <div class=\"input-box\">
                <input placeholder=\"Email\" type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>

                <i class=\"fa-regular fa-user\"></i>
            </div>

            <div class=\"input-box\">
                <input placeholder=\"Mot de passe\" type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>

                <i class=\"fa-solid fa-lock\"></i>
            </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                {#
                    Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                    See https://symfony.com/doc/current/security/remember_me.html

                    <div class=\"checkbox mb-3\">
                        <input type=\"checkbox\" name=\"_remember_me\" id=\"_remember_me\">
                        <label for=\"_remember_me\">Remember me</label>
                    </div>
                #}
                <div class=\"mot-de-passe-oublie\">
                    <a href=\" {{ path('forgotten_password') }} \">Mot de passe oublié ?</a>
                </div>
                <button class=\"login-btn\" type=\"submit\">
                    Se connecter
                </button>

                <div class=\"register-link\">
                    <a href=\"{{ path('app_register') }}\">Créer un compte</a>
                </div>

            </div>

            {% endif %}

        </form>
    </div>
{% endblock %}
", "security/login.html.twig", "C:\\laragon\\www\\Github\\BCKR\\BCKR\\templates\\security\\login.html.twig");
    }
}

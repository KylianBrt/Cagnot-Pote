<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* payment/_form.html.twig */
class __TwigTemplate_c4d9c84a261946d0f76f5f5eb9c90e957720e03f37131098ffb733ee242d6426 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/_form.html.twig"));

        // line 6
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
<input name=\"campaign_id\" type=\"hidden\" value=\"\">
<h5 class=\"center\">Votre identité</h5>
<div class=\"input-field col s12 l6\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "participant", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "participant validate"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "participant", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), 'label', ["label" => "Votre Email"]);
        echo "
</div>
<div class=\"input-field col s12 l6\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "participant", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "participant validate"]]);
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "participant", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), 'label', ["label" => "Votre Nom"]);
        echo "
</div>
<div class=\"input-field col s12 l6\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "amount", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "validate"]]);
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "amount", [], "any", false, false, false, 20), 'label', ["label" => "Votre participation"]);
        echo "
</div>
<div class=\"input-field col s12 l6\">
    <a class=\"btn btn-large waves-effect waves-light grey col s12\" href=\"#!\">Annuler</a>
</div>
<div class=\"input-field col s12 l6\">
    <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\">
        ";
        // line 27
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 27, $this->source); })()), "Participer")) : ("Participer")), "html", null, true);
        echo "
        <i class=\"material-icons right\">euro_symbol</i>
    </button>
</div>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "payment/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  87 => 27,  77 => 20,  73 => 19,  67 => 16,  63 => 15,  57 => 12,  53 => 11,  46 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form) }}
{{ form_widget(form) }}

<button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}

{{ form_start(form) }}
<input name=\"campaign_id\" type=\"hidden\" value=\"\">
<h5 class=\"center\">Votre identité</h5>
<div class=\"input-field col s12 l6\">
        {{ form_widget(form.participant.email, {'attr': {'class': 'participant validate'}}) }}
        {{ form_label(form.participant.email,'Votre Email') }}
</div>
<div class=\"input-field col s12 l6\">
        {{ form_widget(form.participant.name, {'attr': {'class': 'participant validate'}}) }}
        {{ form_label(form.participant.name,'Votre Nom') }}
</div>
<div class=\"input-field col s12 l6\">
        {{ form_widget(form.amount, {'attr': {'class': 'validate'}}) }}
        {{ form_label(form.amount,'Votre participation') }}
</div>
<div class=\"input-field col s12 l6\">
    <a class=\"btn btn-large waves-effect waves-light grey col s12\" href=\"#!\">Annuler</a>
</div>
<div class=\"input-field col s12 l6\">
    <button class=\"btn btn-large waves-effect waves-light pink lighten-1 col s12\" type=\"submit\">
        {{ button_label|default('Participer') }}
        <i class=\"material-icons right\">euro_symbol</i>
    </button>
</div>
{{ form_end(form) }}", "payment/_form.html.twig", "/shared/httpd/Symfony/templates/payment/_form.html.twig");
    }
}

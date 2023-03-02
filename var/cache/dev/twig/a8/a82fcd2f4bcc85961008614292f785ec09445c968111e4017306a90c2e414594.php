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

/* datawarehouse/client/client_ajout.html.twig */
class __TwigTemplate_d18b9b8115d5e288df3b88744b39c1100528671eef7764791f67a86753cea73b extends Template
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
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/client/client_ajout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/client/client_ajout.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "datawarehouse/client/client_ajout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tableau de bord";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 9, $this->source); })()), "client", [], "any", false, false, false, 9)) {
            // line 10
            echo "        Modifier le client : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 10, $this->source); })()), "client", [], "any", false, false, false, 10), "html", null, true);
            echo "
        ";
        } else {
            // line 12
            echo "        Ajouter un client
        ";
        }
        // line 14
        echo "    </h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <div class=\"btn-group me-2\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Share</button>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
        </div>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
        <span data-feather=\"calendar\" class=\"align-text-bottom\"></span>
        This week
        </button>
    </div>
</div>

";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'errors');
        echo "

    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "client", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "client", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "code_postal", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "code_postal", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "ville", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "ville", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "telephone", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "telephone", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "civilite", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "civilite", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "prenom", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "prenom", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

    <button type=\"submit\" class=\"btn btn-primary mt-3\">Enregistrer</button>

    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'rest');
        echo "

";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "datawarehouse/client/client_ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 58,  203 => 56,  196 => 52,  192 => 51,  187 => 49,  183 => 48,  178 => 46,  174 => 45,  169 => 43,  165 => 42,  160 => 40,  156 => 39,  151 => 37,  147 => 36,  142 => 34,  138 => 33,  133 => 31,  129 => 30,  124 => 28,  120 => 27,  105 => 14,  101 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}

<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">
        {% if client.client %}
        Modifier le client : {{ client.client }}
        {% else %}
        Ajouter un client
        {% endif %}
    </h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <div class=\"btn-group me-2\">
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Share</button>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
        </div>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
        <span data-feather=\"calendar\" class=\"align-text-bottom\"></span>
        This week
        </button>
    </div>
</div>

{{ form_start(form) }}
    {{ form_errors(form) }}

    {{ form_label(form.client, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.client, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.adresse, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.adresse, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.code_postal, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.code_postal, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.ville, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.ville, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.telephone, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.telephone, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.civilite, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.civilite, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.prenom, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.prenom, {'attr' : {'class' : 'form-control'}}) }}

    {{ form_label(form.nom, null, {'label_attr' : {'class' : 'form-label'}}) }}
    {{ form_widget(form.nom, {'attr' : {'class' : 'form-control'}}) }}

    <button type=\"submit\" class=\"btn btn-primary mt-3\">Enregistrer</button>

    {{ form_rest(form) }}

{{ form_end(form) }}

{% endblock %}", "datawarehouse/client/client_ajout.html.twig", "D:\\Projets\\data-processing\\templates\\datawarehouse\\client\\client_ajout.html.twig");
    }
}

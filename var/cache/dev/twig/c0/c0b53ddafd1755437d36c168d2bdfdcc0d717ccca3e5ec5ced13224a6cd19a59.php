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

/* datawarehouse/client/client_liste.html.twig */
class __TwigTemplate_da444d1f1cf34d51d6190bd7716b9f42320e86194f315ef1c0d4e9883c03c4c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/client/client_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/client/client_liste.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "datawarehouse/client/client_liste.html.twig", 1);
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
    <h1 class=\"h2\">Liste des clients</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <div class=\"btn-group me-2\">
        <a type=\"button\" class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_ajout");
        echo "\">Ajouter</a>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
        </div>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
        <span data-feather=\"calendar\" class=\"align-text-bottom\"></span>
        This week
        </button>
    </div>
</div>

<div class=\"table-responsive\">
<table class=\"table table-striped table-sm\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Client</th>
        <th scope=\"col\">Ville</th>
        <th scope=\"col\">Civilité</th>
        <th scope=\"col\">Prénom</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">#</th>
        <th scope=\"col\">#</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 36
        $context["i"] = 1;
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 38
            echo "    <tr>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "client", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "ville", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "civilite", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "Nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Détails</a></td>
        <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edition", ["id" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Editer</a></td>
        ";
            // line 47
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 47, $this->source); })()) + 1);
            // line 48
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </tbody>
</table>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "datawarehouse/client/client_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 50,  167 => 48,  165 => 47,  161 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  130 => 38,  125 => 37,  123 => 36,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}

<div class=\"d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom\">
    <h1 class=\"h2\">Liste des clients</h1>
    <div class=\"btn-toolbar mb-2 mb-md-0\">
        <div class=\"btn-group me-2\">
        <a type=\"button\" class=\"btn btn-sm btn-outline-secondary\" href=\"{{ path(\"client_ajout\") }}\">Ajouter</a>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Export</button>
        </div>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle\">
        <span data-feather=\"calendar\" class=\"align-text-bottom\"></span>
        This week
        </button>
    </div>
</div>

<div class=\"table-responsive\">
<table class=\"table table-striped table-sm\">
    <thead>
    <tr>
        <th scope=\"col\">#</th>
        <th scope=\"col\">Client</th>
        <th scope=\"col\">Ville</th>
        <th scope=\"col\">Civilité</th>
        <th scope=\"col\">Prénom</th>
        <th scope=\"col\">Nom</th>
        <th scope=\"col\">#</th>
        <th scope=\"col\">#</th>
    </tr>
    </thead>
    <tbody>
    {% set i=1 %}
    {% for client in clients %}
    <tr>
        <td>{{ i }}</td>
        <td>{{ client.client }}</td>
        <td>{{ client.ville }}</td>
        <td>{{ client.civilite }}</td>
        <td>{{ client.prenom }}</td>
        <td>{{ client.Nom }}</td>
        <td><a href=\"{{ path(\"client_details\", {id : client.id}) }}\">Détails</a></td>
        <td><a href=\"{{ path(\"client_edition\", {id : client.id}) }}\">Editer</a></td>
        {% set i=i+1 %}
    </tr>
    {% endfor %}
    </tbody>
</table>
</div>

{% endblock %}", "datawarehouse/client/client_liste.html.twig", "D:\\Projets\\data-processing\\templates\\datawarehouse\\client\\client_liste.html.twig");
    }
}

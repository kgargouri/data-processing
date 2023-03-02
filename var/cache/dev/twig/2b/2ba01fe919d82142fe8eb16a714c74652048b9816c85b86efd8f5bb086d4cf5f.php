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

/* datawarehouse/composants/_menu.html.twig */
class __TwigTemplate_f30de76b42db471fcd5669a9b9f55806c8a50f758660f7f3245d776756baf78e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/composants/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/composants/_menu.html.twig"));

        // line 1
        echo "<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <div class=\"position-sticky pt-3 sidebar-sticky\">
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
            <span data-feather=\"home\" class=\"align-text-bottom\"></span>
            Tableau de bord
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_liste");
        echo "\">
            <span data-feather=\"users\" class=\"align-text-bottom\"></span>
            Clients
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file\" class=\"align-text-bottom\"></span>
            Orders
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"shopping-cart\" class=\"align-text-bottom\"></span>
            Products
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"bar-chart-2\" class=\"align-text-bottom\"></span>
            Reports
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"layers\" class=\"align-text-bottom\"></span>
            Integrations
        </a>
        </li>
    </ul>

    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase\">
        <span>Saved reports</span>
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Add a new report\">
        <span data-feather=\"plus-circle\" class=\"align-text-bottom\"></span>
        </a>
    </h6>
    <ul class=\"nav flex-column mb-2\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Current month
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Last quarter
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Social engagement
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Year-end sale
        </a>
        </li>
    </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "datawarehouse/composants/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"sidebarMenu\" class=\"col-md-3 col-lg-2 d-md-block bg-light sidebar collapse\">
    <div class=\"position-sticky pt-3 sidebar-sticky\">
    <ul class=\"nav flex-column\">
        <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path(\"dashboard\")}}\">
            <span data-feather=\"home\" class=\"align-text-bottom\"></span>
            Tableau de bord
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path(\"client_liste\")}}\">
            <span data-feather=\"users\" class=\"align-text-bottom\"></span>
            Clients
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file\" class=\"align-text-bottom\"></span>
            Orders
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"shopping-cart\" class=\"align-text-bottom\"></span>
            Products
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"bar-chart-2\" class=\"align-text-bottom\"></span>
            Reports
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"layers\" class=\"align-text-bottom\"></span>
            Integrations
        </a>
        </li>
    </ul>

    <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase\">
        <span>Saved reports</span>
        <a class=\"link-secondary\" href=\"#\" aria-label=\"Add a new report\">
        <span data-feather=\"plus-circle\" class=\"align-text-bottom\"></span>
        </a>
    </h6>
    <ul class=\"nav flex-column mb-2\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Current month
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Last quarter
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Social engagement
        </a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">
            <span data-feather=\"file-text\" class=\"align-text-bottom\"></span>
            Year-end sale
        </a>
        </li>
    </ul>
    </div>
</nav>", "datawarehouse/composants/_menu.html.twig", "D:\\Projets\\data-processing\\templates\\datawarehouse\\composants\\_menu.html.twig");
    }
}

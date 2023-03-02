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

/* datawarehouse/composants/_header.html.twig */
class __TwigTemplate_d84b58671ed3ac3fd115f083bc7df5ac3ddb0f591e45b3e4ad4b16f9eaee9b29 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/composants/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datawarehouse/composants/_header.html.twig"));

        // line 1
        echo "<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
    <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">DATA Processing</a>
    <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <!--<input class=\"form-control form-control-dark w-100 rounded-0 border-0\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">-->
    
    <div class=\"navbar-nav\">
        <div class=\"nav-item text-nowrap\">
            <a class=\"nav-link px-3\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "datawarehouse/composants/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow\">
    <a class=\"navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6\" href=\"{{ path(\"dashboard\")}}\">DATA Processing</a>
    <button class=\"navbar-toggler position-absolute d-md-none collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#sidebarMenu\" aria-controls=\"sidebarMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    <!--<input class=\"form-control form-control-dark w-100 rounded-0 border-0\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">-->
    
    <div class=\"navbar-nav\">
        <div class=\"nav-item text-nowrap\">
            <a class=\"nav-link px-3\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
        </div>
    </div>
</header>", "datawarehouse/composants/_header.html.twig", "D:\\Projets\\data-processing\\templates\\datawarehouse\\composants\\_header.html.twig");
    }
}

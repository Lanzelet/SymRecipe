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

/* partials/_header.html.twig */
class __TwigTemplate_6a594b24ff5d3dd330db2334919ca957 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"#\">Navbar</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" 
      data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" 
      aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\">Accueil
              <span class=\"visually-hidden\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.index");
        echo "\">Mes ingrédients</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.index");
        echo "\">Mes recettes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  64 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"#\">Navbar</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" 
      data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" 
      aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('home.index')}}\">Accueil
              <span class=\"visually-hidden\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('ingredient.index')}}\">Mes ingrédients</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('recipe.index')}}\">Mes recettes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>", "partials/_header.html.twig", "/var/www/html/symrecipe/templates/partials/_header.html.twig");
    }
}

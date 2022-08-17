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

/* pages/home.html.twig */
class __TwigTemplate_4d59d38a7c0307224d8b65778143bdaa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo " SymRecipe - Acceuil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container mt-4\">
  <div class=\"jumbotron\">
    <h1 class=\"display-4\">Bienvenue sur SymRecipe</h1>
    <p class=\"lead\">SymRecipe est une application qui va te permettre de créer des recettes à base d'ingrédients que tu auras toi-même créer. 
    Tu pourras partager tes recettes à la communauté di site, ou bien les garder en privées.</p>
    <p>Apprendre Symfony : 4:02:52/11:47:08 => probleme voir pour faire un git pull</p>
    <hr class=\"my-4\">
    <p>Pour commencer, rendez-vous sur la page d'inscription pour utiliser l'appication.</p>
    <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Inscription</a>
  </div>
</div>
<section class=\"container mt-4\">
  <div class=\"container-mt-4\">
    <h1>Création de Site</h1>
    <ul>
      <li>Symrecipe</li>
      <li>Voiture, consomation, coûts, ...</li>
      <li>Planning, Feuille de route, ...</li>
      <li>Minecraft</li>
      <li></li>
    </ul>
  </div> 
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} SymRecipe - Acceuil
{% endblock %}

{% block body %}
<div class=\"container mt-4\">
  <div class=\"jumbotron\">
    <h1 class=\"display-4\">Bienvenue sur SymRecipe</h1>
    <p class=\"lead\">SymRecipe est une application qui va te permettre de créer des recettes à base d'ingrédients que tu auras toi-même créer. 
    Tu pourras partager tes recettes à la communauté di site, ou bien les garder en privées.</p>
    <p>Apprendre Symfony : 4:02:52/11:47:08 => probleme voir pour faire un git pull</p>
    <hr class=\"my-4\">
    <p>Pour commencer, rendez-vous sur la page d'inscription pour utiliser l'appication.</p>
    <a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Inscription</a>
  </div>
</div>
<section class=\"container mt-4\">
  <div class=\"container-mt-4\">
    <h1>Création de Site</h1>
    <ul>
      <li>Symrecipe</li>
      <li>Voiture, consomation, coûts, ...</li>
      <li>Planning, Feuille de route, ...</li>
      <li>Minecraft</li>
      <li></li>
    </ul>
  </div> 
</section>
{% endblock %}", "pages/home.html.twig", "/var/www/html/symrecipe/templates/pages/home.html.twig");
    }
}

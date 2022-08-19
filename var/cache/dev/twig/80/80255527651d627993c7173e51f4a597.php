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
    <p>Timeline</p>
    <p><strike>00:00:00 Présentation de la formation</strike></p>
    <p><strike>00:06:19 Installation et configuration</strike></p>
    <p><strike>00:16:30 Notre première page</strike></p>
    <p><strike>00:24:31 Les bases de Twig avec Symfony</strike></p>
    <p><strike>00:39:01 Notre première entité</strike></p>
    <p><strike>00:55:39 Valider les données avec l'annotation ASSERT</strike></p>
    <p><strike>01:03:52 Les fixtures</strike></p>
    <p><strike>01:18:19 CRUD - Ingrédients</strike></p>
    <p><strike>02:34:46 CRUD - Recettes</strike></p>
    <p><strike>03:38:02 Sécurité - User et hachage des mots de passe</strike></p>
    <p><strike>04:02:51 Sécurité - Firewall et formulaire de connexion</strike>/p>
    <p><strike>04:21:32 Sécurité - Formulaire d'inscription</strike></p>
    <p>04:42:17 Edition du profil et du mot de passe</p>
    <p>05:20:17 Assigner les entités à un utilisateur (ingrédient, recette)</p>
    <p>05:42:16 Sécuriser les routes avec IS_GRANTED et SECURITY</p>
    <p>05:56:23 Partager une recette</p>
    <p>06:33:13 Noter une recette</p>
    <p>07:01:01 Upload une image</p>
    <p>07:20:34 Formulaire de contact, email et reCaptcha v3</p>
    <p>08:03:46 Administration avec EasyAdmin 4</p>
    <p>08:58:10 Tester notre application</p>
    <p>10:36:21 Créer une commande</p>
    <p>10:55:22 Créer un filtre Twig</p>
    <p>11:06:03 Mise en place d'un cache pour notre application</p>
    <p>11:16:13 Webpack Encore</p>
    <p>11:29:12 Les Event Listener & Event Subscriber</p>
    <p>11:43:47 La fin de la formation</p>
    <p>Apprendre Symfony : 4:42:18/11:47:08</p>
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
      <li>Voiture=> entretien, consomation, coûts, ...</li>
      <li>Travaille => Planning, Feuille de route, ...</li>
      <li>Minecraft Création du uuid/li>
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
    <p>Timeline</p>
    <p><strike>00:00:00 Présentation de la formation</strike></p>
    <p><strike>00:06:19 Installation et configuration</strike></p>
    <p><strike>00:16:30 Notre première page</strike></p>
    <p><strike>00:24:31 Les bases de Twig avec Symfony</strike></p>
    <p><strike>00:39:01 Notre première entité</strike></p>
    <p><strike>00:55:39 Valider les données avec l'annotation ASSERT</strike></p>
    <p><strike>01:03:52 Les fixtures</strike></p>
    <p><strike>01:18:19 CRUD - Ingrédients</strike></p>
    <p><strike>02:34:46 CRUD - Recettes</strike></p>
    <p><strike>03:38:02 Sécurité - User et hachage des mots de passe</strike></p>
    <p><strike>04:02:51 Sécurité - Firewall et formulaire de connexion</strike>/p>
    <p><strike>04:21:32 Sécurité - Formulaire d'inscription</strike></p>
    <p>04:42:17 Edition du profil et du mot de passe</p>
    <p>05:20:17 Assigner les entités à un utilisateur (ingrédient, recette)</p>
    <p>05:42:16 Sécuriser les routes avec IS_GRANTED et SECURITY</p>
    <p>05:56:23 Partager une recette</p>
    <p>06:33:13 Noter une recette</p>
    <p>07:01:01 Upload une image</p>
    <p>07:20:34 Formulaire de contact, email et reCaptcha v3</p>
    <p>08:03:46 Administration avec EasyAdmin 4</p>
    <p>08:58:10 Tester notre application</p>
    <p>10:36:21 Créer une commande</p>
    <p>10:55:22 Créer un filtre Twig</p>
    <p>11:06:03 Mise en place d'un cache pour notre application</p>
    <p>11:16:13 Webpack Encore</p>
    <p>11:29:12 Les Event Listener & Event Subscriber</p>
    <p>11:43:47 La fin de la formation</p>
    <p>Apprendre Symfony : 4:42:18/11:47:08</p>
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
      <li>Voiture=> entretien, consomation, coûts, ...</li>
      <li>Travaille => Planning, Feuille de route, ...</li>
      <li>Minecraft Création du uuid/li>
      <li></li>
    </ul>
  </div> 
</section>
{% endblock %}", "pages/home.html.twig", "/var/www/html/symrecipe/templates/pages/home.html.twig");
    }
}

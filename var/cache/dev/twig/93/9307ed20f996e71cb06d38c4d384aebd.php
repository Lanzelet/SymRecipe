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

/* pages/recipe/index.html.twig */
class __TwigTemplate_7162d81a42a3f8c511f77cc27ee63054 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/index.html.twig", 1);
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

        echo "SymRecipe - Mes recettes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "  <div class=\"container mt-4\">
    ";
        // line 7
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 7, $this->source); })()), "items", [], "any", false, false, false, 7) === [])) {
            // line 8
            echo "        <h1>Mes recettes</h1>
    
        <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.new");
            echo "\" class=\"btn btn-primary\">Créer une recette</a>
    
        ";
            // line 13
            echo "       
       ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "            <div class=\"alert alert-success mt-4\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        

        ";
            // line 22
            echo "        <div class=\"count mt-4\">
           <h4>Il y a ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 23, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 23), "html", null, true);
            echo " recette(s) au total.</h4> 
        </div>
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th scope=\"col\">Numéro</th>
              <th scope=\"col\">Nom</th>
              <th scope=\"col\">Prix</th>
              <th scope=\"col\">Difficulté</th>
              <th scope=\"col\">Date de création</th>
              <th scope=\"col\"></th>
              <th scope=\"col\"></th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 39
                echo "              <tr class=\"table-primary\">
                <th scope=\"row\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "</th>
                  <td> ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo " </td>
                  <td> ";
                // line 42
                (((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 42))) ? (print ("Non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 42), "html", null, true))));
                echo " </td>
                  <td> ";
                // line 43
                (((null === twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 43))) ? (print ("Non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 43), "html", null, true))));
                echo " </td>
                  <td> ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo " </td>
                  <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a></td>
                  <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a></td> 
              </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </tbody>
        </table>
      ";
            // line 52
            echo "      <div class=\"navigation d-flex justify-content-center mt-4\">
        ";
            // line 53
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 53, $this->source); })()));
            echo "
      </div>
    ";
        } else {
            // line 56
            echo "      <h4>Il n'y a pas de recettes</h4>
    ";
        }
        // line 58
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  199 => 56,  193 => 53,  190 => 52,  186 => 49,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  150 => 39,  146 => 38,  128 => 23,  125 => 22,  121 => 19,  112 => 16,  109 => 15,  105 => 14,  102 => 13,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SymRecipe - Mes recettes{% endblock %}

{% block body %}
  <div class=\"container mt-4\">
    {% if not recipes.items is same as ([]) %}
        <h1>Mes recettes</h1>
    
        <a href=\"{{ path('recipe.new') }}\" class=\"btn btn-primary\">Créer une recette</a>
    
        {# read and display just one flash message type #}
       
       {% for message in app.flashes('success') %}
            <div class=\"alert alert-success mt-4\">
                {{ message }}
            </div>
        {% endfor %}
        

        {# total items count #}
        <div class=\"count mt-4\">
           <h4>Il y a {{ recipes.getTotalItemCount }} recette(s) au total.</h4> 
        </div>
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th scope=\"col\">Numéro</th>
              <th scope=\"col\">Nom</th>
              <th scope=\"col\">Prix</th>
              <th scope=\"col\">Difficulté</th>
              <th scope=\"col\">Date de création</th>
              <th scope=\"col\"></th>
              <th scope=\"col\"></th>
            </tr>
          </thead>
          <tbody>
            {% for recipe in recipes %}
              <tr class=\"table-primary\">
                <th scope=\"row\">{{ recipe.id}}</th>
                  <td> {{ recipe.name}} </td>
                  <td> {{ (recipe.price is null ? 'Non renseigné' : recipe.price ) }} </td>
                  <td> {{ (recipe.difficulty is null ? 'Non renseigné' : recipe.difficulty ) }} </td>
                  <td> {{ recipe.createdAt|date('d/m/Y') }} </td>
                  <td><a href=\"{{ path('recipe.edit', {id: recipe.id}) }}\" class=\"btn btn-info\">Modifier</a></td>
                  <td><a href=\"{{ path('recipe.delete', {id: recipe.id}) }}\" class=\"btn btn-danger\">Supprimer</a></td> 
              </tr> 
            {% endfor %}
          </tbody>
        </table>
      {# display navigation #}
      <div class=\"navigation d-flex justify-content-center mt-4\">
        {{ knp_pagination_render(recipes) }}
      </div>
    {% else %}
      <h4>Il n'y a pas de recettes</h4>
    {% endif %}
  </div>
{% endblock %}
", "pages/recipe/index.html.twig", "/var/www/html/symrecipe/templates/pages/recipe/index.html.twig");
    }
}

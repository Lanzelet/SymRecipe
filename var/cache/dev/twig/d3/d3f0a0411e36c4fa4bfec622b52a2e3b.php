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

/* pages/ingredient/index.html.twig */
class __TwigTemplate_29a14fd6c178b112409785f12c9335fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ingredient/index.html.twig", 1);
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

        echo "SymRecipe - Mes ingrédients";
        
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
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 7, $this->source); })()), "items", [], "any", false, false, false, 7) === [])) {
            // line 8
            echo "        <h1>Mes ingrédients</h1>

        <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">Créer un ingrédient</a>

        ";
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "            <div class=\"alert alert-success mt-4\">
                ";
                // line 15
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
        ";
            // line 20
            echo "        <div class=\"count mt-4\">
           <h4>Il y a ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 21, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 21), "html", null, true);
            echo " ingrédient(s) au total.</h4> 
        </div>
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th scope=\"col\">Numéro</th>
              <th scope=\"col\">Nom</th>
              <th scope=\"col\">Prix</th>
              <th scope=\"col\">Date de création</th>
              <th scope=\"col\"></th>
              <th scope=\"col\"></th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 36
                echo "              <tr class=\"table-primary\">
                <th scope=\"row\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "</th>
                  <td> ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo " </td>
                  <td> ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 39), "html", null, true);
                echo " </td>
                  <td> ";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
                echo " </td>
                  <td><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a></td>
                  <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a></td>
              </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          </tbody>
        </table>
      ";
            // line 48
            echo "      <div class=\"navigation d-flex justify-content-center mt-4\">
        ";
            // line 49
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 49, $this->source); })()));
            echo "
      </div>
    ";
        } else {
            // line 52
            echo "      <h4>Il n'y a pas d'ingrédients</h4>
    ";
        }
        // line 54
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/ingredient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 54,  191 => 52,  185 => 49,  182 => 48,  178 => 45,  169 => 42,  165 => 41,  161 => 40,  157 => 39,  153 => 38,  149 => 37,  146 => 36,  142 => 35,  125 => 21,  122 => 20,  119 => 18,  110 => 15,  107 => 14,  102 => 13,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}SymRecipe - Mes ingrédients{% endblock %}

{% block body %}
  <div class=\"container mt-4\">
    {% if not ingredients.items is same as ([]) %}
        <h1>Mes ingrédients</h1>

        <a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">Créer un ingrédient</a>

        {# read and display just one flash message type #}
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success mt-4\">
                {{ message }}
            </div>
        {% endfor %}

        {# total items count #}
        <div class=\"count mt-4\">
           <h4>Il y a {{ ingredients.getTotalItemCount }} ingrédient(s) au total.</h4> 
        </div>
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th scope=\"col\">Numéro</th>
              <th scope=\"col\">Nom</th>
              <th scope=\"col\">Prix</th>
              <th scope=\"col\">Date de création</th>
              <th scope=\"col\"></th>
              <th scope=\"col\"></th>
            </tr>
          </thead>
          <tbody>
            {% for ingredient in ingredients %}
              <tr class=\"table-primary\">
                <th scope=\"row\">{{ ingredient.id}}</th>
                  <td> {{ ingredient.name}} </td>
                  <td> {{ ingredient.price}} </td>
                  <td> {{ ingredient.createdAt|date('d/m/Y') }} </td>
                  <td><a href=\"{{ path('ingredient.edit', {id: ingredient.id}) }}\" class=\"btn btn-info\">Modifier</a></td>
                  <td><a href=\"{{ path('ingredient.delete', {id: ingredient.id}) }}\" class=\"btn btn-danger\">Supprimer</a></td>
              </tr> 
            {% endfor %}
          </tbody>
        </table>
      {# display navigation #}
      <div class=\"navigation d-flex justify-content-center mt-4\">
        {{ knp_pagination_render(ingredients) }}
      </div>
    {% else %}
      <h4>Il n'y a pas d'ingrédients</h4>
    {% endif %}
  </div>
{% endblock %}
", "pages/ingredient/index.html.twig", "/var/www/html/symrecipe/templates/pages/ingredient/index.html.twig");
    }
}

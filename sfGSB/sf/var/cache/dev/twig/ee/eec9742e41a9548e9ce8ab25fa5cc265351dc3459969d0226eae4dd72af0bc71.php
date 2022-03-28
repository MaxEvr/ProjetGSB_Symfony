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

/* page_lesutilisateurs/lesutilisateurs.html.twig */
class __TwigTemplate_b9db102c3ae5e4614d4bfd755a3179eb0503b7c80ba8657fbffd32d46a5d81d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_lesutilisateurs/lesutilisateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_lesutilisateurs/lesutilisateurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_lesutilisateurs/lesutilisateurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "GSB - Les utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la liste de <span>tous les utilisateurs</span></h1>
          <h2>Pour revenir aux pages d'avant, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Accueil</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentationSI");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">Présentation</a>
          </div>
        </div>     

      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          
            ";
        // line 31
        if (twig_test_empty((isset($context["listeUtili"]) || array_key_exists("listeUtili", $context) ? $context["listeUtili"] : (function () { throw new RuntimeError('Variable "listeUtili" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "       <br>
       <h3 style=\"text-align: center; color: #959595;\">Aucun utilisateur</h3>
    ";
        } else {
            // line 35
            echo "        <h3 style=\"text-align: center; color: white;\">Liste des utilisateurs, il y a : ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["listeUtili"]) || array_key_exists("listeUtili", $context) ? $context["listeUtili"] : (function () { throw new RuntimeError('Variable "listeUtili" does not exist.', 35, $this->source); })())), "html", null, true);
            echo " utilisateurs</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Code Postal</th>
            <th scope=\"col\">Ville</th>
            <th scope=\"col\">Date d'Embauche</th>
            <th scope=\"col\">Catégorie</th>
          </tr>
        </thead>
        
        <tbody>
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUtili"]) || array_key_exists("listeUtili", $context) ? $context["listeUtili"] : (function () { throw new RuntimeError('Variable "listeUtili" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                echo " 
          <tr>              
            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nom", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "prenom", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "adresse", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "cp", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "ville", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
            <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "dateEmbauche", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["liste"], "laCategorie", [], "any", false, false, false, 58), "libelle", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          
    ";
        }
        // line 63
        echo "        </tbody>
</table>    
            
            
        </div>          
      </div>
    </section><!-- End About Section -->  

  </main><!-- End #main -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page_lesutilisateurs/lesutilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 63,  188 => 61,  179 => 58,  175 => 57,  171 => 56,  167 => 55,  163 => 54,  159 => 53,  155 => 52,  148 => 50,  129 => 35,  124 => 32,  122 => 31,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Les utilisateurs{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la liste de <span>tous les utilisateurs</span></h1>
          <h2>Pour revenir aux pages d'avant, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"{{path('index') }}\" class=\"btn-menu animated fadeInUp scrollto\">Accueil</a>
            <a href=\"{{path('presentationSI') }}\" class=\"btn-book animated fadeInUp scrollto\">Présentation</a>
          </div>
        </div>     

      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          
            {% if listeUtili is empty %}
       <br>
       <h3 style=\"text-align: center; color: #959595;\">Aucun utilisateur</h3>
    {% else %}
        <h3 style=\"text-align: center; color: white;\">Liste des utilisateurs, il y a : {{ listeUtili | length }} utilisateurs</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Adresse</th>
            <th scope=\"col\">Code Postal</th>
            <th scope=\"col\">Ville</th>
            <th scope=\"col\">Date d'Embauche</th>
            <th scope=\"col\">Catégorie</th>
          </tr>
        </thead>
        
        <tbody>
            {% for liste in listeUtili %} 
          <tr>              
            <td>{{ liste.nom }}</td>
            <td>{{ liste.prenom }}</td>
            <td>{{ liste.adresse }}</td>
            <td>{{ liste.cp }}</td>
            <td>{{ liste.ville }}</td>
            <td>{{ liste.dateEmbauche|date('d/m/Y') }}</td>
            <td>{{ liste.laCategorie.libelle }}</td>
          </tr>
          {% endfor %}
          
    {% endif %}
        </tbody>
</table>    
            
            
        </div>          
      </div>
    </section><!-- End About Section -->  

  </main><!-- End #main -->
    
{% endblock %}
", "page_lesutilisateurs/lesutilisateurs.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_lesutilisateurs\\lesutilisateurs.html.twig");
    }
}

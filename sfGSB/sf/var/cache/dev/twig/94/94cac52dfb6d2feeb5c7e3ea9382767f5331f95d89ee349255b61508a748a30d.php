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

/* page_lesDomaines/lesdomaines.html.twig */
class __TwigTemplate_d58da93ecd7f8e116b5ef77777abbe77afeff35222ae51812c953dbf11164969 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_lesDomaines/lesdomaines.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_lesDomaines/lesdomaines.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_lesDomaines/lesdomaines.html.twig", 1);
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

        echo "GSB - Les domaines";
        
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
          <h1>Voici la liste de <span>tous les domaines</span> avec leurs catégories</h1>
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
        // line 30
        if (twig_test_empty((isset($context["listeCat"]) || array_key_exists("listeCat", $context) ? $context["listeCat"] : (function () { throw new RuntimeError('Variable "listeCat" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "       <br>
       <h3 style=\"text-align: center; color: #959595;\">Aucun domaine existant</h3>
    ";
        } else {
            // line 34
            echo "        <h3 style=\"text-align: center; color: white;\">Liste des catégories avec leurs noms de domaines</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Catégorie</th>
            <th scope=\"col\">Domaine</th>
            <th scope=\"col\">2ème domaine (s'il y en a)</th>
          </tr>
        </thead>
        
        <tbody>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCat"]) || array_key_exists("listeCat", $context) ? $context["listeCat"] : (function () { throw new RuntimeError('Variable "listeCat" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                echo " 
          <tr>              
            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "libelle", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
            
                ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["liste"], "leDomaine", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
                    // line 50
                    echo "                    
                    <td>";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["domaine"], "nomDomaine", [], "any", false, false, false, 51), "html", null, true);
                    echo "</td>   
            
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          
    ";
        }
        // line 59
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
        return "page_lesDomaines/lesdomaines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  177 => 57,  169 => 54,  160 => 51,  157 => 50,  153 => 49,  148 => 47,  141 => 45,  128 => 34,  123 => 31,  121 => 30,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Les domaines{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la liste de <span>tous les domaines</span> avec leurs catégories</h1>
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
          
            {% if listeCat is empty %}
       <br>
       <h3 style=\"text-align: center; color: #959595;\">Aucun domaine existant</h3>
    {% else %}
        <h3 style=\"text-align: center; color: white;\">Liste des catégories avec leurs noms de domaines</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Catégorie</th>
            <th scope=\"col\">Domaine</th>
            <th scope=\"col\">2ème domaine (s'il y en a)</th>
          </tr>
        </thead>
        
        <tbody>
            {% for liste in listeCat %} 
          <tr>              
            <td>{{ liste.libelle }}</td>
            
                {% for domaine in liste.leDomaine %}
                    
                    <td>{{ domaine.nomDomaine }}</td>   
            
                {% endfor %}
            
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
", "page_lesDomaines/lesdomaines.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_lesDomaines\\lesdomaines.html.twig");
    }
}

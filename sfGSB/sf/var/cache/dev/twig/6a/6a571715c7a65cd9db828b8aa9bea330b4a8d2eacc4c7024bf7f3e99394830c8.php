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

/* page_listNAyantPasFrais/listNAyantPasFrais.html.twig */
class __TwigTemplate_9ac2cb55ff4791c0d1f6224a449bf8807ef8c6ff9958f029e4c69e2318be982a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_listNAyantPasFrais/listNAyantPasFrais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_listNAyantPasFrais/listNAyantPasFrais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_listNAyantPasFrais/listNAyantPasFrais.html.twig", 1);
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

        echo "GSB - Liste n'ayant pas de frais";
        
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
          <h1>Voici la liste de <span>tous les utilisateurs n'ayant pas eu de frais</span></h1>
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
        // line 32
        if (twig_test_empty((isset($context["listNAyantPasFrais"]) || array_key_exists("listNAyantPasFrais", $context) ? $context["listNAyantPasFrais"] : (function () { throw new RuntimeError('Variable "listNAyantPasFrais" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "       <br>
       <h3 style=\"text-align: center; color: #959595;\">Tous les utilisateur ont eu des frais</h3>
    ";
        } else {
            // line 36
            echo "        <h3 style=\"text-align: center; color: white;\">Liste des utilisateurs n'ayant pas de frais</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>                     
          </tr>
        </thead>
        
        <tbody>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listNAyantPasFrais"]) || array_key_exists("listNAyantPasFrais", $context) ? $context["listNAyantPasFrais"] : (function () { throw new RuntimeError('Variable "listNAyantPasFrais" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                echo " 
          <tr>              
            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "nom", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liste"], "prenom", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>                      
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liste'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "          
    ";
        }
        // line 54
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
        return "page_listNAyantPasFrais/listNAyantPasFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  162 => 52,  153 => 49,  149 => 48,  142 => 46,  130 => 36,  125 => 33,  123 => 32,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Liste n'ayant pas de frais{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la liste de <span>tous les utilisateurs n'ayant pas eu de frais</span></h1>
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
          
            {% if listNAyantPasFrais is empty %}
       <br>
       <h3 style=\"text-align: center; color: #959595;\">Tous les utilisateur ont eu des frais</h3>
    {% else %}
        <h3 style=\"text-align: center; color: white;\">Liste des utilisateurs n'ayant pas de frais</h3><br/>
    <table class=\"table\" style='color: white;'>
        <thead>
          <tr>            
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>                     
          </tr>
        </thead>
        
        <tbody>
            {% for liste in listNAyantPasFrais %} 
          <tr>              
            <td>{{ liste.nom }}</td>
            <td>{{ liste.prenom }}</td>                      
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
", "page_listNAyantPasFrais/listNAyantPasFrais.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_listNAyantPasFrais\\listNAyantPasFrais.html.twig");
    }
}

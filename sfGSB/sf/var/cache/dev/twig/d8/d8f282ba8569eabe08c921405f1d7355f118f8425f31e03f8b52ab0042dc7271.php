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

/* page_segmentation/segmentation.html.twig */
class __TwigTemplate_8173c7d191f58f9a304489143b41c63c9059d4a34f5e0f60af128cb36524dcd2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_segmentation/segmentation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_segmentation/segmentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_segmentation/segmentation.html.twig", 1);
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

        echo "GSB - Ségmentation";
        
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
          <h1>Voici la <span>Ségmentation du réseau</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repartition");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Répartition</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("segmentation");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">Ségmentation</a>
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
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div>
            <p class=\"fst-italic\">
            L'organisation des VLAN et de l'adressage IP est la suivante :
            </p> 
              <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/aboutSeg.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Ségmentation du réseau</h3><br/>
            <p>Les règles actuelles concernant les vlans sont les suivantes :</p>
            <ul>
                <li><i class=\"bi bi-check-circle\"></i> Chaque vlan <span style=\"color:#cda45e;\">(sauf le vlan visiteur)</span> peut uniquement accéder (quel que soit le protocole) aux
                    vlans \"Serveurs\" et \"Sortie\";</li>
                <li><i class=\"bi bi-check-circle\"></i> Le vlan <span style=\"color:#cda45e;\">\"Visiteurs\"</span> peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>              
           </ul>            
          </div>
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
        return "page_segmentation/segmentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Ségmentation{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la <span>Ségmentation du réseau</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"{{path('repartition') }}\" class=\"btn-menu animated fadeInUp scrollto\">Répartition</a>
            <a href=\"{{path('segmentation') }}\" class=\"btn-book animated fadeInUp scrollto\">Ségmentation</a>
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
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div>
            <p class=\"fst-italic\">
            L'organisation des VLAN et de l'adressage IP est la suivante :
            </p> 
              <img src=\"{{ asset('img/aboutSeg.png') }}\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Ségmentation du réseau</h3><br/>
            <p>Les règles actuelles concernant les vlans sont les suivantes :</p>
            <ul>
                <li><i class=\"bi bi-check-circle\"></i> Chaque vlan <span style=\"color:#cda45e;\">(sauf le vlan visiteur)</span> peut uniquement accéder (quel que soit le protocole) aux
                    vlans \"Serveurs\" et \"Sortie\";</li>
                <li><i class=\"bi bi-check-circle\"></i> Le vlan <span style=\"color:#cda45e;\">\"Visiteurs\"</span> peut uniquement interroger les serveur DNS et DHCP et sortir sur internet ;</li>              
           </ul>            
          </div>
        </div>          
      </div>
    </section><!-- End About Section -->  

  </main><!-- End #main -->
    
{% endblock %}
", "page_segmentation/segmentation.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_segmentation\\segmentation.html.twig");
    }
}

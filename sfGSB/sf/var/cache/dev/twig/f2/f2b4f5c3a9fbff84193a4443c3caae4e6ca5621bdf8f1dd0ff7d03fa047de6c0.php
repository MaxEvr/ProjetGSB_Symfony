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

/* page_equipement/equipement.html.twig */
class __TwigTemplate_82dfbcddb9160d4ce1d110becbea2edd22cd7702a62987842487f0a3a9ead77f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_equipement/equipement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_equipement/equipement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_equipement/equipement.html.twig", 1);
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

        echo "GSB - Équipements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici les <span>Équipements</span></h1>
          <h2>Si vous voulez en savoir davantage sur GSB, cliquez ci-dessous !</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentationSI");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Présentation du SI</a>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">La Gestion</a>
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
            <div class=\"about-img\">
              <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/aboutEqui.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Nos équipements informatique</h3><br/>
            <p class=\"fst-italic\">
            L'informatique est fortement répandue sur le site. Chaque employé est équipé d'un poste fixe relié au
            système central. On dénombre ainsi plus de 350 équipements terminaux et un nombre de serveurs
            physiques conséquent (45 en 2012) sur lesquels tournent plus de 100 serveurs virtuels.
            </p>
            <p>On trouve aussi :</p>
            <ul>
               <li><i class=\"bi bi-check-circle\"></i> des stations de travail plus puissantes dans la partie <span style='color:#cda45e;'>labo-recherche.</span></li>
               <li><i class=\"bi bi-check-circle\"></i> une multitude d'ordinateurs portables <span style='color:#cda45e;'>(personnels de direction, service informatique, services commerciaux, etc)</span></li>
            </ul>
            <p>
            Les visiteurs médicaux reçoivent une indemnité bisannuelle pour s'équiper en informatique (politique Swiss-Bourdin) ou une dotation en équipement (politique Galaxy). 
            Il n'y a pas à l'heure actuelle d'uniformisation des machines ni du mode de fonctionnement. <br/><br/>
            Chaque employé de l'entreprise a une adresse de messagerie de la forme <a tabIndex=\"-1\" href=\"mailto:snomUtilisateur@swissgalaxy.com\" style=\"color:#cda45e\"><b>snomUtilisateur@swissgalaxy.com</b></a>. Les anciennes adresses de chaque lcda45eaboratoire ont été définitivement fermées au 1er
            janvier 2011
            </p>
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
        return "page_equipement/equipement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  103 => 14,  99 => 13,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Équipements{% endblock %}
{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici les <span>Équipements</span></h1>
          <h2>Si vous voulez en savoir davantage sur GSB, cliquez ci-dessous !</h2>

          <div class=\"btns\">
            <a href=\"{{path('presentationSI') }}\" class=\"btn-menu animated fadeInUp scrollto\">Présentation du SI</a>
            <a href=\"{{path('gestion') }}\" class=\"btn-book animated fadeInUp scrollto\">La Gestion</a>
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
            <div class=\"about-img\">
              <img src=\"{{ asset('img/aboutEqui.jpg') }}\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Nos équipements informatique</h3><br/>
            <p class=\"fst-italic\">
            L'informatique est fortement répandue sur le site. Chaque employé est équipé d'un poste fixe relié au
            système central. On dénombre ainsi plus de 350 équipements terminaux et un nombre de serveurs
            physiques conséquent (45 en 2012) sur lesquels tournent plus de 100 serveurs virtuels.
            </p>
            <p>On trouve aussi :</p>
            <ul>
               <li><i class=\"bi bi-check-circle\"></i> des stations de travail plus puissantes dans la partie <span style='color:#cda45e;'>labo-recherche.</span></li>
               <li><i class=\"bi bi-check-circle\"></i> une multitude d'ordinateurs portables <span style='color:#cda45e;'>(personnels de direction, service informatique, services commerciaux, etc)</span></li>
            </ul>
            <p>
            Les visiteurs médicaux reçoivent une indemnité bisannuelle pour s'équiper en informatique (politique Swiss-Bourdin) ou une dotation en équipement (politique Galaxy). 
            Il n'y a pas à l'heure actuelle d'uniformisation des machines ni du mode de fonctionnement. <br/><br/>
            Chaque employé de l'entreprise a une adresse de messagerie de la forme <a tabIndex=\"-1\" href=\"mailto:snomUtilisateur@swissgalaxy.com\" style=\"color:#cda45e\"><b>snomUtilisateur@swissgalaxy.com</b></a>. Les anciennes adresses de chaque lcda45eaboratoire ont été définitivement fermées au 1er
            janvier 2011
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    </main><!-- End #main --> 

{% endblock %}", "page_equipement/equipement.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_equipement\\equipement.html.twig");
    }
}

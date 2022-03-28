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

/* base.html.twig */
class __TwigTemplate_629542dcec0343796fe5e409f70d555e51ef2db75e067804887eaf9c952baf9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-cente\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-lg-between\">

      <h1 class=\"logo me-auto me-lg-0\"><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Galaxy Swiss Bourdin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"logo me-auto me-lg-0\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a>

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></li>          
          <li class=\"dropdown\"><a href=\"#\"><span>Le SI</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentationSI");
        echo "\">Présentation du SI</a></li>
              <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
        echo "\">Gestion</a></li>
              <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipement");
        echo "\">Équipement</a></li>
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Le Réseau</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repartition");
        echo "\">Répartition du réseau</a></li>
              <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("segmentation");
        echo "\">Segmentation du réseau</a></li>              
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Utilisateurs</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_utilisateurs");
        echo "\">Les utilisateurs</a></li>
              <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeCarducien");
        echo "\">Liste des Cadurciens</a></li>
              <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeAyantFrais");
        echo "\">Ayant des frais</a></li>
              <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeNAyantPasFrais");
        echo "\">N'ayant pas de frais</a></li>
              <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeNbFrais");
        echo "\">Nombre de frais</a></li>
              <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utiliConcerne");
        echo "\">Utilisateurs concernés</a></li>
            </ul>          
          </li>
          <li><a class=\"nav-link scrollto\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_domaine");
        echo "\">Domaines</a></li>
          
           <li class=\"dropdown\"><a href=\"#\"><span>Les États</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_index");
        echo "\">Liste des états</a></li>
              <li><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("etat_new");
        echo "\">Créer un état</a></li>              
            </ul>          
          </li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->
      <!--<a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" class=\"book-a-table-btn scrollto d-none d-lg-flex\">Se connecter</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Body de la page ======= -->
  ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "  
  
  
  
  
 <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
              <h3>Galaxy Swiss Bourdin</h3>
              <p>
                5 Av. Champ de Mars <br>
                Paris 75007, France<br><br>
                <strong>Tél. :</strong> 06 41 78 95 41<br>
                <strong>mail :</strong> contact@gsb.fr<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>                
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Autres pages</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Le SI</span> <i class=\"bi bi-chevron-right\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation");
        echo "\">Présentation SI</a></li>
              <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
        echo "\">Gestion</a></li>
              <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipement");
        echo "\">Équipement</a></li>
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Réseau</span> <i class=\"bi bi-chevron-right\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repartition");
        echo "\">Répartition</a></li>
              <li><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("segmentation");
        echo "\">Segmentation</a></li>             
            </ul>
          </li> 
              
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <li class=\"dropdown\"><a href=\"#\"><span>Divers</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_utilisateurs");
        echo "\">Les utilisateurs</a></li>
              <li><a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeCarducien");
        echo "\">Liste des Cadurciens</a></li>
              <li><a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeAyantFrais");
        echo "\">Ayant des frais</a></li>
              <li><a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeNAyantPasFrais");
        echo "\">N'ayant pas de frais</a></li>
              <li><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeNbFrais");
        echo "\">Nombre de frais</a></li>
              <li><a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utiliConcerne");
        echo "\">Utilisateurs concernés</a></li>
            </ul>          
          </li>
              <!--
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>-->
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Notre Newsletter</h4>
            <p>Si vous voulez des renseignements en temps réel, vous pouvez vous abonner à notre Newsletter !</p>
            
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\" placeholder=\"Entrer une adresse mail\"><input type=\"submit\" value=\"Abonnez-vous\">
            </form>
            
          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Galaxy Swiss Bourdin</span></strong>. Tout droits réservés !
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Création par <a href=\"https://bootstrapmade.com/\">Evraere Maxime</a>
      </div>
    </div>
  </footer><!-- End Footer --> 
  
  
  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "GSB - Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 92,  412 => 8,  397 => 205,  391 => 202,  387 => 201,  383 => 200,  379 => 199,  375 => 198,  371 => 197,  321 => 150,  317 => 149,  313 => 148,  309 => 147,  305 => 146,  301 => 145,  288 => 135,  284 => 134,  276 => 129,  272 => 128,  268 => 127,  262 => 124,  229 => 93,  227 => 92,  218 => 86,  209 => 80,  205 => 79,  198 => 75,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  176 => 68,  172 => 67,  164 => 62,  160 => 61,  152 => 56,  148 => 55,  144 => 54,  138 => 51,  129 => 47,  124 => 45,  105 => 29,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  66 => 14,  62 => 13,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block titre %}GSB - Accueil{% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('img/favicon.png')}}\" rel=\"icon\">
  <link href=\"{{ asset('img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{ asset('vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-cente\">
    <div class=\"container-fluid container-xl d-flex align-items-center justify-content-lg-between\">

      <h1 class=\"logo me-auto me-lg-0\"><a href=\"{{ path('index') }}\">Galaxy Swiss Bourdin</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href=\"{{ path('index') }}\" class=\"logo me-auto me-lg-0\"><img src=\"{{ asset('img/logo.png')}}\" alt=\"\" class=\"img-fluid\"></a>

      <nav id=\"navbar\" class=\"navbar order-last order-lg-0\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"{{path('index') }}\">Accueil</a></li>          
          <li class=\"dropdown\"><a href=\"#\"><span>Le SI</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"{{path('presentationSI') }}\">Présentation du SI</a></li>
              <li><a href=\"{{path('gestion') }}\">Gestion</a></li>
              <li><a href=\"{{path('equipement') }}\">Équipement</a></li>
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Le Réseau</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"{{path('repartition') }}\">Répartition du réseau</a></li>
              <li><a href=\"{{path('segmentation') }}\">Segmentation du réseau</a></li>              
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Utilisateurs</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"{{path('liste_utilisateurs') }}\">Les utilisateurs</a></li>
              <li><a href=\"{{path('listeCarducien') }}\">Liste des Cadurciens</a></li>
              <li><a href=\"{{path('listeAyantFrais') }}\">Ayant des frais</a></li>
              <li><a href=\"{{path('listeNAyantPasFrais') }}\">N'ayant pas de frais</a></li>
              <li><a href=\"{{path('listeNbFrais') }}\">Nombre de frais</a></li>
              <li><a href=\"{{path('utiliConcerne') }}\">Utilisateurs concernés</a></li>
            </ul>          
          </li>
          <li><a class=\"nav-link scrollto\" href=\"{{path('liste_domaine') }}\">Domaines</a></li>
          
           <li class=\"dropdown\"><a href=\"#\"><span>Les États</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"{{path('etat_index') }}\">Liste des états</a></li>
              <li><a href=\"{{path('etat_new') }}\">Créer un état</a></li>              
            </ul>          
          </li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->
      <!--<a href=\"{{ path(\"connexion\") }}\" class=\"book-a-table-btn scrollto d-none d-lg-flex\">Se connecter</a>-->

    </div>
  </header><!-- End Header -->

  <!-- ======= Body de la page ======= -->
  {% block body %}{% endblock %}
  
  
  
  
  
 <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
              <h3>Galaxy Swiss Bourdin</h3>
              <p>
                5 Av. Champ de Mars <br>
                Paris 75007, France<br><br>
                <strong>Tél. :</strong> 06 41 78 95 41<br>
                <strong>mail :</strong> contact@gsb.fr<br>
              </p>
              <div class=\"social-links mt-3\">
                <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>                
                <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Autres pages</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{ path('index') }}\">Accueil</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Le SI</span> <i class=\"bi bi-chevron-right\"></i></a>
            <ul>              
              <li><a href=\"{{path('presentation') }}\">Présentation SI</a></li>
              <li><a href=\"{{path('gestion') }}\">Gestion</a></li>
              <li><a href=\"{{path('equipement') }}\">Équipement</a></li>
            </ul>
          </li>
          <li class=\"dropdown\"><a href=\"#\"><span>Réseau</span> <i class=\"bi bi-chevron-right\"></i></a>
            <ul>              
              <li><a href=\"{{ path('repartition') }}\">Répartition</a></li>
              <li><a href=\"{{ path('segmentation') }}\">Segmentation</a></li>             
            </ul>
          </li> 
              
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <li class=\"dropdown\"><a href=\"#\"><span>Divers</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>              
              <li><a href=\"{{path('liste_utilisateurs') }}\">Les utilisateurs</a></li>
              <li><a href=\"{{path('listeCarducien') }}\">Liste des Cadurciens</a></li>
              <li><a href=\"{{path('listeAyantFrais') }}\">Ayant des frais</a></li>
              <li><a href=\"{{path('listeNAyantPasFrais') }}\">N'ayant pas de frais</a></li>
              <li><a href=\"{{path('listeNbFrais') }}\">Nombre de frais</a></li>
              <li><a href=\"{{path('utiliConcerne') }}\">Utilisateurs concernés</a></li>
            </ul>          
          </li>
              <!--
            <h4>Our Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>-->
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Notre Newsletter</h4>
            <p>Si vous voulez des renseignements en temps réel, vous pouvez vous abonner à notre Newsletter !</p>
            
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\" placeholder=\"Entrer une adresse mail\"><input type=\"submit\" value=\"Abonnez-vous\">
            </form>
            
          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Galaxy Swiss Bourdin</span></strong>. Tout droits réservés !
      </div>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Création par <a href=\"https://bootstrapmade.com/\">Evraere Maxime</a>
      </div>
    </div>
  </footer><!-- End Footer --> 
  
  
  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  <script src=\"{{ asset('vendor/aos/aos.js') }}\"></script>
  <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/glightbox/js/glightbox.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('vendor/php-email-form/validate.js') }}\"></script>
  <script src=\"{{ asset('vendor/swiper/swiper-bundle.min.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('js/main.js') }}\"></script>

</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\base.html.twig");
    }
}

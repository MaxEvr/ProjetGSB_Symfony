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

/* default/index.html.twig */
class __TwigTemplate_700d33f908997542312f8633f311cd1c354e44f338554f73dc6e74f57c55895e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Bienvenue sur <span>GSB</span></h1>
          <h2>Laboratoire Galaxy Swiss Bourdin</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("presentation");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Présentation</a>
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repartition");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">Le Réseau</a>
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
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/about.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Qu'est-ce que Gsb ?</h3>
            <p class=\"fst-italic\" style='font-size: 25px;'>
              Parlons tout d'abord du secteur d'activité
            </p>            
            <p>
            L’industrie pharmaceutique est un sékteur très lucratiffe dans lequelle le mouvements de fuzion akizitions
            est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
            entités gigantesques au sein desquelles le travaille est longtemps rester organiser celon les ancien
            structure.<br/><br/>
            Des déboires diver récent autours de médicament ou molékul ayant entraîner des complication
            médical on fais s'élevaient des voies contre une parti de l'activiter des laboratoires : la visite médical,
            réputer être le lieu d' arrangement entre l'industrie et les praticien, est tout du moins un terrain
            d'influence opake.
            </p>
          </div>
        </div>
        <div class=\"row\">          
          <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>À propos de l'entreprise</h3>                       
            <p>
            Le laboratoire Galaxie Suisse Boudin (GSB) est issue de la fuzion entre le géant américain Apple
            (spécialisé dans le secteur des Iphone) et le conglomérat
            européen macron2022 (travaillant sur eléctions), lui même déjà union
            de trois petits syndicats. <br/><br/>
            En 2023, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
            industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Béthune.
            Le siège social de la multinationale est situé à Philadelphine, Pennsylvie, aux Etats-Unis
            </p>
            <ul>
                <li style='color:red;'><i class=\"bi bi-check-circle\"></i> La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</li> 
            </ul>            
          </div>
        </div><br/>
        <div class=\"row\">          
          <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Réorganisation</h3>
            <p>
            Une conséquence de cette fusion, est la recherche d'une optimisation de l’activité du groupe ainsi
            constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments
            (en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur
            des deux laboratoires sur les produits concurrents.<br/><br/>
            L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les
            départements et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques
            <span style='color:#cda45e;'>(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).</span>
            Une vision partielle de cette organisation est présentée ci-dessous
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    

    <!-- ======= Specials Section ======= -->
    <!--<section id=\"specials\" class=\"specials\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-3\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">Modi sit est</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">Unde praesentium sed</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">Pariatur explicabo vel</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">Nostrum qui quasi</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-5\">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class=\"col-lg-9 mt-4 mt-lg-0\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class=\"fst-italic\">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-1.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class=\"fst-italic\">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-2.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class=\"fst-italic\">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-3.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class=\"fst-italic\">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-4.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-5\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class=\"fst-italic\">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-5.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>-->
    <!-- End Specials Section -->

    
    

    <!-- ======= Chefs Section ======= -->
    <section id=\"chefs\" class=\"chefs\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Personnels</h2>
          <p>Nos Médecins</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chefs/chefs-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Mathéo Dupire</h4>
                  <span>Médecin Chef</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/matheo.dupire\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/matheo-dupire/?originalSubdomain=fr\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
              <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chefs/chefs-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Geoffrey Chapit</h4>
                  <span>Médecin aspirant médecine</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/geoffrey.chapit\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/geoffrey-chapit/\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
              <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/chefs/chefs-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Corentin Legros</h4>
                  <span>Médecin capitaine</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/corentin.lgs.9\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/corentin-legros-8500a4200/\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    
   

  </main><!-- End #main -->
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 242,  304 => 225,  284 => 208,  106 => 33,  84 => 14,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Bienvenue sur <span>GSB</span></h1>
          <h2>Laboratoire Galaxy Swiss Bourdin</h2>

          <div class=\"btns\">
            <a href=\"{{path('presentation') }}\" class=\"btn-menu animated fadeInUp scrollto\">Présentation</a>
            <a href=\"{{path('repartition') }}\" class=\"btn-book animated fadeInUp scrollto\">Le Réseau</a>
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
              <img src=\"{{ asset('img/about.jpg') }}\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Qu'est-ce que Gsb ?</h3>
            <p class=\"fst-italic\" style='font-size: 25px;'>
              Parlons tout d'abord du secteur d'activité
            </p>            
            <p>
            L’industrie pharmaceutique est un sékteur très lucratiffe dans lequelle le mouvements de fuzion akizitions
            est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
            entités gigantesques au sein desquelles le travaille est longtemps rester organiser celon les ancien
            structure.<br/><br/>
            Des déboires diver récent autours de médicament ou molékul ayant entraîner des complication
            médical on fais s'élevaient des voies contre une parti de l'activiter des laboratoires : la visite médical,
            réputer être le lieu d' arrangement entre l'industrie et les praticien, est tout du moins un terrain
            d'influence opake.
            </p>
          </div>
        </div>
        <div class=\"row\">          
          <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>À propos de l'entreprise</h3>                       
            <p>
            Le laboratoire Galaxie Suisse Boudin (GSB) est issue de la fuzion entre le géant américain Apple
            (spécialisé dans le secteur des Iphone) et le conglomérat
            européen macron2022 (travaillant sur eléctions), lui même déjà union
            de trois petits syndicats. <br/><br/>
            En 2023, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
            industriel. L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Béthune.
            Le siège social de la multinationale est situé à Philadelphine, Pennsylvie, aux Etats-Unis
            </p>
            <ul>
                <li style='color:red;'><i class=\"bi bi-check-circle\"></i> La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</li> 
            </ul>            
          </div>
        </div><br/>
        <div class=\"row\">          
          <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Réorganisation</h3>
            <p>
            Une conséquence de cette fusion, est la recherche d'une optimisation de l’activité du groupe ainsi
            constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments
            (en passant par une nécessaire restructuration et vague de licenciement), tout en prenant le meilleur
            des deux laboratoires sur les produits concurrents.<br/><br/>
            L'entreprise compte 480 visiteurs médicaux en France métropolitaine (Corse comprise), et 60 dans les
            départements et territoires d'outre-mer. Les territoires sont répartis en 6 secteurs géographiques
            <span style='color:#cda45e;'>(Paris-Centre, Sud, Nord, Ouest, Est, DTOM Caraïbes-Amériques, DTOM Asie-Afrique).</span>
            Une vision partielle de cette organisation est présentée ci-dessous
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    

    <!-- ======= Specials Section ======= -->
    <!--<section id=\"specials\" class=\"specials\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-3\">
            <ul class=\"nav nav-tabs flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active show\" data-bs-toggle=\"tab\" href=\"#tab-1\">Modi sit est</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\">Unde praesentium sed</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\">Pariatur explicabo vel</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-4\">Nostrum qui quasi</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-5\">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class=\"col-lg-9 mt-4 mt-lg-0\">
            <div class=\"tab-content\">
              <div class=\"tab-pane active show\" id=\"tab-1\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class=\"fst-italic\">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-1.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-2\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class=\"fst-italic\">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-2.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-3\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class=\"fst-italic\">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-3.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-4\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class=\"fst-italic\">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-4.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-5\">
                <div class=\"row\">
                  <div class=\"col-lg-8 details order-2 order-lg-1\">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class=\"fst-italic\">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class=\"col-lg-4 text-center order-1 order-lg-2\">
                    <img src=\"assets/img/specials-5.png\" alt=\"\" class=\"img-fluid\">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>-->
    <!-- End Specials Section -->

    
    

    <!-- ======= Chefs Section ======= -->
    <section id=\"chefs\" class=\"chefs\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Personnels</h2>
          <p>Nos Médecins</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
              <img src=\"{{ asset('img/chefs/chefs-1.jpg') }}\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Mathéo Dupire</h4>
                  <span>Médecin Chef</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/matheo.dupire\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/matheo-dupire/?originalSubdomain=fr\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
              <img src=\"{{ asset('img/chefs/chefs-2.jpg') }}\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Geoffrey Chapit</h4>
                  <span>Médecin aspirant médecine</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/geoffrey.chapit\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/geoffrey-chapit/\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"member\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
              <img src=\"{{ asset('img/chefs/chefs-3.jpg') }}\" class=\"img-fluid\" alt=\"\">
              <div class=\"member-info\">
                <div class=\"member-info-content\">
                  <h4>Corentin Legros</h4>
                  <span>Médecin capitaine</span>
                </div>
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"https://www.facebook.com/corentin.lgs.9\"><i class=\"bi bi-facebook\"></i></a>                  
                  <a href=\"https://www.linkedin.com/in/corentin-legros-8500a4200/\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    
   

  </main><!-- End #main -->
  
{% endblock %}", "default/index.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\default\\index.html.twig");
    }
}

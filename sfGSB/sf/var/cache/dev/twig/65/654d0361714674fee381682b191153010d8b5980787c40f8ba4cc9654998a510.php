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

/* page_connexion/connexion.html.twig */
class __TwigTemplate_516fa7010d604b7b76c05efa04828339b07879a3b9d95da1eb882a14c66ee9d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_connexion/connexion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_connexion/connexion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_connexion/connexion.html.twig", 1);
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
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Connectez-vous</h2>
          <p>Veuillez vous connecter afin d'avoir accès au site</p>
        </div>

        <form action=\"forms/book-a-table.php\" method=\"post\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"row\">            
            <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Login :\" data-rule=\"email\" data-msg=\"Please enter a valid email\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <input type=\"password\" class=\"form-control\" name=\"password\" id=\"phone\" placeholder=\"Mot de passe :\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\">
              <div class=\"validate\"></div>
            </div>
              <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <button type=\"submit\" class='form-control' style='background-color: #cda45e; border-color: black;'>Se connecter</button>
              <div class=\"validate\"></div>
            </div>          
        </form>

      </div>
          </center>
      </div>
  </section><!-- End Hero -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page_connexion/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Équipements{% endblock %}
{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">    
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Connectez-vous</h2>
          <p>Veuillez vous connecter afin d'avoir accès au site</p>
        </div>

        <form action=\"forms/book-a-table.php\" method=\"post\" role=\"form\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"row\">            
            <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Login :\" data-rule=\"email\" data-msg=\"Please enter a valid email\">
              <div class=\"validate\"></div>
            </div>
            <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <input type=\"password\" class=\"form-control\" name=\"password\" id=\"phone\" placeholder=\"Mot de passe :\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\">
              <div class=\"validate\"></div>
            </div>
              <div class=\"col-lg-4 col-md-6 form-group mt-3 mt-md-0\">
              <button type=\"submit\" class='form-control' style='background-color: #cda45e; border-color: black;'>Se connecter</button>
              <div class=\"validate\"></div>
            </div>          
        </form>

      </div>
          </center>
      </div>
  </section><!-- End Hero -->

{% endblock %}", "page_connexion/connexion.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_connexion\\connexion.html.twig");
    }
}

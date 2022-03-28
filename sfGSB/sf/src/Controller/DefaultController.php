<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render('page_presentation/presentation.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/gestion", name="gestion")
     */
    public function gestion(): Response
    {
        return $this->render('page_gestion/gestion.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/equipement", name="equipement")
     */
    public function equipement(): Response
    {
        return $this->render('page_equipement/equipement.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/repartition", name="repartition")
     */
    public function repartition(): Response
    {
        return $this->render('page_repartition/repartition.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/segmentation", name="segmentation")
     */
    public function segmentation(): Response
    {
        return $this->render('page_segmentation/segmentation.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/presentationSI", name="presentationSI")
     */
    public function presSI(): Response
    {
        return $this->render('page_presSI/presSI.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    /**
     * @Route("/utilisateurs", name="liste_utilisateurs")
     */    
    public function listUtili(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $lesUtilis = $repo->findAll();
        return $this->render('page_lesutilisateurs/lesutilisateurs.html.twig' ,['listeUtili' => $lesUtilis]);
       
    }
    
    /**
     * @Route("/listeCarduciens", name="listeCarducien")
     */ 
    public function listInscriCahors(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Utilisateur::class);
        $ville = "Cahors";
        $laListe = $repo->listInscritsCahors($ville);
        return $this->render('page_listCarduciens/listeCarduciens.html.twig' ,
                ['listeCarducien' => $laListe]);
       
    }
    
    /**
     * @Route("/listeAyantFrais", name="listeAyantFrais")
     */ 
    public function listAyantFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);       
        $laListe = $repo->listAyantFrais();
        return $this->render('page_listAyantFrais/listAyantFrais.html.twig' ,
                ['listAyantFrais' => $laListe]);
       
    }
    
    /**
     * @Route("/listeNAyantPasFrais", name="listeNAyantPasFrais")
     */ 
    public function listNAyantPasFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);       
        $laListe = $repo->listNAyantPasFrais();
        return $this->render('page_listNAyantPasFrais/listNAyantPasFrais.html.twig' ,
                ['listNAyantPasFrais' => $laListe]);
       
    }
    
    /**
     * @Route("/listNbFrais", name="listeNbFrais")
     */ 
    public function listNbFrais(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Fichefrais::class);       
        $laListe = $repo->nbFrais();
        return $this->render('page_listNbFrais/listNbFrais.html.twig' ,
                ['listNbFrais' => $laListe]);
       
    }
    
    /**
     * @Route("/domaines", name="liste_domaine")
     */    
    public function listDomaine(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\Categorie::class);
        $lesDomaines = $repo->findAll();
        return $this->render('page_lesDomaines/lesdomaines.html.twig' ,['listeCat' => $lesDomaines]);
       
    }
    
    
    /**
     * @Route("/utiliconcerne", name="utiliConcerne")
     */ 
    public function listUtiliConcerne(): Response
    {
        $repo = $this->getDoctrine()->getRepository(\App\Entity\UtilisateurSecondaire::class);       
        $laListe = $repo->findAll();
        return $this->render('page_utiliConcerne/lesutiliconcerne.html.twig' ,
                ['listUtiliConcerne' => $laListe]);
       
    }
    
    
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('page_connexion/connexion.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
}

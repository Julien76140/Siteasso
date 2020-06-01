<?php

namespace App\Controller;

use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ManagerRegistry ;
use App\Entity\Form;
use App\Entity\PageName;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Form\AdminType;



class ArticleController extends AbstractController
{

           /**
     * @Route("/", name="home")
     */
     public function home()
     {
        $idCible = $this->getDoctrine()->getRepository(PageName::Class);
        $idPage=$idCible->findByTitreDeLaPage("Accueil");

        $pageCible = $this->getDoctrine()->getRepository(Form::Class);
        $contenuAccueil=$pageCible->findByPageName($idPage);

         return $this->render('article/home.html.twig', [
             'controller_name' => 'ArticleController',
             'contenuAccueil'=> $contenuAccueil
         ]);
     }

           /**
     * @Route("/accueil", name="accueil")
     */
     public function accueil()
     {
        $idCible = $this->getDoctrine()->getRepository(PageName::Class);
        $idPage=$idCible->findByTitreDeLaPage("Nos Différents Accueil");

        $pageCible = $this->getDoctrine()->getRepository(Form::Class);
        $contenuDiffAccueil=$pageCible->findByPageName($idPage);

         return $this->render('article/accueil.html.twig', [
             'controller_name' => 'ArticleController',
             'contenuDiffAccueil'=> $contenuDiffAccueil

         ]);
     }
                /**
     * @Route("/anniversaire", name="anniversaire")
     */
     public function anniversaire()
     {
         return $this->render('article/anniversaire.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }
                     /**
     * @Route("/minifermeitinerante", name="minifermeitinerante")
     */
     public function minifermeitinerante()
     {
         return $this->render('article/minifermeitinerante.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }
                          /**
     * @Route("/animaux", name="animaux")
     */
     public function animaux()
     {
        $affAnimal = $this->getDoctrine()->getRepository(PageName::Class);
        $cible=$affAnimal->findByTitreDeLaPage("Nos Animaux");

        $pageCible = $this->getDoctrine()->getRepository(Form::Class);
        $contenuAnimal=$pageCible->findByPageName($cible);

        dump($contenuAnimal);

         return $this->render('article/animaux.html.twig', [
             'controller_name' => 'ArticleController',
             'contenuAnimal'=>$contenuAnimal,
         ]);
     }
                               /**
     * @Route("/spectacle", name="spectacle")
     */
     public function spectacle()
     {
         return $this->render('article/spectacle.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }
                                    /**
     * @Route("/tarif", name="tarif")
     */
     public function tarif()
     {
         return $this->render('article/tarif.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }
                                         /**
     * @Route("/localisation", name="localisation")
     */
     public function localisation()
     {

        $idCible = $this->getDoctrine()->getRepository(PageName::Class);
        $idPage=$idCible->findByTitreDeLaPage("Localisation");

        $pageCible = $this->getDoctrine()->getRepository(Form::Class);
        $contenuNousTrouver=$pageCible->findByPageName($idPage);

         return $this->render('article/localisation.html.twig', [
             'controller_name' => 'ArticleController',
             'contenuNousTrouver'=>$contenuNousTrouver
         ]);
     }
                                              /**
     * @Route("/propos", name="propos")
     */
     public function propos()
     {
         return $this->render('article/propos.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }


                                                        /**
     * @Route("/creationarticle", name="creationarticle")
     */
     public function form(Form $article=NULL,Request $request,ManagerRegistry $manager)
     {
 
        $error="";
        $success="";
        $suppr="";

         if(!$article){
           $article=new Form();
         }
         
         $entityManager = $this->getDoctrine()->getManager();

            $form=$this->createForm(ArticleType::class,$article);

            $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){

                    $test=$form["category"]->getData();

                    $idCategory = $this->getDoctrine()->getRepository(Category::class);
                    $idCible=$idCategory->findOneByTitre($test->getTitre());

         for($k=0;$k<=10;$k++){

        if($test->getTitre()=="Categorie Accueil n'5" || $test->getTitre()=="Categorie Animaux n'$k"){

            $exception=$this->getDoctrine()->getRepository(Category::class);
            $idException=$exception->findOneByTitre($test->getTitre());


            $suppr=TRUE;
            $noLimit=$idException->getId();
        break;
        }else{
            $suppr=FALSE;

            $noLimit=-1;

        }
    }

                    $idCible=$idCible->getId();
            
                    $idCategoryExist = $this->getDoctrine()->getRepository(Form::class);
                    $exist=$idCategoryExist->findOneByCategory($idCible);


             if($test->getId()==$noLimit){

                        $oui=NULL;

                 }else{

                    $oui=$exist;
                 }
            
                    if($oui!=NULL){

                       $oui= $exist->getId();

                    }


                    if($oui!=NULL){

                         $error="Cette catégorie ne peux pas contenir plusieurs Articles !";

                    }else{


                        $success="L'article a bien été enregistré !";
                        $entityManager->persist($article);


                        $entityManager->flush();
                    }
     

        }

 
         return $this->render('article/creationarticle.html.twig', [
             'controller_name' => 'ArticleController',
             'formArticle'=>$form->createView(),
             'erreur'=>$error,
             'sucess'=>$success,
             'suppr'=>$suppr,
             ]);

     }

    /**
     * @Route("/edit", name="edit")
     */
     public function edit()
     {
         return $this->render('article/edit.html.twig', [
             'controller_name' => 'ArticleController',
         ]);
     }

     
    }
 

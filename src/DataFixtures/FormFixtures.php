<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Form;
use App\Entity\Category;
use App\Entity\PageName;
use App\Entity\User;

class FormFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $nombreDeCategorieAccueil=5;
      $nombreDeCategorieAnimaux=10;
      $nombreDeCategorieDifferentAccueil=5;
      $nombreDeCategorieSpectacle=5;
      $nombreDeCategorieTarif=1;
      $nombreDeCategorieLocalisation=5;


        $admin=new User();
        $admin->setUsername("Cindy")
        ->setPassword("123");
        $manager->persist($admin);

        for($i=1;$i<=8;$i++){
                
            if($i==1){
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Accueil')
               ->setNombreDeCategorieParPage($nombreDeCategorieAccueil);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieAccueil;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Accueil n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }

            }
            if($i==2){
       
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Nos Animaux')
               ->setNombreDeCategorieParPage($nombreDeCategorieAnimaux);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieAnimaux;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Animaux n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }
            }
            if($i==3){
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Nos Différents Accueil')
               ->setNombreDeCategorieParPage($nombreDeCategorieDifferentAccueil);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieDifferentAccueil;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Nos Différents Accueil n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }
            }
   
            if($i==4){
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Nos Spectacles')
               ->setNombreDeCategorieParPage($nombreDeCategorieSpectacle);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieSpectacle;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Nos Spectacles n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }

   
            }
            if($i==5){
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Tarif')
               ->setNombreDeCategorieParPage($nombreDeCategorieTarif);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieTarif;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Tarif n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }

            }
            if($i==6){
               $nomDesPages=new PageName();
               $nomDesPages->setTitreDeLaPage('Localisation')
               ->setNombreDeCategorieParPage($nombreDeCategorieLocalisation);
               $manager->persist($nomDesPages);

                  
               for($j=1;$j<=$nombreDeCategorieLocalisation;$j++){
                  $nomcategorie=new Category();
                  $nomcategorie->setTitre("Categorie Nos Localisation n'$j");
                  $manager->persist($nomcategorie);
                  
         

               }

   
            }

           }
      

        $manager->flush();

    }
}

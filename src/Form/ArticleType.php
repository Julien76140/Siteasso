<?php

namespace App\Form;

use App\Entity\Form;
use App\Entity\PageName;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;


class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder  
            ->add('pageName',EntityType::class,[ 'label' => "Page ",'class' => PageName::class,'choice_label'=> function ($category) {
                return $category->getTitreDeLaPage();
            }])
            ->add('category',EntityType::class,
            [ 'label' => "Categorie",'class' => Category::class,'choice_attr'=>[0=>['class'=>'affAccueil'],
            1=>['class'=>'affAccueil'],
            2=>['class'=>'affAccueil'],
            3=>['class'=>'affAccueil'],
            4=>['class'=>'affAccueil'],
            5=>['class'=>'affAnimaux'],
            6=>['class'=>'affAnimaux'],
            7=>['class'=>'affAnimaux'],
            8=>['class'=>'affAnimaux'],
            9=>['class'=>'affAnimaux'],
            10=>['class'=>'affAnimaux'],
            11=>['class'=>'affAnimaux'],
            12=>['class'=>'affAnimaux'],
            13=>['class'=>'affAnimaux'],
            14=>['class'=>'affAnimaux'],
            15=>['class'=>'affDiffAccueil'],
            16=>['class'=>'affDiffAccueil'],
            17=>['class'=>'affDiffAccueil'],
            18=>['class'=>'affDiffAccueil'],
            19=>['class'=>'affDiffAccueil'],
            20=>['class'=>'affSpectacle'],
            21=>['class'=>'affSpectacle'],
            22=>['class'=>'affSpectacle'],
            23=>['class'=>'affSpectacle'],
            24=>['class'=>'affSpectacle'],
            25=>['class'=>'affTarif'],
            26=>['class'=>'affLocalisation'],
            27=>['class'=>'affLocalisation'],
            28=>['class'=>'affLocalisation'],
            29=>['class'=>'affLocalisation'],
            30=>['class'=>'affLocalisation'], 
            ] ,'choice_label'=> function ($category) {
                return $category->getTitre();
            }])
            ->add('contenu')    

            ->add('titre')    
             ->add('lien',UrlType::class, ['required'=>false] )
            ->add('nomlien')
            ->add('lienmap',UrlType::class, ['label' => "Lien Google Map",'label_attr'=>['id'=>'lienGoogle'],'required'=>false])
            ->add('image',UrlType::class, ['required'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Form::class,
        ]);
    }
}

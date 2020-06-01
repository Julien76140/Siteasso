<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * @ORM\Entity(repositoryClass="App\Repository\FormRepository")
 */
class Form
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
 * @Assert\Url(
       *   
       *)

     */
    private $lien;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomlien;

    /**
     * @ORM\Column(type="string", length=500,nullable=true)
            
         * @Assert\Url(
     *   )

     */
    private $lienmap;

      /**
     * @ORM\Column(type="string", length=500,nullable=true)
 * @Assert\Url(
     *   )
     */
     private $image;

     /**
      * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="articles")
      * @ORM\JoinColumn(nullable=false)      
      */
     private $category;

     /**
      * @ORM\ManyToOne(targetEntity="App\Entity\PageName", inversedBy="nomPage")
      */
     private $pageName;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getNomlien(): ?string
    {
        return $this->nomlien;
    }

    public function setNomlien(?string $nomlien): self
    {
        $this->nomlien = $nomlien;

        return $this;
    }

    public function getLienmap(): ?string
    {
        return $this->lienmap;
    }

    public function setLienmap(?string $lienmap): self
    {
        $this->lienmap = $lienmap;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPageName(): ?PageName
    {
        return $this->pageName;
    }

    public function setPageName(?PageName $pageName): self
    {
        $this->pageName = $pageName;

        return $this;
    }

}

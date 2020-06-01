<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageNameRepository")
 */
class PageName
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreDeLaPage;

        /**
     * @ORM\Column(type="integer")
     */
     private $nombreDeCategorieParPage;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Form", mappedBy="pageName")
     */
    private $nomPage;

    public function __construct()
    {
        $this->nomPage = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreDeLaPage(): ?string
    {
        return $this->titreDeLaPage;
    }

    public function setTitreDeLaPage(?string $titreDeLaPage): self
    {
        $this->titreDeLaPage = $titreDeLaPage;

        return $this;
    }
    public function getNombreDeCategorieParPage(): ?int
    {
        return $this->nombreDeCategorieParPage;
    }

    public function setNombreDeCategorieParPage(?int $nombreDeCategorieParPage): self
    {
        $this->nombreDeCategorieParPage = $nombreDeCategorieParPage;

        return $this;
    }

    /**
     * @return Collection|Form[]
     */
    public function getNomPage(): Collection
    {
        return $this->nomPage;
    }

    public function addNomPage(Form $nomPage): self
    {
        if (!$this->nomPage->contains($nomPage)) {
            $this->nomPage[] = $nomPage;
            $nomPage->setPageName($this);
        }

        return $this;
    }

    public function removeNomPage(Form $nomPage): self
    {
        if ($this->nomPage->contains($nomPage)) {
            $this->nomPage->removeElement($nomPage);
            // set the owning side to null (unless already changed)
            if ($nomPage->getPageName() === $this) {
                $nomPage->setPageName(null);
            }
        }

        return $this;
    }
}

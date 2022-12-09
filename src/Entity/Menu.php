<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Alias = null;

    #[ORM\ManyToMany(targetEntity: Page::class, inversedBy: 'menus')]
    private Collection $relation;

    #[ORM\Column]
    private ?int $PageOrder = null;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAlias(): ?string
    {
        return $this->Alias;
    }

    public function setAlias(string $Alias): self
    {
        $this->Alias = $Alias;

        return $this;
    }

    /**
     * @return Collection<int, Page>
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Page $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation->add($relation);
        }

        return $this;
    }

    public function removeRelation(Page $relation): self
    {
        $this->relation->removeElement($relation);

        return $this;
    }

    public function getPageOrder(): ?int
    {
        return $this->PageOrder;
    }

    public function setPageOrder(int $PageOrder): self
    {
        $this->PageOrder = $PageOrder;

        return $this;
    }
}

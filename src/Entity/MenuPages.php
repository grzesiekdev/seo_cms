<?php

namespace App\Entity;

use App\Repository\MenuPagesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuPagesRepository::class)]
class MenuPages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Label = null;

    #[ORM\Column]
    private ?int $PageOrder = null;

    #[ORM\OneToMany(mappedBy: 'menuPages', targetEntity: Page::class)]
    private Collection $Page;

    public function __construct()
    {
        $this->Page = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->Label;
    }

    public function setLabel(string $Label): self
    {
        $this->Label = $Label;

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

    /**
     * @return Collection<int, Page>
     */
    public function getPage(): Collection
    {
        return $this->Page;
    }

    public function addPage(Page $page): self
    {
        if (!$this->Page->contains($page)) {
            $this->Page->add($page);
            $page->setMenuPages($this);
        }

        return $this;
    }

    public function removePage(Page $page): self
    {
        if ($this->Page->removeElement($page)) {
            // set the owning side to null (unless already changed)
            if ($page->getMenuPages() === $this) {
                $page->setMenuPages(null);
            }
        }

        return $this;
    }
}

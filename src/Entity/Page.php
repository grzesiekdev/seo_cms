<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: PageRepository::class)]
#[UniqueEntity('Slug')]
class Page
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 5000, nullable: true)]
    private ?string $Content = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $CreationDate = null;

    #[ORM\Column]
    private ?bool $WasEdited = false;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $Slug = null;

    #[ORM\ManyToOne(inversedBy: 'Page')]
    private ?MenuPages $menuPages = null;

    #[ORM\Column(nullable: true)]
    private ?bool $is_home = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $robots_settings = null;

    #[ORM\Column(nullable: true)]
    private ?int $parent_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->CreationDate;
    }

    public function setCreationDate(\DateTimeInterface $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function isWasEdited(): ?bool
    {
        return $this->WasEdited;
    }

    public function setWasEdited(bool $WasEdited): self
    {
        $this->WasEdited = $WasEdited;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(string $Slug): self
    {
        $this->Slug = $Slug;

        return $this;
    }

    public function getMenuPages(): ?MenuPages
    {
        return $this->menuPages;
    }

    public function setMenuPages(?MenuPages $menuPages): self
    {
        $this->menuPages = $menuPages;

        return $this;
    }

    public function isIsHome(): ?bool
    {
        return $this->is_home;
    }

    public function setIsHome(?bool $is_home): self
    {
        $this->is_home = $is_home;

        return $this;
    }

    public function getRobotsSettings(): ?string
    {
        return $this->robots_settings;
    }

    public function setRobotsSettings(?string $robots_settings): self
    {
        $this->robots_settings = $robots_settings;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }

    public function setParentId(?int $parent_id): self
    {
        $this->parent_id = $parent_id;

        return $this;
    }
}

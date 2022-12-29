<?php

namespace App;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'child_entities')]
class ChildEntity
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\ManyToOne(targetEntity: ParentEntity::class, inversedBy: 'children')]
    private ParentEntity|null $parent = null;

    #[ORM\ManyToOne(targetEntity: ChildEntity::class, cascade: ['remove'])]
    private ChildEntity|null $origin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getParent(): ?ParentEntity
    {
        return $this->parent;
    }

    public function setParent(?ParentEntity $parent): void
    {
        $this->parent = $parent;
    }

    public function getOrigin(): ?ChildEntity
    {
        return $this->origin;
    }

    public function setOrigin(?ChildEntity $origin): void
    {
        $this->origin = $origin;
    }
}
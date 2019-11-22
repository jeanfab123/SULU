<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestEntityRepository")
 */
class TestEntity
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
    private $var1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $var2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVar1(): ?string
    {
        return $this->var1;
    }

    public function setVar1(?string $var1): self
    {
        $this->var1 = $var1;

        return $this;
    }

    public function getVar2(): ?string
    {
        return $this->var2;
    }

    public function setVar2(string $var2): self
    {
        $this->var2 = $var2;

        return $this;
    }
}

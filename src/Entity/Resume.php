<?php

namespace App\Entity;

use App\Repository\ResumeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResumeRepository::class)
 */
class Resume
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="text")
     */
    private $whoAmI;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getWhoAmI(): ?string
    {
        return $this->whoAmI;
    }

    public function setWhoAmI(string $whoAmI): self
    {
        $this->whoAmI = $whoAmI;

        return $this;
    }
}

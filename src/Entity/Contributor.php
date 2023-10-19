<?php

namespace App\Entity;

use App\Repository\ContributorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContributorRepository::class)]
class Contributor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id ;

 

    /**
    * @ORM\ManyToOne(targetEntity="App\Entity\Collection", inversedBy="contributors")
     * @ORM\JoinColumn(nullable=false)
     */
    private $collection;
    
    #[ORM\Column(length: 255)]
    private ?string $user_names = null;

    #[ORM\Column(nullable: true)]
    private ?float $amout = null;

    // Геттери і сеттери для полів, якщо потрібно
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserNames(): ?string
    {
        return $this->user_names;
    }

    public function setUserNames(string $user_names): static
    {
        $this->user_names = $user_names;

        return $this;
    }

    public function getAmout(): ?float
    {
        return $this->amout;
    }

    public function setAmout(?float $amout): static
    {
        $this->amout = $amout;

        return $this;
    }
}

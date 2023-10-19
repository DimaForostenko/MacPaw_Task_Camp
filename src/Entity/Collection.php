<?php

namespace App\Entity;

use App\Repository\CollectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CollectionRepository::class)]
class Collection
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private  $id ;
  /**
     * @ORM\Column(type="string")
     */
    #[ORM\Column(type:"string",length: 255)]
    private $title ;

    /**
     * @ORM\Column(type="text")
     */
    
    private $description;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $targetAmount;

    /**
     * @ORM\Column(type="string")
     */
    private $link;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Contributor", mappedBy="collection")
     */
    private $contributors;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
}

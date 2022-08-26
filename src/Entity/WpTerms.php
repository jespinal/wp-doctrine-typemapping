<?php

namespace App\Entity;

use App\Repository\WpTermsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpTermsRepository::class)
 * @ORM\Table(
      name="wp_terms", 
      indexes={
          @ORM\Index(name="slug", columns={"slug"}, options={"lengths":{191}}),
          @ORM\Index(name="name", columns={"name"}, options={"lengths":{191}})
      }
   )
 */
class WpTerms
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $term_id;

    /**
     * @ORM\Column(type="string", length=200, options={"default":""})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=200, options={"default":""})
     */
    private $slug;

    /**
     * @ORM\Column(type="bigint", length=10, options={"default":0})
     */
    private $term_group;

    public function getTermId(): ?string
    {
        return $this->term_id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTermGroup(): ?int
    {
        return $this->term_group;
    }

    public function setTermGroup(int $term_group): self
    {
        $this->term_group = $term_group;

        return $this;
    }
}

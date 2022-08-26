<?php

namespace App\Entity;

use App\Repository\WpTermTaxonomyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpTermTaxonomyRepository::class)
 * @ORM\Table(
      name="wp_term_taxonomy", 
      indexes={
          @ORM\Index(name="term_id_taxonomy", columns={"term_id","taxonomy"}),
          @ORM\Index(name="taxonomy", columns={"taxonomy"})
      },
      uniqueConstraints={
          @ORM\UniqueConstraint(name="term_id_taxonomy", fields={"term_id", "taxonomy"})
      }
   )
 */
class WpTermTaxonomy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $term_taxonomy_id;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $term_id;

    /**
     * @ORM\Column(type="string",length=32,options={"default":""})
     */
    private $taxonomy;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $parent;

    /**
     * @ORM\Column(type="bigint", length=20, options={"default":0})
     */
    private $count;

    public function getTermTaxonomyId(): ?string
    {
        return $this->term_taxonomy_id;
    }

    public function getTermId(): ?string
    {
        return $this->term_id;
    }

    public function setTermId(string $term_id): self
    {
        $this->term_id = $term_id;

        return $this;
    }

    public function getTaxonomy(): ?string
    {
        return $this->taxonomy;
    }

    public function setTaxonomy(string $taxonomy): self
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getCount(): ?string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }
}

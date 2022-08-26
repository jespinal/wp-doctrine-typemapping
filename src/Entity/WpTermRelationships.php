<?php

namespace App\Entity;

use App\Repository\WpTermRelationshipsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpTermRelationshipsRepository::class)
 * @ORM\Table(
      name="wp_term_relationships", 
      indexes={
          @ORM\Index(name="term_taxonomy_id", columns={"term_taxonomy_id"})
      }
   )
 */
class WpTermRelationships
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $object_id;

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $term_taxonomy_id;

    /**
     * @ORM\Column(type="integer", length=11, options={"default":0})
     */
    private $term_order;

    public function getObjectId(): ?string
    {
        return $this->object_id;
    }

    public function getTermTaxonomyId(): ?string
    {
        return $this->term_taxonomy_id;
    }

    public function getTermOrder(): ?int
    {
        return $this->term_order;
    }

    public function setTermOrder(int $term_order): self
    {
        $this->term_order = $term_order;

        return $this;
    }
}

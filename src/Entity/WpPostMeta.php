<?php

namespace App\Entity;

use App\Repository\WpPostMetaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpPostMetaRepository::class)
 * @ORM\Table(
      name="wp_postmeta", 
      indexes={
          @ORM\Index(name="post_id", columns={"post_id"}),
          @ORM\Index(name="meta_key", columns={"meta_key"}, options={"lengths":{191}})
      }
   )
 */
class WpPostMeta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $meta_id;
    
    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $post_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"defualt": null})
     */
    private $meta_key;

    /**
     * @ORM\Column(type="text", nullable=true, options={"defualt": null})
     */
    private $meta_value;

    public function getMetaId(): ?string
    {
        return $this->meta_id;
    }

    public function getPostId(): ?string
    {
        return $this->post_id;
    }

    public function setPostId(string $post_id): self
    {
        $this->post_id = $post_id;

        return $this;
    }

    public function getMetaKey(): ?string
    {
        return $this->meta_key;
    }

    public function setMetaKey(?string $meta_key): self
    {
        $this->meta_key = $meta_key;

        return $this;
    }

    public function getMetaValue(): ?string
    {
        return $this->meta_value;
    }

    public function setMetaValue(?string $meta_value): self
    {
        $this->meta_value = $meta_value;

        return $this;
    }
}

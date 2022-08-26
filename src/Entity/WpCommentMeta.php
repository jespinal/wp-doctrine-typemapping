<?php

namespace App\Entity;

use App\Repository\WpCommentMetaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpCommentMetaRepository::class)
 * @ORM\Table(
      name="wp_commentmeta", 
      indexes={
          @ORM\Index(name="comment_id", columns={"comment_id"}),
          @ORM\Index(name="meta_key", columns={"meta_key"}, options={"lengths":{191}})
      }
   )
 */
class WpCommentMeta
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
    private $comment_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, options={"default":null})
     */
    private $meta_key;

    /**
     * @ORM\Column(type="text", nullable=true, options={"default":null})
     */
    private $meta_value;

    public function getMetaId(): ?string
    {
        return $this->meta_id;
    }

    public function getCommentId(): ?string
    {
        return $this->comment_id;
    }

    public function setCommentId(string $comment_id): self
    {
        $this->comment_id = $comment_id;

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

<?php

namespace App\Entity;

use App\Repository\WpUserMetaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpUserMetaRepository::class)
 * @ORM\Table(
      name="wp_usermeta",
      indexes={
         @ORM\Index(
              name="user_id",
              columns={"user_id"}
         ),
         @ORM\Index(
              name="meta_key",
              columns={"meta_key"},
              options={"lengths":{191}}
         )
      }
   )
 */
class WpUserMeta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $umeta_id;

    /**
     * @ORM\Column(
         type="bigint", 
         length=20, 
         options={
               "unsigned": true, 
               "default": 0
           }
       )
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $meta_key;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $meta_value;

    public function getUmetaId(): ?string
    {
        return $this->umeta_id;
    }

    public function getUserId(): ?string
    {
        return $this->user_id;
    }

    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

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

<?php

namespace App\Entity;

use App\Repository\WpOptionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpOptionsRepository::class)
 * @ORM\Table(
      name="wp_options", 
      indexes={
          @ORM\Index(name="option_name", columns={"option_name"}),
          @ORM\Index(name="autoload", columns={"autoload"})
      },
      uniqueConstraints={
          @ORM\UniqueConstraint(name="option_name", fields={"option_name"})
      }
   )
 */
class WpOptions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $option_id;

    /**
     * @ORM\Column(type="string", length=191, options={"default":""})
     */
    private $option_name;

    /**
     * @ORM\Column(type="text")
     */
    private $option_value;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"yes"})
     */
    private $autoload;

    public function getOptionId(): ?string
    {
        return $this->option_id;
    }

    public function getOptionName(): ?string
    {
        return $this->option_name;
    }

    public function setOptionName(string $option_name): self
    {
        $this->option_name = $option_name;

        return $this;
    }

    public function getOptionValue(): ?string
    {
        return $this->option_value;
    }

    public function setOptionValue(string $option_value): self
    {
        $this->option_value = $option_value;

        return $this;
    }

    public function getAutoload(): ?string
    {
        return $this->autoload;
    }

    public function setAutoload(string $autoload): self
    {
        $this->autoload = $autoload;

        return $this;
    }
}

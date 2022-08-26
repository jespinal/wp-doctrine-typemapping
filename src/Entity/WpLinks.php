<?php

namespace App\Entity;

use App\Repository\WpLinksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpLinksRepository::class)
 * @ORM\Table(
       name="wp_links", 
       indexes={
           @ORM\Index(name="link_visible", columns={"link_visible"})
       }
   )
 */
class WpLinks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $link_id;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_url;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_name;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_image;

    /**
     * @ORM\Column(type="string", length=25, options={"default":""})
     */
    private $link_target;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_description;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"Y"})
     */
    private $link_visible;

    /**
     * @ORM\Column(type="bigint", length=20, options={"default":"1","unsigned":true})
     */
    private $link_owner;

    /**
     * @ORM\Column(type="integer", length=11, options={"default":0})
     */
    private $link_rating;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $link_updated;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_rel;

    /**
     * @ORM\Column(type="text", length=16777215)
     */
    private $link_notes;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $link_rss;

    public function getLinkId(): ?string
    {
        return $this->link_id;
    }

    public function getLinkUrl(): ?string
    {
        return $this->link_url;
    }

    public function setLinkUrl(string $link_url): self
    {
        $this->link_url = $link_url;

        return $this;
    }

    public function getLinkName(): ?string
    {
        return $this->link_name;
    }

    public function setLinkName(string $link_name): self
    {
        $this->link_name = $link_name;

        return $this;
    }

    public function getLinkImage(): ?string
    {
        return $this->link_image;
    }

    public function setLinkImage(string $link_image): self
    {
        $this->link_image = $link_image;

        return $this;
    }

    public function getLinkTarget(): ?string
    {
        return $this->link_target;
    }

    public function setLinkTarget(string $link_target): self
    {
        $this->link_target = $link_target;

        return $this;
    }

    public function getLinkDescription(): ?string
    {
        return $this->link_description;
    }

    public function setLinkDescription(string $link_description): self
    {
        $this->link_description = $link_description;

        return $this;
    }

    public function getLinkVisible(): ?string
    {
        return $this->link_visible;
    }

    public function setLinkVisible(string $link_visible): self
    {
        $this->link_visible = $link_visible;

        return $this;
    }

    public function getLinkOwner(): ?string
    {
        return $this->link_owner;
    }

    public function setLinkOwner(string $link_owner): self
    {
        $this->link_owner = $link_owner;

        return $this;
    }

    public function getLinkRating(): ?int
    {
        return $this->link_rating;
    }

    public function setLinkRating(int $link_rating): self
    {
        $this->link_rating = $link_rating;

        return $this;
    }

    public function getLinkUpdated(): ?\DateTimeInterface
    {
        return $this->link_updated;
    }

    public function setLinkUpdated(\DateTimeInterface $link_updated): self
    {
        $this->link_updated = $link_updated;

        return $this;
    }

    public function getLinkRel(): ?string
    {
        return $this->link_rel;
    }

    public function setLinkRel(string $link_rel): self
    {
        $this->link_rel = $link_rel;

        return $this;
    }

    public function getLinkNotes(): ?string
    {
        return $this->link_notes;
    }

    public function setLinkNotes(string $link_notes): self
    {
        $this->link_notes = $link_notes;

        return $this;
    }

    public function getLinkRss(): ?string
    {
        return $this->link_rss;
    }

    public function setLinkRss(string $link_rss): self
    {
        $this->link_rss = $link_rss;

        return $this;
    }
}

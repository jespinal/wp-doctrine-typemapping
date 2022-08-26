<?php

namespace App\Entity;

use App\Repository\WpPostsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpPostsRepository::class)
 * @ORM\Table(
      name="wp_posts", 
      indexes={
          @ORM\Index(name="post_name", columns={"post_name"}, options={"lengths":{191}}),
          @ORM\Index(name="type_status_date", columns={"post_type", "post_status", "post_date","ID"}),
          @ORM\Index(name="post_parent", columns={"post_parent"}),
          @ORM\Index(name="post_author", columns={"post_author"})
      }
   )
 */
class WpPosts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $ID;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $post_author;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $post_date;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $post_date_gmt;

    /**
     * @ORM\Column(type="text")
     */
    private $post_content;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $post_title;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $post_excerpt;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"publish"})
     */
    private $post_status;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"open"})
     */
    private $comment_status;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"open"})
     */
    private $ping_status;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $post_password;

    /**
     * @ORM\Column(type="string", length=200, options={"default":""})
     */
    private $post_name;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $to_ping;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $pinged;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $post_modified;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $post_modified_gmt;

    /**
     * @ORM\Column(type="text")
     */
    private $post_content_filtered;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $post_parent;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $guid;

    /**
     * @ORM\Column(type="integer", length=11, options={"default":0})
     */
    private $menu_order;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"post"})
     */
    private $post_type;

    /**
     * @ORM\Column(type="string", length=100, options={"default":""})
     */
    private $post_mime_type;

    /**
     * @ORM\Column(type="bigint", length=20, options={"default":0})
     */
    private $comment_count;

    public function getID(): ?string
    {
        return $this->ID;
    }

    public function getPostAuthor(): ?string
    {
        return $this->post_author;
    }

    public function setPostAuthor(string $post_author): self
    {
        $this->post_author = $post_author;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->post_date;
    }

    public function setPostDate(\DateTimeInterface $post_date): self
    {
        $this->post_date = $post_date;

        return $this;
    }

    public function getPostDateGmt(): ?\DateTimeInterface
    {
        return $this->post_date_gmt;
    }

    public function setPostDateGmt(\DateTimeInterface $post_date_gmt): self
    {
        $this->post_date_gmt = $post_date_gmt;

        return $this;
    }

    public function getPostContent(): ?string
    {
        return $this->post_content;
    }

    public function setPostContent(string $post_content): self
    {
        $this->post_content = $post_content;

        return $this;
    }

    public function getPostTitle(): ?string
    {
        return $this->post_title;
    }

    public function setPostTitle(string $post_title): self
    {
        $this->post_title = $post_title;

        return $this;
    }

    public function getPostExcerpt(): ?string
    {
        return $this->post_excerpt;
    }

    public function setPostExcerpt(string $post_excerpt): self
    {
        $this->post_excerpt = $post_excerpt;

        return $this;
    }

    public function getPostStatus(): ?string
    {
        return $this->post_status;
    }

    public function setPostStatus(string $post_status): self
    {
        $this->post_status = $post_status;

        return $this;
    }

    public function getCommentStatus(): ?string
    {
        return $this->comment_status;
    }

    public function setCommentStatus(string $comment_status): self
    {
        $this->comment_status = $comment_status;

        return $this;
    }

    public function getPingStatus(): ?string
    {
        return $this->ping_status;
    }

    public function setPingStatus(string $ping_status): self
    {
        $this->ping_status = $ping_status;

        return $this;
    }

    public function getPostPassword(): ?string
    {
        return $this->post_password;
    }

    public function setPostPassword(string $post_password): self
    {
        $this->post_password = $post_password;

        return $this;
    }

    public function getPostName(): ?string
    {
        return $this->post_name;
    }

    public function setPostName(string $post_name): self
    {
        $this->post_name = $post_name;

        return $this;
    }

    public function getToPing(): ?string
    {
        return $this->to_ping;
    }

    public function setToPing(string $to_ping): self
    {
        $this->to_ping = $to_ping;

        return $this;
    }

    public function getPinged(): ?string
    {
        return $this->pinged;
    }

    public function setPinged(string $pinged): self
    {
        $this->pinged = $pinged;

        return $this;
    }

    public function getPostModified(): ?\DateTimeInterface
    {
        return $this->post_modified;
    }

    public function setPostModified(\DateTimeInterface $post_modified): self
    {
        $this->post_modified = $post_modified;

        return $this;
    }

    public function getPostModifiedGmt(): ?\DateTimeInterface
    {
        return $this->post_modified_gmt;
    }

    public function setPostModifiedGmt(\DateTimeInterface $post_modified_gmt): self
    {
        $this->post_modified_gmt = $post_modified_gmt;

        return $this;
    }

    public function getPostContentFiltered(): ?string
    {
        return $this->post_content_filtered;
    }

    public function setPostContentFiltered(string $post_content_filtered): self
    {
        $this->post_content_filtered = $post_content_filtered;

        return $this;
    }

    public function getPostParent(): ?string
    {
        return $this->post_parent;
    }

    public function setPostParent(string $post_parent): self
    {
        $this->post_parent = $post_parent;

        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    public function getMenuOrder(): ?int
    {
        return $this->menu_order;
    }

    public function setMenuOrder(int $menu_order): self
    {
        $this->menu_order = $menu_order;

        return $this;
    }

    public function getPostType(): ?string
    {
        return $this->post_type;
    }

    public function setPostType(string $post_type): self
    {
        $this->post_type = $post_type;

        return $this;
    }

    public function getPostMimeType(): ?string
    {
        return $this->post_mime_type;
    }

    public function setPostMimeType(string $post_mime_type): self
    {
        $this->post_mime_type = $post_mime_type;

        return $this;
    }

    public function getCommentCount(): ?string
    {
        return $this->comment_count;
    }

    public function setCommentCount(string $comment_count): self
    {
        $this->comment_count = $comment_count;

        return $this;
    }
}

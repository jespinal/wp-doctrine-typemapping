<?php

namespace App\Entity;

use App\Repository\WpCommentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpCommentsRepository::class)
 * @ORM\Table(
       name="wp_comments", 
       indexes={
           @ORM\Index(name="comment_date_gmt", columns={"comment_date_gmt"}), 
           @ORM\Index(name="comment_post_ID", columns={"comment_post_ID"}), 
           @ORM\Index(name="comment_parent", columns={"comment_parent"}), 
           @ORM\Index(name="comment_approved_date_gmt", columns={"comment_approved", "comment_date_gmt"}), 
           @ORM\Index(name="comment_author_email", columns={"comment_author_email"}, options={"lengths":{10}})
       }
   )
 */
class WpComments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", options={"unsigned":true})
     */
    private $comment_ID;

    /**
     * @ORM\Column(type="bigint", options={"unsigned":true,"default":0})
     */
    private $comment_post_ID;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $comment_author;

    /**
     * @ORM\Column(type="string", length=100, options={"default":""})
     */
    private $comment_author_email;

    /**
     * @ORM\Column(type="string", length=200, options={"default":""})
     */
    private $comment_author_url;

    /**
     * @ORM\Column(type="string", length=100, options={"default":""})
     */
    private $comment_author_IP;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $comment_date;

    /**
     * @ORM\Column(type="datetime", options={"default":"0000-00-00 00:00:00"})
     */
    private $comment_date_gmt;

    /**
     * @ORM\Column(type="text", length=65535)
     */
    private $comment_content;

    /**
     * @ORM\Column(type="integer", length=11, options={"default":0})
     */
    private $comment_karma;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"1"})
     */
    private $comment_approved;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    private $comment_agent;

    /**
     * @ORM\Column(type="string", length=20, options={"default":"comment"})
     */
    private $comment_type;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $comment_parent;

    /**
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true, "default":0})
     */
    private $user_id;

    public function getCommentID(): ?string
    {
        return $this->comment_ID;
    }

    public function getCommentPostID(): ?string
    {
        return $this->comment_post_ID;
    }

    public function setCommentPostID(string $comment_post_ID): self
    {
        $this->comment_post_ID = $comment_post_ID;

        return $this;
    }

    public function getCommentAuthor(): ?string
    {
        return $this->comment_author;
    }

    public function setCommentAuthor(string $comment_author): self
    {
        $this->comment_author = $comment_author;

        return $this;
    }

    public function getCommentAuthorEmail(): ?string
    {
        return $this->comment_author_email;
    }

    public function setCommentAuthorEmail(string $comment_author_email): self
    {
        $this->comment_author_email = $comment_author_email;

        return $this;
    }

    public function getCommentAuthorUrl(): ?string
    {
        return $this->comment_author_url;
    }

    public function setCommentAuthorUrl(string $comment_author_url): self
    {
        $this->comment_author_url = $comment_author_url;

        return $this;
    }

    public function getCommentAuthorIP(): ?string
    {
        return $this->comment_author_IP;
    }

    public function setCommentAuthorIP(string $comment_author_IP): self
    {
        $this->comment_author_IP = $comment_author_IP;

        return $this;
    }

    public function getCommentDate(): ?\DateTimeInterface
    {
        return $this->comment_date;
    }

    public function setCommentDate(\DateTimeInterface $comment_date): self
    {
        $this->comment_date = $comment_date;

        return $this;
    }

    public function getCommentDateGmt(): ?\DateTimeInterface
    {
        return $this->comment_date_gmt;
    }

    public function setCommentDateGmt(\DateTimeInterface $comment_date_gmt): self
    {
        $this->comment_date_gmt = $comment_date_gmt;

        return $this;
    }

    public function getCommentContent(): ?string
    {
        return $this->comment_content;
    }

    public function setCommentContent(string $comment_content): self
    {
        $this->comment_content = $comment_content;

        return $this;
    }

    public function getCommentKarma(): ?int
    {
        return $this->comment_karma;
    }

    public function setCommentKarma(int $comment_karma): self
    {
        $this->comment_karma = $comment_karma;

        return $this;
    }

    public function getCommentApproved(): ?string
    {
        return $this->comment_approved;
    }

    public function setCommentApproved(string $comment_approved): self
    {
        $this->comment_approved = $comment_approved;

        return $this;
    }

    public function getCommentAgent(): ?string
    {
        return $this->comment_agent;
    }

    public function setCommentAgent(string $comment_agent): self
    {
        $this->comment_agent = $comment_agent;

        return $this;
    }

    public function getCommentType(): ?string
    {
        return $this->comment_type;
    }

    public function setCommentType(string $comment_type): self
    {
        $this->comment_type = $comment_type;

        return $this;
    }

    public function getCommentParent(): ?string
    {
        return $this->comment_parent;
    }

    public function setCommentParent(string $comment_parent): self
    {
        $this->comment_parent = $comment_parent;

        return $this;
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
}

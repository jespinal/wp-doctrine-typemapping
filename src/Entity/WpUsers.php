<?php

namespace App\Entity;

use App\Repository\WpUsersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WpUsersRepository::class)
 * @ORM\Table(
     name="wp_users", 
         indexes={
             @ORM\Index(name="user_login_key", columns={"user_login"}), 
             @ORM\Index(name="user_nicename", columns={"user_nicename"}),
             @ORM\Index(name="user_email", columns={"user_email"})
         }
    )
 */
class WpUsers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="bigint", length=20, options={"unsigned":true})
     */
    private $ID;

    /**
     * @ORM\Column(
           type="string", 
           length=60,
           options={
               "default":""
           }
       )
     */
    private $user_login;

    /**
     * @ORM\Column(
           type="string", 
           length=255,
           options={
               "default":""
           }
       )
     */
    private $user_pass;

    /**
     * @ORM\Column(
           type="string", 
           length=50,
           options={
               "default":""
           }
       )
     */
    private $user_nicename;

    /**
     * @ORM\Column(
           type="string", 
           length=100,
           options={
               "default":""
           }
       )
     */
    private $user_email;

    /**
     * @ORM\Column(
           type="string", 
           length=100,
           options={
               "default":""
           }
       )
     */
    private $user_url;

    /**
     * @ORM\Column(
         type="datetime", 
         options={"default":"0000-00-00 00:00:00"}
       )
     */
    private $user_registered;

    /**
     * @ORM\Column(
           type="string", 
           length=255,
           options={
               "default":""
           }
       )
     */
    private $user_activation_key;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    private $user_status;

    /**
     * @ORM\Column(
           type="string", 
           length=250,
           options={
               "default":""
           }
       )
     */
    private $display_name;

    /**
     * @ORM\Column(
           type="boolean", 
           length=1,
           options={"default":0}
       )
     */
    private $deleted;

    /**
     * @ORM\Column(
           type="boolean",
           length=1,
           options={"default":0}
       )
     */
    private $spam;

    public function getID(): ?string
    {
        return $this->ID;
    }

    public function getUserLogin(): ?string
    {
        return $this->user_login;
    }

    public function setUserLogin(string $user_login): self
    {
        $this->user_login = $user_login;

        return $this;
    }

    public function getUserPass(): ?string
    {
        return $this->user_pass;
    }

    public function setUserPass(string $user_pass): self
    {
        $this->user_pass = $user_pass;

        return $this;
    }

    public function getUserNicename(): ?string
    {
        return $this->user_nicename;
    }

    public function setUserNicename(string $user_nicename): self
    {
        $this->user_nicename = $user_nicename;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->user_email;
    }

    public function setUserEmail(string $user_email): self
    {
        $this->user_email = $user_email;

        return $this;
    }

    public function getUserUrl(): ?string
    {
        return $this->user_url;
    }

    public function setUserUrl(string $user_url): self
    {
        $this->user_url = $user_url;

        return $this;
    }

    public function getUserRegistered(): ?\DateTimeInterface
    {
        return $this->user_registered;
    }

    public function setUserRegistered(\DateTimeInterface $user_registered): self
    {
        $this->user_registered = $user_registered;

        return $this;
    }

    public function getUserActivationKey(): ?string
    {
        return $this->user_activation_key;
    }

    public function setUserActivationKey(string $user_activation_key): self
    {
        $this->user_activation_key = $user_activation_key;

        return $this;
    }

    public function getUserStatus(): ?int
    {
        return $this->user_status;
    }

    public function setUserStatus(int $user_status): self
    {
        $this->user_status = $user_status;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->display_name;
    }

    public function setDisplayName(string $display_name): self
    {
        $this->display_name = $display_name;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function isSpam(): ?bool
    {
        return $this->spam;
    }

    public function setSpam(bool $spam): self
    {
        $this->spam = $spam;

        return $this;
    }
}

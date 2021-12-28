<?php

namespace Application\Entities;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Repositories\UserRepository")
 * @ORM\Table(name="user")
 */

class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $username;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $password;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected string $email;

    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    protected DateTime $created;

	/**
	 * @ORM\OneToMany (targetEntity="Post", mappedBy="user", cascade={"persist", "remove"})
	 * @var Collection
	 */
	protected Collection $posts;

    public function __construct()
    {
        $this->created = new DateTime("now");
		$this->posts = new ArrayCollection;
    }

    // ***** Getters *****

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

	/**
	 * @return DateTime
	 */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    // ***** Setters *****

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

	/**
	 * @return Collection
	 */
	public function getPosts(): Collection
	{
		return $this->posts;
	}

}
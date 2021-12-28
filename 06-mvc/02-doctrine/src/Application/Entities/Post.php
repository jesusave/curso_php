<?php

namespace Application\Entities;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Post")
 */
class Post
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column (type="integer")
	 * @var int
	 */
	protected int $id;

	/**
	 * @ORM\Column (type="string")
	 * @var string
	 */
	protected string $title;

	/**
	 * @ORM\Column (type="string")
	 * @var string
	 */
	protected string $body;

	/**
	 * @ORM\Column (type="datetime")
	 * @var DateTime
	 */
	protected DateTime $created;

	/**
	 * @ORM\ManyToOne (targetEntity="User", inversedBy="posts")
	 * @var User
	 */
	protected User $user;

	public function __construct(){
		$this->created = new DateTime("now");
	}

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
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getBody(): string
	{
		return $this->body;
	}

	/**
	 * @param string $body
	 */
	public function setBody(string $body): void
	{
		$this->body = $body;
	}

	/**
	 * @return DateTime
	 */
	public function getCreated(): DateTime
	{
		return $this->created;
	}

	/**
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 */
	public function setUser(User $user): void
	{
		$this->user = $user;
	}

}
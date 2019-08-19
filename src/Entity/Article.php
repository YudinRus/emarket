<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $short_title;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $text;

    /**
     * @ORM\Column(type="string")
     */
    private $author;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished;

      public function __construct()
    {
        $this->date = new \DateTimeImmutable();
        $this->author = 'Admin';
        $this->isPublished = false;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getShortTitle()
    {
        return $this->short_title;
    }

      public function setShortTitle($short_title): string
    {
        $this->short_title = $short_title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): string
    {
        $this->title = $title;
    }

      public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): \DateTimeImmutable
    {
        $this->date = $date;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text): string
    {
        $this->text = $text;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): string
    {
        $this->author = $author;
    }

    public function getOn()
    {
        return $this->isPublished;
    }

    public function setOn($on): bool
    {
        $this->isPublished = $on;
    }

}
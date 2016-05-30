<?php
namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="folder")
 */
class Folder
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity="DefaultBundle\Entity\Image", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cover;

    /**
     * @var string
     *
     * @ORM\Column(name="edit_slug", type="string", length=255)
     */
    private $edit_slug;

    /**
     * @var string
     *
     * @ORM\Column(name="show_slug", type="string", length=255)
     */
    private $show_slug;

    public function __construct()
    {
        $this->size = "tile-square";
        $this->edit_slug = md5(uniqid(mt_rand(), true));
        $this->show_slug = md5(uniqid(mt_rand(), true));
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Folder
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cover
     *
     * @param \DefaultBundle\Entity\Image $cover
     * @return Folder
     */
    public function setCover(\DefaultBundle\Entity\Image $cover = null)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return \DefaultBundle\Entity\Image
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Folder
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set edit_slug
     *
     * @param string $editSlug
     * @return Folder
     */
    public function setEditSlug($editSlug)
    {
        $this->edit_slug = $editSlug;

        return $this;
    }

    /**
     * Get edit_slug
     *
     * @return string
     */
    public function getEditSlug()
    {
        return $this->edit_slug;
    }

    /**
     * Set show_slug
     *
     * @param string $showSlug
     * @return Folder
     */
    public function setShowSlug($showSlug)
    {
        $this->show_slug = $showSlug;

        return $this;
    }

    /**
     * Get show_slug
     *
     * @return string
     */
    public function getShowSlug()
    {
        return $this->show_slug;
    }
}

<?php
namespace DefaultBundle\Entity;

use Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="image")
 */
class Image
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
     * @ORM\ManyToOne(targetEntity="DefaultBundle\Entity\Folder")
     * @ORM\JoinColumn(nullable=false)
     */
    private $folder;

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
     * Set folder
     *
     * @param \DefaultBundle\Entity\Folder $folder
     * @return Image
     */
    public function setFolder(\DefaultBundle\Entity\Folder $folder)
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get folder
     *
     * @return \DefaultBundle\Entity\Folder 
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;

    /**
     * @param Media $media
     */
    public function setMedia(Media $media)
    {
        $this->media = $media;
    }

    /**
     * @return Media
     */
    public function getMedia()
    {
        return $this->media;
    }
}

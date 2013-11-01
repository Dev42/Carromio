<?php

namespace Dev42\Carrom\Core\SearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Behavior;

use Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\VehicleBrand;

/**
 * Basic Models Entity
 *
 * @author André Simões <sou@oand.re>
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="brands")
 */
class Brand implements VehicleBrand{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="name", type="string", unique=true)
     */
    protected $name;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Car", mappedBy="brand")
     */
    protected $cars;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Model", mappedBy="brand")
     */
    protected $models;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     * @Behavior\Timestampable(on="create")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Behavior\Timestampable(on="update")
     */
    protected $updatedAt;
    
    /**
     * Get brand id
     * 
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get brand name
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get brand created time
     * 
     * @return \DateTime
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }

    /**
     * Get brand updated time
     * 
     * @return \DateTime
     */
    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    /**
     * Set brand id
     * 
     * @param int $id
     * @return \Dev42\Carrom\Core\SearchBundle\Entity\Brand
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set brand name
     * 
     * @param type $name
     * @return \Dev42\Carrom\Core\SearchBundle\Entity\Brand
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set brand created at
     * 
     * @param \DateTime $createdAt
     * @return \Dev42\Carrom\Core\SearchBundle\Entity\Brand
     */
    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Set brand updated at
     * 
     * @param \DateTime $updatedAt
     * @return \Dev42\Carrom\Core\SearchBundle\Entity\Brand
     */
    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }

}

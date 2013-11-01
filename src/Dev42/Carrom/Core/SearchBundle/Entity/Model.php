<?php

namespace Dev42\Carrom\Core\SearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Behavior;

use Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\VehicleModel;

/**
 * Basic Models Entity
 *
 * @author André Simões <sou@oand.re>
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="models")
 */
class Model implements VehicleModel{
    
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
     * @ORM\OneToMany(targetEntity="Car", mappedBy="model")
     */
    protected $cars;
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\Entity\Brand
     *
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="models")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     */
    protected $brand;

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
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCars() {
        return $this->cars;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCars(\Doctrine\Common\Collections\ArrayCollection $cars) {
        $this->cars = $cars;
    }

    public function setBrand(Dev42\Carrom\Core\SearchBundle\Entity\Brand $brand) {
        $this->brand = $brand;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

}

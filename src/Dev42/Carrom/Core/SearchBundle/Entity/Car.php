<?php

namespace Dev42\Carrom\Core\SearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Behavior;

/**
 * Car Entity of Car
 *
 * @author André Simões <sou@oand.re>
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="cars")
 */
class Car{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\Entity\Brand
     *
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="cars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    protected $brand;
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\Entity\Color
     *
     * @ORM\ManyToOne(targetEntity="Color", inversedBy="cars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    protected $color;
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\Entity\Model
     *
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="cars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    protected $model;
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\Entity\CarType
     *
     * @ORM\ManyToOne(targetEntity="CarType", inversedBy="cars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    protected $type;
    
    /**
     * @var Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle\Entity\CarVersion
     *
     * @ORM\ManyToOne(targetEntity="CarVersion", inversedBy="cars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     */
    protected $version;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="transmission", type="string")
     */
    protected $transmission;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="doors", type="integer")
     */
    protected $doors;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="fuel", type="string")
     */
    protected $fuel;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="city", type="string")
     */
    protected $city;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="state", type="string", length=2)
     */
    protected $state;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="year_fabrication", type="integer", length=4)
     */
    protected $yearFabrication;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="year_model", type="integer", length=4)
     */
    protected $yearModel;
    
    /**
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=false)
     */
    protected $price;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="plaque", type="string", length=8)
     */
    protected $plaque;
    
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getBrand() {
        return $this->brand;
    }

    public function getColor() {
        return $this->color;
    }

    public function getModel() {
        return $this->model;
    }

    public function getType() {
        return $this->type;
    }

    public function getVersion() {
        return $this->version;
    }

    public function getTransmission() {
        return $this->transmission;
    }

    public function getDoors() {
        return $this->doors;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    public function setTransmission($transmission) {
        $this->transmission = $transmission;
        return $this;
    }

    public function setDoors($doors) {
        $this->doors = $doors;
        return $this;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
        return $this;
    }


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Car
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
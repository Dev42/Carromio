<?php

namespace Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle;

/**
 * Interface that says what a basicly vehicle has
 *
 * @author André Simões <sou@oand.re>
 */
interface VehicleInterface {
    
    /**
     * Set the vehicle brand
     * 
     * @param VehicleBrand $brand
     * @return self
     */
    public function setBrand($brand);
    
    /**
     * Get the car brand
     * 
     * @return VehicleBrand
     */
    public function getBrand();
    
    /**
     * Set the car model
     * 
     * @param VehicleModel $model
     * @return self
     */
    public function setModel($model);
    
    /**
     * Get the vehicle model
     * 
     * @return VehicleModel
     */
    public function getModel();
    
    /**
     * Set the car color
     * 
     * @param VehicleColor $color
     * @return self
     */
    public function setColor($color);
    
    /**
     * Get the car color
     * 
     * @return VehicleColor
     */
    public function getColor();
    
    /**
     * Set vehicle type
     * 
     * @param VehicleType
     * @return self
     */
    public function setType($type);
    
    /**
     * Get vehicle type
     * 
     * @return VehicleType
     */
    public function getType();
    
}

<?php

namespace Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle;

/**
 * Interface that says what is a basic model
 *
 * @author André Simões <sou@oand.re>
 */
interface VehicleModel {
    
    /**
     * Get vehicle model
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set vehicle model
     * 
     * @param string $model
     * @return self
     */
    public function setName($model);
    
}

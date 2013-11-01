<?php

namespace Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle;

/**
 * Interface that says what is a basic type
 *
 * @author André Simões <sou@oand.re>
 */
interface VehicleType {
    
    /**
     * Get vehicle type
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set vehicle type
     * 
     * @param string $type
     * @return self
     */
    public function setName($type);
    
}

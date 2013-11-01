<?php

namespace Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle;

/**
 * Interface that says what is a basic color
 *
 * @author André Simões <sou@oand.re>
 */
interface VehicleColor {
    
    /**
     * Get vehicle color
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set vehicle color
     * 
     * @param string $color
     * @return self
     */
    public function setName($color);
    
}

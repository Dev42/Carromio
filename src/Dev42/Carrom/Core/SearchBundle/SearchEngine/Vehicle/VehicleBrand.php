<?php

namespace Dev42\Carrom\Core\SearchBundle\SearchEngine\Vehicle;

/**
 * Interface that says what is a basic brand
 *
 * @author André Simões <sou@oand.re>
 */
interface VehicleBrand {
    
    /**
     * Get vehicle brand
     * 
     * @return string
     */
    public function getName();
    
    /**
     * Set vehicle brand
     * 
     * @var string
     * @return self
     */
    public function setName($brand);
    
}

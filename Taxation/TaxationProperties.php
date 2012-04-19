<?php

namespace MQM\TaxationBundle\Taxation;

use MQM\TaxationBundle\Taxation\PropertiesInterface;

final class TaxationProperties implements PropertiesInterface
{
    public static $CONFIG = array(
       'tax_es' => 0.18,
       'tax_us' => 0.16
    );
    
    /**
     * {@inheritDoc}
     */
    public function getProperty($name)
    {
        if (isset(self::$CONFIG[$name]))
            return self::$CONFIG[$name];
        
        return null;
    }
}
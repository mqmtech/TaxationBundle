<?php

namespace MQM\TaxationBundle\Taxation;

interface TaxationManagerInterface
{   
    /**
     * @return float
     */
    public function getTax();
    
    /**
     * @return TaxationManagerInterface
     */
    public function saveTax($tax);
}
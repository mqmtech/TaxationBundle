<?php

namespace MQM\TaxationBundle\Taxation;

interface TaxationManagerInterface
{   
    /**
     * @return float
     */
    public function getTax();
}
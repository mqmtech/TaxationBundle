<?php

namespace MQM\TaxationBundle\Taxation;

use MQM\TaxationBundle\Taxation\TaxationManagerInterface;
use MQM\ToolsBundle\IO\PropertiesInterface;

class TaxationManager implements TaxationManagerInterface
{   
    private $locale;
    private $config;
    
    public function __construct(PropertiesInterface $config, $locale = 'es')
    {
        $this->config = $config;
        $this->locale = $locale;
    }
    
    /**
     * {@inheritDoc}
     */
    public function getTax()
    {        
       return $this->config->getProperty('tax_' . $this->locale);
    }

    /**
     * {@inheritDoc}
     */
    public function saveTax($tax)
    {
        $this->config->setProperty('tax_' . $this->locale, $tax);
        
        return $this;
    }
}
<?php

namespace MQM\TaxationBundle\Tests;



class TaxationManagerTest extends \Symfony\Bundle\FrameworkBundle\Test\WebTestCase
{   
    public function __construct()
    {
        parent::__construct();
        
        $client = static::createClient();
        $container = $client->getContainer();
        $this->_container = $container;  
    }
    
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    protected function get($service)
    {
        return $this->_container->get($service);
    }
    
    public function testGetMonetaryManager()
    {
        $taxationManager = $this->get('mqm_taxation.taxation_manager');
        $this->assertNotNull($taxationManager);
    }
    
    public function testGetCurrency()
    {
        $taxationManager = $this->get('mqm_taxation.taxation_manager');
        $tax = $taxationManager->getTax();
        $this->assertEquals(0.18, $tax);
    }
    
    public function testLocale()
    {
        $session = $this->get('session');        
        $this->assertNotNull($session);        
        $this->assertEquals('es', $session->getLocale());
    }
}

<?php

class SeleniumTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
        $this->setHost( getenv('SELENIUM_HOST') );
        $this->setPort( 4444 );
        $this->setBrowser( getenv('SELENIUM_DRIVER') );
        $this->setBrowserUrl( 'http://' . exec('hostname -I') );
    }

    public function tearDown()
    {
        $this->stop();
    }
}


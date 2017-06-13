<?php

require_once 'SeleniumTestCase.php';

class HomeTest extends SeleniumTestCase
{
    public function testIndex()
    {
        $this->url('/');
        $content = $this->byTag('h1')->text();
        $this->assertEquals('Home page !', $content);
    }
}


<?php

require_once 'SeleniumTestCase.php';

class EmailTest extends SeleniumTestCase
{
    public function testOk()
    {
        $email = 'doudou@sii.fr';

        $this->url('/?email=' . $email);
        $content = $this->byTag('a')->text();
        $this->assertEquals($email, $content);
    }

    public function testKo()
    {
        $email = 'doudousii.fr';

        $this->url('/?email=' . $email);
        $content = $this->byTag('h1')->text();
        $this->assertEquals('ERROR', $content);
    }
}


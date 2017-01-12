<?php

use pxgamer\GetiPlayer;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInitialised()
    {
        $client = new GetiPlayer\Client();
        $this->assertInstanceOf(GetiPlayer\Client::class, $client);
    }
}

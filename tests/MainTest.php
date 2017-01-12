<?php

use pxgamer\GetiPlayer;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInitialised()
    {
        $client = new GetiPlayer\Client();
        $this->assertInstanceOf(GetiPlayer\Client::class, $client);
    }

    public function testCanGetVideoId()
    {
        $client = new GetiPlayer\Client();
        $client->setUrl('http://www.bbc.co.uk/iplayer/episode/b088ppll/sherlock-series-4-2-the-lying-detective');
        echo $client->getVideoId();
    }
}

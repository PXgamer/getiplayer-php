<?php

namespace pxgamer\GetiPlayer;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testCanBeInitialised()
    {
        $client = new Client();
        $this->assertInstanceOf(Client::class, $client);
    }

    public function testCanGetVideoId()
    {
        $client = new Client();
        $client->setUrl('http://www.bbc.co.uk/iplayer/episode/b088ppll/sherlock-series-4-2-the-lying-detective');
        $this->assertSame('b088pnjk', $client->getVideoId());
    }
}

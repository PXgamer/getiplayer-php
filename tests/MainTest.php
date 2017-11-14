<?php

namespace pxgamer\GetiPlayer;

use PHPUnit\Framework\TestCase;

/**
 * Class MainTest
 */
class MainTest extends TestCase
{
    /**
     *
     */
    public function testCanBeInitialised()
    {
        $client = new Client();
        $this->assertInstanceOf(Client::class, $client);
    }

    /**
     *
     */
    public function testCanGetVideoId()
    {
        $client = new Client();
        $client->setUrl('https://www.bbc.co.uk/iplayer/episode/b09g85ln/howards-end-series-1-episode-1');
        $this->assertSame('b09g85ln', $client->getVideoId());
    }
}

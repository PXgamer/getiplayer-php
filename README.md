# getiplayer-php

An easy to use wrapper for the iPlayer download API written in PHP.

This currently creates a single .ts file which can be encoded using Handbrake or another encoder.

## Usage

__Include the class:__
- Using Composer  

`composer require pxgamer/getiplayer-php`  
```php
<?php
require 'vendor/autoload.php';
```
- Including the file manually  
```php
<?php
include 'src/Client.php';
```

Once included, you can initialise the class using either of the following:

```php
$client = new \pxgamer\GetiPlayer\Client;
```
```php
use \pxgamer\GetiPlayer\Client;
$client = new Client;
```

## Full Example

```php
<?php

include 'vendor/autoload.php';

use pxgamer\GetiPlayer;

$client = new GetiPlayer\Client();

echo 'Episode URL: ' . $client->setUrl('https://www.bbc.co.uk/iplayer/episode/b088ppll/sherlock-series-4-2-the-lying-detective') . "\n";

echo 'Video ID: ' . $client->getVideoId() . "\n";
echo 'Output Quality: ' . $client->setQuality('highish') . "\n";

$client->getMediaISM();

echo 'Discovered URL: ' . $client->discoveredUrl . "\n";
echo 'Master Key: ' . $client->getMasterKey() . "\n";

$client->getM3u8();
$client->getStream();
//echo "M3u8: " . $client->getM3u8() . "\n";
//echo "M3u8 Stream: " . $client->getStream() . "\n";

echo 'Programme ID: ' . $client->getProgrammeId() . "\n";
echo 'Programme Title: ' . $client->getFullProgramTitle() . "\n";

$client->listHlsFiles();

$client->createDirectories();

echo 'Parsed: ' . $client->downloadFiles($client->hlsFiles) . "\n";

echo 'Files written: ' . $client->writeFiles() . "\n";

$client->cleanDirectory();

echo "Cleaned directory\n";

```

_Note: This is based off of Tiiveni's original code from SquarePenguin._
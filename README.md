# getiplayer-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

An easy to use wrapper for the iPlayer download API written in PHP.

## Structure

```
resources/
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/getiplayer-php
```

## Usage

This currently creates a single .ts file which can be encoded using Handbrake or another encoder.

## Usage

```php
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


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/getiplayer-php.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/getiplayer-php/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/78691677/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/getiplayer-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/getiplayer-php.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/getiplayer-php
[link-travis]: https://travis-ci.org/pxgamer/getiplayer-php
[link-styleci]: https://styleci.io/repos/78691677
[link-code-quality]: https://codecov.io/gh/pxgamer/getiplayer-php
[link-downloads]: https://packagist.org/packages/pxgamer/getiplayer-php
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors

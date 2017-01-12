# getiplayer-php

An easy to use wrapper for the iPlayer download API written in PHP.

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
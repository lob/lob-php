# lob-php

[![PHP version](https://badge.fury.io/ph/lob%2Flob-php.svg)](http://badge.fury.io/ph/lob%2Flob-php) [![Build Status](https://travis-ci.org/lob/lob-php.svg?branch=master)](https://travis-ci.org/lob/lob-php) [![Dependency Status](https://gemnasium.com/lob/lob-php.svg)](https://gemnasium.com/lob/lob-php) [![Coverage Status](https://img.shields.io/coveralls/lob/lob-php.svg)](https://coveralls.io/r/lob/lob-php?branch=master)

Lob.com PHP Client is a simple but flexible wrapper for the [Lob.com](https://www.lob.com) API. See full Lob.com documentation [here](https://lob.com/docs/php). For best results, be sure that you're using [the latest version](https://lob.com/docs/php#version) of the Lob API and the latest version of the PHP wrapper.

## Table of Contents

- [Getting Started](#getting-started)
  - [Registration](#registration)
  - [Installation](#installation)
  - [Usage](#usage)
- [Examples](#examples)
- [API Documentation](#api-documentation)
- [Testing](#testing)

## Getting Started

Here's a general overview of the Lob services available, click through to read more.

- [Postcards API](https://lob.com/services/postcards)
- [Letters API](https://lob.com/services/letters)
- [Checks API](https://lob.com/services/checks)
- [Area Mail API](https://lob.com/services/area)
- [Address Verification API](https://lob.com/services/verifications)

Please read through the official [API Documentation](#api-documentation) to get a complete sense of what to expect from each endpoint.

### Registration

First, you will need to first create an account at [Lob.com](https://dashboard.lob.com/#/register) and obtain your Test and Live API Keys.

Once you have created an account, you can access your API Keys from the [Settings Panel](https://dashboard.lob.com/#/settings).

### Installation

The recommended way to install Lob.com PHP Client is through [Composer](http://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add Lob.com PHP client as a dependency
composer require lob/lob-php
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

### Usage

```php
// Provide an API Key in the class constructor
// in order to instantiate the Lob object
$apiKey = 'API Key here';
$lob = new \Lob\Lob($apiKey);
```

## Examples

We've provided various examples for you to try out [here](https://github.com/lob/lob-php/tree/master/examples).

There are simple scripts to demonstrate how to create all the core Lob objects (checks, letters, postcards. etc.) as well as more complex examples that utilize other libraries and external files.

## API Documentation

To see our full API documumentation, click [here](https://lob.com/docs/php)

## Testing

Lob.com PHP Client uses PHPUnit for unit testing.

In order to run the unit tests, you'll first need to install the dependencies
using Composer.

```
composer install --dev # For PHP 5.6
composer install       # For PHP >= 7.0
```

Once the dependencies have been installed, the tests can be run with

```
php vendor/bin/phpunit
```

To get a code coverage report after running the test suite, run

```
php vendor/bin/coveralls -v
```

=======================

Copyright &copy; 2016 Lob.com

Released under the MIT License, which can be found in the repository in `LICENSE.txt`.

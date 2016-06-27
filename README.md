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
- [Address Verification API](https://lob.com/verification/address)

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

## API Documentation

- [Introduction](https://lob.com/docs/php#introduction)
- [Versioning](https://lob.com/docs/php#version)
- [Errors](https://lob.com/docs/php#errors)
- [Rate Limiting](https://lob.com/docs/php#rate-limits)
- [Metadata](https://lob.com/docs/php#metadata)
- **Addresses**
  - [Address Book](https://lob.com/docs/php#addresses)
    - [Create an Address](https://lob.com/docs/php#addresses_create)
    - [Retrieve an Address](https://lob.com/docs/php#addresses_retrieve)
    - [Delete an Address](https://lob.com/docs/php#addresses_delete)
    - [List all Addresses](https://lob.com/docs/php#addresses_list)
  - [Address Verification API](https://lob.com/docs/php#verify)
    - [Verify an Address](https://lob.com/docs/php#verify_create)
- **Postcards API**
  - [Postcards](https://lob.com/docs/php#postcards)
    - [Create a Postcard](https://lob.com/docs/php#postcards_create)
    - [Retrieve a Postcard](https://lob.com/docs/php#postcards_retrieve)
    - [List all Postcards](https://lob.com/docs/php#postcards_list)
- **Letters API**
  - [Letters](https://lob.com/docs/php#letters)
    - [Create a Letter](https://lob.com/docs/php#letters_create)
    - [Retrieve a Letter](https://lob.com/docs/php#letters_retrieve)
    - [List all Letters](https://lob.com/docs/php#letters_list)
- **Checks API**
  - [Checks](https://lob.com/docs/php#checks)
    - [Create a Check](https://lob.com/docs/php#checks_create)
    - [Retrieve a Check](https://lob.com/docs/php#checks_retrieve)
    - [List all Checks](https://lob.com/docs/php#checks_list)
  - [Bank Accounts](https://lob.com/docs/php#bank-accounts)
    - [Create a Bank Account](https://lob.com/docs/php#bankaccounts_create)
    - [Retrieve a Bank Account](https://lob.com/docs/php#bankaccounts_retrieve)
    - [Delete a Bank Account](https://lob.com/docs/php#bankaccounts_delete)
    - [Verify a Bank Account](https://lob.com/docs/php#bankaccounts_verify)
    - [List all Bank Accounts](https://lob.com/docs/php#bankaccounts_list)
- **Area Mail API**
  - [Areas](https://lob.com/docs/php#areas)
    - [Create an Area Mailing](https://lob.com/docs/php#areas_create)
    - [Retrieve an Area Mailing](https://lob.com/docs/php#areas_retrieve)
    - [List all Area Mailings](https://lob.com/docs/php#areas_list)
  - [Routes](https://lob.com/docs/php#routes)
    - [Retrieve a Zip Code](https://lob.com/docs/php#routes_retrieve)
    - [List all Zip Codes](https://lob.com/docs/php#routes_list)
- **Resources**
  - [Countries](https://lob.com/docs/php#countries)
    - [List all Countries](https://lob.com/docs/php#countries_list)
  - [States](https://lob.com/docs/php#states)
    - [List all States](https://lob.com/docs/php#states_list)
- **Appendix**
  - [API Changelog](https://lob.com/docs/php#changelog)
  - [HTML Examples](https://lob.com/docs/php#html-examples)
  - [Image Prepping](https://lob.com/docs/php#prepping)

## Testing

Lob.com PHP Client uses PHPUnit for unit testing. In order to run the unit tests, you'll first need
to install the dependencies of the project using Composer: `php composer.phar install --dev`.
You can then run the tests using `vendor/bin/phpunit`.

Make sure you provide a `test` API Key in your `phpunit.xml`.

=======================

Copyright &copy; 2016 Lob.com

Released under the MIT License, which can be found in the repository in `LICENSE.txt`.

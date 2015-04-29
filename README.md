# lob-php

[![PHP version](https://badge.fury.io/ph/lob%2Flob-php.svg)](http://badge.fury.io/ph/lob%2Flob-php) [![Build Status](https://travis-ci.org/lob/lob-php.svg?branch=master)](https://travis-ci.org/lob/lob-php) [![Dependency Status](https://gemnasium.com/lob/lob-php.svg)](https://gemnasium.com/lob/lob-php) [![Coverage Status](https://img.shields.io/coveralls/lob/lob-php.svg)](https://coveralls.io/r/lob/lob-php?branch=master)

Lob.com PHP Client is a simple but flexible wrapper for the [Lob.com](https://www.lob.com) API. See full Lob.com documentation [here](https://lob.com/docs/php).

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

- [Simple Postcard Service](https://lob.com/services/postcards)
- [Simple Letter Service](https://lob.com/services/letters)
- [Simple Check Service](https://lob.com/services/checks)
- [Simple Print Service](https://lob.com/services/sps)
- [Simple Area Mail](https://lob.com/services/sam)
- [Address Verification](https://lob.com/verification/address)

### Registration

First, you will need to first create an account at [Lob.com](https://dashboard.lob.com/#/register) and obtain your Test and Live API Keys.

Once you have created an account, you can access your API Keys from the [Settings Panel](https://dashboard.lob.com/#/settings).

### Installation

The recommended way to install Lob.com PHP Client is through [Composer](http://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add Lob.com PHP client as a dependency
php composer.phar require lob/lob-php:1.4.*
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
- [Image Prepping](https://lob.com/docs/php#prepping)
- **Addresses**
  - [Address Book](https://lob.com/docs/php#addresses)
    - [Create an Address](https://lob.com/docs/php#addresses_create)
    - [Retrieve an Address](https://lob.com/docs/php#addresses_retrieve)
    - [Delete an Address](https://lob.com/docs/php#addresses_delete)
    - [List all Addresses](https://lob.com/docs/php#addresses_list)
  - [Simple Address Verification](https://lob.com/docs/php#verify)
    - [Verify an Address](https://lob.com/docs/php#verify_create)
- **Simple Postcard Service**
  - [Postcards](https://lob.com/docs/php#postcards)
    - [Create a Postcard](https://lob.com/docs/php#postcards_create)
    - [Retrieve a Postcard](https://lob.com/docs/php#postcards_retrieve)
    - [List all Postcards](https://lob.com/docs/php#postcards_list)
- **Simple Letter Service**
  - [Letters](https://lob.com/docs/php#letters)
    - [Create a Letter](https://lob.com/docs/php#letters_create)
    - [Retrieve a Letter](https://lob.com/docs/php#letters_retrieve)
    - [List all Letters](https://lob.com/docs/php#letters_list)
- **Simple Check Service**
  - [Checks](https://lob.com/docs/php#checks)
    - [Create a Check](https://lob.com/docs/php#checks_create)
    - [Retrieve a Check](https://lob.com/docs/php#checks_retrieve)
    - [List all Checks](https://lob.com/docs/php#checks_list)
  - [Bank Accounts](https://lob.com/docs/php#bank-accounts)
    - [Create a Bank Account](https://lob.com/docs/php#bankaccounts_create)
    - [Retrieve a Bank Account](https://lob.com/docs/php#bankaccounts_retrieve)
    - [List all Bank Accounts](https://lob.com/docs/php#bankaccounts_list)
    - [Verify a Bank Account](https://lob.com/docs/php#bankaccounts_verify)
    - [Delete a Bank Account](https://lob.com/docs/php#bankaccounts_delete)
- **Simple Print Service**
  - [Jobs](https://lob.com/docs/php#jobs)
    - [Create a Job](https://lob.com/docs/php#jobs_create)
    - [Retrieve a Job](https://lob.com/docs/php#jobs_retrieve)
    - [List all Jobs](https://lob.com/docs/php#jobs_list)
  - [Objects](https://lob.com/docs/php#objects)
    - [Create an Object](https://lob.com/docs/php#objects_create)
    - [Retrieve an Object](https://lob.com/docs/php#objects_retrieve)
    - [Delete an Object](https://lob.com/docs/php#objects_delete)
    - [List all Objects](https://lob.com/docs/php#objects_list)
  - [Settings](https://lob.com/docs/php#settings)
    - [Retrieve a Setting](https://lob.com/docs/php#settings_retrieve)
    - [List all Settings](https://lob.com/docs/php#settings_list)
- **Simple Area Mail**
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
  - [SPS Templates](https://lob.com/docs/php#sps-templates)
  - [Custom Fonts with HTML](https://lob.com/docs/php#html-fonts)
  - [Postcard HTML Examples](https://lob.com/docs/php#postcard-examples)
  - [Area HTML Examples](https://lob.com/docs/php#area-examples)
  - [Letter HTML Examples](https://lob.com/docs/php#letter-examples)

## Testing

Lob.com PHP Client uses PHPUnit for unit testing. In order to run the unit tests, you'll first need
to install the dependencies of the project using Composer: `php composer.phar install --dev`.
You can then run the tests using `vendor/bin/phpunit`.

Make sure you provide a `test` API Key in your `phpunit.xml`.

=======================

Copyright &copy; 2013 Lob.com

Released under the MIT License, which can be found in the repository in `LICENSE.txt`.

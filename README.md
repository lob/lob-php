# lob-php

[![PHP version](https://badge.fury.io/ph/lob%2Flob-php.svg)](https://badge.fury.io/ph/lob%2Flob-php)
[![Build Status](https://travis-ci.org/lob/lob-php.svg?branch=master)](https://travis-ci.org/lob/lob-php)
[![Coverage Status](https://img.shields.io/coveralls/lob/lob-php.svg)](https://coveralls.io/r/lob/lob-php?branch=master)

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

- [Postcards API](https://lob.com/products/print-mail/postcards)
- [Letters API](https://lob.com/products/print-mail/letters)
- [Checks API](https://lob.com/products/print-mail/checks)
- [Address Verification API](https://lob.com/products/address-verification)

Please read through the official [API Documentation](#api-documentation) to get a complete sense of what to expect from each endpoint.

### Registration

First, you will need to first create an account at [Lob.com](https://dashboard.lob.com/#/register) and obtain your Test and Live API Keys.

Once you have created an account, you can access your API Keys from the [Settings Panel](https://dashboard.lob.com/#/settings).

### Installation

The recommended way to install Lob.com PHP Client is through [Composer](https://getcomposer.org).

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
- [Introduction](https://lob.com/docs/php#introduction)
- [Versioning](https://lob.com/docs/php#version)
- [Errors](https://lob.com/docs/php#errors)
- [Rate Limiting](https://lob.com/docs/php#rate-limits)
- [Webhooks](https://lob.com/docs/php#webhooks)
- [Cancellation Windows](https://lob.com/docs/php#cancellation)
- [Scheduled Mailings](https://lob.com/docs/php#scheduled)
- [Metadata](https://lob.com/docs/php#metadata)
- [HTML Templates](https://lob.com/docs/php#templates)
- [Asset URLs](https://lob.com/docs/php#urls)
- **Addresses**
  - [Address Book](https://lob.com/docs/php#addresses)
    - [The Address Object](https://lob.com/docs/php#addresses_object)
    - [Create an Address](https://lob.com/docs/php#addresses_create)
    - [Retrieve an Address](https://lob.com/docs/php#addresses_retrieve)
    - [Delete an Address](https://lob.com/docs/php#addresses_delete)
    - [List all Addresses](https://lob.com/docs/php#addresses_list)
- **US Verification API**
  - [US Verification API](https://lob.com/docs/php#us_verifications)
    - [The US Verification Object](https://lob.com/docs/php#us_verifications_object)
    - [Verify a US Address](https://lob.com/docs/php#us_verifications_create)
    - [The US ZIP Lookup Object](https://lob.com/docs/php#us_zip_lookups_object)
    - [Lookup a US ZIP Code](https://lob.com/docs/php#us_zip_lookups_create)
  - [US Autocompletion API](https://lob.com/docs/php#us_autocompletions)
    - [The US Autocompletion Object](https://lob.com/docs/php#us_autocompletions_object)
    - [Autocomplete a US Address](https://lob.com/docs/php#us_autocompletions_create)
    - [The US Autocompletion Test Environment](https://lob.com/docs/php#us-autocompletions-test-environment)
- **Int'l Verification API**
  - [International Verifications](https://lob.com/docs/php#intl_verifications)
    - [Verify an International Address](https://lob.com/docs/php#intl_verifications_create)
- **Postcards API**
  - [Postcards](https://lob.com/docs/php#postcards)
    - [The Postcard Object](https://lob.com/docs/php#postcards_object)
    - [Create a Postcard](https://lob.com/docs/php#postcards_create)
    - [Retrieve a Postcard](https://lob.com/docs/php#postcards_retrieve)
    - [Cancel a Postcard](https://lob.com/docs/php#postcards_delete)
    - [List all Postcards](https://lob.com/docs/php#postcards_list)
- **Self Mailers API**
  - [Self Mailers](https://lob.com/docs/php#self_mailers)
    - [The Self Mailer Object](https://lob.com/docs/php#self_mailers_object)
    - [Create a Self Mailer](https://lob.com/docs/php#self_mailers_create)
    - [Retrieve a Self Mailer](https://lob.com/docs/php#self_mailers_retrieve)
    - [Cancel a Self Mailer](https://lob.com/docs/php#self_mailers_delete)
    - [List all Self Mailers](https://lob.com/docs/php#self_mailers_list)
- **Letters API**
  - [Letters](https://lob.com/docs/php#letters)
    - [The Letter Object](https://lob.com/docs/php#letters_object)
    - [Create a Letter](https://lob.com/docs/php#letters_create)
    - [Retrieve a Letter](https://lob.com/docs/php#letters_retrieve)
    - [Cancel a Letter](https://lob.com/docs/php#letters_delete)
    - [List all Letters](https://lob.com/docs/php#letters_list)
- **Checks API**
  - [Checks](https://lob.com/docs/php#checks)
    - [The Check Object](https://lob.com/docs/php#checks_object)
    - [Create a Check](https://lob.com/docs/php#checks_create)
    - [Retrieve a Check](https://lob.com/docs/php#checks_retrieve)
    - [Cancel a Check](https://lob.com/docs/php#checks_delete)
    - [List all Checks](https://lob.com/docs/php#checks_list)
  - [Bank Accounts](https://lob.com/docs/php#bank-accounts)
    - [The Bank Account Object](https://lob.com/docs/php#bankaccounts_object)
    - [Create a Bank Account](https://lob.com/docs/php#bankaccounts_create)
    - [Retrieve a Bank Account](https://lob.com/docs/php#bankaccounts_retrieve)
    - [Delete a Bank Account](https://lob.com/docs/php#bankaccounts_delete)
    - [Verify a Bank Account](https://lob.com/docs/php#bankaccounts_verify)
    - [List all Bank Accounts](https://lob.com/docs/php#bankaccounts_list)
- **Appendix**
  - [API Changelog](https://lob.com/docs/php#changelog)
  - [The Tracking Event Object](https://lob.com/docs/php#tracking_event_object)
  - [Events](https://lob.com/docs/php#events)
  - [HTML Examples](https://lob.com/docs/php#html-examples)
  - [Image Prepping](https://lob.com/docs/php#prepping)
  - [US Verification Details](https://lob.com/docs/php#us_verification_details)

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
LOB_API_KEY=<YOUR_API_KEY_HERE> php vendor/bin/phpunit
```

To get a code coverage report after running the test suite, run

```
php vendor/bin/coveralls -v
```

=======================

Copyright &copy; 2018 Lob.com

Released under the MIT License, which can be found in the repository in `LICENSE.txt`.

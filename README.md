Lob.com PHP Client
==================
[![PHP version](https://badge.fury.io/ph/lob%2Flob-php.svg)](http://badge.fury.io/ph/lob%2Flob-php) [![Total Downloads](https://poser.pugx.org/lob/lob-php/downloads.svg)](https://packagist.org/packages/lob/lob-php) [![Build Status](https://travis-ci.org/lob/lob-php.svg?branch=master)](https://travis-ci.org/lob/lob-php) [![Dependency Status](https://gemnasium.com/lob/lob-php.svg)](https://gemnasium.com/lob/lob-php) [![Coverage Status](https://img.shields.io/coveralls/lob/lob-php.svg)](https://coveralls.io/r/lob/lob-php?branch=master)

Lob.com PHP Client is a simple but flexible wrapper for the [Lob.com](https://www.lob.com) API ([docs](https://www.lob.com/docs/php)).

### Table of Contents
[Installing via Composer](#installing)

[Usage](#usage)

[Supported Image Types](#supportedImages)

[Creating a PDF](#creatingPDF)

[Resources](#resources)

[Documentation](#documentation)

[Unit testing](#unitTesting)

### Installing via Composer<a name="installing"></a>

The recommended way to install Lob.com PHP Client is through [Composer](http://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add Lob.com PHP client as a dependency
php composer.phar require lob/lob-php:1.2.*
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

Usage<a name="usage"></a>
------

```php
// Provide an API Key in the class constructor
// in order to instantiate the Lob object
$apiKey = 'API Key here';
$lob = new \Lob\Lob($apiKey);
```
Supported Image Types<a name="supportedImages"></a>
--------
The Lob.com API supports the following image types:

- PDF
- PNG
- JPEG

For more information on prepping the images please see the [Lob documentation](https://lob.com/docs/php#prepping).

Creating a PDF<a name="creatingPDF"></a>
-------

If you need to generate your own PDF programmatically we recommend using [dompdf](https://github.com/dompdf/dompdf). There is an example provided in the examples folder [here](examples/create_pdf.php)

Resources<a name="resources"></a>
---------

Resource is a special object that maps directly to its correspondent API endpoint.

Through the Lob object, you have access to all resources available, like in the example below:

```php
// Addresses
echo get_class($lob->addresses());
// >>> Lob\Resource\Addresses

// Bank Accounts
echo get_class($lob->bankAccounts());
// >>> Lob\Resource\BankAccounts

// Checks
echo get_class($lob->checks());
// >>> Lob\Resource\Checks

// Jobs
echo get_class($lob->jobs());
// >>> Lob\Resource\Jobs

// Objects
echo get_class($lob->objects());
// >>> Lob\Resource\Objects

// Settings
echo get_class($lob->settings());
// >>> Lob\Resource\Settings

// Postcards
echo get_class($lob->postcards());
// >>> Lob\Resource\Postcards

// Services
echo get_class($lob->services());
// >>> \Lob\Resource\Services

// States
echo get_class($lob->states());
// >>> \Lob\Resource\States
```
- [Jobs](#jobs)
  - [Create](#create-a-new-job)
  - [List](#list-jobs)
  - [Retrieve](#retrieve-a-specific-job)
- [Postcards](#postcards)
  - [Create](#create-a-new-postcard)
  - [List](#list-postcards)
  - [Retrieve](#retrieve-a-specific-postcard)
- [Addresses](#addresses)
  - [Create](#create-a-new-address)
  - [List](#list-addresses)
  - [Retrieve](#retrieve-a-specific-address)
  - [Delete](#delete-a-specific-address)
  - [Verify](#verify-an-address)
- [Objects](#objects)
  - [Create](#create-a-new-object)
  - [List](#list-objects)
  - [Retrieve](#retrieve-a-specific-object)
  - [Delete](#delete-a-specific-object)
- [Settings](#settings)
  - [Create](#create-a-new-setting)
  - [List](#list-settings)
  - [Retrieve](#retrieve-a-specific-setting)
  - [Delete](#delete-a-specific-setting)
- [Services](#services)
  - [Create](#create-a-new-service)
  - [List](#list-services)
  - [Retrieve](#retrieve-a-specific-service)
  - [Delete](#delete-a-specific-service)
- [Checks](#checks)
  - [Create](#create-a-new-check)
  - [List](#list-checks)
  - [Retrieve](#retrieve-a-specific-check)
  - [Delete](#delete-a-specific-check)
- [Bank Accounts](#bank-accounts)
  - [Create](#create-a-new-bank-account)
  - [List](#list-bank-accounts)
  - [Retrieve](#retrieve-a-specific-bank-account)
  - [Delete](#delete-a-specific-bank-account)
- [Simple Area Mail (SAM)](#simple-area-mail-sam)
  - [View Routes](#view-routes)
  - [Create an Area Mailing](#create-an-area-mailing)
- [States](#states)
  - [Create](#create-a-new-state)
  - [List](#list-states)
  - [Retrieve](#retrieve-a-specific-state)
  - [Delete](#delete-a-specific-state)
- [Countries](#countries)
  - [Create](#create-a-new-countrie)
  - [List](#list-countries)
  - [Retrieve](#retrieve-a-specific-countrie)
  - [Delete](#delete-a-specific-countrie)

Jobs
----

#### Create a new job

```php
try {
    // Returns a valid job
    $job = $lob->jobs()->create(array(
        'name'          => 'Welcome letter to JJJ INC',
        'to'            => array(
          'name' => 'To Address',
          'address_line1' => '123 Test Street',
          'address_city' => 'San Francisco',
          'address_state' => 'CA',
          'address_zip' => '94158',
          'address_country' => 'US'
        ), // Required
        'from'          => $senderAddress['id'], // Optional
        'object1'       => $object1['id'], // Required
        // Accepts N objects as long as you provide them
        // incrementally like object2, object3 and so on until it hits N...
        'object2'       => $object2['id'], // Optional
        'service'       => $service['id'], // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}
```

#### List jobs

```php
// Returns a job list
$jobList = $lob->jobs()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$jobList = $lob->jobs()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific job

```php
try {
    // Returns a valid job
    $job = $lob->jobs()->get('966a7feaaeb5cb38010e');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

Addresses
---------

#### Create a new address

```php
try {
    // Returns a valid address
    $address = $lob->addresses()->create(array(
        'name'              => 'Harry Zhang', // Required
        'address_line1'     => '123 Test Street', // Required
        'address_line2'     => 'Unit 199', // Optional
        'address_city'      => 'Mountain View', // Required for US Addresses
        'address_state'     => 'CA', // Required for US Addresses
        'address_country'   => 'US', // Required - Must be a 2 letter country short-name code (ISO 3316)
        'address_zip'       => '94085', // Required
        'email'             => 'harry@lob.com', // Optional
        'phone'             => '5555555555', // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}
```

#### List addresses

```php
// Returns an address list
$addressList = $lob->addresses()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$addressList = $lob->addresses()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific address

```php
try {
    // Returns a valid address
    $address = $lob->addresses()->get('966a7feaaeb5cb38010e');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

#### Delete a specific address

```php
$lob->addresses()->delete('966a7feaaeb5cb38010e');
```

#### Verify an address

```php
  // Returns a valid address with more details
  $address = $lob->addresses()->verify(array(
      'address_line1'     => '123 Test Street', // Optional
      'address_line2'     => 'Unit 199', // Optional
      'address_city'      => 'Mountain View', // Optional
      'address_state'     => 'CA', // Optional
      'address_country'   => 'USA',  // Optional
      'address_zip'       => '94085', // Optional
  ));
```

Objects
-------

#### Create a new object

```php
// You can create an object by uploading a local file
// by prepending a `@` to the local path
try {
    // Returns a valid object
    $object = $lob->objects()->create(array(
        'name'        => 'GO BLUE', // Required
        'file'        => '@'.realpath('/path/to/your/file/goblue.pdf'), // Required
        'setting'     => $setting['id'], // Required
        'quantity'    => 1, // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}

// ... or by providing a public URL
try {
    // Returns a valid object
    $object = $lob->objects()->create(array(
        'name'        => 'GO BLUE', // Required
        'file'        => 'https://s3-us-west-2.amazonaws.com/lob-assets/goblue.pdf', // Required
        'setting'     => $setting['id'], // Required
        'quantity'    => 1, // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}
```

#### List objects

```php
// Returns an object list
$objectList = $lob->objects()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$objectList = $lob->objects()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific object

```php
try {
    // Returns a valid object
    $object = $lob->objects()->get('966a7feaaeb5cb38010e');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

#### Delete a specific object

```php
$lob->objects()->delete('966a7feaaeb5cb38010e');
```

Settings
--------

#### Create a new setting

Creating a setting is not supported.

#### List settings

```php
// Returns a setting list
$settingList = $lob->settings()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$settingList = $lob->settings()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific setting

```php
try {
    // Returns a valid setting
    $setting = $lob->settings()->get('966a7feaaeb5cb38010e');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

#### Delete a specific setting

Deleting a setting is not supported.

Services
-------

#### Create a new service

Creating a service is not supported.

#### List services

```php
// Returns a service list
$serviceList = $lob->services()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$serviceList = $lob->services()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific service

Retrieving a specific service is not supported.

#### Delete a specific service

Deleting a service is not supported.

Postcards
---------

#### Create a new postcard

```php
try {
    // Returns a valid postcard
    $postcard = $lob->postcards()->create(array(
        'name'          => 'Demo Postcard job', // Required
        'to'            => $receiverAddress['id'], // Required
        'from'          => $senderAddress['id'], // Optional
        'message'       => 'This an example message on back of the postcard', // Optional
        // For both front and back parameters, you can also provide a public URL
        'front'         => '@'.realpath('/path/to/your/file/goblue.pdf'), // Optional
        'back'          => '@'.realpath('/path/to/your/file/goblue.pdf'), // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}
```

```php
// Create a postcard with an line address
try {
    // Returns a valid postcard
    $postcard = $lob->postcards()->create(array(
        'name'          => 'Demo Postcard job', // Required
        'to'            => array(
                          'name'              => 'Harry Zhang',
                          'address_line1'     => '123 Test Street',
                          'address_line2'     => 'Unit 199',
                          'address_city'      => 'Mountain View',
                          'address_state'     => 'CA',
                          'address_country'   => 'US', 
                          'address_zip'       => '94085'
                        ), 
        'from'          => array(
                          'name'              => 'Harry Zhang',
                          'address_line1'     => '123 Test Street',
                          'address_line2'     => 'Unit 199',
                          'address_city'      => 'Mountain View',
                          'address_state'     => 'CA',
                          'address_country'   => 'US', 
                          'address_zip'       => '94085'
                        ),                         
        'message'       => 'This an example message on back of the postcard', // Optional
        // For both front and back parameters, you can also provide a public URL
        'front'         => '@'.realpath('/path/to/your/file/goblue.pdf'), // Optional
        'back'          => '@'.realpath('/path/to/your/file/goblue.pdf'), // Optional
    ));
} catch (\Lob\Exception\ValidationException $e) {
    // Do something
}
```

#### List postcards

```php
// Returns a postcard list
$postcardList = $lob->postcards()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$postcardList = $lob->postcards()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific postcard

```php
try {
    // Returns a valid postcard
    $postcard = $lob->postcards()->get('966a7feaaeb5cb38010e');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

Checks
----

### Create a new check

```php
try {
  // Returns a valid check
  $account = $lob->checks()->create(array(
    'name'              => 'Demo Check',
    'to[name]'          => 'Recipient',
    'to[address_line1]' => '123 Test Street',
    'to[address_city]'  => 'San Francisco',
    'to[address_zip]'   => '94107',
    'to[address_state]' => 'CA',
    'bank_account'      => 'bank_e13902b6bdfff24',
    'amount'            => 2200,
    'memo'              => 'rent'
  ));
} catch(\Lob\Exception\ValidationException $e) {
  // Do Something
}
```

#### List checks

```php
// Returns a check list
$checkList = $lob->checks()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$checkList = $lob->checks()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific check

```php
try {
    // Returns a valid check
    $check = $lob->checks()->get('chk_b102de150bc45d9e9ed2');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

#### Delete a specific check

```php
$lob->checks()->delete($checkId);
```

Bank Accounts
----

### Create a new bank account

```php
try {
  // Returns a valid bank_account
  $account = $lob->bankAccounts()->create(array(
    'routing_number'              => '12345678',
    'account_number'              => '12345678',
    'signatory'                   => 'John Doe',
    'bank_address[name]'          => 'Bank Address',
    'bank_address[address_line1]' => '123 Test Street',
    'bank_address[address_city]'  => 'San Francisco',
    'bank_address[address_zip]'   => '94107',
    'bank_address[address_state]' => 'CA',
    'account_address[name]'          => 'Account Address',
    'account_address[address_line1]' => '123 Test Street',
    'account_address[address_city]'  => 'San Francisco',
    'account_address[address_zip]'   => '94107',
    'account_address[address_state]' => 'CA'
  ));
} catch(\Lob\Exception\ValidationException $e) {
  // Do Something
}
```

#### List bank accounts

```php
// Returns a bank account list
$bankAccountList = $lob->bankAccounts()->all();

// You can also pass `count` and `offset` to limit the results and
// define a starting page
$bankAccountList = $lob->bankAccounts()->all(array(
    'count'   => 10,
    'offset'  => 0, // Zero-indexed
));
```

#### Retrieve a specific bank account

```php
try {
    // Returns a valid bank account
    $bankAccount = $lob->bankAccounts()->get('bank_e13902b6bdfff24');
} catch (\Lob\Exception\ResourceNotFoundException $e) {
    // Do something
}
```

#### Delete a specific bank account

```php
$lob->bankAccounts()->delete($bankAccountId);
```
Simple Area Mail (SAM)
------------

#### View Routes

```php
$routes = $lob->routes()->all(array(
  'zip_codes' => '94158',
  'zip_codes' => '94107'
));
```

You can also pass in the zip_codes as an array.

```php
$routes = $lob->routes()->all(array(
  'zip_codes' => array(
    '94158',
    '94107'
  )
));
```

#### Create an Area Mailing

```php
$area = $lob->areas()->create(array(
  'name'   => 'Sample SAM',
  'routes' => '94158',
  'routes' => '94107',
  'front'  => 'https://s3-us-west-2.amazonaws.com/lob-assets/areafront.pdf',
  'back'   => 'https://s3-us-west-2.amazonaws.com/lob-assets/areaback.pdf'
));
```

States
-------

#### Create a new state

Creating a state is not supported.

#### List states

```php
// Returns a state list
$stateList = $lob->state()->all();
```

#### Retrieve a specific state

Retrieving a specific state is not supported.

#### Delete a specific state

Deleting a state is not supported.

Countries
-------

#### Create a new country

Creating a country is not supported.

#### List countrys

```php
// Returns a country list
$countryList = $lob->country()->all();
```

#### Retrieve a specific country

Retrieving a specific country is not supported.

#### Delete a specific country

Deleting a country is not supported.

Documentation<a name="documentation"></a>
------------

Being a simple and flexible wrapper, the Lob.com [documentation](https://lob.com/docs/php) is the best source
to read about the API and to extend this library, if needed.

Unit testing<a name="unitTesting"></a>
------------

Lob.com PHP Client uses PHPUnit for unit testing. In order to run the unit tests, you'll first need
to install the dependencies of the project using Composer: `php composer.phar install --dev`.
You can then run the tests using `vendor/bin/phpunit`.

Make sure you provide a `test` API Key in your `phpunit.xml`.

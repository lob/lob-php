# Migrate from version < v4.0.0

This guide illustrates differences between Lob’s the legacy versions of this SDK and the new current version.

In this guide we compare how `v3.*.*` and >= `v4.0.0` implement the following method pattern.

- CREATE
- LIST
- GET
- DELETE
- VERIFY (BANK ACCOUNTS)

## INSTALL

Similar to the legacy version, the lob-php-sdk is available through Composer:

```
$ php composer.phar require lob/lob-php
```

## IMPORT AND INITIALIZE


```php
use OpenAPI\Client\Configuration;

$config = new Configuration();
$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
```
You then instantiate the specific resource API that you need access to as follows:

```php
$addressApi = new AddressesApi($config);
```

## METHODS

The new SDK version abstracts the request/response interaction out of the calling code such that you create the resource and pass it to the corresponding API in a try/catch such that any non-success is an `ApiException` that must be handled.

### COMPARE CREATE METHODS

Here is a sample of the legacy lob-php CREATE function:

```php
$address = $lob->addresses()->create(array(
  'name'          => 'Lob.com',
  'address_line1' => '185 Berry Street',
  'address_line2' => 'Suite 1510',
  'address_city'  => 'San Francisco',
  'address_state' => 'CA',
  'address_zip'   => '94107',
));
```

Here is a sample of the updated CREATE method

```php
try {
    $addressApi = new AddressesApi($config);

    $editableAddress = new AddressEditable();
    $editableAddress->setName('Lob.com');
    $editableAddress->setAddressLine1('185 Berry Street');
    $editableAddress->setAddressLine2('Suite 1510');
    $editableAddress->setAddressCity('San Francisco');
    $editableAddress->setAddressState('CA');
    $editableAddress->setAddressZip('94107');

    $createdAddress = self::$addressApi->create($editableAddress);
} catch (Exception $createError) {
    echo 'Caught exception: ',  $createError->getMessage(), "\n";
}
```

### COMPARE LIST METHODS

Here is a sample of the legacy lob-php LIST method:

```php
$addressList = $lob->addresses()->all(array(
  'limit' => 2
));
```

Here is a sample of the updated LIST method:

```php
try {
    $addressApi = new AddressesApi($config);

    $addressList = $addressApi->list(2);
} catch (err: any) {
    echo 'Caught exception: ',  $listError->getMessage(), "\n";
}
```

### COMPARE GET BY ID METHOD

Here is a sample of the legacy lob-php GET method:

```php
$retrievedAddress = $lob->addresses()->get('adr_xxx');
```

Here is a sample of the updated GET method:

```php
try {
    $addressApi = new AddressesApi($config);

    $retrievedAddress = $addressApi->get('adr_xxx');
} catch (err: any) {
  echo 'Caught exception: ',  $retrieveError->getMessage(), "\n";
}
```

### COMPARE DELETE METHOD

Here is a sample of the legacy lob-php DELETE method:

```php
$deletedAddress = $lob->addresses()->delete('adr_xxx');
```

Here is a sample of the updated DELETE method:

```php
try {
    $addressApi = new AddressesApi($config);
    
    $deletedAddress = $addressApi->delete('adr_xxx');
} catch (err: any) {
  echo 'Caught exception: ',  $retrieveError->getMessage(), "\n";
}
```

### COMPARE BANK ACCOUNT VERIFY

Here is a sample of the legacy lob-php BANK ACCOUNT VERIFY method:

```php
$verifiedBankAccount = $lob->bankAccounts()->verify(array(
  'id' => 'bank_xxx',
  'amounts' => array(11, 35)
));
```

Here is a sample of the updated BANK ACCOUNT VERIFY method:

```php
try {
    $bankVerify = new BankAccountVerify();
    $bankVerify->setAmounts([11, 35]);
    
    $verifiedBankAccount = $bankApi->verify('bank_xxx', $bankVerify);
} catch (err: any) {
  echo 'Caught exception: ',  $retrieveError->getMessage(), "\n";
}
```

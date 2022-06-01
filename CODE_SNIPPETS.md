# Code Snippets

## Address Api

### Create
```bash
curl https://api.lob.com/v1/addresses \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Harry - Office" \
  -d "name=Harry Zhang" \
  -d "company=Lob" \
  -d "email=harry@lob.com" \
  -d "phone=5555555555" \
  -d "address_line1=210 King St" \
  -d "address_line2=# 6100" \
  -d "address_city=San Francisco" \
  -d "address_state=CA" \
  -d "address_zip=94107" \
  -d "address_country=US"
```

```php
$lob->addresses()->create(array(
  'description'       => 'Harry - Office',
  'name'              => 'Harry Zhang',
  'company'           => 'Lob',
  'address_line1'     => '210 King St',
  'address_line2'     => '# 6100',
  'address_city'      => 'San Francisco',
  'address_state'     => 'CA',
  'address_country'   => 'US',
  'address_zip'       => '94107',
  'email'             => 'harry@lob.com',
  'phone'             => '5555555555'
));
```

### Retrieve
```bash
curl https://api.lob.com/v1/addresses/adr_fa85158b26c3eb7c \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->addresses()->get('adr_fa85158b26c3eb7c');
```

### List
```bash
curl -X GET "https://api.lob.com/v1/addresses/?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->addresses()->all(array(
  'limit' => 2
));
```

### Delete
```bash
curl -X DELETE https://api.lob.com/v1/addresses/adr_43769b47aed248c2 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->addresses()->delete('adr_43769b47aed248c2');
```

## Postcards Api

### Create
```bash
curl https://api.lob.com/v1/postcards \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d 'description=Demo Postcard job' \
  -d 'to[name]=Harry Zhang' \
  -d 'to[address_line1]=210 King St' \
  -d 'to[address_line2]=# 6100' \
  -d 'to[address_city]=San Francisco' \
  -d 'to[address_state]=CA' \
  -d 'to[address_zip]=94107' \
  -d 'from=adr_210a8d4b0b76d77b' \
  --data-urlencode 'front=<html style="padding: 1in; font-size: 50;">Front HTML for {{name}}</html>' \
  --data-urlencode 'back=<html style="padding: 1in; font-size: 20;">Back HTML for {{name}}</html>' \
  -d 'merge_variables[name]=Harry'
```

```php
$lob->postcards()->create(array(
  'description'           => 'Demo Postcard job',
  'to[name]'              => 'Harry Zhang',
  'to[address_line1]'     => '210 King St',
  'to[address_line2]'     => '# 6100',
  'to[address_city]'      => 'San Francisco',
  'to[address_zip]'       => '94107',
  'to[address_state]'     => 'CA',
  'from'                  => 'adr_210a8d4b0b76d77b',
  'front'                 => '<html style="padding: 1in; font-size: 50;">Front HTML for {{name}}</html>',
  'back'                  => '<html style="padding: 1in; font-size: 20;">Back HTML for {{name}}</html>',
  'merge_variables[name]' => 'Harry'
));
```

### Retrieve
```bash
curl https://api.lob.com/v1/postcards/psc_5c002b86ce47537a \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->postcards()->get('psc_5c002b86ce47537a');
```

### List
```bash
curl -X GET "https://api.lob.com/v1/postcards?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->postcards()->all(array(
  'limit' => 2
));
```

### Cancel
```bash
curl -X DELETE https://api.lob.com/v1/postcards/psc_5c002b86ce47537a \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->postcards()->delete('psc_5c002b86ce47537a');
```

## SelfMailers Api

### Create
```bash
curl https://api.lob.com/v1/self_mailers \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Demo Self Mailer job" \
  -d "to[name]=Harry Zhang" \
  -d "to[address_line1]=210 King St" \
  -d "to[address_city]=San Francisco" \
  -d "to[address_state]=CA" \
  -d "to[address_zip]=94107" \
  -d "from=adr_210a8d4b0b76d77b" \
  --data-urlencode "inside=<html style='padding: 1in; font-size: 50;'>Inside HTML for {{name}}</html>" \
  --data-urlencode "outside=<html style='padding: 1in; font-size: 20;'>Outside HTML for {{name}}</html>" \
  -d "merge_variables[name]=Harry"
```

```php
$lob->selfMailers()->create(array(
  'description'           => 'Demo Self Mailer job',
  'to[name]'              => 'Harry Zhang',
  'to[address_line1]'     => '210 King St',
  'to[address_city]'     => 'San Francisco',
  'to[address_zip]'       => '94107',
  'to[address_state]'     => 'CA',
  'from'                  => 'adr_210a8d4b0b76d77b',
  'inside'                => '<html style='padding: 1in; font-size: 50;'>Inside HTML for {{name}}</html>',
  'outside'               => '<html style='padding: 1in; font-size: 20;'>Outside HTML for {{name}}</html>',
  'merge_variables[name]' => 'Harry'
));
```

### Retrieve
```bash
curl -X GET "https://api.lob.com/v1/self_mailers/sfm_8ffbe811dea49dcf" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->selfMailers()->get('sfm_8ffbe811dea49dcf');
```

### List
```bash
curl -X GET "https://api.lob.com/v1/self_mailers?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->selfMailers()->all(array(
  'limit' => 2
));
```

### Delete
```bash
curl -X DELETE https://api.lob.com/v1/self_mailers/sfm_8ffbe811dea49dcf \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->selfMailers()->delete('sfm_8ffbe811dea49dcf');
```

## Letters Api

### Create
```bash
curl https://api.lob.com/v1/letters \
  -u YOUR_API_KEY \
  -d 'description=Demo Letter' \
  -d 'to[name]=Harry Zhang' \
  -d 'to[address_line1]=210 King St' \
  -d 'to[address_line2]=# 6100' \
  -d 'to[address_city]=San Francisco' \
  -d 'to[address_state]=CA' \
  -d 'to[address_zip]=94107' \
  -d 'from=adr_210a8d4b0b76d77b' \
  --data-urlencode 'file=<html style="padding-top: 3in; margin: .5in;">HTML Letter for {{name}}</html>' \
  -d 'merge_variables[name]=Harry' \
  -d 'color=true' \
  -d 'cards[]=card_c51ae96f5cebf3e'
```

```php
$lob->letters()->create(array(
  'description'           => 'Demo Letter',
  'to[name]'              => 'Harry Zhang',
  'to[address_line1]'     => '210 King St',
  'to[address_line2]'     => '# 6100',
  'to[address_city]'      => 'San Francisco',
  'to[address_zip]'       => '94107',
  'to[address_state]'     => 'CA',
  'from'                  => 'adr_210a8d4b0b76d77b',
  'file'                  => '<html style="padding-top: 3in; margin: .5in;">HTML Letter for {{name}}</html>',
  'merge_variables[name]' => 'Harry',
  'color'                 => true,
  'cards'                 => ['card_c51ae96f5cebf3e']
));
```

### Retrieve
```bash
curl https://api.lob.com/v1/letters/ltr_4868c3b754655f90 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->letters()->get('ltr_4868c3b754655f90');
```

### List
```bash
curl -X GET "https://api.lob.com/v1/letters?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->letters()->all(array(
  'limit' => 2
));
```

### Cancel
```bash
curl -X DELETE https://api.lob.com/v1/letters/ltr_4868c3b754655f90 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->letters()->delete('ltr_4868c3b754655f90');
```

## Checks Api

### Create
```bash
curl https://api.lob.com/v1/checks \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d 'description=Demo Check' \
  -d 'to[name]=Harry Zhang' \
  -d 'to[address_line1]=210 King St' \
  -d 'to[address_line2]=# 6100' \
  -d 'to[address_city]=San Francisco' \
  -d 'to[address_state]=CA' \
  -d 'to[address_zip]=94107' \
  -d 'from=adr_210a8d4b0b76d77b' \
  -d 'bank_account=bank_8cad8df5354d33f' \
  -d 'amount=22.50' \
  -d 'memo=rent' \
  --data-urlencode 'logo=https://s3-us-west-2.amazonaws.com/public.lob.com/assets/check_logo.png' \
  --data-urlencode 'check_bottom=<h1 style="padding-top:4in;">Demo Check for {{name}}</h1>' \
  -d 'merge_variables[name]=Harry'
```

```php
$lob->checks()->create(array(
  'description'           => 'Demo Check',
  'to[name]'              => 'Harry Zhang',
  'to[address_line1]'     => '210 King St',
  'to[address_line2]'     => '# 6100',
  'to[address_city]'      => 'San Francisco',
  'to[address_zip]'       => '94107',
  'to[address_state]'     => 'CA',
  'from'                  => 'adr_210a8d4b0b76d77b',
  'bank_account'          => 'bank_8cad8df5354d33f',
  'amount'                => 22.50,
  'memo'                  => 'rent',
  'logo'                  => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/check_logo.png',
  'check_bottom'          => '<h1 style="padding-top:4in;">Demo Check for {{name}}</h1>',
  'merge_variables[name]' => 'Harry'
));
```

### Retrieve
```bash
curl https://api.lob.com/v1/checks/chk_534f10783683daa0 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->checks()->get('chk_534f10783683daa0');
```

### List
```bash
curl -X GET "https://api.lob.com/v1/checks?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->checks()->all(array(
  'limit' => 2
));
```

### Cancel
```bash
curl -X DELETE https://api.lob.com/v1/checks/chk_534f10783683daa0 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->checks()->delete('chk_534f10783683daa0');
```

## BankAccounts Api

### Create
```bash
curl https://api.lob.com/v1/bank_accounts \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Test Bank Account" \
  -d "routing_number=322271627" \
  -d "account_number=123456789" \
  -d "signatory=John Doe" \
  -d "account_type=company"
```

```php
$lob->bankAccounts()->create(array(
  'description'       => 'Test Bank Account',
  'routing_number'    => '322271627',
  'account_number'    => '123456789',
  'signatory'         => 'John Doe',
  'account_type'      => 'company'
));
```

### Retrieve
```bash
curl https://api.lob.com/v1/bank_accounts/bank_8cad8df5354d33f \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->bankAccounts()->get('bank_8cad8df5354d33f');
```

### Verify
```bash
curl https://api.lob.com/v1/bank_accounts/bank_dfceb4a2a05b57e/verify \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "amounts[]=25" \
  -d "amounts[]=63"
```

```php
$lob->bankAccounts()->verify(array(
  'id' => 'bank_dfceb4a2a05b57e',
  'amounts' => array(25, 63)
));
```

### List
```bash
curl -X GET "https://api.lob.com/v1/bank_accounts?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->bankAccounts()->all(array(
  'limit' => 2
));
```

### Delete
```bash
curl -X DELETE https://api.lob.com/v1/bank_accounts/bank_3e64d9904356b20 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
$lob->bankAccounts()->delete('bank_3e64d9904356b20');
```

## Templates Api

### Create
```bash
curl https://api.lob.com/v1/templates \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Test Template" \
  --data-urlencode "html=<html>HTML for {{name}}</html>"
```

```php
This feature is not currently supported by this library.
```

### Retrieve
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

### List
```bash
curl -X GET "https://api.lob.com/v1/templates?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

### Update
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Updated description" \
  -d "published_version=vrsn_362184d96d9b0c9"
```

```php
This feature is not currently supported by this library.
```

### Delete
```bash
curl -X DELETE https://api.lob.com/v1/templates/tmpl_df934eeda694203 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

## TemplateVersions Api

### Create
```bash
curl https://api.lob.com/v1/templates/tmpl_4aa14648113e45b/versions \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Second Version" \
  --data-urlencode "html=<html>Second HTML for {{name}}</html>"
```

```php
This feature is not currently supported by this library.
```

### Retrieve
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121/versions/vrsn_534e339882d2282 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

### List
```bash
curl -X GET "https://api.lob.com/v1/templates/tmpl_ea6e6a1abf01703/versions?limit=2" \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

### Update
```bash
curl https://api.lob.com/v1/templates/tmpl_c94e83ca2cd5121/versions/vrsn_534e339882d2282 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "description=Updated description"
```

```php
This feature is not currently supported by this library.
```

### Delete
```bash
curl -X DELETE https://api.lob.com/v1/templates/tmpl_4aa14648113e45b/versions/vrsn_534e339882d2282 \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc:
```

```php
This feature is not currently supported by this library.
```

## UsVerifications Api

### Bulk Verify
```bash
curl https://api.lob.com/v1/bulk/us_verifications \
-u <YOUR LIVE API KEY>: \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'addresses[0][primary_line]=210 King Street' \
--data-urlencode 'addresses[0][city]=San Francisco' \
--data-urlencode 'addresses[0][state]=CA' \
--data-urlencode 'addresses[0][zip_code]=94017'
```

```php
$lob->bulkUSVerifications()->verify('addresses' => array(
  array(
    'primary_line' => '210 King Street',
    'city'         => 'San Francisco',
    'state'        => 'CA',
    'zip_code'     => '94107'
  )));
```

### Single Verify
```bash
curl https://api.lob.com/v1/us_verifications \
  -u <YOUR_LIVE_API_KEY>: \
  -d "primary_line=210 King Street" \
  -d "city=San Francisco" \
  -d "state=CA" \
  -d "zip_code=94107"
```

```php
$lob->usVerifications()->verify(array(
  'primary_line' => '210 King Street',
  'city'         => 'San Francisco',
  'state'        => 'CA',
  'zip_code'     => '94107'
));
```

## USAutoCompletions Api

### Autocomplete
```bash
curl https://api.lob.com/v1/us_autocompletions \
  -u <YOUR_LIVE_API_KEY>: \
  -d "address_prefix=185 B" \
  -d "city=San Francisco" \
  -d "state=CA"
  -d "zip_code=94107"
```

```php
$lob->usAutocompletions()->autocomplete(array(
  'address_prefix' => '185 B',
  'city'           => 'San Francisco',
  'state'          => 'CA',
  'zip_code'       => '94107'
));
```

## Reverse Geocode Lookups Api

### Reverse Geocode Lookup
```bash
curl https://api.lob.com/v1/us_reverse_geocode_lookups \
  -u <YOUR_LIVE_API_KEY>: \
  -d "latitude=37.7749" \
  -d "longitude=122.4194" \
```

```php
$lob->reverseGeocodeLookups()->lookup(array(
  'latitude' => 37.7749,
  'longitude' => 122.4194

));
```

## ZipLookups Api

### ZipLookup
```bash
curl https://api.lob.com/v1/us_zip_lookups \
  -u test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc: \
  -d "zip_code=94107"
```

```php
$lob->usZipLookups()->lookup(array(
  'zip_code' => '94107'
));
```

## IntlAutocompletion Api

### IntlAutocompletion
```bash
curl https://api.lob.com/v1/intl_autocompletions \
  -u <YOUR_LIVE_API_KEY>: \
  -d "address_prefix=340 Wat" \
  -d "city=Summerside" \
  -d "state=Prince Edward Island" \
  -d "zip_code=C1N 1C4" \
  -d "country=CA"
```

```php
$lob->intlVerifications()->verify(array(
  'address_prefix' => '340 Wat',
  'city'         => 'Summerside',
  'state'        => 'Prince Edward Island',
  'zip_code'  => 'C1N 1C4',
  'country'      => 'CA',
));
```

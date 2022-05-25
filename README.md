# OpenAPIClient-php

The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?


For more information, please visit [https://support.lob.com/](https://support.lob.com/).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run `php composer.phar install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_editable = new \OpenAPI\Client\Model\AddressEditable(); // \OpenAPI\Client\Model\AddressEditable

try {
    $result = $apiInstance->addressCreate($address_editable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.lob.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**addressCreate**](docs/Api/AddressesApi.md#addresscreate) | **POST** /addresses | create
*AddressesApi* | [**addressDelete**](docs/Api/AddressesApi.md#addressdelete) | **DELETE** /addresses/{adr_id} | delete
*AddressesApi* | [**addressRetrieve**](docs/Api/AddressesApi.md#addressretrieve) | **GET** /addresses/{adr_id} | get
*AddressesApi* | [**addressesList**](docs/Api/AddressesApi.md#addresseslist) | **GET** /addresses | list
*BankAccountsApi* | [**bankAccountCreate**](docs/Api/BankAccountsApi.md#bankaccountcreate) | **POST** /bank_accounts | create
*BankAccountsApi* | [**bankAccountDelete**](docs/Api/BankAccountsApi.md#bankaccountdelete) | **DELETE** /bank_accounts/{bank_id} | delete
*BankAccountsApi* | [**bankAccountRetrieve**](docs/Api/BankAccountsApi.md#bankaccountretrieve) | **GET** /bank_accounts/{bank_id} | get
*BankAccountsApi* | [**bankAccountVerify**](docs/Api/BankAccountsApi.md#bankaccountverify) | **POST** /bank_accounts/{bank_id}/verify | verify
*BankAccountsApi* | [**bankAccountsList**](docs/Api/BankAccountsApi.md#bankaccountslist) | **GET** /bank_accounts | list
*BillingGroupsApi* | [**billingGroupCreate**](docs/Api/BillingGroupsApi.md#billinggroupcreate) | **POST** /billing_groups | create
*BillingGroupsApi* | [**billingGroupRetrieve**](docs/Api/BillingGroupsApi.md#billinggroupretrieve) | **GET** /billing_groups/{bg_id} | get
*BillingGroupsApi* | [**billingGroupUpdate**](docs/Api/BillingGroupsApi.md#billinggroupupdate) | **POST** /billing_groups/{bg_id} | update
*BillingGroupsApi* | [**billingGroupsList**](docs/Api/BillingGroupsApi.md#billinggroupslist) | **GET** /billing_groups | list
*CardOrdersApi* | [**cardOrderCreate**](docs/Api/CardOrdersApi.md#cardordercreate) | **POST** /cards/{card_id}/orders | create
*CardOrdersApi* | [**cardOrdersRetrieve**](docs/Api/CardOrdersApi.md#cardordersretrieve) | **GET** /cards/{card_id}/orders | get
*CardsApi* | [**cardCreate**](docs/Api/CardsApi.md#cardcreate) | **POST** /cards | create
*CardsApi* | [**cardDelete**](docs/Api/CardsApi.md#carddelete) | **DELETE** /cards/{card_id} | delete
*CardsApi* | [**cardRetrieve**](docs/Api/CardsApi.md#cardretrieve) | **GET** /cards/{card_id} | get
*CardsApi* | [**cardUpdate**](docs/Api/CardsApi.md#cardupdate) | **POST** /cards/{card_id} | update
*CardsApi* | [**cardsList**](docs/Api/CardsApi.md#cardslist) | **GET** /cards | list
*ChecksApi* | [**checkCancel**](docs/Api/ChecksApi.md#checkcancel) | **DELETE** /checks/{chk_id} | cancel
*ChecksApi* | [**checkCreate**](docs/Api/ChecksApi.md#checkcreate) | **POST** /checks | create
*ChecksApi* | [**checkRetrieve**](docs/Api/ChecksApi.md#checkretrieve) | **GET** /checks/{chk_id} | get
*ChecksApi* | [**checksList**](docs/Api/ChecksApi.md#checkslist) | **GET** /checks | list
*IntlVerificationsApi* | [**bulkIntlVerifications**](docs/Api/IntlVerificationsApi.md#bulkintlverifications) | **POST** /bulk/intl_verifications | verifyBulk
*IntlVerificationsApi* | [**intlVerification**](docs/Api/IntlVerificationsApi.md#intlverification) | **POST** /intl_verifications | verifySingle
*LettersApi* | [**letterCancel**](docs/Api/LettersApi.md#lettercancel) | **DELETE** /letters/{ltr_id} | cancel
*LettersApi* | [**letterCreate**](docs/Api/LettersApi.md#lettercreate) | **POST** /letters | create
*LettersApi* | [**letterRetrieve**](docs/Api/LettersApi.md#letterretrieve) | **GET** /letters/{ltr_id} | get
*LettersApi* | [**lettersList**](docs/Api/LettersApi.md#letterslist) | **GET** /letters | list
*PostcardsApi* | [**postcardCreate**](docs/Api/PostcardsApi.md#postcardcreate) | **POST** /postcards | create
*PostcardsApi* | [**postcardDelete**](docs/Api/PostcardsApi.md#postcarddelete) | **DELETE** /postcards/{psc_id} | cancel
*PostcardsApi* | [**postcardRetrieve**](docs/Api/PostcardsApi.md#postcardretrieve) | **GET** /postcards/{psc_id} | get
*PostcardsApi* | [**postcardsList**](docs/Api/PostcardsApi.md#postcardslist) | **GET** /postcards | list
*ReverseGeocodeLookupsApi* | [**reverseGeocodeLookup**](docs/Api/ReverseGeocodeLookupsApi.md#reversegeocodelookup) | **POST** /us_reverse_geocode_lookups | lookup
*SelfMailersApi* | [**selfMailerCreate**](docs/Api/SelfMailersApi.md#selfmailercreate) | **POST** /self_mailers | create
*SelfMailersApi* | [**selfMailerDelete**](docs/Api/SelfMailersApi.md#selfmailerdelete) | **DELETE** /self_mailers/{sfm_id} | delete
*SelfMailersApi* | [**selfMailerRetrieve**](docs/Api/SelfMailersApi.md#selfmailerretrieve) | **GET** /self_mailers/{sfm_id} | get
*SelfMailersApi* | [**selfMailersList**](docs/Api/SelfMailersApi.md#selfmailerslist) | **GET** /self_mailers | list
*TemplateVersionsApi* | [**createTemplateVersion**](docs/Api/TemplateVersionsApi.md#createtemplateversion) | **POST** /templates/{tmpl_id}/versions | create
*TemplateVersionsApi* | [**templateVersionDelete**](docs/Api/TemplateVersionsApi.md#templateversiondelete) | **DELETE** /templates/{tmpl_id}/versions/{vrsn_id} | delete
*TemplateVersionsApi* | [**templateVersionRetrieve**](docs/Api/TemplateVersionsApi.md#templateversionretrieve) | **GET** /templates/{tmpl_id}/versions/{vrsn_id} | get
*TemplateVersionsApi* | [**templateVersionUpdate**](docs/Api/TemplateVersionsApi.md#templateversionupdate) | **POST** /templates/{tmpl_id}/versions/{vrsn_id} | update
*TemplateVersionsApi* | [**templateVersionsList**](docs/Api/TemplateVersionsApi.md#templateversionslist) | **GET** /templates/{tmpl_id}/versions | list
*TemplatesApi* | [**createTemplate**](docs/Api/TemplatesApi.md#createtemplate) | **POST** /templates | create
*TemplatesApi* | [**templateDelete**](docs/Api/TemplatesApi.md#templatedelete) | **DELETE** /templates/{tmpl_id} | delete
*TemplatesApi* | [**templateRetrieve**](docs/Api/TemplatesApi.md#templateretrieve) | **GET** /templates/{tmpl_id} | get
*TemplatesApi* | [**templateUpdate**](docs/Api/TemplatesApi.md#templateupdate) | **POST** /templates/{tmpl_id} | update
*TemplatesApi* | [**templatesList**](docs/Api/TemplatesApi.md#templateslist) | **GET** /templates | list
*USAutocompletionsApi* | [**autocompletion**](docs/Api/USAutocompletionsApi.md#autocompletion) | **POST** /us_autocompletions | autocomplete
*USVerificationsApi* | [**bulkUsVerifications**](docs/Api/USVerificationsApi.md#bulkusverifications) | **POST** /bulk/us_verifications | verifyBulk
*USVerificationsApi* | [**usVerification**](docs/Api/USVerificationsApi.md#usverification) | **POST** /us_verifications | verifySingle
*ZipLookupsApi* | [**zipLookup**](docs/Api/ZipLookupsApi.md#ziplookup) | **POST** /us_zip_lookups | lookup

## Models

- [Address](docs/Model/Address.md)
- [AddressDeletion](docs/Model/AddressDeletion.md)
- [AddressDomesticExpanded](docs/Model/AddressDomesticExpanded.md)
- [AddressEditable](docs/Model/AddressEditable.md)
- [AddressList](docs/Model/AddressList.md)
- [BankAccount](docs/Model/BankAccount.md)
- [BankAccountDeletion](docs/Model/BankAccountDeletion.md)
- [BankAccountList](docs/Model/BankAccountList.md)
- [BankAccountVerify](docs/Model/BankAccountVerify.md)
- [BankAccountWritable](docs/Model/BankAccountWritable.md)
- [BankTypeEnum](docs/Model/BankTypeEnum.md)
- [BillingGroup](docs/Model/BillingGroup.md)
- [BillingGroupEditable](docs/Model/BillingGroupEditable.md)
- [BillingGroupList](docs/Model/BillingGroupList.md)
- [Card](docs/Model/Card.md)
- [CardDeletion](docs/Model/CardDeletion.md)
- [CardEditable](docs/Model/CardEditable.md)
- [CardList](docs/Model/CardList.md)
- [CardOrder](docs/Model/CardOrder.md)
- [CardOrderEditable](docs/Model/CardOrderEditable.md)
- [CardOrderList](docs/Model/CardOrderList.md)
- [CardUpdatable](docs/Model/CardUpdatable.md)
- [Check](docs/Model/Check.md)
- [CheckDeletion](docs/Model/CheckDeletion.md)
- [CheckEditable](docs/Model/CheckEditable.md)
- [CheckList](docs/Model/CheckList.md)
- [CountryExtended](docs/Model/CountryExtended.md)
- [CountryExtendedExpanded](docs/Model/CountryExtendedExpanded.md)
- [DeliverabilityAnalysis](docs/Model/DeliverabilityAnalysis.md)
- [DpvFootnote](docs/Model/DpvFootnote.md)
- [EngineHtml](docs/Model/EngineHtml.md)
- [EventType](docs/Model/EventType.md)
- [Events](docs/Model/Events.md)
- [GeocodeAddresses](docs/Model/GeocodeAddresses.md)
- [GeocodeComponents](docs/Model/GeocodeComponents.md)
- [IntlComponents](docs/Model/IntlComponents.md)
- [IntlVerification](docs/Model/IntlVerification.md)
- [IntlVerificationOrError](docs/Model/IntlVerificationOrError.md)
- [IntlVerificationWritable](docs/Model/IntlVerificationWritable.md)
- [IntlVerifications](docs/Model/IntlVerifications.md)
- [IntlVerificationsPayload](docs/Model/IntlVerificationsPayload.md)
- [Letter](docs/Model/Letter.md)
- [LetterCustomEnvelope](docs/Model/LetterCustomEnvelope.md)
- [LetterDeletion](docs/Model/LetterDeletion.md)
- [LetterEditable](docs/Model/LetterEditable.md)
- [LetterList](docs/Model/LetterList.md)
- [LobConfidenceScore](docs/Model/LobConfidenceScore.md)
- [LobError](docs/Model/LobError.md)
- [Location](docs/Model/Location.md)
- [LocationAnalysis](docs/Model/LocationAnalysis.md)
- [MailType](docs/Model/MailType.md)
- [MultipleComponents](docs/Model/MultipleComponents.md)
- [MultipleComponentsIntl](docs/Model/MultipleComponentsIntl.md)
- [MultipleComponentsList](docs/Model/MultipleComponentsList.md)
- [Postcard](docs/Model/Postcard.md)
- [PostcardDeletion](docs/Model/PostcardDeletion.md)
- [PostcardEditable](docs/Model/PostcardEditable.md)
- [PostcardList](docs/Model/PostcardList.md)
- [PostcardSize](docs/Model/PostcardSize.md)
- [ReverseGeocode](docs/Model/ReverseGeocode.md)
- [SelfMailer](docs/Model/SelfMailer.md)
- [SelfMailerDeletion](docs/Model/SelfMailerDeletion.md)
- [SelfMailerEditable](docs/Model/SelfMailerEditable.md)
- [SelfMailerList](docs/Model/SelfMailerList.md)
- [SelfMailerSize](docs/Model/SelfMailerSize.md)
- [SendDate](docs/Model/SendDate.md)
- [SortBy](docs/Model/SortBy.md)
- [SortBy1](docs/Model/SortBy1.md)
- [SortBy2](docs/Model/SortBy2.md)
- [SortBy3](docs/Model/SortBy3.md)
- [SortBy4](docs/Model/SortBy4.md)
- [SortBy5](docs/Model/SortBy5.md)
- [Suggestions](docs/Model/Suggestions.md)
- [Template](docs/Model/Template.md)
- [TemplateDeletion](docs/Model/TemplateDeletion.md)
- [TemplateList](docs/Model/TemplateList.md)
- [TemplateUpdate](docs/Model/TemplateUpdate.md)
- [TemplateVersion](docs/Model/TemplateVersion.md)
- [TemplateVersionDeletion](docs/Model/TemplateVersionDeletion.md)
- [TemplateVersionList](docs/Model/TemplateVersionList.md)
- [TemplateVersionUpdatable](docs/Model/TemplateVersionUpdatable.md)
- [TemplateVersionWritable](docs/Model/TemplateVersionWritable.md)
- [TemplateWritable](docs/Model/TemplateWritable.md)
- [Thumbnail](docs/Model/Thumbnail.md)
- [TrackingEventCertified](docs/Model/TrackingEventCertified.md)
- [TrackingEventDetails](docs/Model/TrackingEventDetails.md)
- [TrackingEventNormal](docs/Model/TrackingEventNormal.md)
- [UsAutocompletions](docs/Model/UsAutocompletions.md)
- [UsAutocompletionsWritable](docs/Model/UsAutocompletionsWritable.md)
- [UsComponents](docs/Model/UsComponents.md)
- [UsVerification](docs/Model/UsVerification.md)
- [UsVerificationOrError](docs/Model/UsVerificationOrError.md)
- [UsVerifications](docs/Model/UsVerifications.md)
- [UsVerificationsWritable](docs/Model/UsVerificationsWritable.md)
- [Zip](docs/Model/Zip.md)
- [ZipCodeType](docs/Model/ZipCodeType.md)
- [ZipEditable](docs/Model/ZipEditable.md)
- [ZipLookupCity](docs/Model/ZipLookupCity.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

Before running tests, 
```bash
composer install
```

To run unit tests
```bash
vendor/bin/phpunit --group unit --coverage-text --coverage-html coverage/html
```

To run the tests, use:

```bash
vendor/bin/phpunit
```


## Author

lob-openapi@lob.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.3.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

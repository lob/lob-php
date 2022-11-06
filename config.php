<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\LettersApi;
use \OpenAPI\Client\Api\AddressesApi;
use \OpenAPI\Client\Api\TemplatesApi;
use \OpenAPI\Client\Model\MailType;

use \OpenAPI\Client\Api\UsAutocompletionsApi;
use \OpenAPI\Client\Model\UsAutocompletionsWritable;

$config = new Configuration();
$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
$letterApi = new LettersApi($config);

$to = new OpenAPI\Client\Model\AddressEditable(
    array(
      "name"     => "Harry Zhang",
      "address_line1"     => "210 King St",
      "address_line2"     => "# 6100",
      "address_city"     => "San Francisco",
      "address_state"     => "CA",
      "address_zip"     => "94107",
    )
  );

  $merge_variables = new stdClass;
  $merge_variables->name = "Harry";

  $apiInstance = new OpenAPI\Client\Api\LettersApi($config, new GuzzleHttp\Client());
//   print_r(fopen("/Users/jessica-ho/Desktop/lob-openapi/tests/assets/us_letter_1pg.pdf", 'r'));
  $letter_editable = new OpenAPI\Client\Model\LetterEditable(
    array(
      "description"     => "Demo Letter",
      "from"     => $to,
      "file"     => array(
        'name' => 'us_letter_1pg.pdf',
        'full_path' => 'us_letter_1pg.pdf',
        'type' => 'application/pdf',
        'tmp_name' => '',
        'error' => 1,
        'size' => 0
      ),
      "color"     => "true",
      "to"     => $to,
      "merge_variables"     => $merge_variables,
    //   "cards"     => array(
    //     "card_c51ae96f5cebf3e",
    //     "card_thingy",
    //   ),
    )
  );

  try {
      $result = $apiInstance->create($letter_editable);
  } catch (Exception $e) {
      echo $e->getMessage(), PHP_EOL;
  }

// try {
//     $usAutocompletionApi = new UsAutocompletionsApi($config);
//     $errorAutocompletion = new UsAutocompletionsWritable();
//     $errorAutocompletion->setCity("WESTFIELD");
//     $errorAutocompletion->setState("NJ");
//     $errorAutocompletion->setZipCode("07090");
//     $errorAutocompletion->setGeoIpSort(false);
//     $errorResponse = $usAutocompletionApi->autocomplete($errorAutocompletion);
// } catch (ApiException $e) {
//     echo $e->getCode();
// }

// $listOfLetters = $letterApi->list(100);
// foreach ($listOfLetters->getData() as $letter) {
//     echo $letter->getId();
//     $deletedLetter = $letterApi->cancel($letter->getId());
//     if (!$deletedLetter->getDeleted())
//         echo "BAH";
// }

// delete addresses
// $listOfLetters = $letterApi->list(8);
// foreach ($listOfLetters->getData() as $letter) {
//     echo $letter->getId();
//     $deletedLetter = $letterApi->delete($letter->getId());
//     if (!$deletedLetter->getDeleted())
//         echo "BAH";
// }

// use \OpenAPI\Client\Api\ReverseGeocodeLookupsApi;
// use \OpenAPI\Client\Model\Location;

// $reverseGeocodeApi = new ReverseGeocodeLookupsApi($config);

// $location = new Location();
// $location->setLongitude(-122.393039);
// try {
//     $reverseGeocodeObject = $reverseGeocodeApi->lookup($location, 3);
// } catch (\Exception $e) {
//     echo $e->getCode();
// }

// // Configure HTTP basic authorization: basicAuth
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()
// ->setApiKey('basic', 'test_62291d3cc85971719264edb12016561ed19');

// $apiInstance = new OpenAPI\Client\Api\UsAutocompletionsApi($config, new GuzzleHttp\Client());

// $autocompletionData = new OpenAPI\Client\Model\UsAutocompletionsWritable(array(
//     "address_prefix" =>  "185 B",
//     "city" =>  "San Francisco",
//     "state" =>  "CA",
//     "zip_code" =>  "94017",
// ));

// try {
//     $result = $apiInstance->autocomplete($autocompletionData);
//     print_r($result);
// } catch (Exception $e) {
//     echo $e->getMessage(), PHP_EOL;
// }
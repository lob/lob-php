<?php
/**
 * AddressesApiTest
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lob
 *
 * The Lob API is organized around REST. Our API is designed to have predictable, resource-oriented URLs and uses HTTP response codes to indicate any API errors. <p> Looking for our [previous documentation](https://lob.github.io/legacy-docs/)?
 *
 * The version of the OpenAPI document: 1.3.0
 * Contact: lob-openapi@lob.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client\Test\Api;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Model\AddressEditable;
use \OpenAPI\Client\Api\AddressesApi;

/**
 * AddressesApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class AddressesApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $addressApi;
    private static $editableAddress;
    private static $errorAddress;
    private static $address1;
    private static $address2;
    private static $address3;
    private static $metadata;

    // for teardown post-testing
    private $idsForCleanup = [];

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of AddressesApi & an editable address for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$addressApi = new AddressesApi(self::$config);

        self::$editableAddress = new AddressEditable();
        self::$editableAddress->setName("THING T. THING");
        self::$editableAddress->setAddressLine1("1313 CEMETERY LN");
        self::$editableAddress->setAddressCity("WESTFIELD");
        self::$editableAddress->setAddressState("NJ");
        self::$editableAddress->setAddressZip("07000");

        self::$errorAddress = new AddressEditable();
        self::$errorAddress->setName("THING T. THING");
        self::$errorAddress->setAddressCity("WESTFIELD");
        self::$errorAddress->setAddressState("NJ");
        self::$errorAddress->setAddressZip("07000");

        // for testAddressList
        self::$address1 = new AddressEditable();
        self::$address1->setName("FESTER");
        self::$address1->setAddressLine1("001 CEMETERY LN");
        self::$address1->setAddressLine2("SUITE 666");
        self::$address1->setAddressCity("WESTFIELD");
        self::$address1->setAddressState("NJ");
        self::$address1->setAddressZip("07000");

        self::$address2 = new AddressEditable();
        self::$address2->setName("MORTICIA ADDAMS");
        self::$address2->setAddressLine1("1212 CEMETERY LN");
        self::$address2->setAddressCity("WESTFIELD");
        self::$address2->setAddressState("NJ");
        self::$address2->setAddressZip("07000");

        self::$address3 = new AddressEditable();
        self::$address3->setName("COUSIN ITT");
        self::$address3->setAddressLine1("1515 CEMETERY LN");
        self::$address3->setAddressLine2("FLOOR 0");
        self::$address3->setAddressCity("WESTFIELD");
        self::$address3->setAddressState("NJ");
        self::$address3->setAddressZip("07000");
        self::$metadata = array("name"=>"Harry");
        self::$metadata = (object)self::$metadata;
        self::$address3->setMetadata(self::$metadata);
    }

    public function tearDown(): void
    {
        foreach ($this->idsForCleanup as $id) {
            self::$addressApi->delete($id);
        }
    }

    public function testAddressesApiInstantiation200() {
      $addressApi200 = new AddressesApi(self::$config);
      $this->assertEquals(gettype($addressApi200), 'object');
    }

    public function testCreate200()
    {
      $createdAddress = self::$addressApi->create(self::$editableAddress);
      $this->assertMatchesRegularExpression('/adr_/', $createdAddress->getId());
      array_push($this->idsForCleanup, $createdAddress->getId());
    }

    // does not include required field in request
    public function testCreate422()
    {
      $this->expectException(ApiException::class);
      $this->expectExceptionMessageMatches("/address_line1 is required/");
      $errorResponse = self::$addressApi->create(self::$errorAddress);
    }

    // uses a bad key to attempt to send a request
    public function testAddressApi401() {
      $wrongConfig = new Configuration();
      $wrongConfig->setApiKey('basic', 'BAD KEY');
      $addressApiError = new AddressesApi($wrongConfig);

      $this->expectException(ApiException::class);
      $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
      $errorResponse = $addressApiError->create(self::$editableAddress);
    }

    public function testGet200()
    {
      $createdAddress = self::$addressApi->create(self::$editableAddress);
      $retrievedAddress = self::$addressApi->get($createdAddress->getId());
      $this->assertEquals($createdAddress->getAddressLine1(), $retrievedAddress->getAddressLine1());
      array_push($this->idsForCleanup, $createdAddress->getId());
    }

    public function testGet404()
    {
      $this->expectException(ApiException::class);
      $this->expectExceptionMessageMatches("/address not found/");
      $badRetrieval = self::$addressApi->get("adr_NONEXISTENT");
    }

    public function testList200()
    {
        $nextUrl = "";
        $previousUrl = "";
        $add1 = self::$addressApi->create(self::$address1);
        $add2 = self::$addressApi->create(self::$address2);
        $add3 = self::$addressApi->create(self::$address3);
        $listedAddresses = self::$addressApi->list(3);
        $this->assertGreaterThan(1, count($listedAddresses->getData()));
        $this->assertLessThanOrEqual(3, count($listedAddresses->getData()));
        $nextUrl = substr($listedAddresses->getNextUrl(), strrpos($listedAddresses->getNextUrl(), "after=") + 6);
        $this->assertIsString($nextUrl);
        array_push($this->idsForCleanup, $add1->getId());
        array_push($this->idsForCleanup, $add2->getId());
        array_push($this->idsForCleanup, $add3->getId());

        // response using nextUrl
        if ($nextUrl != "") {
          $add1 = self::$addressApi->create(self::$address1);
          $add2 = self::$addressApi->create(self::$address2);
          $add3 = self::$addressApi->create(self::$address3);
          $listedAddressesAfter = self::$addressApi->list(3, null, $nextUrl);
          $this->assertGreaterThan(1, count($listedAddressesAfter->getData()));
          $this->assertLessThanOrEqual(3, count($listedAddressesAfter->getData()));
          $previousUrl = substr($listedAddressesAfter->getPreviousUrl(), strrpos($listedAddressesAfter->getPreviousUrl(), "before=") + 7);
          $this->assertIsString($previousUrl);
          array_push($this->idsForCleanup, $add1->getId());
          array_push($this->idsForCleanup, $add2->getId());
          array_push($this->idsForCleanup, $add3->getId());
        }

        // response using previousUrl
        if ($previousUrl != "") {
          $add1 = self::$addressApi->create(self::$address1);
          $add2 = self::$addressApi->create(self::$address2);
          $add3 = self::$addressApi->create(self::$address3);
          $listedAddressesBefore = self::$addressApi->list(3, $previousUrl);
          $this->assertGreaterThan(1, count($listedAddressesBefore->getData()));
          $this->assertLessThanOrEqual(3, count($listedAddressesBefore->getData()));
          array_push($this->idsForCleanup, $add1->getId());
          array_push($this->idsForCleanup, $add2->getId());
          array_push($this->idsForCleanup, $add3->getId());
        }
    }

    public function provider()
    {
        date_default_timezone_set('America/Los_Angeles');
        $date_str = date("Y-m-d", strtotime("-1 months"));
        $date_obj = (object) array("gt" => $date_str);

        return array(
          array(null, null, null, array("total_count"), null, null),
          array(null, null, null, null, $date_obj, null),
          array(null, null, null, null, null, self::$metadata),
        );
    }

    /**
     * @dataProvider provider
     */
    public function testListWithParams($limit, $before, $after, $include, $date_created, $metadata)
    {
        // create addresses to list
        $add1 = self::$addressApi->create(self::$address1);
        $add2 = self::$addressApi->create(self::$address2);
        $add3 = self::$addressApi->create(self::$address3);
        $listedAddresses = self::$addressApi->list($limit, $before, $after, $include, $date_created, $metadata);

        $this->assertGreaterThan(0, $listedAddresses->getCount());
        if ($include) $this->assertNotNull($listedAddresses->getTotalCount());

        // delete created addresses
        array_push($this->idsForCleanup, $add1->getId());
        array_push($this->idsForCleanup, $add2->getId());
        array_push($this->idsForCleanup, $add3->getId());
    }

    public function testDelete200()
    {
      $createdAddress = self::$addressApi->create(self::$editableAddress);
      $deletedAddress = self::$addressApi->delete($createdAddress->getId());
      $this->assertEquals(true, $deletedAddress->getDeleted());
      $this->assertMatchesRegularExpression('/adr_/', $deletedAddress->getId());
    }

    public function testDelete404()
    {
      $this->expectException(ApiException::class);
      $this->expectExceptionMessageMatches("/address not found/");
      $badDeletion = self::$addressApi->delete("adr_NONEXISTENT");
    }
}

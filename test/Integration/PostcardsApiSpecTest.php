<?php
/**
 * PostcardsApiSpecTest
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
use \OpenAPI\Client\Model\PostcardEditable;
use \OpenAPI\Client\Model\PostcardSize;
use \OpenAPI\Client\Api\PostcardsApi;
use \OpenAPI\Client\Model\AddressEditable;
use \OpenAPI\Client\Model\MailType;
use \OpenAPI\Client\Model\SortBy5;
use \OpenAPI\Client\Api\AddressesApi;

/**
 * AddressesApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class PostcardsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $addressApi;
    private static $postcardsApi;
    private static $invalidPostcardsApi;
    private static $editablePostcard;
    private static $editablePostcard2;
    private static $errorPostcard;
    private static $metadata;

    // for teardown post-testing
    private $idsForCleanup = [];
    private static $toAddress;
    private static $fromAddress;
    private static $toAddress2;
    private static $fromAddress2;
    private static $undeliverableTo;

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of AddressesApi & addresses to use for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$addressApi = new AddressesApi(self::$config);

        $address1 = new AddressEditable();
        $address1->setName("THING T. THING");
        $address1->setAddressLine1("1313 CEMETERY LN");
        $address1->setAddressCity("WESTFIELD");
        $address1->setAddressState("NJ");
        $address1->setAddressZip("07000");

        $address2 = new AddressEditable();
        $address2->setName("FESTER");
        $address2->setAddressLine1("001 CEMETERY LN");
        $address2->setAddressLine2("SUITE 666");
        $address2->setAddressCity("WESTFIELD");
        $address2->setAddressState("NJ");
        $address2->setAddressZip("07000");

        self::$toAddress = self::$addressApi->create($address1);
        self::$fromAddress = self::$addressApi->create($address2);

        $address3 = new AddressEditable();
        $address3->setName("MORTICIA ADDAMS");
        $address3->setAddressLine1("1212 CEMETERY LN");
        $address3->setAddressCity("WESTFIELD");
        $address3->setAddressState("NJ");
        $address3->setAddressZip("07000");

        $address4 = new AddressEditable();
        $address4->setName("COUSIN ITT");
        $address4->setAddressLine1("1515 CEMETERY LN");
        $address4->setAddressLine2("FLOOR 0");
        $address4->setAddressCity("WESTFIELD");
        $address4->setAddressState("NJ");
        $address4->setAddressZip("07000");

        self::$toAddress2 = self::$addressApi->create($address3);
        self::$fromAddress2 = self::$addressApi->create($address4);

        // create undeliverable address
        $fakeAdr = new AddressEditable();
        $fakeAdr->setName("IMAGINARY INDIVIDUAL");
        $fakeAdr->setAddressLine1("1234 MAIN ST");
        $fakeAdr->setAddressCity("FAKE CITY");
        $fakeAdr->setAddressState("CA");
        $fakeAdr->setAddressZip("95135");

        self::$undeliverableTo = self::$addressApi->create($fakeAdr);

        // create new instance of PostcardsApi to use in other tests
        self::$postcardsApi = new PostcardsApi(self::$config);

        $invalidConfig = new Configuration();
        $invalidConfig->setApiKey("basic", "Totally Fake Key");
        self::$invalidPostcardsApi = new PostcardsApi($invalidConfig);

        // create editable postcard
        self::$editablePostcard = new PostcardEditable();
        self::$editablePostcard->setTo(self::$toAddress->getId());
        self::$editablePostcard->setFrom(self::$fromAddress->getId());
        self::$editablePostcard->setSize(PostcardSize::_4X6->value);
        self::$editablePostcard->setDescription("Dummy Postcard (Integration Test)");
        self::$editablePostcard->setMailType(MailType::FIRST_CLASS->value);
        self::$editablePostcard->setFront("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
        self::$editablePostcard->setBack("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");

        // create second editable postcard
        self::$editablePostcard2 = new PostcardEditable();
        self::$editablePostcard2->setTo(self::$toAddress2->getId());
        self::$editablePostcard2->setFrom(self::$fromAddress2->getId());
        self::$editablePostcard2->setSize(PostcardSize::_4X6->value);
        self::$editablePostcard2->setDescription("Dummy Postcard (Integration Test)");
        self::$editablePostcard2->setMailType(MailType::FIRST_CLASS->value);
        self::$editablePostcard2->setFront("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
        self::$editablePostcard2->setBack("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
        self::$metadata = (object)array("name"=>"Harry");
        self::$editablePostcard2->setMetadata(self::$metadata);

        // create error postcard
        self::$errorPostcard = new PostcardEditable();
        self::$errorPostcard->setFrom(self::$fromAddress->getId());
        self::$errorPostcard->setSize(PostcardSize::_4X6->value);
        self::$errorPostcard->setDescription("Dummy Postcard (Integration Test)");
        self::$errorPostcard->setMailType(MailType::FIRST_CLASS->value);
        self::$errorPostcard->setFront("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
        self::$errorPostcard->setBack("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
    }

    public function tearDown(): void
    {
        foreach ($this->idsForCleanup as $id) {
            self::$postcardsApi->cancel($id);
        }
    }

    public static function tearDownAfterClass(): void {
        self::$addressApi->delete(self::$toAddress->getId());
        self::$addressApi->delete(self::$toAddress2->getId());
        self::$addressApi->delete(self::$fromAddress->getId());
        self::$addressApi->delete(self::$fromAddress2->getId());
        self::$addressApi->delete(self::$undeliverableTo->getId());
    }

    // include static cleanup for all the addresses?

    /**
     * @group integration
     * @group postcards
     */
    public function testPostcardsApiInstantiation200() {
        try {
            $postcardsApi200 = new PostcardsApi(self::$config);
            $this->assertEquals(gettype($postcardsApi200), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group postcards
     */
    public function testCreate200()
    {
        try {
            $createdPostcard = self::$postcardsApi->create(self::$editablePostcard);
            $this->assertMatchesRegularExpression('/psc_/', $createdPostcard->getId());
            array_push($this->idsForCleanup, $createdPostcard->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group postcards
     */
    // does not include required field in request
    public function testCreate422()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/to is required/");
        $errorResponse = self::$postcardsApi->create(self::$errorPostcard);
    }

    /**
     * @group integration
     * @group postcards
     */
    // uses incorrect address
    // TODO: reimplement this once we figure out how to test individual flags (or we change our deliverability strictness)
    public function testCreateBadAddress()
    {
        $this->markTestSkipped("skipping test in anticipation of changes");
        $badAddressPostcard = new PostcardEditable();
        $badAddressPostcard->setTo(self::$undeliverableTo->id);
        $badAddressPostcard->setSize(PostcardSize::_4X6->value);
        $badAddressPostcard->setDescription("Dummy Postcard (Integration Test)");
        $badAddressPostcard->setMailType(MailType::FIRST_CLASS->value);
        $badAddressPostcard->setFront("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");
        $badAddressPostcard->setBack("https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/4x6_pc_template.pdf");

        $errorResponse = self::$postcardsApi->create($badAddressPostcard);
        $this->assertObjectHasAttribute('id', $errorResponse);
        // array_push($this->idsForCleanup, $errorResponse->id);
    }

    /**
     * @group integration
     * @group postcards
     */
    // uses a bad key to attempt to send a request
    public function testPostcardApi401() {
        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $postcardApiError = new PostcardsApi($wrongConfig);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $errorResponse = $postcardApiError->create(self::$editablePostcard);
    }

    /**
     * @group integration
     * @group postcards
     */
    public function testGet200()
    {
        try {
            $createdPostcard = self::$postcardsApi->create(self::$editablePostcard);
            $retrievedPostcard = self::$postcardsApi->get($createdPostcard->getId());
            $this->assertEquals($createdPostcard->getTo(), $retrievedPostcard->getTo());
            array_push($this->idsForCleanup, $createdPostcard->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testGet0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $badRetrieval = self::$postcardsApi->get(null);
    }

    public function testGet401()
    {
        $createdPostcard = self::$postcardsApi->create(self::$editablePostcard);
        array_push($this->idsForCleanup, $createdPostcard->getId());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $badRetrieval = self::$invalidPostcardsApi->get($createdPostcard->getId());
    }

    public function testGet404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/postcard not found/");
        $badRetrieval = self::$postcardsApi->get("psc_NONEXISTENT");
    }

    /**
     * @group integration
     * @group postcards
     */
    public function testList200()
    {
        $nextUrl = "";
        $previousUrl = "";
        try {
            $psc1 = self::$postcardsApi->create(self::$editablePostcard);
            $psc2 = self::$postcardsApi->create(self::$editablePostcard2);
            $listedPostcards = self::$postcardsApi->list(2);
            $this->assertGreaterThan(1, count($listedPostcards->getData()));
            $this->assertLessThanOrEqual(2, count($listedPostcards->getData()));
            $nextUrl = substr($listedPostcards->getNextUrl(), strrpos($listedPostcards->getNextUrl(), "after=") + 6);
            $this->assertIsString($nextUrl);
            array_push($this->idsForCleanup, $psc1->getId());
            array_push($this->idsForCleanup, $psc2->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        // response using nextUrl
        if ($nextUrl != "") {
            try {
                $psc1 = self::$postcardsApi->create(self::$editablePostcard);
                $psc2 = self::$postcardsApi->create(self::$editablePostcard2);
                $listedPostcardsAfter = self::$postcardsApi->list(2, null, $nextUrl);
                $this->assertGreaterThan(1, count($listedPostcardsAfter->getData()));
                $this->assertLessThanOrEqual(2, count($listedPostcardsAfter->getData()));
                $previousUrl = substr($listedPostcardsAfter->getPreviousUrl(), strrpos($listedPostcardsAfter->getPreviousUrl(), "before=") + 7);
                $this->assertIsString($previousUrl);
                array_push($this->idsForCleanup, $psc1->getId());
                array_push($this->idsForCleanup, $psc2->getId());
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        // response using previousUrl
        if ($previousUrl != "") {
            try {
                $psc1 = self::$postcardsApi->create(self::$editablePostcard);
                $psc2 = self::$postcardsApi->create(self::$editablePostcard2);
                $listedPostcardsBefore = self::$postcardsApi->list(2, $previousUrl);
                $this->assertGreaterThan(1, count($listedPostcardsBefore->getData()));
                $this->assertLessThanOrEqual(2, count($listedPostcardsBefore->getData()));
                array_push($this->idsForCleanup, $psc1->getId());
                array_push($this->idsForCleanup, $psc2->getId());
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function provider()
    {
        date_default_timezone_set('America/Los_Angeles');
        $date_str = date("Y-m-d", strtotime("-1 months"));
        $date_obj = (object) array("gt" => $date_str);

        return array(
            array(null, null, null, array("total_count"), null, null, null, null, null, null, null), // include
            array(null, null, null, null, $date_obj, null, null, null, null, null, null), // date_created
            array(null, null, null, null, null, self::$metadata, null, null, null, null, null), // metadata
            array(null, null, null, null, null, null, [PostcardSize::_4X6->value], null, null, null, null), // size
            array(null, null, null, null, null, null, null, TRUE, null, null, null), // scheduled
            array(null, null, null, null, null, null, null, null, $date_obj, null, null), // send_date
            array(null, null, null, null, null, null, null, null, null, MailType::FIRST_CLASS->value, null), // mail_type
            array(null, null, null, null, null, null, null, null, null, null, new SortBy5(array("date_created" => "asc"))) // sort_by
        );
    }

    /**
     * @dataProvider provider
     */
    public function testListWithParams($limit, $before, $after, $include, $date_created, $metadata, $size, $scheduled, $send_date, $mail_type, $sort_by)
    {
        try {
            // create postcards to list
            $psc1 = self::$postcardsApi->create(self::$editablePostcard);
            $psc2 = self::$postcardsApi->create(self::$editablePostcard2);

            // cancel created postcards
            array_push($this->idsForCleanup, $psc1->getId());
            array_push($this->idsForCleanup, $psc2->getId());
            $listedPostcards = self::$postcardsApi->list($limit, $before, $after, $include, $date_created, $metadata, $size, $scheduled, $send_date, $mail_type, $sort_by);

            $this->assertGreaterThan(0, $listedPostcards->getCount());
            if ($include) $this->assertNotNull($listedPostcards->getTotalCount());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group postcards
     */
    public function testCancel200()
    {
        try {
            $createdPostcard = self::$postcardsApi->create(self::$editablePostcard);
            $deletedPostcard = self::$postcardsApi->cancel($createdPostcard->getId());
            $this->assertEquals(true, $deletedPostcard->getDeleted());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testCancel401()
    {
        $createdPostcard = self::$postcardsApi->create(self::$editablePostcard);
        array_push($this->idsForCleanup, $createdPostcard->getId());

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $badDeletion = self::$invalidPostcardsApi->cancel($createdPostcard->getId());
    }

    public function testCancel404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/postcard not found/");
        $badDeletion = self::$postcardsApi->cancel("psc_NONEXISTENT");
    }
}

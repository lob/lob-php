<?php
/**
 * PostcardsApiTest
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

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ConnectException;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Model\PostcardEditable;
use \OpenAPI\Client\Model\PostcardDeletion;
use \OpenAPI\Client\Model\PostcardList;
use \OpenAPI\Client\Model\Postcard;
use \OpenAPI\Client\Api\PostcardsApi;

/**
 * PostcardsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class PostcardsApiUnitTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $mockPostcardId;
    private static $mockEditablePostcard;
    private static $mockPostcardResponse;
    private static $mockPostcardList;
    private static $mockDeletedPostcard;

    // set up constant fixtures
    public function setUp(): void
    {
        self::$mockPostcardId = "psc_fakeId";
        self::$mockEditablePostcard = new PostcardEditable();

        self::$mockPostcardResponse = new Postcard();
        self::$mockPostcardResponse->setId(self::$mockPostcardId);
        self::$mockPostcardResponse->setUrl("https://lob-assets.com/postcards/psc_208e45e48d271294.pdf?version=v1&expires=1619218302&signature=NfHHLBSr5tOHA_Z4kij4dKqZG8f3vMDtwvuFVeeF9pV_lylcjLsVVODhNCE5hR6-2slUr6t9WMNsi429Pj7_DA");

        // Postcard List Fixture
        self::$mockPostcardList = new PostcardList();
        $item1 = new Postcard();
        $item2 = new Postcard();
        $item3 = new Postcard();
        $item1->setId("psc_fakeId1");
        $item2->setId("psc_fakeId2");
        $item3->setId("psc_fakeId3");

        self::$mockPostcardList->setData(array ($item1,$item2,$item3));
        self::$mockPostcardList->setObject("list");
        self::$mockPostcardList->setCount("3");

        // Postcard Delete Fixture
        self::$mockDeletedPostcard = new PostcardDeletion();
        self::$mockDeletedPostcard->setId("psc_fakeIdForDel");
        self::$mockDeletedPostcard->setDeleted(true);
        self::$mockDeletedPostcard->setObject("postcard_deleted");
    }

    /** ***** ***** *****
     * Create
     * ***** ***** *****/

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $postcardApi->create(self::$mockEditablePostcard);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCreate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockPostcardResponse));

        try {
            $happyPath = $postcardsApi->create(self::$mockEditablePostcard);
            $this->assertEquals($happyPath->getId(), self::$mockPostcardId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: public function testPostcardCreateWithCustomHeaders()

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateWithIdempotency()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockPostcardResponse));
        try {
            $happyPath = $postcardsApi->create(self::$mockEditablePostcard, "fake key");
            $this->assertEquals($happyPath->getId(), self::$mockPostcardId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateFailBadAddress()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $postcardsApi->create([]);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateMalformedRequest()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ApiException("forced error", 422));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced error/");
            $unhappyPath = $postcardsApi->create(self::$mockEditablePostcard);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));

        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $postcardsApi->create(self::$mockEditablePostcard);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCreateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $postcardsApi->create(self::$mockEditablePostcard);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Get
     * ***** ***** *****/

    /**
     * @group unit
     * @group postcards
     */
    public function testGetConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $postcardsApi->get(self::$mockPostcardId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGet()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockPostcardResponse));
        try {
            $happyPath = $postcardsApi->get(self::$mockPostcardId);
            $this->assertEquals($happyPath->getId(), self::$mockPostcardId);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGetFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $postcardsApi->get(null);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGetFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $postcardsApi->get("Narp");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGetFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ApiException("postcard not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/postcard not found/");
            $unhappyPath = $postcardsApi->get("psc_BADID");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGetApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $postcardsApi->get(self::$mockPostcardId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testGetFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $postcardsApi->get(self::$mockPostcardId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * List
     * ***** ***** *****/

    /**
     * @group unit
     * @group postcards
     */
    public function testListConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $errorResponse = $postcardsApi->list(3);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testList()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockPostcardList));

        try {
            $happyPath = $postcardsApi->list(3);
            $data = $happyPath->getData();
            $this->assertEquals(3, count($data));
            $this->assertEquals($data[0]->getId(), "psc_fakeId1");
            $this->assertEquals($data[1]->getId(), "psc_fakeId2");
            $this->assertEquals($data[2]->getId(), "psc_fakeId3");
        } catch (Exception $listError) {
            echo 'Caught exception: ',  $listError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testListFailBadParamsLargeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $postcardsApi->list(1000);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testListFailBadParamsNegativeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $postcardsApi->list(-1);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testListFailBadParamsLargeMetadata()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $postcardsApi->list(10, null, null, null, null, str_repeat("N", 600));
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testListFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $postcardsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testListFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $postcardsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    // ToDo: public function testListPagination()

    /** ***** ***** *****
     * Cancel
     * ***** ***** *****/

    /**
     * @group unit
     * @group postcards
     */
    public function testCancelConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $postcardsApi->cancel(self::$mockPostcardId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCancel()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockDeletedPostcard));

        try {
            $happyPath = $postcardsApi->cancel("psc_fakeIdForDel");
            $this->assertEquals($happyPath->getDeleted(), true);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ',  $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCancelFailMissingId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $postcardsApi->cancel(null);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCancelFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $postcardsApi->cancel("NOPE");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCancelFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $postcardsApi->cancel("psc_fakeIdForDel");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group postcards
     */
    public function testCancelFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $postcardsApi = new PostcardsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $postcardsApi->cancel(self::$mockPostcardId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }
}

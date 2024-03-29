<?php
/**
 * BillingGroupsApiTest
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
use OpenAPI\Client\Model\BillingGroup;
use OpenAPI\Client\Model\BillingGroupEditable;
use OpenAPI\Client\Model\BillingGroupList;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\BillingGroupsApi;

/**
 * BillingGroupsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class BillingGroupsApiUnitTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $mockBillingGroupId;
    private static $mockEditableBillingGroup;
    private static $mockBillingGroupResponse;
    private static $mockBillingGroupList;
    private static $mockUpdatableBillingGroup;

    // set up constant fixtures
    public function setUp(): void
    {
        self::$mockBillingGroupId = "bg_fakeId";
        self::$mockEditableBillingGroup = new BillingGroupEditable();

        self::$mockBillingGroupResponse = new BillingGroup();
        self::$mockBillingGroupResponse->setId(self::$mockBillingGroupId);

        // BillingGroups List Fixture
        self::$mockBillingGroupList = new BillingGroupList();
        $item1 = new BillingGroup();
        $item2 = new BillingGroup();
        $item3 = new BillingGroup();
        $item1->setId("bg_fakeId1");
        $item2->setId("bg_fakeId2");
        $item3->setId("bg_fakeId3");

        self::$mockBillingGroupList->setData(array ($item1,$item2,$item3));
        self::$mockBillingGroupList->setObject("list");
        self::$mockBillingGroupList->setCount("3");

        // Card Update Fixture
        self::$mockUpdatableBillingGroup = new BillingGroupEditable();
    }

    /** ***** ***** *****
     * Create
     * ***** ***** *****/

    /**
     * @group unit
     * @group billingGroups
     */
    public function testCreateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $billingGroupsApi->create(self::$mockEditableBillingGroup);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testCreate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBillingGroupResponse));
        try {
            $happyPath = $billingGroupsApi->create(self::$mockEditableBillingGroup);
            $this->assertEquals($happyPath->getId(), self::$mockBillingGroupId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: public function testBillingGroupCreateWithCustomHeaders()

    /**
     * @group unit
     * @group billingGroups
     */
    public function testCreateMalformedRequest()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ApiException("forced error", 422));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced error/");
            $unhappyPath = $billingGroupsApi->create(self::$mockEditableBillingGroup);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testCreateFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));

        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $billingGroupsApi->create(self::$mockEditableBillingGroup);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testCreateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $billingGroupsApi->create(self::$mockEditableBillingGroup);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Get
     * ***** ***** *****/

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $billingGroupsApi->get(self::$mockBillingGroupId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGet()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBillingGroupResponse));
        try {
            $happyPath = $billingGroupsApi->get(self::$mockBillingGroupId);
            $this->assertEquals($happyPath->getId(), self::$mockBillingGroupId);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $billingGroupsApi->get(null);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $billingGroupsApi->get("Narp");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ApiException("bank account not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/bank account not found/");
            $unhappyPath = $billingGroupsApi->get("bg_BADID");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $billingGroupsApi->get(self::$mockBillingGroupId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testGetFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $billingGroupsApi->get(self::$mockBillingGroupId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * List
     * ***** ***** *****/

    /**
     * @group unit
     * @group billingGroups
     */
    public function testListConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $errorResponse = $billingGroupsApi->list(3);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testList()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBillingGroupList));

        try {
            $happyPath = $billingGroupsApi->list(3);
            $data = $happyPath->getData();
            $this->assertEquals(3, count($data));
            $this->assertEquals($data[0]->getId(), "bg_fakeId1");
            $this->assertEquals($data[1]->getId(), "bg_fakeId2");
            $this->assertEquals($data[2]->getId(), "bg_fakeId3");
        } catch (Exception $listError) {
            echo 'Caught exception: ',  $listError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testListFailBadParamsLargeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $billingGroupsApi->list(1000);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testListFailBadParamsNegativeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $billingGroupsApi->list(-1);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testListFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $billingGroupsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testListFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $billingGroupsApi->list(3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    // ToDo: public function testListPagination()

    /** ***** ***** *****
     * Update
     * ***** ***** *****/

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $billingGroupsApi->update(self::$mockBillingGroupId, self::$mockUpdatableBillingGroup);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockBillingGroupResponse));
        try {
            $happyPath = $billingGroupsApi->update(self::$mockBillingGroupId, self::$mockUpdatableBillingGroup);
            $this->assertEquals($happyPath->getId(), self::$mockBillingGroupId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ',  $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $billingGroupsApi->update(null, self::$mockUpdatableBillingGroup);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $billingGroupsApi->update("Narp", self::$mockUpdatableBillingGroup);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new ApiException("bank account not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/bank account not found/");
            $unhappyPath = $billingGroupsApi->update("bg_BADID", self::$mockUpdatableBillingGroup);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $billingGroupsApi->update(self::$mockBillingGroupId, self::$mockUpdatableBillingGroup);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group billingGroups
     */
    public function testUpdateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $billingGroupsApi = new BillingGroupsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $billingGroupsApi->update(self::$mockBillingGroupId, self::$mockUpdatableBillingGroup);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }


}

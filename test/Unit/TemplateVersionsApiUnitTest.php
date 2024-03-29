<?php
/**
 * TemplateVersionsApiUnitTest
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
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;

use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\TemplateVersion;
use OpenAPI\Client\Model\TemplateVersionDeletion;
use OpenAPI\Client\Model\TemplateVersionList;
use OpenAPI\Client\Model\TemplateVersionUpdatable;
use OpenAPI\Client\Model\TemplateVersionWritable;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\TemplateVersionsApi;


/**
 * TemplateVersionsApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class TemplateVersionsApiUnitTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $mockTemplateId;
    private static $mockTemplateVersionId;
    private static $mockWritableTemplateVersion;
    private static $mockTemplateVersionResponse;
    private static $mockTemplateVersionList;
    private static $mockDeletedTemplateVersion;

    // set up constant fixtures
    public function setUp(): void
    {
        self::$mockTemplateId = "tmpl_fakeId";
        self::$mockTemplateVersionId = "vrsn_fakeId";
        self::$mockWritableTemplateVersion = new TemplateVersionWritable();

        self::$mockTemplateVersionResponse = new TemplateVersion();
        self::$mockTemplateVersionResponse->setId(self::$mockTemplateVersionId);

        // Template List Fixture
        self::$mockTemplateVersionList = new TemplateVersionList();
        $item1 = new TemplateVersion();
        $item2 = new TemplateVersion();
        $item3 = new TemplateVersion();
        $item1->setId("vrsn_fakeId1");
        $item2->setId("vrsn_fakeId2");
        $item3->setId("vrsn_fakeId3");

        self::$mockTemplateVersionList->setData(array ($item1, $item2, $item3));
        self::$mockTemplateVersionList->setObject("list");
        self::$mockTemplateVersionList->setCount("3");

        // Template Delete Fixture
        self::$mockDeletedTemplateVersion = new TemplateVersionDeletion();
        self::$mockDeletedTemplateVersion->setId("vrsn_fakeIdForDel");
        self::$mockDeletedTemplateVersion->setDeleted(true);
    }

    /** ***** ***** *****
     * Create
     * ***** ***** *****/

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]); 
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockTemplateVersionResponse));
        try {
            $happyPath = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
            $this->assertEquals($happyPath->getId(), self::$mockTemplateVersionId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    // ToDo: public function testCreateWithCustomHeaders()

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateWithIdempotency()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockTemplateVersionResponse));
        try {
            $happyPath = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
            $this->assertEquals($happyPath->getId(), self::$mockTemplateVersionId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateFailBadTemplate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $templateVersionsApi->create(self::$mockTemplateId, []);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateMalformedRequest()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ApiException("forced error", 422));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/forced error/");
            $unhappyPath = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testCreateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $templateVersionsApi->create(self::$mockTemplateId, self::$mockWritableTemplateVersion);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * Get
     * ***** ***** *****/
    
    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $templateVersionsApi->get(self::$mockTemplateId, self::$mockTemplateVersionId);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGet()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]); 
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockTemplateVersionResponse));
        try {
            $happyPath = $templateVersionsApi->get(self::$mockTemplateId, self::$mockTemplateVersionId);
            $this->assertEquals($happyPath->getId(), self::$mockTemplateVersionId);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetFailNullId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $templateVersionsApi->get(self::$mockTemplateId, null);
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $templateVersionsApi->get(self::$mockTemplateId, "Narp");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ApiException("address not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/address not found/");
            $unhappyPath = $templateVersionsApi->get(self::$mockTemplateId, "vrsn_BADID");
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $templateVersionsApi->get(self::$mockTemplateId, self::$mockTemplateVersionId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testGetFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $templateVersionsApi->get(self::$mockTemplateId, self::$mockTemplateVersionId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /** ***** ***** *****
     * List
     * ***** ***** *****/

    /**
     * @group unit
     * @group templateVersions
     */
    public function testListConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $errorResponse = $templateVersionsApi->list(self::$mockTemplateId, 3);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testList()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]); 
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockTemplateVersionList));
        try {
            $happyPath = $templateVersionsApi->list(self::$mockTemplateId, 3);
            $data = $happyPath->getData();
            $this->assertEquals(3, count($data));
            $this->assertEquals($data[0]->getId(), "vrsn_fakeId1");
            $this->assertEquals($data[1]->getId(), "vrsn_fakeId2");
            $this->assertEquals($data[2]->getId(), "vrsn_fakeId3");
        } catch (Exception $listError) {
            echo 'Caught exception: ',  $listError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testListFailBadParamsLargeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $templateVersionsApi->list(self::$mockTemplateId, 1000);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testListFailBadParamsNegativeLimit()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $templateVersionsApi->list(self::$mockTemplateId, -1);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testListFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $templateVersionsApi->list(self::$mockTemplateId,3);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testListFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $templateVersionsApi->list(self::$mockTemplateId,3);
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
     * @group templateVersions
     */
    public function testUpdateConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $templateVersionsApi->update(self::$mockTemplateId, self::$mockTemplateVersionId, new TemplateVersionUpdatable());
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testUpdate()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockTemplateVersionResponse));
        try {
            $happyPath = $templateVersionsApi->update(self::$mockTemplateId, self::$mockTemplateVersionId, new TemplateVersionUpdatable());
            $this->assertEquals($happyPath->getId(), self::$mockTemplateVersionId);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ',  $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testUpdateFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $unhappyPath = $templateVersionsApi->update(self::$mockTemplateId,"Narp", new TemplateVersionUpdatable());
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testUpdateFail()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ApiException("template not found", 404));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/template not found/");
            $unhappyPath = $templateVersionsApi->update(self::$mockTemplateId,"vrsn_BADID", new TemplateVersionUpdatable());
        } catch (Exception $retrieveError) {
            echo 'Caught exception: ',  $creationError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testUpdateApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(401, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $templateVersionsApi->update(self::$mockTemplateId, self::$mockTemplateVersionId, new TemplateVersionUpdatable());
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testUpdateFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $templateVersionsApi->update(self::$mockTemplateId, self::$mockTemplateVersionId, new TemplateVersionUpdatable());
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }
    
    
    /** ***** ***** *****
     * Delete
     * ***** ***** *****/

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDeleteConnectionError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new ConnectException("Server refused connection", new Request("POST", "test")));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/Server refused connection/");
            $unhappyPath = $templateVersionsApi->delete(self::$mockTemplateId,"vrsn_fakeIdForDel");
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDelete()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]); 
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(200, [], self::$mockDeletedTemplateVersion));
        try {
            $happyPath = $templateVersionsApi->delete(self::$mockTemplateId,"vrsn_fakeIdForDel");
            $this->assertEquals($happyPath->getDeleted(), true);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ',  $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDeleteFailMissingId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $templateVersionsApi->delete(self::$mockTemplateId,null);
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDeleteFailBadId()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        try {
            $this->expectException(\InvalidArgumentException::class);
            $errorResponse = $templateVersionsApi->delete(self::$mockTemplateId,"NOPE");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDeleteFailApiError()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(422, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 422, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/blah/");
            $errorResponse = $templateVersionsApi->delete(self::$mockTemplateId,"vrsn_fakeIdForDel");
        } catch (Exception $deleteError) {
            echo 'Caught exception: ', $deleteError->getMessage(), "\n";
        }
    }

    /**
     * @group unit
     * @group templateVersions
     */
    public function testDeleteFailStatusCode()
    {
        $guzzleMock = new MockHandler();
        $handlerStack = HandlerStack::create($guzzleMock);
        $client = new Client(['handler' => $handlerStack]);
        $config = new Configuration();
        $config->setApiKey('basic', 'Totally Fake Key');
        $templateVersionsApi = new TemplateVersionsApi($config, $client);

        $guzzleMock->append(new Response(300, [], "{ \"error\": { \"message\": \"blah\", \"status_code\": 300, \"code\": \"invalid\" } }"));
        try {
            $this->expectException(ApiException::class);
            $errorResponse = $templateVersionsApi->delete(self::$mockTemplateId, self::$mockTemplateVersionId);
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }
}

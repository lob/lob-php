<?php
/**
 * UploadsApiSpecTest
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
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use \OpenAPI\Client\Api\CampaignsApi;
use \OpenAPI\Client\Api\UploadsApi;
use \OpenAPI\Client\Model\CampaignWritable;
use \OpenAPI\Client\Model\CmpScheduleType;
use \OpenAPI\Client\Model\UploadWritable;
use \OpenAPI\Client\Model\UploadUpdatable;
use \OpenAPI\Client\Model\RequiredAddressColumnMapping;
use \OpenAPI\Client\Model\ExportModel;

/**
 * UploadsApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class UploadsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $uploadApi;
    private static $campaignApi;
    private static $campaign;
    private static $uploadWritable;

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of UploadsApiSpecTest & campaign
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$uploadApi = new UploadsApi(self::$config);

        self::$campaignApi = new CampaignsApi(self::$config);
        $campaignWritable = new CampaignWritable();
        $campaignWritable->setName("PHP Integration Test Upload");
        $campaignWritable->setScheduleType(CmpScheduleType::IMMEDIATE->value);

        self::$campaign = self::$campaignApi->create($campaignWritable);

        self::$uploadWritable = new UploadWritable();
        self::$uploadWritable->setCampaignId(self::$campaign->getId());
    }

    public static function tearDownAfterClass(): void
    {
        self::$campaignApi->delete(self::$campaign->getId());
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testUploadsApiInstantiation200()
    {
        try {
            $uploadApi = new UploadsApi(self::$config);
            $this->assertEquals(gettype($uploadApi), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testCreate()
    {
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);
            $this->assertMatchesRegularExpression('/upl/', $createdUpload->getId());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testGet()
    {
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);

            $retrievedUpload = self::$uploadApi->get($createdUpload->getId());
            $this->assertEquals($createdUpload->getId(), $retrievedUpload->getId());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testList()
    {
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);

            $listOfUploads = self::$uploadApi->list(self::$campaign->getId());
            $this->assertGreaterThan(0, count($listOfUploads));
            $this->assertNotNull($listOfUploads[0]->getId());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testUpdate()
    {
        $uploadUpdatable = new UploadUpdatable();
        $requiredAddressColumnMapping = new RequiredAddressColumnMapping();
        $requiredAddressColumnMapping->setName("recipient");
        $requiredAddressColumnMapping->setAddressLine1("primary line");
        $requiredAddressColumnMapping->setAddressCity("city");
        $requiredAddressColumnMapping->setAddressState("state");
        $requiredAddressColumnMapping->setAddressZip("zip_code");

        $uploadUpdatable->setRequiredAddressColumnMapping($requiredAddressColumnMapping);

        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);

            $updatedUpload = self::$uploadApi->update($createdUpload->getId(), $uploadUpdatable);
            $this->assertEquals($updatedUpload->getRequiredAddressColumnMapping()->name, $requiredAddressColumnMapping->getName());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (Exception $e) {
            echo $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testUploadFile() {
        $this->markTestSkipped("skipping test in anticipation of changes");
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);

            $upload = self::$uploadApi->upload_file($createdUpload->getId(), "test/assets/lobster-family.csv");
            $this->assertEquals("File uploaded successfully", $upload["message"]);

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testCreateExport()
    {
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);
            $this->assertMatchesRegularExpression('/upl/', $createdUpload->getId());

            $exportModel = new ExportModel();
            $exportModel->setType("failures");

            $export = self::$uploadApi->create_export($createdUpload->getId(), $exportModel);
            $this->assertNotNull($export->getExportId());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group uploads
     */
    public function testRetrieveExport()
    {
        try {
            $createdUpload = self::$uploadApi->create(self::$uploadWritable);
            $this->assertMatchesRegularExpression('/upl/', $createdUpload->getId());

            $exportModel = new ExportModel();
            $exportModel->setType("failures");

            $createdExport = self::$uploadApi->create_export($createdUpload->getId(), $exportModel);

            $export = self::$uploadApi->get_export($createdUpload->getId(), $createdExport->getExportId());
            $this->assertEquals($export->getId(), $createdExport->getExportId());

            // cleanup
            self::$uploadApi->delete($createdUpload->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
<?php
/**
 * ZipLookupsApiSpecTest
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
use \OpenAPI\Client\Api\ZipLookupsApi;
use \OpenAPI\Client\Model\ZipEditable;

/**
 * ZipLookupsApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class ZipLookupsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $zipApi;
    private static $size;

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of ZipLookupsApiSpecTest & an editable address for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$zipApi = new ZipLookupsApi(self::$config);
    }

    /**
     * @group integration
     * @group zipLookups
     */
    public function testZipLookupsApiInstantiation200() {
        try {
            $zipApi = new ZipLookupsApi(self::$config);
            $this->assertEquals(gettype($zipApi), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group zipLookups
     */
    public function testLookup()
    {
        try {
            $zipEditable = new ZipEditable();
            $zipEditable->setZipCode("94107");
            $zipObject = self::$zipApi->lookup($zipEditable);
            $this->assertMatchesRegularExpression('/us_zip_/', $zipObject->getId());
            $this->assertGreaterThanOrEqual(1, count($zipObject->getCities()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testLookup0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $zipObject = self::$zipApi->lookup(null);
    }

    public function testLookup401()
    {
        $zipEditable = new ZipEditable();
        $zipEditable->setZipCode("94107");

        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $invalidZipApi = new ZipLookupsApi($wrongConfig);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $zipObject = $invalidZipApi->lookup($zipEditable);
    }

    public function testLookup422()
    {
        $zipEditable = new ZipEditable();
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/zip_code is required/");
        $zipObject = self::$zipApi->lookup($zipEditable);
    }
}

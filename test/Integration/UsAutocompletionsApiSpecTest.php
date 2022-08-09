<?php
/**
 * UsAutocompletionsApiSpecTest
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
use \OpenAPI\Client\Api\UsAutocompletionsApi;
use \OpenAPI\Client\Model\UsAutocompletionsWritable;

/**
 * UsAutocompletionsApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class UsAutocompletionsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $usAutocompletionApi;
    private static $autocompletionWritable;

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of UsAutocompletionsApiSpecTest & an editable address for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_LIVE_KEY'));
        self::$usAutocompletionApi = new UsAutocompletionsApi(self::$config);

        self::$autocompletionWritable = new UsAutocompletionsWritable();
        self::$autocompletionWritable->setAddressPrefix("1313");
        self::$autocompletionWritable->setCity("WESTFIELD");
        self::$autocompletionWritable->setState("NJ");
        self::$autocompletionWritable->setZipCode("07090");
        self::$autocompletionWritable->setGeoIpSort(false);
    }

    /**
     * @group integration
     * @group usAutocompletions
     */
    public function testUsAutocompletionsApiInstantiation200() {
        try {
            $usAutocompletionApi = new UsAutocompletionsApi(self::$config);
            $this->assertEquals(gettype($usAutocompletionApi), 'object');
        } catch (Exception $instantiationError) {
            echo 'Caught exception: ',  $instantiationError->getMessage(), "\n";
        }
    }

    /**
     * @group integration
     * @group usAutocompletions
     */
    public function testUsAutocompletion()
    {
        try {
            $usAutocompletionObject = self::$usAutocompletionApi->autocomplete(self::$autocompletionWritable);
            $this->assertMatchesRegularExpression('/us_auto_/', $usAutocompletionObject->getId());
            $this->assertGreaterThan(0, count($usAutocompletionObject->getSuggestions()));
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group integration
     * @group usAutocompletions
     */
    public function testUsAutocompletionTestKey()
    {
        try {
            $testAutocompletion = new UsAutocompletionsWritable();
            $testAutocompletion->setAddressPrefix("1313 T");
            $testAutocompletion->setState("NJ");
            $testAutocompletion->setGeoIpSort(false);

            $wrongConfig = new Configuration();
            $wrongConfig->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
            $autocompletionApiError = new UsAutocompletionsApi($wrongConfig);

            $usAutocompletionObject = $autocompletionApiError->autocomplete($testAutocompletion);
            $this->assertEquals("TEST KEYS DO NOT AUTOCOMPLETE US ADDRESSES", $usAutocompletionObject->getSuggestions()[0]->getPrimaryLine());

        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }

    /**
     * @group integration
     * @group usAutocompletions
     */
    public function testUsAutocompletionError()
    {
        try {
            // error autocompletion object
            $errorAutocompletion = new UsAutocompletionsWritable();
            $errorAutocompletion->setCity("WESTFIELD");
            $errorAutocompletion->setState("NJ");
            $errorAutocompletion->setZipCode("07090");
            $errorAutocompletion->setGeoIpSort(false);

            $this->expectException(ApiException::class);
            $this->expectExceptionMessageMatches("/address_prefix is required/");
            $errorResponse = self::$usAutocompletionApi->autocomplete($errorAutocompletion);
        } catch (Exception $createError) {
            echo 'Caught exception: ',  $createError->getMessage(), "\n";
        }
    }
}

<?php
/**
 * ReverseGeocodeLookupsApiSpecTest
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
use \OpenAPI\Client\Api\ReverseGeocodeLookupsApi;
use \OpenAPI\Client\Model\Location;

/**
 * ReverseGeocodeLookupsApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class ReverseGeocodeLookupsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $reverseGeocodeApi;
    private static $size;

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of ReverseGeocodeLookupsApiSpecTest & an editable address for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$reverseGeocodeApi = new ReverseGeocodeLookupsApi(self::$config);

        $location = new Location();
        $location->setLatitude(37.777456);
        $location->setLongitude(-122.393039);

        $size = 3;
    }

    /**
     * @group integration
     * @group reverseGeocodeLookups
     */
    public function testReverseGeocodeLookupsApiInstantiation200() {
        try {
            $reverseGeocodeApi = new ReverseGeocodeLookupsApi(self::$config);
            $this->assertEquals(gettype($reverseGeocodeApi), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group reverseGeocodeLookups
     */
    public function testLookup()
    {
        try {
            $location = new Location();
            $location->setLatitude(37.777456);
            $location->setLongitude(-122.393039);
            $reverseGeocodeObject = self::$reverseGeocodeApi->lookup($location, self::$size);
            $this->assertMatchesRegularExpression('/us_reverse_geocode_/', $reverseGeocodeObject->getId());
            $this->assertGreaterThanOrEqual(1, count($reverseGeocodeObject->getAddresses()));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testLookup0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $reverseGeocodeObject = self::$reverseGeocodeApi->lookup(null);
    }

    public function testLookup401()
    {
        $location = new Location();
        $location->setLatitude(37.777456);
        $location->setLongitude(-122.393039);

        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $invalidApi = new ReverseGeocodeLookupsApi($wrongConfig);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $reverseGeocodeObject = $invalidApi->lookup($location, self::$size);
    }

    public function testLookup422()
    {
        $location = new Location();
        $location->setLongitude(-122.393039);
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/latitude is required/");
        $reverseGeocodeObject = self::$reverseGeocodeApi->lookup($location, self::$size);
    }
}

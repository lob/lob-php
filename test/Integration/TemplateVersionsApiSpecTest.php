<?php
/**
 * TemplateVersionsApiTest
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
use \OpenAPI\Client\Model\TemplateVersionWritable;
use \OpenAPI\Client\Model\TemplateVersionUpdatable;
use \OpenAPI\Client\Api\TemplateVersionsApi;
use \OpenAPI\Client\Api\TemplatesApi;
use \OpenAPI\Client\Model\TemplateWritable;

/**
 * TemplateVersionsApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class TemplateVersionsApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $templatesApi;
    private static $templateVersionsApi;
    private static $invalidTemplateVersionsApi;
    private static $tmplId;
    private static $writableTemplateVersion;
    private static $errorTemplateVersion;
    private static $templateVersion1;
    private static $templateVersion2;
    private static $templateVersion3;

    // for teardown post-testing
    private $idsForCleanup = [];

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        // create instance of template which the versions will be attached to
        self::$templatesApi = new TemplatesApi(self::$config);
        $writableTemplate = new TemplateWritable();
        $writableTemplate->setDescription("PHP Template For Template Versions Test");
        $writableTemplate->setHtml("<html>Test HTML for {{name}}</html>");
        $createdTemplate = self::$templatesApi->create($writableTemplate);

        self::$tmplId = $createdTemplate->getId();

        // create instance of TemplateVersionsApi & an editable template for other tests
        self::$templateVersionsApi = new TemplateVersionsApi(self::$config);
        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        self::$invalidTemplateVersionsApi = new TemplateVersionsApi($wrongConfig);

        self::$writableTemplateVersion = new TemplateVersionWritable();
        self::$writableTemplateVersion->setDescription("PHP Test Template");
        self::$writableTemplateVersion->setHtml("<html>Updated HTML for {{name}}</html>");

        self::$errorTemplateVersion = new TemplateVersionWritable();
        self::$errorTemplateVersion->setDescription("Error Template (No HTML)");

        // for List
        self::$templateVersion1 = new TemplateVersionWritable();
        self::$templateVersion1->setDescription("PHP List Template 1");
        self::$templateVersion1->setHtml("<html>Updated HTML 1 for {{name}}</html>");

        self::$templateVersion2 = new TemplateVersionWritable();
        self::$templateVersion2->setDescription("PHP List Template 2");
        self::$templateVersion2->setHtml("<html>Updated HTML 2 for {{name}}</html>");

        self::$templateVersion3 = new TemplateVersionWritable();
        self::$templateVersion3->setDescription("PHP List Template 3");
        self::$templateVersion3->setHtml("<html>Updated HTML 3 for {{name}}</html>");
    }

    public static function tearDownAfterClass(): void
    {
        self::$templatesApi->delete(self::$tmplId);
    }

    public function testTemplateVersionsApiInstantiation200() {
        try {
            $templateVersionsApi200 = new TemplateVersionsApi(self::$config);
            $this->assertEquals(gettype($templateVersionsApi200), 'object');
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group templateVersions
     */
    public function testCreate200()
    {
        try {
            $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
            $this->assertMatchesRegularExpression('/vrsn_/', $createdTemplateVersion->getId());
            array_push($this->idsForCleanup, $createdTemplateVersion->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @group integration
     * @group templateVersions
     */
    // does not include required field in request
    public function testCreate422()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/html is required/");
        $errorResponse = self::$templateVersionsApi->create(self::$tmplId, self::$errorTemplateVersion);
    }

    /**
     * @group integration
     * @group templateVersions
     */
    // uses a bad key to attempt to send a request
    public function testTemplateVersionsApi401() {
        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $templateVersionsApiError = new TemplateVersionsApi($wrongConfig);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $errorResponse = $templateVersionsApiError->create(self::$tmplId, self::$writableTemplateVersion);
    }

    /**
     * @group integration
     * @group templateVersions
     */
    public function testGet200()
    {
        try {
            $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
            $retrievedTemplateVersion = self::$templateVersionsApi->get(self::$tmplId, $createdTemplateVersion->getId());
            $this->assertEquals($createdTemplateVersion->getDescription(), $retrievedTemplateVersion->getDescription());
            array_push($this->idsForCleanup, $createdTemplateVersion->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testGet0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $badRetrieval = self::$templateVersionsApi->get(null, null);
    }

    public function testGet401()
    {
        $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
        array_push($this->idsForCleanup, $createdTemplateVersion->getId());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $badRetrieval = self::$invalidTemplateVersionsApi->get(self::$tmplId, $createdTemplateVersion->getId());
    }

    public function testGet404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template version not found/");
        $badRetrieval = self::$templateVersionsApi->get(self::$tmplId, "vrsn_NONEXISTENT");
    }

    /**
     * @group integration
     * @group templateVersions
     */
    public function testUpdate200()
    {
        try {
            $templateVersionUpdate = new TemplateVersionUpdatable();
            $templateVersionUpdate->setDescription("Updated Template");
            $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
            $retrievedTemplateVersion = self::$templateVersionsApi->update(self::$tmplId, $createdTemplateVersion->getId(), $templateVersionUpdate);
            $this->assertEquals("Updated Template", $retrievedTemplateVersion->getDescription());
            array_push($this->idsForCleanup, $createdTemplateVersion->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testUpdate0()
    {
        $templateVersionUpdate = new templateVersionUpdatable();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $retrievedTemplateVersion = self::$templateVersionsApi->update(self::$tmplId, null, $templateVersionUpdate);
    }

    public function testUpdate401()
    {
        $templateVersionUpdate = new TemplateVersionUpdatable();
        $templateVersionUpdate->setDescription("Updated Template");
        $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
        array_push($this->idsForCleanup, $createdTemplateVersion->getId());

        $templateVersionUpdate = new templateVersionUpdatable();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $retrievedTemplateVersion = self::$invalidTemplateVersionsApi->update(self::$tmplId, $createdTemplateVersion->getId(), $templateVersionUpdate);
    }

    public function testUpdate404()
    {
        $templateVersionUpdate = new templateVersionUpdatable();
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template not found/");
        $retrievedTemplate = self::$templateVersionsApi->update("tmpl_fakeId", "vrsn_fakeId", $templateVersionUpdate);
    }

    public function testList200()
    {
        $nextUrl = "";
        $previousUrl = "";
        try {
            $tv1 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion1);
            $tv2 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion2);
            $tv3 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion3);
            $listedTemplateVersions = self::$templateVersionsApi->list(self::$tmplId, 3);
            $this->assertGreaterThan(1, count($listedTemplateVersions->getData()));
            $this->assertLessThanOrEqual(3, count($listedTemplateVersions->getData()));
            $nextUrl = substr($listedTemplateVersions->getNextUrl(), strrpos($listedTemplateVersions->getNextUrl(), "after=") + 6);
            $this->assertIsString($nextUrl);
            array_push($this->idsForCleanup, $tv1->getId());
            array_push($this->idsForCleanup, $tv2->getId());
            array_push($this->idsForCleanup, $tv3->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }

        // response using nextUrl
        if ($nextUrl != "") {
            try {
                $tv1 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion1);
                $tv2 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion2);
                $tv3 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion3);
                $listedTemplateVersionsAfter = self::$templateVersionsApi->list(self::$tmplId, 3, null, $nextUrl);
                $this->assertGreaterThanOrEqual(1, count($listedTemplateVersionsAfter->getData()));
                $this->assertLessThanOrEqual(3, count($listedTemplateVersionsAfter->getData()));
                $previousUrl = substr($listedTemplateVersionsAfter->getPreviousUrl(), strrpos($listedTemplateVersionsAfter->getPreviousUrl(), "before=") + 7);
                $this->assertIsString($previousUrl);
                array_push($this->idsForCleanup, $tv1->getId());
                array_push($this->idsForCleanup, $tv2->getId());
                array_push($this->idsForCleanup, $tv3->getId());
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        // response using previousUrl
        if ($previousUrl != "") {
            try {
                $tv1 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion1);
                $tv2 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion2);
                $tv3 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion3);
                $listedTemplateVersionsBefore = self::$templateVersionsApi->list(self::$tmplId, 3, $previousUrl);
                $this->assertGreaterThan(1, count($listedTemplateVersionsBefore->getData()));
                $this->assertLessThanOrEqual(3, count($listedTemplateVersionsBefore->getData()));
                array_push($this->idsForCleanup, $tv1->getId());
                array_push($this->idsForCleanup, $tv2->getId());
                array_push($this->idsForCleanup, $tv3->getId());
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
            array(null, null, null, array("total_count"), null), // include
            array(null, null, null, null, $date_obj), // date_created
        );
    }

    /**
     * @dataProvider provider
     */
    public function testListWithParams($limit, $before, $after, $include, $date_created)
    {
        try {
            // create template versions to list
            $tv1 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion1);
            $tv2 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion2);
            $tv3 = self::$templateVersionsApi->create(self::$tmplId, self::$templateVersion3);

            // cancel created template versions
            array_push($this->idsForCleanup, $tv1->getId());
            array_push($this->idsForCleanup, $tv2->getId());
            array_push($this->idsForCleanup, $tv3->getId());

            $listedTemplateVersions = self::$templateVersionsApi->list(self::$tmplId, $limit, $before, $after, $include, $date_created);

            $this->assertGreaterThan(0, $listedTemplateVersions->getCount());
            if ($include) $this->assertNotNull($listedTemplateVersions->getTotalCount());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testDelete200()
    {
        try {
            $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
            $deletedTemplateVersion = self::$templateVersionsApi->delete(self::$tmplId, $createdTemplateVersion->getId());
            $this->assertEquals(true, $deletedTemplateVersion->getDeleted());
            $this->assertMatchesRegularExpression('/vrsn_/', $deletedTemplateVersion->getId());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function testDelete401()
    {
        $createdTemplateVersion = self::$templateVersionsApi->create(self::$tmplId, self::$writableTemplateVersion);
        array_push($this->idsForCleanup, $createdTemplateVersion->getId());

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $deletedTemplateVersion = self::$invalidTemplateVersionsApi->delete(self::$tmplId, $createdTemplateVersion->getId());
    }

    public function testDelete404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template version cannot be deleted/");
        $badDeletion = self::$templateVersionsApi->delete(self::$tmplId, "vrsn_NONEXISTENT");
    }
}

<?php
/**
 * TemplatesApiTest
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
use \OpenAPI\Client\Model\TemplateWritable;
use \OpenAPI\Client\Model\TemplateUpdate;
use \OpenAPI\Client\Api\TemplatesApi;

/**
 * TemplatesApiSpecTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

class TemplatesApiSpecTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    private static $config;
    private static $templateApi;
    private static $invalidTemplateApi;
    private static $writableTemplate;
    private static $errorTemplate;
    private static $template1;
    private static $template2;
    private static $template3;
    private static $metadata;

    // for teardown post-testing
    private $idsForCleanup = [];

    // set up constant fixtures
    public static function setUpBeforeClass(): void
    {
        // create instance of TemplatesApi & an editable template for other tests
        self::$config = new Configuration();
        self::$config->setApiKey('basic', getenv('LOB_API_TEST_KEY'));
        self::$templateApi = new TemplatesApi(self::$config);

        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        self::$invalidTemplateApi = new TemplatesApi($wrongConfig);

        self::$writableTemplate = new TemplateWritable();
        self::$writableTemplate->setDescription("PHP Test Template");
        self::$writableTemplate->setHtml("<html>Updated HTML for {{name}}</html>");

        self::$errorTemplate = new TemplateWritable();
        self::$errorTemplate->setDescription("Error Template (No HTML)");

        // for List
        self::$template1 = new TemplateWritable();
        self::$template1->setDescription("PHP List Template 1");
        self::$template1->setHtml("<html>Updated HTML 1 for {{name}}</html>");

        self::$template2 = new TemplateWritable();
        self::$template2->setDescription("PHP List Template 2");
        self::$template2->setHtml("<html>Updated HTML 2 for {{name}}</html>");

        self::$template3 = new TemplateWritable();
        self::$template3->setDescription("PHP List Template 3");
        self::$template3->setHtml("<html>Updated HTML 3 for {{name}}</html>");
        self::$metadata = (object)array("name"=>"Harry");
        self::$template3->setMetadata(self::$metadata);
    }

    public function tearDown(): void
    {
        foreach ($this->idsForCleanup as $id) {
            self::$templateApi->delete($id);
        }
    }

    public function testTemplatesApiInstantiation200() {
        $templateApi200 = new TemplatesApi(self::$config);
        $this->assertEquals(gettype($templateApi200), 'object');
    }

    public function testCreate200()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        $this->assertMatchesRegularExpression('/tmpl_/', $createdTemplate->getId());
        array_push($this->idsForCleanup, $createdTemplate->getId());
    }

    // does not include required field in request
    public function testCreate422()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/html is required/");
        $errorResponse = self::$templateApi->create(self::$errorTemplate);
    }

    // uses a bad key to attempt to send a request
    public function testTemplateApi401() {
        $wrongConfig = new Configuration();
        $wrongConfig->setApiKey('basic', 'BAD KEY');
        $templateApiError = new TemplatesApi($wrongConfig);

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $errorResponse = $templateApiError->create(self::$writableTemplate);
    }

    public function testGet200()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        $retrievedTemplate = self::$templateApi->get($createdTemplate->getId());
        $this->assertEquals($createdTemplate->getDescription(), $retrievedTemplate->getDescription());
        array_push($this->idsForCleanup, $createdTemplate->getId());
    }

    public function testGet0()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $badRetrieval = self::$templateApi->get(null);
    }

    public function testGet401()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        array_push($this->idsForCleanup, $createdTemplate->getId());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $badRetrieval = self::$invalidTemplateApi->get($createdTemplate->getId());
    }

    public function testGet404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template not found/");
        $badRetrieval = self::$templateApi->get("tmpl_NONEXISTENT");
    }

    public function testUpdate200()
    {
        $templateUpdate = new TemplateUpdate();
        $templateUpdate->setDescription("Updated Template");
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        $retrievedTemplate = self::$templateApi->update($createdTemplate->getId(), $templateUpdate);
        $this->assertEquals("Updated Template", $retrievedTemplate->getDescription());
        array_push($this->idsForCleanup, $createdTemplate->getId());
    }

    public function testUpdate0()
    {
        $templateUpdate = new TemplateUpdate();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessageMatches("/Missing the required parameter/");
        $retrievedTemplate = self::$templateApi->update(null, $templateUpdate);
    }

    public function testUpdate401()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        array_push($this->idsForCleanup, $createdTemplate->getId());

        $templateUpdate = new TemplateUpdate();
        $this->expectException(\Exception::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid/");
        $retrievedTemplate = self::$invalidTemplateApi->update($createdTemplate->getId(), $templateUpdate);
    }

    public function testUpdate404()
    {
        $templateUpdate = new TemplateUpdate();
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template not found/");
        $retrievedTemplate = self::$templateApi->update("tmpl_fakeId", $templateUpdate);
    }

    public function testList200()
    {
        $nextUrl = "";
        $previousUrl = "";
        $tmpl1 = self::$templateApi->create(self::$template1);
        $tmpl2 = self::$templateApi->create(self::$template2);
        $tmpl3 = self::$templateApi->create(self::$template3);
        $listedTemplates = self::$templateApi->list(3);
        $this->assertGreaterThan(1, count($listedTemplates->getData()));
        $this->assertLessThanOrEqual(3, count($listedTemplates->getData()));
        $nextUrl = substr($listedTemplates->getNextUrl(), strrpos($listedTemplates->getNextUrl(), "after=") + 6);
        $this->assertIsString($nextUrl);
        array_push($this->idsForCleanup, $tmpl1->getId());
        array_push($this->idsForCleanup, $tmpl2->getId());
        array_push($this->idsForCleanup, $tmpl3->getId());

        // response using nextUrl
        if ($nextUrl != "") {
            $tmpl1 = self::$templateApi->create(self::$template1);
            $tmpl2 = self::$templateApi->create(self::$template2);
            $tmpl3 = self::$templateApi->create(self::$template3);
            $listedTemplatesAfter = self::$templateApi->list(3, null, $nextUrl);
            $this->assertGreaterThan(1, count($listedTemplatesAfter->getData()));
            $this->assertLessThanOrEqual(3, count($listedTemplatesAfter->getData()));
            $previousUrl = substr($listedTemplatesAfter->getPreviousUrl(), strrpos($listedTemplatesAfter->getPreviousUrl(), "before=") + 7);
            $this->assertIsString($previousUrl);
            array_push($this->idsForCleanup, $tmpl1->getId());
            array_push($this->idsForCleanup, $tmpl2->getId());
            array_push($this->idsForCleanup, $tmpl3->getId());
        }

        // response using previousUrl
        if ($previousUrl != "") {
            $tmpl1 = self::$templateApi->create(self::$template1);
            $tmpl2 = self::$templateApi->create(self::$template2);
            $tmpl3 = self::$templateApi->create(self::$template3);
            $listedTemplatesBefore = self::$templateApi->list(3, $previousUrl);
            $this->assertGreaterThan(1, count($listedTemplatesBefore->getData()));
            $this->assertLessThanOrEqual(3, count($listedTemplatesBefore->getData()));
            array_push($this->idsForCleanup, $tmpl1->getId());
            array_push($this->idsForCleanup, $tmpl2->getId());
            array_push($this->idsForCleanup, $tmpl3->getId());
        }
    }

    public function provider()
    {
        return array(
            // array(null, null, null, array("total_count"), null, null), // include
            // array(null, null, null, null, array("gt" => (string)(date("c")), "lt" => (string)(date("c", time() + 86400))), null), // date_created
            array(null, null, null, null, null, self::$metadata), // metadata
        );
    }

    /**
     * @dataProvider provider
     */
    public function testListWithParams($limit, $before, $after, $include, $date_created, $metadata)
    {
        // create templates to list
        $tmpl1 = self::$templateApi->create(self::$template1);
        $tmpl2 = self::$templateApi->create(self::$template2);
        $tmpl3 = self::$templateApi->create(self::$template3);

        // cancel created templates
        array_push($this->idsForCleanup, $tmpl1->getId());
        array_push($this->idsForCleanup, $tmpl2->getId());
        array_push($this->idsForCleanup, $tmpl3->getId());

        $listedTemplates = self::$templateApi->list($limit, $before, $after, $include, $date_created, $metadata);

        $this->assertGreaterThan(0, $listedTemplates->getCount());
        if ($include) $this->assertNotNull($listedTemplates->getTotalCount());
    }


    public function testDelete200()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        $deletedTemplate = self::$templateApi->delete($createdTemplate->getId());
        $this->assertEquals(true, $deletedTemplate->getDeleted());
        $this->assertMatchesRegularExpression('/tmpl_/', $deletedTemplate->getId());
    }

    public function testDelete401()
    {
        $createdTemplate = self::$templateApi->create(self::$writableTemplate);
        array_push($this->idsForCleanup, $createdTemplate->getId());

        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/Your API key is not valid. Please sign up on lob.com to get a valid api key./");
        $deletedTemplate = self::$invalidTemplateApi->delete($createdTemplate->getId());
    }

    public function testDelete404()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessageMatches("/template cannot be deleted/");
        $badDeletion = self::$templateApi->delete("tmpl_NONEXISTENT");
    }
}

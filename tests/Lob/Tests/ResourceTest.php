<?php

/*
 * This file is part of the Lob.com PHP Client.
 *
 * (c) 2013 Lob.com, https://www.lob.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lob\Tests;

use Lob\Lob;
use Lob\Exception\ValidationException;

abstract class ResourceTest extends \PHPUnit_Framework_TestCase
{
    protected $lob;
    protected $resource;
    protected $resourceMethodName;
    protected $testSampleAll;
    protected $testSampleAllWithMeta;
    protected $respondsToAll = true;
    protected $respondsToAllWithCountOffset = true;
    protected $respondsToGet = true;
    protected $respondsToCreate = true;
    protected $respondsToDelete = true;
    protected $bankAccount = null;
    public static $validCreateData = array();
    public static $invalidCreateData = array();

    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->resource = $this->lob->{$this->resourceMethodName}();
        if (!$this->respondsToAll)
          return;

        $this->testSampleAll = $this->resource->all();

        $this->testSampleAllWithMeta = $this->resource->all(array(), true);
    }

    protected function getTestSampleAll()
    {
        if ($this->testSampleAll) {
            return $this->testSampleAll;
        }

        $this->testSampleAll = $this->resource->all();

        return $this->testSampleAll;
    }

    protected function getTestSampleAllWithMeta()
    {
        if ($this->testSampleAllWithMeta) {
            return $this->testSampleAllWithMeta;
        }

        $this->testSampleAllWithMeta = $this->resource->all(array(
            'limit' => 1
        ), true);

        return $this->testSampleAllWithMeta;
    }

    protected function getRandomSettingId()
    {
        $settings = $this->lob->settings()->all();
        shuffle($settings);

        return $settings[0]['id'];
    }

    protected function getBankAccountId()
    {
        if ($this->bankAccount === null) {
            $accounts = $this->lob->bankAccounts()->all();
            $this->bankAccount = $accounts[0];
            if (!$this->bankAccount['verified']) {
                $this->lob->bankAccounts()->verify(
                    $this->bankAccount['id'],
                    array(
                        32,
                        23
                    )
                );
            }
        }
        return $this->bankAccount['id'];
    }

    public function testAllReturnsArray()
    {
        if (!$this->respondsToAll)
            return;

        $this->assertTrue(is_array($this->getTestSampleAll()));
        $this->assertTrue(is_array($this->getTestSampleAllWithMeta()));
    }

    public function testAllWithoutMeta()
    {
        if (!$this->respondsToAll)
            return;

        $this->assertFalse(array_key_exists('data', $this->getTestSampleAll()));
    }

    public function testAllWithMeta()
    {
        if (!$this->respondsToAll)
            return;

        $this->assertTrue(array_key_exists('data', $this->getTestSampleAllWithMeta()));
    }

    public function testAllResultsCountIsLessThanOrEqualCountParamValue()
    {
        if (!$this->respondsToAll
            || !$this->respondsToAllWithCountOffset) {
            return;
        }

        $limit = 5;
        $all = $this->resource->all(array(
            'limit' => $limit
        ));

        $this->assertLessThanOrEqual($limit, count($all));
    }

    public function testRaiseValidationExceptionOnCreateWithInvalidData()
    {
        if (!$this->respondsToCreate)
            return;

        $this->setExpectedException('Lob\Exception\ValidationException');
        $this->resource->create(static::$invalidCreateData);
    }

    public function testRaiseAuthorizationExceptionOnInvalidApiKey()
    {
        $this->setExpectedException('Lob\Exception\AuthorizationException');
        $this->lob->setApiKey('INVALID_API_KEY');
        $this->resource->all(array('limit' => 1));
    }

    public function testRaiseResourceNotFoundExceptionOnInvalidGetResource()
    {
        if (!$this->respondsToAll) {
            return;
        }
        $this->setExpectedException('Lob\Exception\ResourceNotFoundException');
        $mockedResource = $this->getMock('Lob\Resource\\' . ucfirst($this->resourceMethodName), array('resourceName'), array($this->lob));
        $mockedResource->expects($this->any())
            ->method('resourceName')
            ->will($this->returnValue('nonResource'));
        $mockedResource->all(array('limit' => 1));
    }

    public function testRaiseResourceNotFoundExceptionOnInvalidPostResource()
    {
        if (!$this->respondsToCreate) {
            return;
        }

        $this->setExpectedException('Lob\Exception\ResourceNotFoundException');
        $mockedResource = $this->getMock('Lob\Resource\\' . ucfirst($this->resourceMethodName), array('resourceName'), array($this->lob));
        $mockedResource->expects($this->any())
            ->method('resourceName')
            ->will($this->returnValue('nonResource'));
        $mockedResource->create(array());
    }

    //This function is needed to test the protected methods on Resource
    protected static function getMethod($name)
    {
        $class = new \ReflectionClass('Lob\Resource');
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method;
    }

    public function testStringifyBooleans()
    {
        $testArray = array(
            'foo' => TRUE,
            'bar' => FALSE,
            'baz' => 1,
            'foobar' => 0
        );

        $stringifyBooleans = self::getMethod('stringifyBooleans');
        $testOutput = $stringifyBooleans->invokeArgs($this->resource, array($testArray));

        $this->assertEquals(array(
            'foo' => 'true',
            'bar' => 'false',
            'baz' => 1,
            'foobar' => 0
        ), $testOutput);
    }
    
    public function testFlattenArray()
    {
        $testArray = array(
            'foo' => array(
                'bar' => 1,
                'baz' => 2,
            ),
            'foobar' => 3
        );

        $flattenArray = self::getMethod('flattenArray');
        $testOutput = $flattenArray->invokeArgs($this->resource, array($testArray));

        $this->assertEquals(array(
            'foo[bar]' => 1,
            'foo[baz]' => 2,
            'foobar' => 3
        ), $testOutput);
    }

    public function testGetPath()
    {
        $getPath = self::getMethod('getPath');

        //Test when passing no array
        $testOutput = $getPath->invokeArgs($this->resource, array('resource'));
        $this->assertEquals('/v1/resource', $testOutput);

        //Test when passing empty array
        $testOutput = $getPath->invokeArgs($this->resource, array('resource', array()));
        $this->assertEquals('/v1/resource', $testOutput);

        $testArray = array(
            'foo' => 'bar',
            'baz' => 1,
            'foobar' => 2
        );
        //Test passing an array of options
        $testOutput = $getPath->invokeArgs($this->resource, array('resource', $testArray));
        $this->assertEquals('/v1/resource?foo=bar&baz=1&foobar=2', $testOutput);

        $testArray = array(
            'foo' => array(
                'bar' => 1,
                'baz' => 2,
            ),
            'foobar' => 3
        );
        //Test passing nested array of options
        $testOutput = $getPath->invokeArgs($this->resource, array('resource', $testArray));
        $this->assertEquals('/v1/resource?foo%5Bbar%5D=1&foo%5Bbaz%5D=2&foobar=3', $testOutput);
    }

    public function testGetOptions()
    {
        $getOptions = self::getMethod('getOptions');
        //Test passing no version number
        $testOutput = $getOptions->invokeArgs($this->resource, array('', $this->lob->getClientVersion()));
        $this->assertFalse(isset($testOutput['headers']['Lob-Version']));

        //Test passing in version number
        $testOutput = $getOptions->invokeArgs($this->resource, array('2016-05-02', $this->lob->getClientVersion()));
        $this->assertEquals('2016-05-02', $testOutput['headers']['Lob-Version']);
    }
}

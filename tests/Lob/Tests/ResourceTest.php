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
    protected $testSampleList;
    protected $testSampleListWithMeta;
    protected $respondsToRetrieveList = true;
    protected $respondsToRetrieveListWithCountOffset = true;
    protected $respondsToRetrieve = true;
    protected $respondsToCreate = true;
    protected $respondsToDelete = true;
    protected $createInvalidData = array();

 
    protected function setUp()
    {
        $this->lob = new Lob(LOB_TEST_API_KEY);
        $this->resource = $this->lob->{$this->resourceMethodName}();
        $this->testSampleList = $this->resource->retrieveList(array(
            'count' => 1
        ));
        $this->testSampleListWithMeta = $this->resource->retrieveList(array(
            'count' => 1
        ), true);
    }

    protected function getTestSampleList()
    {
        if ($this->testSampleList) {
            return $this->testSampleList;
        }

        $this->testSampleList = $this->resource->retrieveList(array(
            'count' => 1
        ));

        return $this->testSampleList;
    }

    protected function getTestSampleListWithMeta()
    {
        if ($this->testSampleListWithMeta) {
            return $this->testSampleListWithMeta;
        }

        $this->testSampleListWithMeta = $this->resource->retrieveList(array(
            'count' => 1
        ), true);

        return $this->testSampleListWithMeta;
    }

    public function testRetrieveListReturnsArray()
    {
        if (!$this->respondsToRetrieveList)
            return;

        $this->assertTrue(is_array($this->getTestSampleList()));
        $this->assertTrue(is_array($this->getTestSampleListWithMeta()));
    }

    public function testRetrieveListWithoutMeta()
    {
        if (!$this->respondsToRetrieveList)
            return;

        $this->assertFalse(array_key_exists('data', $this->getTestSampleList()));
    }

    public function testRetrieveListWithMeta()
    {
        if (!$this->respondsToRetrieveList)
            return;

        $this->assertTrue(array_key_exists('data', $this->getTestSampleListWithMeta()));
    }

    public function testRetrieveListResultsCountIsLessThanOrEqualCountParamValue()
    {
        if (!$this->respondsToRetrieveList 
            || !$this->respondsToRetrieveListWithCountOffset) {
            return;
        }

        $count = 5;
        $list = $this->resource->retrieveList(array(
            'count' => $count
        ));

        $this->assertLessThanOrEqual($count, count($list));
    }

    public function testRaiseValidationExceptionOnCreateWithInvalidData()
    {
        if (!$this->respondsToCreate)
            return;

        $this->setExpectedException('Lob\Exception\ValidationException');
        $this->resource->create($this->createInvalidData);
    }

    public function testRaiseAuthorizationExceptionOnInvalidApiKey()
    {
        $this->setExpectedException('Lob\Exception\AuthorizationException');
        $this->lob->setApiKey('INVALID_API_KEY');
        $this->resource->retrieveList(array('count' => 1));
    }
}
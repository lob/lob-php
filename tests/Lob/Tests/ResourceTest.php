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
    public static $validCreateData = array();
    public static $invalidCreateData = array();

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

    protected function getRandomSettingId()
    {
        $settings = $this->lob->settings()->retrieveList();
        shuffle($settings);

        return $settings[0]['id'];
    }

    protected function getBankAccountId()
    {
      $accounts = $this->lob->bankAccounts()->retrieveList();
      return $accounts[0]['id'];
    }

    protected function getRandomPackagingId()
    {
        $packagings = $this->lob->packagings()->retrieveList();
        shuffle($packagings);

        return $packagings[0]['id'];
    }

    protected function getRandomServiceId()
    {
        $services = $this->lob->services()->retrieveList();
        shuffle($services);

        return $services[0]['id'];
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
        $this->resource->create(static::$invalidCreateData);
    }

    public function testRaiseAuthorizationExceptionOnInvalidApiKey()
    {
        $this->setExpectedException('Lob\Exception\AuthorizationException');
        $this->lob->setApiKey('INVALID_API_KEY');
        $this->resource->retrieveList(array('count' => 1));
    }
}

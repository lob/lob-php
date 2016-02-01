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
    public static $validCreateData = array();
    public static $invalidCreateData = array();

    protected function setUp()
    {
        $this->lob = new Lob('test_7c5d111af5ccfedb9f0eea91745c93896a1');
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
      $accounts = $this->lob->bankAccounts()->all();
      return $accounts[0]['id'];
    }

    protected function verifyBankAccount()
    {
      $accounts = $this->lob->bankAccounts()->all();
      if(!$accounts[0]['verified']) {
        $this->lob->bankAccounts()->verify(
          $accounts[0]['id'],
          array(32,23)
        );
      }
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
}

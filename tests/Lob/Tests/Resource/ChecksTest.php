<?php

namespace Lob\Tests\Resource;

use Lob\Tests\Resource\AddressesTest;

class ChecksTest extends \Lob\Tests\ResourceTest
{
  protected $resourceMethodName = 'checks';

  public function testCreateWithSuccess()
  {
    $check = $this->resource->create(array(
      'name' => 'Demo Check',
      'to' => AddressesTest::$validCreateData,
      'bank_account' => $this->getBankAccountId(),
      'amount' => 2000,
      'memo' => 'rent'
    ));

    $this->assertTrue(is_array($check));
    $this->assertTrue(array_key_exists('id', $check));
  }
}

<?php

namespace Lob\Tests\Resource;

use Lob\Tests\Resource\AddressesTest;
use Lob\Tests\Resource\BankAccountsTest;

class ChecksTest extends \Lob\Tests\ResourceTest
{
  protected $resourceMethodName = 'checks';

  public function testCreateWithSuccess()
  {
      $check = $this->resource->create(array(
        'description'           => 'Demo Check',
        'to[name]'              => 'Amrit Ayalur',
        'to[address_line1]'     => '123 Test Street',
        'to[address_city]'      => 'Mountain View',
        'to[address_state]'     => 'CA',
        'to[address_zip]'       => '94041',
        'to[address_country]'   => 'US',
        'from[name]'            => 'Bryan Adams',
        'from[address_line1]'   => '123 Hello Ave',
        'from[address_city]'    => 'Providence',
        'from[address_state]'   => 'RI',
        'from[address_zip]'     => '02912',
        'from[address_country]' => 'US',
        'bank_account'          => $this->getBankAccountId(),
        'amount'                => '2200',
        'memo'                  => 'rent'
      ));

     $this->assertTrue(is_array($check));
     $this->assertTrue(array_key_exists('id', $check));
  }

  public function testGet()
  {
     $check = $this->resource->create(array(
        'description'           => 'Demo Check',
        'to[name]'              => 'Amrit Ayalur',
        'to[address_line1]'     => '123 Test Street',
        'to[address_city]'      => 'Mountain View',
        'to[address_state]'     => 'CA',
        'to[address_zip]'       => '94041',
        'to[address_country]'   => 'US',
        'from[name]'            => 'Bryan Adams',
        'from[address_line1]'   => '123 Hello Ave',
        'from[address_city]'    => 'Providence',
        'from[address_state]'   => 'RI',
        'from[address_zip]'     => '02912',
        'from[address_country]' => 'US',
        'bank_account'          => $this->getBankAccountId(),
        'amount'                => '2200',
        'memo'                  => 'rent'
     ));
     $id = $check['id'];
     $getCheck = $this->resource->get($id);

     $this->assertTrue(is_array($getCheck));
     $this->assertTrue(array_key_exists('id', $getCheck));
  }

  public function testDelete()
  {
    $check = $this->resource->create(array(
      'description'           => 'Demo Check',
      'to[name]'              => 'Amrit Ayalur',
      'to[address_line1]'     => '123 Test Street',
      'to[address_city]'      => 'Mountain View',
      'to[address_state]'     => 'CA',
      'to[address_zip]'       => '94041',
      'to[address_country]'   => 'US',
      'from[name]'            => 'Bryan Adams',
      'from[address_line1]'   => '123 Hello Ave',
      'from[address_city]'    => 'Providence',
      'from[address_state]'   => 'RI',
      'from[address_zip]'     => '02912',
      'from[address_country]' => 'US',
      'bank_account'          => $this->getBankAccountId(),
      'amount'                => '2200',
      'memo'                  => 'rent'
    ));
    $id = $check['id'];
    $deleted = $this->resource->delete($id);

    $this->assertTrue(is_array($deleted));
  }

}

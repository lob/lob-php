<?php

namespace Lob\Tests\Resource;

class BankAccountsTest extends \Lob\Tests\ResourceTest
{
  protected $resourceMethodName = 'bankAccounts';
  public static $bankData = array(
    'routing_number' => 322271627,
    'account_number' => 123456789,
    'account_type' => 'company',
    'signatory' => 'John Doe'
  );

  public function testCreateWithSuccess()
  {
      $bankAccount = $this->resource->create(static::$bankData);

      $this->assertTrue(is_array($bankAccount));
      $this->assertTrue(array_key_exists('id', $bankAccount));
  }

  public function testDelete()
  {

      $bankAccount = $this->resource->create(static::$bankData);
      $id = $bankAccount['id'];
      $deleted = $this->resource->delete($id);

      $this->assertTrue(is_array($deleted));
  }

  public function testGet()
  {
      $bankAccount = $this->resource->create(static::$bankData);
      $id = $bankAccount['id'];
      $getBankAccount = $this->resource->get($id);

      $this->assertTrue(is_array($getBankAccount));
      $this->assertTrue(array_key_exists('id', $getBankAccount));
  }

  public function testVerify()
  {
      $bankAccount = $this->resource->create(static::$bankData);
      $id = $bankAccount['id'];
      $getBankAccount = $this->resource->get($id);

      $this->assertTrue(is_array($getBankAccount));
      $this->assertTrue(array_key_exists('id', $getBankAccount));

      $bank_verify = $this->resource->verify($bankAccount['id'], array(23,34));
      $this->assertTrue(is_array($bank_verify));
      $this->assertTrue($bank_verify['verified'] == 1);
  }

  public function testAll()
  {
      $bankAccounts = $this->resource->all();

      $this->assertTrue(is_array($bankAccounts));
  }

}

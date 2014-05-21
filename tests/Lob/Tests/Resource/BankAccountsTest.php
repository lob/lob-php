<?php

namespace Lob\Tests\Resource;

class BankAccountsTest extends \Lob\Tests\ResourceTest
{
  protected $resourceMethodName = 'bankAccounts';
  public static $validCreateData = array(
    'routing_number' => 123456789,
    'account_number' => 123456789,
    'bank_code' => 123456789,
    'bank_address[name]' => 'Bank Address',
    'bank_address[address_line1]' => '123 Test Street',
    'bank_address[address_city]' => 'San Francisco',
    'bank_address[address_zip]' => '94107',
    'bank_address[address_state]' => 'CA',
    'account_address[name]' => 'Account Address',
    'account_address[address_line1]' => '123 Test Street',
    'account_address[address_city]' => 'San Francisco',
    'account_address[address_zip]' => '94107',
    'account_address[address_state]' => 'CA'
  );
}

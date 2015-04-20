<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');

$bank_address = $lob->addresses()->create(array(
  'name'          => 'Bank Address',
  'address_line1' => '123 Test Street',
  'address_city'  => 'San Francisco',
  'address_state' => 'CA',
  'address_zip'   => '94158',
));

$account_address = $lob->addresses()->create(array(
  'name'          => 'Lob.com',
  'address_line1' => '185 Berry Street',
  'address_line2' => 'Suite 1510',
  'address_city'  => 'San Francisco',
  'address_state' => 'CA',
  'address_zip'   => '94107',
  'email'         => 'support@lob.com',
  'phone'         => '555-555-5555'
));

$to_address = $lob->addresses()->create(array(
  'name'          => 'The Big House',
  'address_line1' => '1201 S Main St',
  'address_line2' => '',
  'address_city'  => 'Ann Arbor',
  'address_state' => 'MI',
  'address_zip'   => '48104',
  'email'         => 'goblue@umich.edu',
  'phone'         => '734-647-2583'
));

$bank_account = $lob->bankAccounts()->create(array(
  'routing_number'    => '122100024',
  'account_number'    => '12345678',
  'bank_address'      => $bank_address['id'],
  'account_address'   => $account_address['id'],
  'signatory'         => 'John Doe'
));

$bank_verify = $lob->bankAccounts()->verify($bank_account['id'], array(23,34));

$check = $lob->checks()->create(array(
  'name'          => 'Season Tickets',
  'to'            => $to_address['id'],
  'bank_account'  => $bank_account['id'],
  'amount'        => 1000,
  'memo'          => 'Season Tickets',
  'logo'          => 'https://s3-us-west-2.amazonaws.com/lob-assets/lob_check_logo.png'
));

print_r($check);
?>

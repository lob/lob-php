<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_7c5d111af5ccfedb9f0eea91745c93896a1');

$from_address = $lob->addresses()->create(array(
  'name' => 'Jane Doe',
  'address_line1' => '123 Hello Ave',
  'address_city'  => 'Providence',
  'address_state' => 'RI',
  'address_country' => 'US',
  'address_zip' => '02912'
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
  'routing_number'    => '322271627',
  'account_number'    => '123456789',
  'account_type'      => 'company',
  'signatory'         => 'John Doe'
));

$bank_verify = $lob->bankAccounts()->verify($bank_account['id'], array(23,34));

$check = $lob->checks()->create(array(
  'description'   => 'Season Tickets',
  'to'            => $to_address['id'],
  'from'          => $from_address['id'],
  'bank_account'  => $bank_account['id'],
  'amount'        => 1000,
  'memo'          => 'Season Tickets',
  'logo'          => 'https://s3-us-west-2.amazonaws.com/lob-assets/lob_check_logo.png'
));

print_r($check);
?>

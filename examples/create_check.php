<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_7c5d111af5ccfedb9f0eea91745c93896a1');

$from_address = $lob->addresses()->create(array(
  'name' => 'Domenica Alioto',
  'address_line1' => '2880 Broadway Street',
  'address_city'  => 'San Francisco',
  'address_state' => 'CA',
  'address_country' => 'US',
  'address_zip' => '94115'
));

$to_address = $lob->addresses()->create(array(
  'name'          => 'Andrew Tiemeyer Freimuth',
  'address_line1' => '1660 South golden circle',
  'address_line2' => '',
  'address_city'  => 'Highridge',
  'address_state' => 'MO',
  'address_zip'   => '63049',
  'email'         => 'nathliams@yahoo.com',
  'phone'         => '605-655-8482'
));

$bank_account = $lob->bankAccounts()->create(array(
  'routing_number'    => '121000358',
  'account_number'    => '0264306530',
  'account_type'      => 'individual',
  'signatory'         => 'Domenica S Alioto'
));

$bank_verify = $lob->bankAccounts()->verify($bank_account['id'], array(05,52));

$check = $lob->checks()->create(array(
  'description'   => '',
  'to'            => $to_address['id'],
  'from'          => $from_address['id'],
  'bank_account'  => $bank_account['id'],
  'amount'        => 920000,
  'memo'          => '',
  'logo'          => 'https://s3-us-west-2.amazonaws.com/lob-assets/lob_check_logo.png'
));

print_r($check);
?>

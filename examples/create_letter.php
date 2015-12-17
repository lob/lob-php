<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_7c5d111af5ccfedb9f0eea91745c93896a1');

$from_address = $lob->addresses()->create(array(
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

$letter = $lob->letters()->create(array(
  'to'          => $to_address['id'],
  'from'        => $from_address['id'],
  'file'        => '<html><h1>Hello World</h1></html>',
  'description' => 'Test Letters',
  'color'       => true
));

print_r($letter);
?>

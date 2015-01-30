<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');

$to_address = $lob->addresses()->create(array(
  'name'          => 'Lob.com',
  'address_line1' => '185 Berry Street',
  'address_line2' => 'Suite 1510',
  'address_city'  => 'San Francisco',
  'address_state' => 'CA',
  'address_zip'   => '94107',
  'email'         => 'support@lob.com',
  'phone'         => '555-555-5555'
));

$from_address = $lob->addresses()->create(array(
  'name'          => 'The Big House',
  'address_line1' => '1201 S Main St',
  'address_line2' => '',
  'address_city'  => 'Ann Arbor',
  'address_state' => 'MI',
  'address_zip'   => '48104',
  'email'         => 'goblue@umich.edu',
  'phone'         => '734-647-2583'
));

$object = $lob->objects()->create(array(
  'name'       => 'Go Blue!',
  'setting' => '100',
  'file'       => 'https://s3-us-west-2.amazonaws.com/lob-assets/goblue.pdf',
  'quantity'   => '1'
));

$job = $lob->jobs()->create(array(
  'to'      => $to_address['id'],
  'from'    => $from_address['id'],
  'object1' => $object['id']
));

print_r($job);
?>

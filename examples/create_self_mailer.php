<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob(getenv('LOB_API_KEY'));

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

$self_mailer = $lob->selfMailers()->create(array(
  'to'                    => $to_address['id'],
  'outside'               => 'https://s3-us-west-2.amazonaws.com/public.lob.com/assets/templates/self_mailers/6x18_sfm_outside.pdf',
  'inside'                => '<h1>Hello {{name}}</h1>',
  'merge_variables[name]' => 'Harry'
));

print_r($self_mailer);

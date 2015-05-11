<?php

/*
 * Script that sends a customized postcard to every row in a CSV File
 *
 * Usage: php postcards.php input.csv
 */

require '../../vendor/autoload.php';

$handle = fopen($argv[1], "r");
$html_front = file_get_contents('postcard_front.html');
$html_back = file_get_contents('postcard_back.html');

$lob = new \Lob\Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');

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

while($row = fgetcsv($handle)) {

  $to_address = $lob->addresses()->create(array(
    'name'            => $row[5],
    'address_line1'   => $row[6],
    'address_line2'   => $row[7],
    'address_city'    => $row[8],
    'address_state'   => $row[9],
    'address_zip'     => $row[10],
    'address_country' => $row[11],
  ));

  $postcard = $lob->postcards()->create(array(
    'to'      => $to_address['id'],
    'from'    => $from_address['id'],
    'front'   => $html_front,
    'back'    => $html_back,
    'setting' => 1002,
    'data'  => array(
      'background_image' => $row[1],
      'background_color' => $row[2],
      'name' => $row[0],
      'car' => $row[3],
      'mileage' => $row[4]
    )
  ));

  printf($postcard['url']."\n");
  flush();
}

?>

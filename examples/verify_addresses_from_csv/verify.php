<?php

/*
 * Script that verifies US addresses from every row in a CSV File
 *
 * Usage: php verify.php input.csv
 */

require '../../vendor/autoload.php';

$lob = new \Lob\Lob(getenv('LOB_API_KEY'));

$handle = fopen($argv[1], "r");
$output_file = fopen("output.csv","w");

$skip_first_line = TRUE;
fputcsv($output_file, array(
  'primary_line',
  'secondary_line',
  'urbanization',
  'last_line',
  'deliverability'
));

while($row = fgetcsv($handle)) {

  if ($skip_first_line) {
    $skip_first_line = FALSE;
    continue;
  }

  $verified_address = $lob->usVerifications()->verify(array(
    'primary_line'   => $row[0],
    'secondary_line' => $row[1],
    'city'           => $row[2],
    'state'          => $row[3],
    'zip_code'       => $row[4]
  ));

  fputcsv($output_file, array(
    $verified_address['primary_line'],
    $verified_address['secondary_line'],
    $verified_address['urbanization'],
    $verified_address['last_line'],
    $verified_address['deliverability']
  ));
}

?>

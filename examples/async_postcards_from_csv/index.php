<?php

use Amp\Parallel\Worker\DefaultPool;
use Amp\Promise;
use function Amp\ParallelFunctions\parallelMap;

require "vendor/autoload.php";

// Setup Lob client
$apiKey = $_ENV["LOB_API_KEY"];
$lob = new \Lob\Lob($apiKey);

$concurrency = 10;
$pool = new DefaultPool($concurrency);

// Create "from" address
$from_address = $lob->addresses()->create(array(
  "name"          => "The Big House",
  "address_line1" => "1201 S Main St",
  "address_line2" => "",
  "address_city"  => "Ann Arbor",
  "address_state" => "MI",
  "address_zip"   => "48104",
  "email"         => "goblue@umich.edu",
  "phone"         => "734-647-2583"
));

// Load CSV from file
$filename = "input.csv";
$file = fopen($filename, "r");
$csv = array();
while (($row = fgetcsv($file)) !== false) {
  $csv[] = $row;
}
fclose($file);

// Load assets
$html_front = file_get_contents("postcard_front.html");
$html_back = file_get_contents("postcard_back.html");

try {
  $postcards = Promise\wait(parallelMap($csv, function ($row) use ($lob, $html_front, $html_back) {
    try {
      $postcard = $lob->postcards()->create(array(
        "to" => array(
          "name" => $row[5],
          "address_line1" => $row[6],
          "address_line2" => $row[7],
          "address_city" => $row[8],
          "address_state" => $row[9],
          "address_zip" => $row[10],
          "address_country" => $row[11],
        ),
        "from" => $from_address["id"],
        "front" => $html_front,
        "back" => $html_back,
        "size" => "6x11",
        "merge_variables" => array(
          "background_image" => $row[1],
          "background_color" => $row[2],
          "name" => $row[0],
          "car" => $row[3],
          "mileage" => $row[4]
        )
      ));

      echo $postcard["id"].": ".$postcard["url"]."\n";

      return $postcard;
    } catch (Exception $e) {
      echo "err: ", $e->getMessage(), "\n";
    }
  }, $pool));
} catch (Amp\MultiReasonException $e) {
  echo "err: ", $e->getMessage(), "\n";
  // Uncomment to debug concurrency bugs
  // var_dump($e->getReasons());
}

echo "\ndone processing file\n";

?>

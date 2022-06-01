<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob(getenv('LOB_API_TEST_KEY'));

$card = $lob->cards()->create(array(
  'front'       => '@'.realpath(__DIR__.'/cards/card.pdf'),
  'back'        => '@'.realpath(__DIR__.'/cards/card.pdf'),
  'description' => 'Card with a blank PDF file'
));

print_r($card);
?>

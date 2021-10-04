<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob(getenv('LOB_API_KEY'));

$card = $lob->cards()->create(array(
  'front'       => '@'.realpath(__DIR__.'/cards/card.pdf'),
  'back'        => '@'.realpath(__DIR__.'/cards/card.pdf'),
  'description' => 'Card with a blank PDF file',
  'size'        => '2.125x3.375'
));

print_r($card);
?>

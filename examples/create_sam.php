<?php
require '../vendor/autoload.php';

$lob = new \Lob\Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');

$routes = $lob->routes()->all(array(
  'zip_codes' => '94158',
  'zip_codes' => '94107'
));

print_r($routes);

$area = $lob->areas()->create(array(
  'name'   => 'Sample SAM',
  'routes' => '94158',
  'routes' => '94107',
  'front'  => 'https://s3-us-west-2.amazonaws.com/lob-assets/areafront.pdf',
  'back'   => 'https://s3-us-west-2.amazonaws.com/lob-assets/areaback.pdf'
));

print_r($area);
?>

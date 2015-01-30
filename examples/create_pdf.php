<?php
require "../vendor/autoload.php";
define("DOMPDF_ENABLE_AUTOLOAD", false);
define("DOMPDF_ENABLE_REMOTE", true);
require_once "../vendor/dompdf/dompdf/dompdf_config.inc.php";

$lob = new \Lob\Lob('test_0dc8d51e0acffcb1880e0f19c79b2f5b0cc');

$POINTS_PER_INCH = 72; //72 PostScript Points per Inch

$html =
  "<html>".
  "<body>".
  "  <center>".
  "    <img src=\"https://www.lob.com/assets/images/printing_icon.png\" />".
  "    <h1>Print with Lob</h1>".
  "  </center>".
  "</body>".
  "</html>";

$dompdf = new DOMPDF();
$dompdf->set_paper(array(0, 0, 4.25 * $POINTS_PER_INCH, 6.25 * $POINTS_PER_INCH));
$dompdf->load_html($html);
$dompdf->render();
$pdf = $dompdf->output();

file_put_contents("out.pdf", $pdf);

$object = $lob->objects()->create(array(
  'file'        => '@out.pdf',
  'setting'  => '201',
  'full_bleed'  => '1'
));

echo 'You can view your created object PDF here: ' . $object['url'];
?>


<?php

require __DIR__.'/../vendor/autoload.php';

if (!defined('LOB_TEST_API_KEY') || LOB_TEST_API_KEY === 'YOUR_LOB_TEST_API_KEY') {
    exit('Please, define LOB_TEST_API_KEY constant in the PHPUnit XML' . PHP_EOL);
}
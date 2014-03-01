<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use VJAndrea\Network;

$mac = '01-23-45-67-89-0A';

$long = Network::mac2long($mac);

echo 'Initial MAC: ' . $mac . "\n";
echo 'Conversion to long: ' . $long . "\n";
echo 'Conversion back to MAC: ' . Network::long2mac($long, '-') . "\n";
echo 'Conversion to colon format: ' . Network::long2mac($long) . "\n";

echo Network::long2mac(Network::mac2long($mac), '-') == $mac ? "Test successful\n" : "Test failed\n";

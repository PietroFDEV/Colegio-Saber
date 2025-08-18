<?php
/**
 * get-images.php
 * Returns a JSON array of all images in the local folder
 * /assets/img/Infraestrutura/lowQuality/
 */

ini_set('display_errors', 0); // hide PHP warnings
ini_set('log_errors', 1);     // log errors to server logs
error_reporting(E_ALL);

header('Content-Type: application/json');

// LOCAL path on server
$localDir = __DIR__ . '/assets/img/Infraestrutura/lowQuality/';
// BASE URL to prepend to each file
$remoteDir = 'https://colegiosaber.org/assets/img/Infraestrutura/lowQuality/';

// scan directory
$files = array_diff(scandir($localDir), ['.', '..']);

$ext  = '(jpe?g|png|gif|webp)$';
$imgs = [];

foreach ($files as $file) {
    if (preg_match("/\.$ext/i", $file)) {
        $imgs[] = $remoteDir . $file;
    }
}

// sort and return JSON
natcasesort($imgs);
echo json_encode(array_values($imgs));

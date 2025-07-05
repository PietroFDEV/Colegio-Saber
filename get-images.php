<?php
/**
 *  get-images.php (scraper version)
 *  Reads the directory index HTML served at
 *  https://colegiosaber.org/assets/img/Infraestrutura/
 *  and returns a JSON array of the image URLs found there.
 */

header('Content-Type: application/json');

$remoteDir = 'https://colegiosaber.org/assets/img/Infraestrutura/lowQuality/';

$html = @file_get_contents($remoteDir);

if ($html === false) {
    http_response_code(502);
    echo json_encode(['error' => 'Cannot fetch remote directory']);
    exit;
}

libxml_use_internal_errors(true);
$dom  = new DOMDocument();
$dom->loadHTML($html);
$links = $dom->getElementsByTagName('a');

$ext  = '(jpe?g|png|gif|webp)$';
$imgs = [];

foreach ($links as $a) {
    $href = $a->getAttribute('href');
    if (preg_match("/\.$ext/i", $href)) {
        $imgs[] = $remoteDir . $href;
    }
}

natcasesort($imgs);
echo json_encode(array_values($imgs));
?>

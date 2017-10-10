<?php

require_once('phpQuery-onefile.php');

exec('coffee -p ' . $argv[2], $output);

$html = file_get_contents($argv[1]);
$doc = phpQuery::newDocument($html);

pq($argv[3])->text(
  PHP_EOL .
  '<!--' . PHP_EOL .
  implode(PHP_EOL, $output) . PHP_EOL .
  '-->' . PHP_EOL
);

file_put_contents($argv[1], $doc);

?>
<?php
# wikipedia.php

$html = file_get_contents('https://www.pceaevergreen.org/hymns-prayers.php');

$start = stripos($html, 'id="content"');

$end = stripos($html, '<h2>', $offset = $start);

$length = $end - $start;

$htmlSection = substr($html, $start, $length);
echo $htmlSection;




?>
<?php
$url = "https://www.nikkansports.com/baseball/professional/atom.xml";
$xml = file_get_contents($url);
header("Content-type: application/xml; charset=UTF-8");
print $xml;
?>
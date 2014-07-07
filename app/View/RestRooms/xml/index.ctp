// app/View/Rooms/xml/index.ctp
// Do some formatting and manipulation on
// the $rooms array.

<?php
$xml = Xml::fromArray(array('response' => $rooms));
echo $xml->asXML();
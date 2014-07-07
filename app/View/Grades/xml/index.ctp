// app/View/Recipes/xml/index.ctp
// Do some formatting and manipulation on
// the $recipes array.
<?php
$xml = Xml::fromArray(array('response' => $recipes));
echo $xml->asXML();
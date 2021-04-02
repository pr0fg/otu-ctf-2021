<?php

try {

    $xml = file_get_contents('php://input');

    $doc = new DOMDocument();
    $doc->validateOnParse = true;

    if (false === $doc->loadXML($xml)) {
        throw new Exception("XML error");
    }

    $search = $doc->getElementsByTagName('query')->item(0)->nodeValue;

    $response = new DOMDocument();
    $element = $response->createElement('result', 'Showing search result for: ' . $search);
    $response->appendChild($element);
    echo $response->saveXML();

} catch (Exception $e) {
    echo "XML error";
}

?>
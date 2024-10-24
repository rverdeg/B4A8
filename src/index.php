<?php 
require 'parse-php-sdk/autoload.php';

use Parse\ParseException;
use Parse\ParseObject;
use Parse\ParseClient;

// Initializes with the <APPLICATION_ID>, <REST_KEY>, and <MASTER_KEY>
ParseClient::initialize( "bFT03vSlALfl3fALPrVINeNNaFtb533TZZfqsAKQ", "3cR5Q94zvt3x34TkmAboGNzTlTr5YzPMMRp1uICs", "teVbM0lONP0HPVoM9YCSnffvXymyYxJeS3Epy3wh" );
ParseClient::setServerURL('https://parseapi.back4app.com', '/');

$myCustomObject = new ParseObject("Agenda");
$myCustomObject->set("clave", 503);
$myCustomObject->set("nombre", "My B4App User");
$myCustomObject->set("apellidos", "My B4App Apellidos");
$myCustomObject->set("departamento", "Development 3");
$myCustomObject->set("email", "correo@back4app.com");

try {
  $myCustomObject->save();
  echo 'New object created with objectId: ' . $myCustomObject->getObjectId();
} catch (ParseException $ex) {
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

?>

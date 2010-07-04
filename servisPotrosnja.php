<?php
require_once 'lib/nusoap.php';
// Pokretanje soap servera
$server = new soap_server ();

// Konfigurisanje WSDL-a
$server->configureWSDL ( 'kilometri', 'urn:kilometri' );
$server->configureWSDL ( 'potrosnja', 'urn:potrosnja' );

// Registrovanje  promenljivih koriscenih u funkcijama
$server->register ( "izracunaj", array ('kilometri' => 'xsd:double', 'potrosnja' => 'xsd:double' ), array ('return' => 'xsd:double' ), 'urn:kilometri', 'urn:potrosnja' );

function izracunaj($kilometri, $potrosnja) {

	return (($kilometri/100) * $potrosnja );
}

$HTTP_RAW_POST_DATA = isset ( $HTTP_RAW_POST_DATA ) ? $HTTP_RAW_POST_DATA : '';
$server->service ( $HTTP_RAW_POST_DATA );
?>
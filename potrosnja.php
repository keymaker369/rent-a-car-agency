<?php
error_reporting(0);
include 'dbbr/databasebroker.php';
$brVozila = $_GET[zaPronaci] - 1;
$vozila = VratiSvaVozila::uradi ();
$v = $vozila [$brVozila];
$p = $v->getPotrosnja ();
echo "$p";
?>
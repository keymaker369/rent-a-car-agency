<?php
error_reporting(0);
include 'dbbr/databasebroker.php';
$username = $_GET[zaPronaci];
$p = PostojiLiKorisnik::uradi ( $username );
$r = "";
if ($p) {
	$r = "zauzeto";
}else {
	$r = "slobodno";
}

echo $r;
//zaustavlja izvravanje programa na dve sekunde
//sleep ( 1 );
?>

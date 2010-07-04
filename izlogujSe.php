<?php
include 'dbbr/databasebroker.php';
session_start ();
$_SESSION ['username'] = "";
$_SESSION ['password'] = "";
$_SESSION ['tip'] = "";
$_SESSION ['login'] = "";
session_destroy();
header ( "Location: index.php" );
?>
<?php
include '../dbbr/databasebroker.php';
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
Pocetna strana
<br></br>
<?php
if ($_SESSION ['login'] != "go") {
	?>
<form id="form1" name="form1" method="post" action=""><label> username:
<input type="text" name="usernameID" id="usernameID" /> </label> <label>password:
<input type="text" name="passwordID" id="passwordID" /> </label> <label>
<input type="submit" name="ulogujSeID" id="ulogujSeID" value="Submit" />
</label></form>
<?php
}
if (isset ( $_POST ["ulogujSeID"] )) {
	$k = new Korisnik ();
	$k->setUsername ( $_POST ["usernameID"] );
	$k->setPassword ( $_POST ["passwordID"] );
	$provera = UlogujKorisnika::uradi ( $k );
	if (UlogujKorisnika::uradi ( $k )) {
		$_SESSION ['username'] = $_POST [usernameID];
		$_SESSION ['password'] = $_POST [passwordID];
		$_SESSION ['tip'] = $k->getTip ();
		$_SESSION ['login'] = "go";
		header ( "Location: index1.php" );
	} else {
		$poruka = "Nije dobro unesen username i password!";
		echo "<script language=\"javascript\">alert('$poruka');</script>";
	}
}
?>
<p><a href="vozila.php">vozila</a></p>
<?php
if ($_SESSION ['login'] != "go") {
	?>
<p><a href="registrujse.php">registruj se</a></p>
<p>&nbsp;</p>
<?php
}
if ($_SESSION ['login'] == "go") {
	?>
<p><a href="raspored.php">raspored</a></p>
<?php
	if ($_SESSION ['tip'] == "u") {
		?>
<p><a href="rezervacijeU.php">moje rezervacije</a></p>
<?php
	} else {
		?>
<p><a href="rezervacijeA.php">rezervacije</a></p>
<?php
	}
	?>
<p><a href="ubaciRezervaciju.php">dodaj rezervaciju</a></p>
<p><a href="izlogujSe.php">izloguj se</a></p>
<p>&nbsp;</p>
<?php
}
?>
</body>
</html>
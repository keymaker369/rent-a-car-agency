<?php
include 'dbbr/databasebroker.php';
session_start ();
proveriDugmeUlogujSeID();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Rent-a-car</title>
<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>
<body>
<div id="outer">
  <div id="wrapper">
    <div id="body-bot">
      <div id="body-top">
        <div id="logo">
          <h1>RENT-A-CAR AGENCY "SEKE"</h1>
          <p>Nama je stalo do vase udobnosti</p>
        </div>
        <div id="nav">
          <ul>
            <li><a href="index.php">POCETNA</a></li>
            <li><a href="vozila.php">VOZILA</a></li>
            <?php
if ($_SESSION ['login'] != "go") {
	?>		
    		<li><a href="registrujse.php">REGISTRUJ SE</a></li>
            <?php
}
if ($_SESSION ['login'] == "go") {
	?>
            <li><a href="raspored.php">RASPORED</a></li>
            <?php
	if ($_SESSION ['tip'] == "u") {
		?>
            <li><a href="rezervacijeU.php">MOJE REZERVACIJE</a></li>
            <?php
	} else {
		?>
            <li><a href="rezervacijeA.php">REZERVACIJE</a></li>
            <?php
	}
	?>
    		<li><a href="ubaciRezervaciju.php">DODAJ REZERVACIJU</a></li>
            <li><a href="izlogujSe.php">IZLOGUJ SE: <?php echo $_SESSION ['username'] ?></a></li>
            <?php
}
?>
          </ul>
          <div class="clear"> </div>
        </div>
        <div id="gbox">
          <div id="gbox-top"> </div>
          <div id="gbox-bg">
            <div id="gbox-grd">
              <h2>WELCOME TO OUR TRUCK TRACKING COMPANY</h2>
              <p>RENT-A-CAR AGENCY "SEKE" se nalazi u Beogradu, Srbija, i nudi pun spektar usluga renta kar i minibus transfera sa neograniÄ�enom kilometraÅ¾om i obezbeÄ‘enim Kasko osiguranjem gratis.</p>
              <p>Izaberite rentakar vozilo izmeÄ‘u porodiÄ�nog vozila tipa Skoda Octavia karavan, Nove Astre H, Automatik vozila, gradskog Yuga ... Mi besplatno dostavljamo automobil do aerodroma (Aerodrom Beograd).</p>
              <p>Takodje otvoreni smo za razliÄ�ite vrste dogovora, slobodno nas kontaktiraje.</p>
              <div id="features">
                <h2>NAŠE USLUGE</h2>
                <ul>
                  <li><a href="http://localhost/seminarskiIT/">Iznajmite rentakar vozilo</a></li>
                  <li><a href="http://localhost/seminarskiIT">Transfer kolima ili minibusem.</a></li>
                  <li><a href="http://localhost/seminarskiIT">Specijalne cene</a></li>
                  <li><a href="http://localhost/seminarskiIT/">Razgledanje grada Beograda</a></li>
                </ul>
                <ul>
                  <li><a href="http://localhost/seminarskiIT/">Dostava vozila</a></li>
                  <li><a href="http://localhost/seminarskiIT/">ProduÅ¾enje usluge</a></li>
                  <li><a href="http://localhost/seminarskiIT">Dolazak po vozilo</a></li>
                  <li><a href="http://localhost/seminarskiIT">Zamena vozila</a></li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
				<form name="form1" method="post" action="">
				<table width="380" height="300" border="1">
					<tr>
						<td width="236">username</td>
						<td width="315"><label> <input type="text" name="usernameID"
							id="usernameID"> </label></td>
					</tr>
					<tr>
						<td>password</td>
						<td><label> <input type="text" name="passwordID" id="passwordID"> </label></td>
					</tr>
					<tr>
						<td>password</td>
						<td><label> <input type="text" name="passwordID2" id="passwordID2"> </label></td>
					</tr>
					<tr>
						<td>ime</td>
						<td><label> <input type="text" name="imeID" id="imeID"> </label></td>
					</tr>
					<tr>
						<td>prezime</td>
						<td><label> <input type="text" name="prezimeID" id="prezimeID"> </label></td>
					</tr>
					<tr>
						<td>datumrodjenja</td>
						<td><label> <input type="text" name="datumRodjID"
							id="datumRodjID"> </label></td>
					</tr>
					<tr>
						<td>
						<p>email</p>
						</td>
						<td><label> <input type="text" name="emailID" id="emailID"> </label></td>
					</tr>
					<tr>
						<td>tip</td>
						<td><label> <input type="text" name="tipID" id="tipID"> </label></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><label>Registruj se <input type="submit" name="registrujSeID"
							id="registrujSeID" value="Submit"> </label></td>
					</tr>
				</table>
				</form>
				<?php proveriDugmeRegistrujSeID() ?>
				<div class="clear"> </div>
              </div>
              <div id="newsletter">
                <h2>POTRAŽI VOZILO</h2>
                <form action="" method="get" accept-charset="utf-8">
                  <input type="text" class="text" name="q" value="" id="some_name" />
                  <input type="submit" value="go">
                </form>
                <p><a href="http://localhost/seminarskiIT/">Više detalja</a></p>
              </div>
              <div id="events">
                <h2>USKORO U PONUDI</h2>
                <ul>
                  <li><a href="http://localhost/seminarskiIT/">3 Opela Korsa</a></li>
                  <li><a href="http://localhost/seminarskiIT/">Limuzina sa 13 vrata</a></li>
                  <li><a href="http://localhost/seminarskiIT">Minibus ya 12 osoba</a></li>
                  <li><a href="http://localhost/seminarskiIT">... karting ...</a></li>
                </ul>
              </div>
              <div class="clear"> </div>
            </div>
          </div>
          <div id="gbox-bot"> </div>
        </div>
        <div id="greybox">
          <div id="greybox-bot">
            <div id="greybox-top">
              <h2>
                <?php
if ($_SESSION ['login'] != "go") {
	?>
              </h2>
              <form id="form1" name="form1" method="post" action="">
                <label>
                <h2>
                username:
                <input type="text" name="usernameID" id="usernameID" />
                </label>
                <label>
                <h2>
                password:
                <input type="text" name="passwordID" id="passwordID" />
                </label>
                <label>
                  <input type="submit" name="ulogujSeID" id="ulogujSeID" value="Uloguj se" />
                </label>
              </form>
              <?php
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="copyright"> &copy; Copyright information goes here. All rights reserved. </div>
</body>
</html>
<?php 

function proveriDugmeUlogujSeID(){
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
			header ( "Location: index.php" );
		} else {
			$poruka = "Nije dobro unesen username i password!";
			echo "<script language=\"javascript\">alert('$poruka');</script>";
		}
	}
}
function proveriDugmeRegistrujSeID(){
	if(isset($_POST["registrujSeID"])){
		$korisnik = new Korisnik();
		$korisnik->setUsername($_POST[usernameID]);
		$korisnik->setPassword($_POST[passwordID]);
		$korisnik->setIme($_POST[imeID]);
		$korisnik->setPrezime($_POST[prezimeID]);
		$korisnik->setDatumrodj($_POST[datumRodjID]);
		$korisnik->setEmail($_POST[emailID]);
		$korisnik->setTip($_POST[tipID]);
		
		DodajKorisnika::uradi($korisnik);
		header ( "Location: index.php" );
	}
}
?>
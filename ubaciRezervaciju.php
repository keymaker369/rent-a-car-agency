<?php
include 'dbbr/databasebroker.php';
session_start ();
proveriDugmePretraziID();
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
            <li><a href="prognoza.php">VREME</a></li>
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
            <li><a href="korisnici.php">KORISNICI</a></li>
            <li><a href="ubaciVozilo.php">DODAJ VOZILO</a></li>
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
              <h2>DOBRODOSLI NA NAS SAJT</h2>
              <p>RENT-A-CAR AGENCY &quot;SEKE&quot; se nalazi u Beogradu, Srbija, i nudi pun spektar usluga renta kar i minibus transfera sa neograničenom kilometražom i obezbedjenim Kasko osiguranjem gratis.</p>
              <p>Izaberite rentakar vozilo izmedju porodičnog vozila tipa Skoda Octavia karavan, Nove Astre H, Automatik vozila, gradskog Yuga ... Mi besplatno dostavljamo automobil do aerodroma (Aerodrom Beograd).</p>
              <p>Takodje otvoreni smo za različite vrste dogovora, slobodno nas kontaktiraje.</p>
              <p>&nbsp;</p>
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
                <p><br>
                  </br>
                  <br></br>
                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p></br>
                </p>
<h3>Rezervacija:</h3>
				<br></br>
				<form name="form1" method="post" action="">
				<table width="380" height="209" border="1">
					<tr>
						<td>sifra vozila</td>
						<td>
							<label> 
								<select name="vozilaID" id="vozilaID">
									<option value="0" selected>(izberite vozilo:)</option>
									<?php
									napraviOpcijeVozilaID ()?>
								</select> 
							</label>
						</td>
					</tr>
					<tr>
						<td>datum od:</td>
						<td><label> <input type="text" name="datumOdID" id="datumOdID"> </label></td>
					</tr>
					<tr>
						<td>datum do:</td>
						<td><label> <input type="text" name="datumDoID" id="datumDoID"> </label></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><label> <input type="submit" name="ubaciRezervacijuID"
							id="ubaciRezervacijuID" value="Submit"> </label></td>
					</tr>
				</table>
				</form>
				<?php
				proveriDugmeUbaciRezervacijuID();
				?>
				<div class="clear"> </div>
              </div>
              <div id="newsletter">
                <h2>POTRAÅ½I VOZILO</h2>
                <form action="" method="post" accept-charset="utf-8">
                  <input type="text" class="text" name="poljePretrageID" value="" id="poljePretrageID" />
                  <input type="submit" name="pretraziID" id="pretraziID" value="go">
                </form>
                <p><a href="http://localhost/seminarskiIT/">Click here for details</a></p>
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
function napraviOpcijeVozilaID() {
	$vozila = VratiSvaVozila::uradi ();
	$opcije = "";
	for($index = 0; $index < count ( $vozila ); $index ++) {
		$v = $vozila [$index];
		$j = $index + 1;
		$text = " " . $v->getSifra () . " - " . $v->getModel () . " - " . $v->getKlasa () . " ";
		$opcije .= "<option value=\"$j\">$text</option>";
	}
	echo $opcije;
}

function proverDatum($datum){
	if(empty($datum))
		return false;
	if (($timestamp = strtotime($datum)) === false) {
    	return false;
	} else {
    	return true;
	}
}




function proveriDugmeUbaciRezervacijuID(){
	if (isset ( $_POST ["ubaciRezervacijuID"] )) {
		$rezervacija = new Rezervacija ();
		$rezervacija->setUsername ( $_SESSION ['username'] );
		$brVozila = $_POST[vozilaID] - 1;
		$dOd = $_POST [datumOdID];
		$dDo = $_POST [datumDoID];
		if( $brVozila == -1 or !proverDatum($dDo) or !proverDatum($dOd)){
			$poruka = "niste pravilno uneli podatke";
			echo "<script language=\"javascript\">alert('$poruka');</script>";
		}else{
			$vozila = VratiSvaVozila::uradi ();
			$v = $vozila [$brVozila];
			$rezervacija->setSifra ( $v->getSifra () );
			$rezervacija->setDatumOd ( $dOd );
			$rezervacija->setDatumDo ( $dDo );
			DodajRezervaciju::uradi ( $rezervacija );
		}
	}
}
function proveriDugmePretraziID(){
	if (isset ( $_POST ["pretraziID"] )) {
		
		$_SESSION['parametarPretrage'] = $_POST ["poljePretrageID"];
		
		header ( "Location: vozilap.php" );
	}
}

?>
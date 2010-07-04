<?php
include 'dbbr/databasebroker.php';
session_start ();
proveriDugmeUlogujSeID();
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
              <p>RENT-A-CAR AGENCY "SEKE" se nalazi u Beogradu, Srbija, i nudi pun spektar usluga renta kar i minibus transfera sa neograniÄ�enom kilometraÅ¾om i obezbeÄ‘enim Kasko osiguranjem gratis.</p>
              <p>Izaberite rentakar vozilo izmeÄ‘u porodiÄ�nog vozila tipa Skoda Octavia karavan, Nove Astre H, Automatik vozila, gradskog Yuga ... Mi besplatno dostavljamo automobil do aerodroma (Aerodrom Beograd).</p>
              <p>Takodje otvoreni smo za razliÄ�ite vrste dogovora, slobodno nas kontaktiraje.</p>
              <div id="features">
                <h2>NAÅ E USLUGE</h2>
                <ul>
                  <li><a href="http://www.freewebsitetemplates.com">Iznajmite rentakar vozilo</a></li>
                  <li><a href="http://www.freewebsitetemplates.com/forum/">Transfer kolima ili minibusem.</a></li>
                  <li><a href="http://www.justwebtemplates.com">Specijalne cene</a></li>
                  <li><a href="http://www.templatebeauty.com">Razgledanje grada Beograda</a></li>
                </ul>
                <ul>
                  <li><a href="http://www.templatebeauty.com">Dostava vozila</a></li>
                  <li><a href="http://www.freewebsitetemplates.com">ProduÅ¾enje usluge</a></li>
                  <li><a href="http://www.freewebsitetemplates.com/forum/">Dolazak po vozilo</a></li>
                  <li><a href="http://www.justwebtemplates.com">Zamena vozila</a></li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>&nbsp;</h3>
<h3>Vozila:</h3>
<br></br>
<?php 
iscrtajTabeluSaVozilima();
?>

<div class="clear"> </div>
              </div>
              <form id="form2" method="post" action="">
                <label>
                  <input type="submit" name="sortirajPoModeluID" id="sortirajPoModeluID" value="Sortiraj po modelu" />
                </label>
              </form>
                <?php 
proveriDugmeSortirajPoModeluID();
?>
              <div id="newsletter">
                <h2>POTRAÅ½I VOZILO</h2>
                <form action="" method="post" accept-charset="utf-8">
                  <input type="text" class="text" name="poljePretrageID" value="" id="poljePretrageID" />
                  <input type="submit" name="pretraziID" id="pretraziID" value="go">
                </form>
                <p><a href="http://www.freewebsitetemplates.com">Click here for details</a></p>
              </div>
              <div id="events">
                <h2>USKORO U PONUDI</h2>
                <ul>
                  <li><a href="http://www.templatebeauty.com">3 Opela Korsa</a></li>
                  <li><a href="http://www.freewebsitetemplates.com">Limuzina sa 13 vrata</a></li>
                  <li><a href="http://www.freewebsitetemplates.com/forum/">Minibus ya 12 osoba</a></li>
                  <li><a href="http://www.justwebtemplates.com">... karting ...</a></li>
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
function iscrtajTabeluSaVozilima(){
	$vozila = VratiSvaVozila::uradi ();
	$velicina = count ( $vozila );
	$tabela = "<table width=\"380\" border=\"1\"><tr><td>Model</td><td>Klasa</td><td>1d</td><td>2d</td><td>3-4d</td><td>5-6d</td><td>7d</td><td>14d</td></tr>";
	
	for($i = 0; $i < $velicina; $i ++) {
		$tabela .= "<tr>";
		$tabela .= "<td>";
		$sifra = $vozila [$i]->getSifra ();
		$model = $vozila [$i]->getModel ();
		$tabela .= "<a href=\"../slikeVozila/$sifra.jpg\">$model</a></li>";
		$tabela .= "</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getKlasa ();
		$tabela .= "</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getDan1 ();
		$tabela .= "E</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getDan2 ();
		$tabela .= "E</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getDan34 ();
		$tabela .= "E</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getdan56 ();
		$tabela .= "E</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getdan7 ();
		$tabela .= "E</td>";
		$tabela .= "<td>";
		$tabela .= $vozila [$i]->getdan14 ();
		$tabela .= "E</td>";
		$tabela .= "</tr>";
	}
	
	$tabela .= "</table>";
	echo $tabela;
}

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

function proveriDugmeSortirajPoModeluID(){
	if (isset ( $_POST ["sortirajPoModeluID"] )) {
		header ( "Location: vozilas.php" );
	}
}
function proveriDugmePretraziID(){
	if (isset ( $_POST ["pretraziID"] )) {
		
		$_SESSION['parametarPretrage'] = $_POST ["poljePretrageID"];
		
		header ( "Location: vozilap.php" );
	}
}
?>
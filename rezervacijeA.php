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
<h3>Vozila:</h3>
<br></br>
<?php
napraviTabeluRezervacija ();
proveriDugmeObrisiRez();

?>
<div class="clear"> </div>
              </div>
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
      </div>
    </div>
  </div>
</div>
<div id="copyright"> &copy; Copyright information goes here. All rights reserved. </div>
</body>
</html>

<?php
function napraviTabeluRezervacija() {	
	$korisnici = VratiSveKorisnike::uradi ();
	for($i = 0; $i < count ( $korisnici ); $i ++) {
		
		$k = $korisnici [$i];
		$rezervacije = VratiSveRezervacijeZaKorisnika::uradi( $k );
		$tabela = $korisnici [$i]->getUsername () . "<br>";
		$tabela .= "<form id=\"form$i\" name=\"form$i\" method=\"post\" action=\"\"><table width=\"380\" border=\"1\"><tr><td> Vozilo</td><td>od</td><td>do</td><td>cena</td><td></td></tr>";
		for($k = 0; $k < count ( $rezervacije ); $k ++) {
			$tabela .= "<tr>";
			$v = new Vozilo ();
			$v->setSifra ( $rezervacije [$k]->getSifra () );
			VratiVozilo::uradi ( $v );
			$tabela .= "<td>" . $v->getModel () . "</td>";
			$tabela .= "<td>" . $rezervacije [$k]->getDatumOd () . "</td>";
			$tabela .= "<td>" . $rezervacije [$k]->getDatumDo () . "</td>";
			$cena = 0;
			$dani = ($rezervacije [$k]->vratiDanDatumDo () - $rezervacije [$k]->vratiDanDatumOd ()) + 1;
			switch ($dani) {
				case 1 :
					$cena = $v->getDan1 ();
					break;
				case 2 :
					$cena = $v->getDan2 ();
					break;
				case 3 :
					$cena = $v->getDan34 ();
					break;
				case 4 :
					$cena = $v->getDan34 ();
					break;
				case 5 :
					$cena = $v->getDan56 ();
					break;
				case 6 :
					$cena = $v->getDan56 ();
					break;
				case 7 :
					$cena = $v->getDan7 ();
					break;
				case 14 :
					$cena = $v->getDan14 ();
					break;
			}
			if ($dani > 7 and $dani < 14) {
				$cena = $v->getDan14 ();
			}
			$tabela .= "<td>$cena</td>";
			$tabela .= "<td><input type=\"submit\" name=\"obrisiID$i$k\" id=\"obrisiID$i$k\" value=\"Obrisi\" /></td>";
			$tabela .= "</tr>";
		}
		$tabela .= "</table>";
		echo $tabela . "</form><br>";
	}
}
function proveriDugmeObrisiRez(){
	$korisnici = VratiSveKorisnike::uradi ();
	for($i = 0; $i < count ( $korisnici ); $i ++) {
		$k = $korisnici [$i];
		$rezervacije = $dbbr->vratiSveRezervacijeZaKorisnika ( $k );
		for($k = 0; $k < count ( $rezervacije ); $k ++) {
			if (isset ( $_POST ["obrisiID$i$k"] )) {
				ObrisiRezervaciju::uradi ( $rezervacije [$k] );
				header ( "Location: rezervacijeA.php" );
			}
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
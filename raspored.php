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
        <div id="gboxveliki">
          <div id="gbox-topveliki"> </div>
          <div id="gbox-bgveliki">
            <div id="gbox-grdveliki">
	          <div id="stelovanje">
              <h2>DOBRODOSLI NA NAS SAJT</h2>
              <p>RENT-A-CAR AGENCY &quot;SEKE&quot; se nalazi u Beogradu, Srbija, i nudi pun spektar usluga renta kar i minibus transfera sa neograničenom kilometražom i obezbedjenim Kasko osiguranjem gratis.</p>
              <p>Izaberite rentakar vozilo izmedj‘u porodičnog vozila tipa Skoda Octavia karavan, Nove Astre H, Automatik vozila, gradskog Yuga ... Mi besplatno dostavljamo automobil do aerodroma (Aerodrom Beograd).</p>
              <p>Takodje otvoreni smo za različite vrste dogovora, slobodno nas kontaktiraje.</p>
              
              <div id="featuresveliki">
                
  <h3>Raspored:</h3>
<br></br>
<form name="form1" method="post" action="">
	<select name="meseciID"	id="meseciID">
		<option value="0" selected>(izberite mesec:)</option>
		<?php
			$opcije = "";
			for($index = 1; $index < 13; $index ++) {
				$opcije .= "<option value=\"$index\">$index</option>";
			}
			echo $opcije;
		?>
	</select>
	<select name="godinaID"	id="godinaID">
		<option value="0" selected>(izberite godinu:)</option>
		<?php
			$opcije = "";
			for($index = 0; $index <= 9; $index ++) {
				$opcije .= "<option value=\"201$index\">201$index</option>";
			}
			echo $opcije;
		?>
	</select> 
	<input type="submit" name="izaberiMesecID" id="izaberiMesecID" value="Submit"></form>
<?php
if (isset ( $_POST ["izaberiMesecID"] )) {
	$mesec = $_POST[meseciID];
	$godina = $_POST["godinaID"];
	if(proveriMesecIGodinu($mesec,$godina)){
		napraviTabeluVozila($mesec, $godina);	
	}
}
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
                  <li><a href="http://localhost/seminarskiIT">3 Opela Korsa</a></li>
                  <li><a href="http://localhost/seminarskiIT">Limuzina sa 13 vrata</a></li>
                  <li><a href="http://localhost/seminarskiIT">Minibus ya 12 osoba</a></li>
                  <li><a href="http://localhost/seminarskiIT">... karting ...</a></li>
                </ul>
              </div>
              <div class="clear"> </div>
            </div>
            </div>
          </div>
          <div id="gbox-botveliki"> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="copyright"> &copy; Copyright information goes here. All rights reserved. </div>
</body>
</html>
<?php
function napraviTabeluVozila($mesec, $godina) {
	$dbbr = new DatabaseBroker ();
	$vozila = $dbbr->vratiSvaVozila ();
	$brRedova = count ( $vozila );
	$brDanaUMesecu = vratiBrojDanaZaMesec($mesec);
	$tabela = "<table width=\"380\" border=\"1\"><tr><td> Vozilo</td>";
	for($j = 1; $j <= $brDanaUMesecu; $j ++) {
		$tabela .= "<td>$j</td>";
	}
	$tabela .= "</tr>";
	for($i = 0; $i < $brRedova; $i ++) {
		$rezervacije = $dbbr->vratiSveRezervacijeZaVozilo ( $vozila [$i] );
		$tabela .= "<tr>" . "<td>" . $vozila [$i]->getModel () . "</td>";
		for($j = 1; $j <= $brDanaUMesecu; $j ++) {
			$provera = false;
			
			for($k = 0; $k < count ( $rezervacije ); $k ++) {
				
				if ($j >= $rezervacije [$k]->vratiDanDatumOd () and $j <= $rezervacije [$k]->vratiDanDatumDo ()
				 and $rezervacije [$k]->vratiGodinuDatumOd() == $godina and $rezervacije [$k]->vratiMesecDatumOd() == $mesec) {
					$tabela .= "<td> R </td>";
					$provera = true;
					break;
				}
			}
			
			if ($provera == false) {
				$tabela .= "<td> S </td>";
			}
		
		}
		$tabela .= "</tr>";
	}
	$tabela .= "</table>";
	
	echo $tabela;
}

function proveriMesecIGodinu($mesec, $godina){
	if( $mesec == 0 or $godina == 0){
		$poruka = "niste izabrali mesec ili godinu";
		echo "<script language=\"javascript\">alert('$poruka');</script>";
		return false;
	}
	return true;
}

function vratiBrojDanaZaMesec($mesec){
	switch ($mesec) {
		case 1:
			return 31;
		;
		case 2:
			return 28;
		;
		case 3:
			return 31;
		;
		case 4:
			return 30;
		;
		case 5:
			return 31;
		;
		case 6:
			return 30;
		;
		case 7:
			return 31;
		;
		case 8:
			return 31;
		;
		case 9:
			return 30;
		;
		case 10:
			return 31;
		;
		break;
		case 11:
			return 30;
		;
		case 12:
			return 31;
		;
		
		default:
			//bezveze
			return 37;
		break;
	}
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

function proveriDugmePretraziID(){
	if (isset ( $_POST ["pretraziID"] )) {
		
		$_SESSION['parametarPretrage'] = $_POST ["poljePretrageID"];
		
		header ( "Location: vozilap.php" );
	}
}
?>
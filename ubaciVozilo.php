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
<h3>Didaj vozilo:</h3>
<br></br>
<form name="form1" method="post" action="">
  <table width="380" height="374" border="1">
    <tr>
      <td>model</td>
      <td><label>
        <input type="text" name="modelID" id="modelID">
      </label></td>
    </tr>
    <tr>
      <td>klasa</td>
      <td><label>
        <input type="text" name="klasaID" id="klasaID">
      </label></td>
    </tr>
    <tr>
      <td>1 dan</td>
      <td><label>
        <input type="text" name="dan1ID" id="dan1ID">
      </label></td>
    </tr>
    <tr>
      <td>2 dana</td>
      <td><label>
        <input type="text" name="dan2ID" id="dan2ID">
      </label></td>
    </tr>
    <tr>
      <td>3-4 dana</td>
      <td><label>
        <input type="text" name="dan34ID" id="dan34ID">
      </label></td>
    </tr>
    <tr>
      <td>5-6 dana</td>
      <td><label>
        <input type="text" name="dan56ID" id="dan56ID">
      </label></td>
    </tr>
    <tr>
      <td>7 dana</td>
      <td><label>
        <input type="text" name="dan7ID" id="dan7ID">
      </label></td>
    </tr>
    <tr>
      <td>14 dana</td>
      <td><label>
        <input type="text" name="dan14ID" id="dan14ID">
      </label></td>
    </tr>
    <tr>
      <td>Potrosnja litara na 100km</td>
      <td><label>
        <input type="text" name="potrosnjaID" id="potrosnjaID">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="ubaciVoziloID" id="ubaciVoziloID" value="Ubaci">
      </label></td>
    </tr>
  </table>
</form>
<?php 
	proveriDugmeUbaciVoziloID();
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
function proveriDugmeUbaciVoziloID(){
	if(isset($_POST["ubaciVoziloID"])){
		$vozilo = new Vozilo();
		$vozilo->setModel($_POST[modelID]);
		$vozilo->setKlasa($_POST[klasaID]);
		$vozilo->setDan1($_POST[dan1ID]);
		$vozilo->setDan2($_POST[dan2ID]);
		$vozilo->setDan34($_POST[dan34ID]);
		$vozilo->setDan56($_POST[dan56ID]);
		$vozilo->setDan7($_POST[dan7ID]);
		$vozilo->setDan14($_POST[dan14ID]);
		$vozilo->setPotrosnja($_POST[potrosnjaID]);
		DodajVozilo::uradi($vozilo);
	}
}
function proveriDugmePretraziID(){
	if (isset ( $_POST ["pretraziID"] )) {
		
		$_SESSION['parametarPretrage'] = $_POST ["poljePretrageID"];
		
		header ( "Location: vozilap.php" );
	}
}

?>
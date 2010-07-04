<?php
include 'domenskeKlase/korisnik.php';
include 'domenskeKlase/vozilo.php';
include 'domenskeKlase/rezervacija.php';
include 'sistemskeOperacije/dodajKorisnika.php';
include 'sistemskeOperacije/dodajRezervaciju.php';
include 'sistemskeOperacije/dodajVozilo.php';
include 'sistemskeOperacije/obrisiRezervaciju.php';
include 'sistemskeOperacije/obrisiVozilo.php';
include 'sistemskeOperacije/vratiSvaVozila.php';
include 'sistemskeOperacije/vratiSveKorisnike.php';
include 'sistemskeOperacije/vratiSveRezervacijeZaVozilo.php';
include 'sistemskeOperacije/ulogujKorisnika.php';
include 'sistemskeOperacije/vratiVozilo.php';
include 'sistemskeOperacije/vratiSveRezervacijeZaKorisnika.php';
include 'sistemskeOperacije/vratiSvaVozilaS.php';
include 'sistemskeOperacije/pronadjiVozila.php';
include 'sistemskeOperacije/postojiLiKorisnik.php';

class DatabaseBroker {
	public function DatabaseBroker() {
		if (! $db = mysql_connect ( "localhost", "root", "" )) {
			die ( "<b>Spajanje na mysql server je bilo neuspesno</b>" );
		}
		if (! mysql_select_db ( "seminarski", $db )) {
			die ( "<b>Greska pri odabiru baze</b>" );
		}
	}
	
	public function zapamtiKorisnika(Korisnik $k) {
		$username = $k->getUsername ();
		$password = $k->getPassword ();
		$ime = $k->getIme ();
		$prezime = $k->getPrezime ();
		$datumrodj = $k->getDatumrodj ();
		$email = $k->getEmail ();
		$tip = $k->getTip ();
		$upit = "insert into korisnik values ('$username','$password','$ime','$prezime','$datumrodj','$email','$tip');";
		if (mysql_query ( $upit )) {
			echo "";
		} else {
			echo "Korisnik vec pod tim imenom postoji u bazi<br>";
		}
	}
	
	public function zapamtiRezervaciju(Rezervacija $r) {
		$sifra = $r->getSifra ();
		$username = $r->getUsername ();
		$datumOd = $r->getDatumOd ();
		$datumDo = $r->getDatumDo ();
		$upit = "insert into rezervacija values ('$username','$sifra','$datumOd','$datumDo');";
		echo $upit;
		if (mysql_query ( $upit )) {
			echo "";
		} else {
			echo "Nastala je greska pri upisu rezervacije u bazu<br>" . mysql_error ();
		}
	}
	
	public function zapamtiVozilo(Vozilo $v) {
		//$sifra = $v->getSifra ();
		$model = $v->getModel ();
		$klasa = $v->getKlasa ();
		$dan1 = $v->getDan1 ();
		$dan2 = $v->getDan2 ();
		$dan34 = $v->getDan34 ();
		$dan56 = $v->getDan56 ();
		$dan7 = $v->getDan7 ();
		$dan14 = $v->getDan14 ();
		$potrosnja = $v->getPotrosnja ();
		$upit = "insert into vozilo (model, 	klasa ,	dan1 ,	dan2 ,	dan34 ,	dan56 ,	dan7 ,	dan14 ,	potrosnja) values ('$model','$klasa','$dan1','$dan2','$dan34','$dan56','$dan7','$dan14','$potrosnja');";
		if (mysql_query ( $upit )) {
			echo "";
		} else {
			echo "Nastala je greska pri upisu vozila i bazu<br>" . mysql_error ();
		}
	}
	
	public function vratiSveRezervacijeZaVozilo(Vozilo $v) {
		$sifra = $v->getSifra ();
		$upit = "select * from rezervacija where sifra = '$sifra';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati sve rezervacije za vozilo<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$r = new Rezervacija ();
				$r->setUsername ( $red ["username"] );
				$r->setSifra ( $red ["sifra"] );
				$r->setDatumOd ( $red ["datumod"] );
				$r->setDatumDo ( $red ["datumdo"] );
				$niz [] = $r;
			}
			
			return $niz;
		}
	}
	
	public function vratiSvaVozila() {
		$upit = "select * from vozilo;";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati sva vozila<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$v = new Vozilo ();
				$v->setSifra ( $red ["sifra"] );
				$v->setModel ( $red ["model"] );
				$v->setKlasa ( $red ["klasa"] );
				$v->setDan1 ( $red ["dan1"] );
				$v->setDan2 ( $red ["dan2"] );
				$v->setDan34 ( $red ["dan34"] );
				$v->setDan56 ( $red ["dan56"] );
				$v->setDan7 ( $red ["dan7"] );
				$v->setDan14 ( $red ["dan14"] );
				$v->setPotrosnja ( $red ["potrosnja"] );
				$niz [] = $v;
			}
			
			return $niz;
		}
	}
	
	public function pronadjiVozila($parametar) {
		$upit = "select * from vozilo where model LIKE '%$parametar%';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati sva vozila<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$v = new Vozilo ();
				$v->setSifra ( $red ["sifra"] );
				$v->setModel ( $red ["model"] );
				$v->setKlasa ( $red ["klasa"] );
				$v->setDan1 ( $red ["dan1"] );
				$v->setDan2 ( $red ["dan2"] );
				$v->setDan34 ( $red ["dan34"] );
				$v->setDan56 ( $red ["dan56"] );
				$v->setDan7 ( $red ["dan7"] );
				$v->setDan14 ( $red ["dan14"] );
				$v->setPotrosnja ( $red ["potrosnja"] );
				$niz [] = $v;
			}
			
			return $niz;
		}
	}
	
	public function vratiSvaVozilaSortirano() {
		$upit = "select * from vozilo order by model asc;";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati sva vozila sortirano<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$v = new Vozilo ();
				$v->setSifra ( $red ["sifra"] );
				$v->setModel ( $red ["model"] );
				$v->setKlasa ( $red ["klasa"] );
				$v->setDan1 ( $red ["dan1"] );
				$v->setDan2 ( $red ["dan2"] );
				$v->setDan34 ( $red ["dan34"] );
				$v->setDan56 ( $red ["dan56"] );
				$v->setDan7 ( $red ["dan7"] );
				$v->setDan14 ( $red ["dan14"] );
				$v->setPotrosnja ( $red ["potrosnja"] );
				$niz [] = $v;
			}
			
			return $niz;
		}
	}
	public function vratiSveKorisnike() {
		$upit = "select * from korisnik;";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati sve korisnike<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$k = new Korisnik ();
				$k->setUsername ( $red ["username"] );
				$k->setPassword ( $red ["password"] );
				$k->setIme ( $red ["ime"] );
				$k->setPrezime ( $red ["prezime"] );
				$k->setDatumrodj ( $red ["datumrodj"] );
				$k->setTip ( $red ["tip"] );
				$k->setEmail ( $red ["email"] );
				$niz [] = $k;
			}
			
			return $niz;
		}
	}
	
	public function vratiVozilo(Vozilo $v) {
		$sifra = $v->getSifra ();
		$upit = "select * from vozilo where sifra = '$sifra';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita vrati vozilo<br>" . mysql_query ();
			return false;
		} else {
			while ( $red = mysql_fetch_array ( $q ) ) {
				$v->setModel ( $red ["model"] );
				$v->setKlasa ( $red ["klasa"] );
				$v->setDan1 ( $red ["dan1"] );
				$v->setDan2 ( $red ["dan2"] );
				$v->setDan34 ( $red ["dan34"] );
				$v->setDan56 ( $red ["dan56"] );
				$v->setDan7 ( $red ["dan7"] );
				$v->setDan14 ( $red ["dan14"] );
				$v->setPotrosnja ( $red ["potrosnja"] );
				return true;
			}
		}
	}
	
	public function obrisiVozilo(Vozilo $v) {
		$sifra = $v->getSifra ();
		$upit = "delete from vozilo where sifra = '$sifra';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri izvodenju upita obrisi vozilo<br>" . mysql_query ();
		}
	}
	
	public function obrisiRezervaciju(Rezervacija $r) {
		$username = $r->getUsername ();
		$sifra = $r->getSifra ();
		$upit = "delete from rezervacija where username = '$username' and sifra = '$sifra';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri obrisi rezervaciju<br>" . mysql_query ();
		}
	}
	
	public function vratiKorisnika(Korisnik $k) {
		$username = $k->getUsername ();
		$password = $k->getPassword ();
		$upit = "select * from korisnik where username = '$username' and password = '$password';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri logovanju korisnika<br>" . mysql_query ();
			return false;
		} else {
			while ( $red = mysql_fetch_array ( $q ) ) {
				$k->setIme ( $red ["ime"] );
				$k->setPrezime ( $red ["prezime"] );
				$k->setDatumrodj ( $red ["datumrodj"] );
				$k->setTip ( $red ["tip"] );
				$k->setEmail ( $red ["email"] );
				return true;
			}
		}
	}
	
	public function vratiSveRezervacijeZaKorisnika(Korisnik $k) {
		$username = $k->getUsername ();
		$upit = "select * from rezervacija where username = '$username';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri vracanju svih rezervacija korisnika<br>" . mysql_query ();
		} else {
			$niz = array ();
			while ( $red = mysql_fetch_array ( $q ) ) {
				$r = new Rezervacija ();
				$r->setUsername ( $red ["username"] );
				$r->setSifra ( $red ["sifra"] );
				$r->setDatumOd ( $red ["datumod"] );
				$r->setDatumDo ( $red ["datumdo"] );
				$niz [] = $r;
			}
			
			return $niz;
		}
	}
	
	public function postojiLiKorisnik($username) {
		$upit = "select * from korisnik where username = '$username';";
		if (! $q = mysql_query ( $upit )) {
			echo "Nastala je greska pri proveri da li postoji korisnik<br>" . mysql_query ();
		} else {
			$red = mysql_fetch_array ( $q );
			
			if (count ( $red ) == 0 or $red == false) {
				mysql_close ();
				return false;
			}
			mysql_close ();
			return true;
		}
	}

}

//function test() {
//	$v = new Vozilo ();
//	$v->setSifra ( 1 );
//	$d = new DatabaseBroker ();
//	$d->vratiVozilo ( $v );
//	echo $v->getKlasa ();
//}


?>
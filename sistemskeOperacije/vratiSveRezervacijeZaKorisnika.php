<?php
class VratiSveRezervacijeZaKorisnika {
	
	public static function uradi(Korisnik $k) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiSveRezervacijeZaKorisnika ( $k );
	}
}
?>
<?php
class UlogujKorisnika {
	
	public static function uradi(Korisnik $kr) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiKorisnika ( $kr );
	}
}

?>
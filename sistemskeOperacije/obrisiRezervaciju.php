<?php

class ObrisiRezervaciju {
	
	public static function uradi(Rezervacija  $r) {
		$dbbr = new DatabaseBroker ();
		$dbbr->obrisiRezervaciju ( $r );
		unset ( $dbbr );
	}
}

function test7() {
	$r = new Rezervacija("mika",3,7,7);

	ObrisiRezervaciju::uradi ( $r );
	echo "efqef";

}

?>
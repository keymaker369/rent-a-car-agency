<?php

class VratiSveRezervacijeZaVozilo {
	
	public static function uradi(Vozilo $v) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiSveRezervacijeZaVozilo ( $v );
	}
}

function test3() {
	$v = new Vozilo ();
	$v->setSifra ( 123 );
	$q = VratiSveRezervacijeZaVozilo::uradi ( $v );
	echo $q[0]->getUsername();
	echo $q[1]->getUsername();
	echo "efqef";
}
?>
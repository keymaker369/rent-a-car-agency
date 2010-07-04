<?php

class ObrisiVozilo {
	
	public static function uradi(Vozilo $v) {
		$dbbr = new DatabaseBroker ();
		$dbbr->obrisiVozilo ( $v );
		unset ( $dbbr );
	}
}

function test5() {
	$v = new Vozilo ();
	$v->setSifra ( 4 );
	ObrisiVozilo::uradi ( $v );
	echo "efqef";
}

?>
<?php

class DodajRezervaciju {
	
	public static function uradi(Rezervacija  $r) {
		$dbbr = new DatabaseBroker ();
		$dbbr->zapamtiRezervaciju ( $r );
		unset ( $dbbr );
	}
}


function test8(){
	$r = new Rezervacija("mika",3,7,7);
	DodajRezervaciju::uradi($r);
	
}

//test8();
?>
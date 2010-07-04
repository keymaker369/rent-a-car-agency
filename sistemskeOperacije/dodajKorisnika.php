<?php

class DodajKorisnika {
	
	public static function uradi(Korisnik $kr) {
		$dbbr = new DatabaseBroker ();
		$dbbr->zapamtiKorisnika ( $kr );
		unset ( $dbbr );
	}
}

function test1() {
	$k = new Korisnik ();
	$k->setIme ( "zika" );
	$k->setUsername ( "mika" );
	$k->setPassword ( "nenad" );
	$k->setDatumrodj ( "1243134" );
	$k->setEmail ( "eqeg@rwhr" );
	$k->setPrezime ( "seke" );
	$k->setTip ( "k" );
	
	DodajKorisnika::uradi ( $k );
}
//test1();
?>
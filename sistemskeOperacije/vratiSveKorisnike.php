<?php

class VratiSveKorisnike {
	
	public static function uradi() {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiSveKorisnike ();
	}
}

function test6() {
	$q = VratiSveKorisnike::uradi ();
	echo $q [0]->getUsername ();
	echo $q [1]->getUsername ();
	echo "efqef";
}

?>
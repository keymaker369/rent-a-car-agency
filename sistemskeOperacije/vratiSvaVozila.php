<?php
class VratiSvaVozila {
	
	public static function uradi() {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiSvaVozila ();
	}
}

function test4() {
	$q = VratiSvaVozila::uradi ();
	echo "  test;";
}
?>
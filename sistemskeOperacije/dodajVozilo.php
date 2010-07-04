<?php
class DodajVozilo {
	
	public static function uradi(Vozilo $v) {
		$dbbr = new DatabaseBroker ();
		$dbbr->zapamtiVozilo ( $v);
		unset ( $dbbr );
	}
}

function test2() {
	
	$v = new Vozilo(123,"mmm","ddd",1,2,34,56,7,14);
	DodajVozilo::uradi ( $v );
}
?>
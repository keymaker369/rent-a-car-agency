<?php
class VratiVozilo {
	
	public static function uradi(Vozilo $v) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiVozilo ( $v );
	}
}

?>
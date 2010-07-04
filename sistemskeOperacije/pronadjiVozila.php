<?php
class PronadjiVozila {
	
	public static function uradi($parametar) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->pronadjiVozila ($parametar);
	}
}
?>
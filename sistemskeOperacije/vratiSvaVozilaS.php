<?php
class VratiSvaVozilaSortirano {
	
	public static function uradi() {
		$dbbr = new DatabaseBroker ();
		return $dbbr->vratiSvaVozilaSortirano ();
	}
}
?>
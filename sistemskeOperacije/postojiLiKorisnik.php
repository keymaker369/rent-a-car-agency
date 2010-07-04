<?php
class PostojiLiKorisnik {
	
	public static function uradi($username) {
		$dbbr = new DatabaseBroker ();
		return $dbbr->postojiLiKorisnik ( $username );
	}
}
?>
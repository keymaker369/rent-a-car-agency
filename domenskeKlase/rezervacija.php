<?php
class Rezervacija {
	private $username;
	private $sifra;
	private $datumOd;
	private $datumDo;
	
	public function Rezervacija($username, $sifra, $datumOd, $datumDo) {
		$this->username = $username;
		$this->sifra = $sifra;
		$this->datumOd = $datumDo;
		$this->datumDo = $datumDo;
	}
	/**
	 * @return the $username
	 */
	public function getUsername() {
		return $this->username;
	}
	
	/**
	 * @return the $sifra
	 */
	public function getSifra() {
		return $this->sifra;
	}
	
	/**
	 * @return the $datumOd
	 */
	public function getDatumOd() {
		return $this->datumOd;
	}
	
	/**
	 * @return the $datumDo
	 */
	public function getDatumDo() {
		return $this->datumDo;
	}
	
	/**
	 * @param $username the $username to set
	 */
	public function setUsername($username) {
		$this->username = $username;
	}
	
	/**
	 * @param $sifra the $sifra to set
	 */
	public function setSifra($sifra) {
		$this->sifra = $sifra;
	}
	
	/**
	 * @param $datumOd the $datumOd to set
	 */
	public function setDatumOd($datumOd) {
		$this->datumOd = $datumOd;
	}
	
	/**
	 * @param $datumDo the $datumDo to set
	 */
	public function setDatumDo($datumDo) {
		$this->datumDo = $datumDo;
	}
	
	public function vratiGodinuDatumOd() {
		return substr ( $this->datumOd, 0, 4 );
	}
	
	public function vratiMesecDatumOd() {
		return substr ( $this->datumOd, 5, 2 );
	}
	
	public function vratiDanDatumOd() {
		return substr ( $this->datumOd, 8, 2 );
	}
	
	public function vratiGodinuDatumDo() {
		return substr ( $this->datumDo, 0, 4 );
	}
	
	public function vratiMesecDatumDo() {
		return substr ( $this->datumDo, 5, 2 );
	}
	
	public function vratiDanDatumDo() {
		return substr ( $this->datumDo, 8, 2 );
	}
}

?>
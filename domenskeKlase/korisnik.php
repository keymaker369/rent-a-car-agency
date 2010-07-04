<?php
class Korisnik{
	private $username;
	private $password;
	private $ime;
	private $prezime;
	private $datumrodj;
	private $email;
	private $tip;
	
	public function Korisnik($username,$password,$ime,$prezime,$datumrodj,$email,$tip){
		$this->username = $username;
		$this->password = $password;
		$this->ime = $ime;
		$this->prezime = $prezimae;
		$this->datumrodj = $datumrodj;
		$this->email = $email;
		$this->tip = $tip;
	}
	
	/**
	 * @return the $username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @return the $password
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @return the $ime
	 */
	public function getIme() {
		return $this->ime;
	}

	/**
	 * @return the $prezime
	 */
	public function getPrezime() {
		return $this->prezime;
	}

	/**
	 * @return the $datumrodj
	 */
	public function getDatumrodj() {
		return $this->datumrodj;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return the $tip
	 */
	public function getTip() {
		return $this->tip;
	}

	/**
	 * @param $username the $username to set
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * @param $password the $password to set
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @param $ime the $ime to set
	 */
	public function setIme($ime) {
		$this->ime = $ime;
	}

	/**
	 * @param $prezime the $prezime to set
	 */
	public function setPrezime($prezime) {
		$this->prezime = $prezime;
	}

	/**
	 * @param $datumrodj the $datumrodj to set
	 */
	public function setDatumrodj($datumrodj) {
		$this->datumrodj = $datumrodj;
	}

	/**
	 * @param $email the $email to set
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param $tip the $tip to set
	 */
	public function setTip($tip) {
		$this->tip = $tip;
	}
}
?>
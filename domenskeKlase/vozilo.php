<?php
class Vozilo {
	private $sifra;
	private $model;
	private $klasa;
	private $dan1;
	private $dan2;
	private $dan34;
	private $dan56;
	private $dan7;
	private $dan14;
	private $potrosnja;
	
	public function Vozilo($sifra, $model, $klasa, $dan1, $dan2, $dan34, $dan56, $dan7, $dan14, $potrosnja) {
		$this->sifra = $sifra;
		$this->model = $model;
		$this->klasa = $klasa;
		$this->dan1 = $dan1;
		$this->dan2 = $dan2;
		$this->dan34 = $dan34;
		$this->dan56 = $dan56;
		$this->dan7 = $dan7;
		$this->dan14 = $dan14;
		$this->potrosnja = $potrosnja;
	}
	
	/**
	 * @return the $potrosnja
	 */
	public function getPotrosnja() {
		return $this->potrosnja;
	}
	
	/**
	 * @param $potrosnja the $potrosnja to set
	 */
	public function setPotrosnja($potrosnja) {
		$this->potrosnja = $potrosnja;
	}
	
	/**
	 * @return the $sifra
	 */
	public function getSifra() {
		return $this->sifra;
	}
	
	/**
	 * @return the $model
	 */
	public function getModel() {
		return $this->model;
	}
	
	/**
	 * @return the $klasa
	 */
	public function getKlasa() {
		return $this->klasa;
	}
	
	/**
	 * @return the $dan1
	 */
	public function getDan1() {
		return $this->dan1;
	}
	
	/**
	 * @return the $dan2
	 */
	public function getDan2() {
		return $this->dan2;
	}
	
	/**
	 * @return the $dan34
	 */
	public function getDan34() {
		return $this->dan34;
	}
	
	/**
	 * @return the $dan56
	 */
	public function getDan56() {
		return $this->dan56;
	}
	
	/**
	 * @return the $dan7
	 */
	public function getDan7() {
		return $this->dan7;
	}
	
	/**
	 * @return the $dan14
	 */
	public function getDan14() {
		return $this->dan14;
	}
	
	/**
	 * @param $sifra the $sifra to set
	 */
	public function setSifra($sifra) {
		$this->sifra = $sifra;
	}
	
	/**
	 * @param $model the $model to set
	 */
	public function setModel($model) {
		$this->model = $model;
	}
	
	/**
	 * @param $klasa the $klasa to set
	 */
	public function setKlasa($klasa) {
		$this->klasa = $klasa;
	}
	
	/**
	 * @param $dan1 the $dan1 to set
	 */
	public function setDan1($dan1) {
		$this->dan1 = $dan1;
	}
	
	/**
	 * @param $dan2 the $dan2 to set
	 */
	public function setDan2($dan2) {
		$this->dan2 = $dan2;
	}
	
	/**
	 * @param $dan34 the $dan34 to set
	 */
	public function setDan34($dan34) {
		$this->dan34 = $dan34;
	}
	
	/**
	 * @param $dan56 the $dan56 to set
	 */
	public function setDan56($dan56) {
		$this->dan56 = $dan56;
	}
	
	/**
	 * @param $dan7 the $dan7 to set
	 */
	public function setDan7($dan7) {
		$this->dan7 = $dan7;
	}
	
	/**
	 * @param $dan14 the $dan14 to set
	 */
	public function setDan14($dan14) {
		$this->dan14 = $dan14;
	}

}
?>
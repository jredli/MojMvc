<?php

class Login_model extends Model{

	public function __construct(){
		//Omogućava korišćenje PDO
		parent::__construct();
	}

	public function izvrsi(){

		//Pisanje upita
		$upit = $this->konekcija->prepare("SELECT * FROM korisnik WHERE ime = :ime AND lozinka = :lozinka");
		$upit->execute(array(
			':ime' => $_POST['ime'],
			':lozinka' => $_POST['lozinka']
		));
		//Provera da li je upit vratio neki rezultat, ako jeste, redirect, ako nije, vraćanje na login formu
		$provera = $upit->rowCount();
		if($provera > 0){
			//Startovanje i popunjavanje sesije
			Sesija::init();
			Sesija::postavi('ulogovan', true);
			header('location: ../upravljanje');
		} else {
			header('location: ../index');
		}
	}

	public function vratiKorisnika(){
		$upit = $this->konekcija->prepare("SELECT * FROM korisnik ");
		$upit->execute();

		return $upit->fetch();
	}
}
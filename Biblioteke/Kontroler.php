<?php

class Kontroler{

	function __construct(){
		$this->pogled = new Pogled();
	}

	//Učitava model
	public function ucitajModel($ime){

		$putanja = 'Modeli/' .$ime. '_model.php';
		//Pita da li traženi model postoji, ako postoji, učitava ga i on može da se koristi
		 if(file_exists($putanja)){
			require 'Modeli/' .$ime. '_model.php';			
			$imeModela = $ime .'_model';
			$this->model = new $imeModela();

		}
	}
	
}
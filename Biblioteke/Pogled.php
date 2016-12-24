<?php

class Pogled{

	function __construct(){

	}

	//Učitavanje pogleda
	public function render($ime, $podrazumevani = false){
		//Učitava samo prosleđeni pogled
		if($podrazumevani == true){
			require 'Pogledi/' . $ime . '.php';
		}
		//Učitava prosleđeni i sve podrazumevane
		else{
			require 'Pogledi/zaglavlje.php';
			require 'Pogledi/' . $ime . '.php';
			require 'Pogledi/futer.php';	
		}
	}
}
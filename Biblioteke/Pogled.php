<?php

class Pogled{

	function __construct(){

	}

	//Učitavanje pogleda
	public function render($ime, $podrazumevani = array()){
		//Učitava samo prosleđeni pogled
		
			require 'Pogledi/zaglavlje.php';
			require 'Pogledi/' . $ime . '.php';
			require 'Pogledi/futer.php';	
		}	
}
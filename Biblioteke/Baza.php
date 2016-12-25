<?php

//Povezuje PHP sa serverom
class Baza extends PDO{

	public function __construct(){

		//Povezivanje sa bazom
		parent::__construct('mysql:host=localhost;dbname=mojmvc', 'root', '');;
	}
}
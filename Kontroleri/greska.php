<?php

class Greska extends Kontroler{
	function __construct(){
		parent::__construct();
	}

	//Poziva se kada pozvana stranica ne postoji
	function index(){		
		$this->pogled->render('greska');
	}

	
}
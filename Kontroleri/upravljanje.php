<?php 

class Upravljanje extends Kontroler{

	function __construct(){
		parent::__construct();
		Sesija::init();
		$ulogovan = Sesija::vrati('ulogovan');
		if($ulogovan == false){
			Sesija::unisti();
			header('location: ../index');
			exit;
		}
	}

	function index() 
	{	
		$this->pogled->render('sadrzaj');
	}

	function logout(){
		Sesija::unisti();
		header('location: ../index');
		exit;
	}
}
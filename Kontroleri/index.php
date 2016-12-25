<?php

class Index extends Kontroler{

	function __construct(){
		parent::__construct();
		
	}

	//Podrazumevani kontroler
	public function index(){
		$this->pogled->render('sadrzaj');
	}

	//Učitavanje modela za logovanje i izvršavanje
	public function login(){
		$this->ucitajModel('login');
		$this->model->izvrsi();
	}


}
<?php

class Index extends Kontroler{

	function __construct(){
		parent::__construct();
	}

	//Podrazumevani kontroler
	public function index(){
		$this->pogled->render('sadrzaj');
	}

}
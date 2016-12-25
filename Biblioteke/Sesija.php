<?php

class Sesija{

	public static function init(){
		@session_start();
	}

	//Setuje sesiju, [uloga] => admin, [$kljuc] => $vrednost
	public static function postavi($kljuc, $vrednost){
		$_SESSION[$kljuc] = $vrednost;
	}

	//Vraća sesiju da možemo da pristupimo njenoj vrednosti
	public static function vrati($kljuc){
		if(isset($_SESSION[$kljuc]))
		return $_SESSION[$kljuc];
	}

	//Uništava sesiju
	public static function unisti(){
		session_destroy();
	}
}
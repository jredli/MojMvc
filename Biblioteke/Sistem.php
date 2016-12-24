<?php

class Sistem{

	function __construct(){

		//Pita da li je nešto prosleđeno u url, ako jeste cepa ga po /
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//Ako ne unesemo ništa u url, poziva se podrazumevani početni kontroler
		if(empty($url[0])){
			require 'kontroleri/index.php';
			$kontroler = new Index();
			$kontroler->index();
			return false;
		}

		//Učitava kontroler koji smo pogodili u URL-u da bi ga Sistem video, u suprotnom ne može da napravi objekat
		$fajl = 'kontroleri/' . $url[0] . '.php';		
			if (file_exists($fajl)) {
				require $fajl;
			} else {
				$this->greska();
				return false;
			}

		//Pravimo objekat unetog kontrolera u url-u
		$kontroler = new $url[0];

		//Izvršava se ukoliko je prosleđen argument u kontroler
		if(isset($url[2]))
			if(method_exists($kontroler, $url[1])){
				$kontroler->{$url[1]}($url[2]);
			}
			else{
				$this->greska();
			}
		//Ako nije, poziva se kontroler bez argumenta
		else{
			if(isset($url[1])){
				if(method_exists($kontroler, $url[1])){
					$kontroler->{$url[1]}();
				}
				else{
					$this->greska();
				}				
			}
			//U suprotnom se poziva podrazumevani kontroler
			else{
				$kontroler->index();
			}
		}

	}

	function greska() {
		require 'kontroleri/greska.php';
		$kontroler = new Greska();
		$kontroler->index();
	}
}
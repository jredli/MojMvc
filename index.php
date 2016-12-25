<?php

// Učitavanje biblioteka
require 'Biblioteke/Sistem.php';
require 'Biblioteke/Kontroler.php';
require 'Biblioteke/Pogled.php';
require 'Biblioteke/Model.php';
require 'Biblioteke/Sesija.php';
require 'Biblioteke/Baza.php';


//Učitavanje konfiguracija
require 'Konfiguracija/putanje.php';
require 'Konfiguracija/Baza.php';


$aplikacija = new Sistem();

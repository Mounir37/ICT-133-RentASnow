<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    Snows.php
 *Date:     16.01.2020
 *Version:
 */
require "controler/controler.php";

$choix_page = $_GET['action'];
switch ($choix_page){
	case "displaySnows":
		displaySnows();
	break;
	default:
		home();
	break;
}



?>

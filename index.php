<?php
session_start();
/**
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Date:     16.01.2020
 *Version:
 */
require "controler/controler.php";

$choix_page = $_GET['action'];
switch ($choix_page) {
	case "displaySnows":
		displaySnows();
		break;
	case "connexion":
		connexions();
		break;
	case "validate_login":
		validateLogin();
		break;

	default:
		home();
		break;
}


?>

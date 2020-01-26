<?php
session_start();//initialisation de la session
/**
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Version:  1.0
 */
$fullname = $_POST['fullname']; //initialisation du fullname avec la QueryString
$birthdate = $_POST['birthdate']; //initialisation du birthdate avec la QueryString
$username = $_POST['username'];	//initialisation du user avec la QueryString
$password = $_POST['password'];	//initialisation du mot de passe avec la QueryString
require "controler/controler.php";

var_dump($fullname,$password );
$choix_page = $_GET['action'];
switch ($choix_page) {			//choix de la page php grace à la QueryString
	case "displaySnows":
		displaySnows();
		break;
	case "connexion":
		connexions();
		break;
	case "validate_login":
		validateLogin($username,$password);
		break;
	case 'logout':
		disconnect();
		break;
	case "createaccount":
		require_once "view/NouveauCompte.php";
		break;
	case "newaccount":
		newaccount($username,$fullname,$birthdate,$password);
		home();
		break;
	default:
		home();
		break;
}


?>

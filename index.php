<?php
session_start();//initialisation de la session
/**
 *Auteur:   Mounir Fiaux
 *Titre:    index.php
 *Version:  1.0
 */
require "controler/controler.php";
$username = $_POST['username'];	//initialisation du user avec la QueryString
$password = $_POST['password'];	//initialisation du mot de passe avec la QueryString

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
	default:
		home();
		break;
}


?>

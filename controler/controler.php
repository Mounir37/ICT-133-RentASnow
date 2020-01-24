<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    controler.php
 *Version:  1.0
 */
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function displaySnows()
{

    $snows = getSnows();
    require_once 'view/Snows.php';
}
function connexions(){

    require_once  'view/connexion.php';
}
function validateLogin($username,$password) //vérification de l'utilisateur et du mot de passe
{
    $_SESSION['Erreur'] = false;

    $LogUser = getLogUser($username);

    if ($LogUser != "")
    {
        if ($LogUser['password'] == $password)
        {
            $_SESSION['user'] = $username;
        }
    }
    if (isset($_SESSION['user']) == false)
    {
        $_SESSION['Erreur'] = true;
    }

    require_once "view/home.php";
}
function disconnect() {
    unset($_SESSION['user']);
    require_once 'view/connexion.php';
}

?>

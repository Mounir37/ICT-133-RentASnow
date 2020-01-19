<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    controler.php
 *Date:     16.01.2020
 *Version:
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
function validateLogin(){

    if(isset($_POST['validate'])) {
        $username = $_POST['USERNAME'];
        $password = $_POST['MDP'];
    }

    if ($username = "Mounir Fiaux" && $password = "CPNV"){
        $_SESSION ['user'] = $username;
        require_once "view/home.php";
    }

    require_once "view/home.php";
}
function disconnect() {
    unset($_SESSION['user']);
    require_once 'view/connexion.php';
}

?>

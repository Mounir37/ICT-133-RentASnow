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
function newaccount($username,$fullname,$birthdate,$password) //initialisation de la création d'un nouveau compte avec la fonction
{
    $listUsers = getUsers();
    $newUser = [
        'username' => $username,
        'fullname' => $fullname,
        'password' => $password,
        'birthdate' => $birthdate,
        'date-inscription' => date("Y-m-d", time()),
    ];
    $listUsers[] = $newUser;
    file_put_contents("model/dataStorage/Users.json", json_encode($listUsers)); //écriture du compte créer dans le fichier Json
}

?>

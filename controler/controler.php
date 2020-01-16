<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    Snows.php
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
    die("OK");
    require_once 'view/Snows.php';
}
?>

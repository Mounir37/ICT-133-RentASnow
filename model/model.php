<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    Snows.php
 *Date:     16.01.2020
 *Version:
 */
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
?>

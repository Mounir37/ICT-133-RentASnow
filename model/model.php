<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    model.php
 *Date:     16.01.2020
 *Version:
 */
function getNews()
{
	return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getSnows()
{
	return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}
function getUsers()
{
	return json_decode(file_get_contents("model/dataStorage/Users.json"), true);
}
function getLogUser($name)
{

	$listUsers = getUsers();

	foreach ($listUsers as $User)
	{
		if ($User['username'] == $name)
		{
			return $User;
		}
	}
	return "";
}
?>

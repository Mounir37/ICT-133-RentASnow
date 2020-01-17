<?php
ob_start()
/**
 *Auteur:   Mounir Fiaux
 *Titre:    connexion.php
 *Date:     17.01.2020
 *Version:
 */
?>
<br>
<form action="/?action=validate_login" method="post" class="form-group">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" name="username" class="form-group form-control">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-group form-control">
    <input type="submit" name="validate" value="ok">
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>


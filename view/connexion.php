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
    <input type="text" class="form-group form-control" name="username" required>
    <label for="password">Mot de passe</label>
    <input type="password" class="form-group form-control" name="password" required>
    <input type="submit" name="validate" value="ok">
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>


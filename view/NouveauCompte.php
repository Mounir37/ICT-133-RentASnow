<?php
/**
 *Auteur:   Mounir Fiaux
 *Titre:    NouveauCompte.php
 *Version: 1.0
 */

ob_start();
?>
<div>
    <form action="?action=newaccount" method="post" class="form-group">
        <h1 class="text-center"><strong>Créer un compte</strong></h1>

        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-group form-control" name="username" required>

        <label for="fullname">Nom complet</label>
        <input type="text" class="form-group form-control" name="fullname" required>

        <label for="birthdate">Date de naissance</label>
        <input type="date" class="form-group form-control" name="birthdate" id="birthdate"  required>

        <label for="password">Mot de passe</label>
        <input type="password" class="form-group form-control" name="password" required>

        <button type="submit" id="btnCreate" class="btn btn-primary">Créer</button>

    </form>
</div>
<?php

$content = ob_get_clean();
require_once("gabarit.php");

?>

<?php
ob_start();
/**
 *Auteur:   Mounir Fiaux
 *Titre:    Snows.php
 *Version:  1.0
 */
?>
    <h1 class="offset-md-3 ">Liste des Snows</h1>
    <table class="table table-bordered col-6 col-6 offset-3">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Disponibilité</th>
            <th>Détails</th>
        </tr>
        </thead>
        <tbody>

		<?php
		foreach ($snows as $snow) { //affichage de toute la liste des snows
			echo "<tr><td>" . $snow['modele'] . "</td><td>" . $snow['disponible'] . "</td><td><img src='" . $snow['smallimage'] . "' alt=''></td></tr>";
		}
		?>
        </tbody>
    </table>
    <br>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
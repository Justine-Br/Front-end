<?php

$nombre = readline("Entrez un nombre : ");
$calcul = 0;
$resultat = 0;

for($calcul = 1; $calcul <= $nombre; $calcul++) {
$resultat+=$calcul;
}

print $resultat;

?>
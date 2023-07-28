<?php

$saisie=readline("Saissez le numéro de passeport : ");

//print preg_match('/^([0-9]{2})([A-Z]{2})([0-9]{5})$/', $saisie);

if (preg_match('/^([0-9]{2})([A-Z]{2})([0-9]{5})$/', $saisie)) {
    echo "La saisie est valide.\n";
} else {
    echo "Erreur : La saisie est incorrecte.).\n";
}

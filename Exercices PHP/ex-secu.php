<?php

$saisie = readline("Saissez le numéro de sécurité sociale : ");

//print preg_match('/^([0-9]{2})([A-Z]{2})([0-9]{5})$/', $saisie);

if (preg_match('/^([1-2]{1})([0-9]{2})([0-12]{1,2})([1-95]{1,2})$/', $saisie)) {
    echo "La saisie est valide.";
} else {
    echo "Erreur : La saisie est incorrecte.).";
}

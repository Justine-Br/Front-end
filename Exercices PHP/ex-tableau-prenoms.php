<?php

$tableau = [
    "Joyce",
    "Isabelle",
    "Nathalie",
    "Bastien",
    "Théo",
    "Enzo",
    "Ten",
    "René",
    "Kevin",
    "Mehdi"
];

$prenomSaisi = readline("Entrez un prénom : ");

if (in_array($prenomSaisi, $tableau)) {
    echo "Le prénom $prenomSaisi fait partie des personnes dans la formation.";
} else {
    echo "Le prénom $prenomSaisi n'est pas un prénom d'une personne de la formation.";
}

?>
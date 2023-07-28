<?php

$nvaleurs = 0;
$positif = 0;
$negatif = 0;
$compteur = 0;
$tab = array();

echo "Entrez le nombre de valeurs : ";
$saisie=fgets(STDIN);

while (is_numeric($nvaleurs)==false) {
    print "ce n'est pas un nombre";
$nvaleurs = intval(fgets(STDIN));
}
 

   

    for ($compteur = 0; $compteur < $nvaleurs; $compteur++) {
        echo "Entrez la valeur " . ($compteur + 1) . " : ";
        $tab[$compteur] = floatval(fgets(STDIN));
    
        if ($tab[$compteur] < 0) {
            $negatif++;
        } else {
            $positif++;
        }
         // Affichage des résultats
    echo "Negatif: " . $negatif . PHP_EOL;
    echo "Positif: " . $positif . PHP_EOL;
    }

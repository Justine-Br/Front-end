<?php

$tab = array();
$somme = 0;
$note = 0;
$moyenne = 0;

for($note = 0; $note <= 8; $note++) {
    print "Entrez une valeur pour la case $note : ";
    $tab[$note] = floatval(fgets(STDIN));
}

$somme = array_sum($tab);
$moyenne = $somme / count($tab);

print "La somme de la liste est : " . $somme . PHP_EOL;
print "La moyenne de la liste est : " . $moyenne . PHP_EOL;

?>
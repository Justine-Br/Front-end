<?php

$nombre = readline("Saisissez un nombre");

while ($nombre < 10 or $nombre > 20) {
    if ($nombre < 10) {
        print "Plus grand !";
        print PHP_EOL;
    }
    if ($nombre > 20) {
        print "Plus petit !";
    }
    $nombre = readline();
}
print "Réponse correcre";

?>
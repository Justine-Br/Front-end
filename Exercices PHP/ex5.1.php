<?php

$nombre = readline();

while ($nombre < 1 or $nombre > 3) {
    if ($nombre < 1) {
        print "Plus grand !";
        print PHP_EOL;
    }
    if ($nombre > 3) {
        print "Plus petit !";
    }
    $nombre = readline();
}
print "Réponse correcte";

?>
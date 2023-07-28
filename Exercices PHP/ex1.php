<?php

function JourFerie($date)
{
    $joursFeries = array(
        '01-01',
        '04-14',
        '04-17',
        '05-01',
        '05-08',
        '05-25',
        '06-05',
        '07-14',
        '08-15',
        '11-01',
        '11-11',
        '12-25',
    );

    return in_array($date, $joursFeries);
}

$dateUtilisateur = readline("Entrez une date (format: YYYY-MM-DD) : ");

$dateUtilisateur = date('m-d', strtotime($dateUtilisateur));

if (JourFerie($dateUtilisateur)) {
    echo "C'est un jour férié !";
} else {
    echo "Ce n'est pas un jour férié.";
}
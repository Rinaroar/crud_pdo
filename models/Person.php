<?php

require 'connection.php';

function getPersons () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM person");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

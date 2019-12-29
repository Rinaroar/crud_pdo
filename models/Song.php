<?php

require 'connection.php';

function getSongs () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM song");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
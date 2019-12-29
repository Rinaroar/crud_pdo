<?php

require 'connection.php';

function getMovies () {
    $bdd = connectToBdd();

    $query = $bdd->prepare("SELECT * FROM movie");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
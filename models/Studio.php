<?php

require 'connection.php';

function getStudios () {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM studio");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
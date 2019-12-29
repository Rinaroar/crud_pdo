<?php

require 'connection.php';

function getTrailers () {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM trailer");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
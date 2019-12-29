<?php

require 'connection.php';

function getPosters () {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM poster");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
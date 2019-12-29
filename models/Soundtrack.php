<?php

require 'connection.php';

function getSoundtracks () {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM soundtrack");
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
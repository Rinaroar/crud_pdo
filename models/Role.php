<?php

require 'connection.php';

function getRoles () {
  $bdd = connectToBdd();

  $query = $bdd->prepare("SELECT * FROM role"); // normal ?
  $query->execute();

  return $query->fetchAll(PDO::FETCH_ASSOC);
}
<?php

require 'models/Song.php';

$songs = getSongs();

if (isset($songs))
{
  require 'views/songs/index.view.php';
} else {
  echo 'Il n’y a pas de song dans cette bddd';
}
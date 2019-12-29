<?php

require 'models/Poster.php';

$posters = getPosters();

if (isset($posters))
{
  require 'views/posters/index.view.php';
} else {
  echo 'Il n’y a pas de poster dans cette bddd';
}
<?php

require 'models/Movie.php';

$movies = getMovies();

if (isset($movies))
{
  require 'views/movies/index.view.php';
} else {
  echo 'Il n’y a pas de film dans cette bddd';
}
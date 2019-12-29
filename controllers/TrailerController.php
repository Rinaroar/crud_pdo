<?php

require 'models/Trailer.php';

$trailers = getTrailers();

if (isset($trailers))
{
  require 'views/trailers/index.view.php';
} else {
  echo 'Il n’y a pas de trailer dans cette bddd';
}
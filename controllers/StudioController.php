<?php

require 'models/Studio.php';

$studios = getStudios();

if (isset($studios))
{
  require 'views/studios/index.view.php';
} else {
  echo 'Il n’y a pas de studio dans cette bddd';
}
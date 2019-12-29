<?php

require 'models/Role.php';

$roles = getRoles();

if (isset($roles))
{
  require 'views/roles/index.view.php';
} else {
  echo 'Il n’y a pas de role dans cette bddd';
}
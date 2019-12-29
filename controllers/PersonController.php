<?php

require 'models/Person.php';

$persons = getPersons();

if (isset($persons))
{
  require 'views/persons/index.view.php';
} else {
  echo 'Il n’y a personne dans cette bddd';
}
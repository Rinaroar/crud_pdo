<?php

require 'models/Soundtrack.php';

$soundtracks = getSoundtracks();

if (isset($soundtracks))
{
  require 'views/soundtracks/index.view.php';
} else {
  echo 'Il n’y a pas de bande son dans cette bddd';
}
<?php

require 'models/Band.php';

if (! empty($_POST)){
  if (array_key_exists('delete_band', $_POST)){
    delete($_POST['delete_band']);
    header('Location: http://localhost:8888/bdd_movies/?url=bands'); // redirection
  } else if (array_key_exists('update_band', $_POST)){
    update($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=bands');
  } else {
    create($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=bands');
  }
} else {
  read();
};

function read () {
  $bands = getBands();

  if (isset($bands))
  {
    require 'views/bands/index.view.php';
  } else {
    echo 'Il n’y a pas de band dans cette base de donnée';
  }
};

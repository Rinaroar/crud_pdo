<?php

require 'models/Artiste.php';

if (! empty($_POST)){
  if (array_key_exists('delete_artiste', $_POST)){
    delete($_POST['delete_artiste']);
    header('Location: http://localhost:8888/bdd_movies/?url=artistes'); // redirection
  }
  else if (array_key_exists('update_artiste', $_POST)){
    update($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=artistes'); // redirection
  } else {
    create($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=artistes'); // redirection
  }
} else {
  read();
};

function read () {
  $artistes = get();

  if (isset($artistes))
  {
    require 'views/artistes/index.view.php';
  } else {
    echo 'Il n’y a pas d’artiste dans cette bdd';
  }
};
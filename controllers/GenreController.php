<?php

require 'models/Genre.php';

if (! empty($_POST)){
  if (array_key_exists('delete_genre', $_POST)){
    delete($_POST['delete_genre']);
    header('Location: http://localhost:8888/bdd_movies/?url=genres'); // redirection
  }
  else if (array_key_exists('update_genre', $_POST)){
    update($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=genres'); // redirection
  } else {
    create($_POST);
    header('Location: http://localhost:8888/bdd_movies/?url=genres'); // redirection
  }
} else {
  read();
};


function read () {
  $genres = getGenres();

  if (isset($genres))
  {
    require 'views/genres/index.view.php';
  } else {
    echo 'Il n’y a pas de genre dans cette bdd';
  }
};
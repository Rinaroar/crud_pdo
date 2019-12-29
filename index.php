<?php
  $host = "http://$_SERVER[HTTP_HOST]/bdd_movies/";
  $url = $host . '?url=';
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Administration CRUD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="<?php echo $host ?>" alt="Home" class="home">Home</a></li>
      <li><a href="<?php echo $url . 'artistes'?>" alt="Artistes">Artistes</a></li>
      <li><a href="<?php echo $url . 'bands'?>" alt="Bands">Bands</a></li>
      <li><a href="<?php echo $url . 'genres'?>" alt=Genres">Genres</a></li>
      <li><a href="<?php echo $url . 'movies'?>" alt="Movies">Movies</a></li>
      <li><a href="<?php echo $url . 'persons'?>" alt="Persons">Persons</a></li>
      <li><a href="<?php echo $url . 'posters'?>" alt="Posters">Posters</a></li>
      <li><a href="<?php echo $url . 'roles'?>" alt="Roles">Roles</a></li>
      <li><a href="<?php echo $url . 'songs'?>" alt="Songs">Songs</a></li>
      <li><a href="<?php echo $url . 'soundtracks'?>" alt="Soundtracks">Soundtracks</a></li>
      <li><a href="<?php echo $url . 'studios'?>" alt="Studios">Studios</a></li>
      <li><a href="<?php echo $url . 'trailers'?>" alt="Trailers">Trailers</a></li>
    </ul>
  </nav>
  <section>
    <?php
      if (! empty($_GET) && array_key_exists('url', $_GET)){
      $parameter = $_GET['url'];

      switch ($parameter) {
        case 'artistes':
            require 'controllers/ArtisteController.php';
            break;
        case 'bands':
          require 'controllers/BandController.php';
          break;
        case 'genres':
          require 'controllers/GenreController.php';
          break;
        case 'movies':
          require 'controllers/MovieController.php';
          break;
        case 'persons':
          require 'controllers/PersonController.php';
          break;
        case 'posters':
          require 'controllers/PosterController.php';
          break;
        case 'roles':
          require 'controllers/RoleController.php';
          break;
        case 'songs':
          require 'controllers/SongController.php';
          break;
        case 'soundtracks':
          require 'controllers/SoundtrackController.php';
          break;
        case 'studios':
          require 'controllers/StudioController.php';
          break;
        case 'trailers':
          require 'controllers/TrailerController.php';
          break;
      };
    } else {
      echo 'Faites votre selection :)';
    };
    ?>
</section>

</body>
</html>


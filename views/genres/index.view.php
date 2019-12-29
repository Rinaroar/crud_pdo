<?php
  $host = "http://$_SERVER[HTTP_HOST]/bdd_movies/";
  $url = $host . '?url=';
?>

<h2>Ajouter un genre</h2>
<div>
    <form action="<?php $url . 'sentNewGenre'?>" method="post">
        <input type="number" name="genreID" value="" placeholder="Id" class="add">
        <input type="text" name="type" value="" placeholder="Type" class="add">
        <input type="text" name="description" value="" placeholder="Description" class="add">
        <button class="validate" type="submit">Validate</button>
    </form>
</div>
<h2>Liste des genres</h2>
<table class="table">
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Type</b></td>
            <td><b>Description</b></td>
            <td><b>Delete</b></td>
            <td><b>Update</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($genres as $genresData){?>
      <tr>
      <?php foreach($genresData as $genreData){?>
          <td><?php echo $genreData; ?></td>
      <?php }?>
      <td>
        <form action="<?php $url . 'deleteGenre'?>" method="post">
            <input type="hidden" name="delete_genre" value="<?php echo $genresData['genreID']?>">
            <button type="submit" class="delete">Delete</button>
        </form>
        </td>
        <td class="td_update">
            <form action="<?php $url . 'updateGenre'?>" method="post">
                <input type="hidden" name="update_genre" value="<?php echo $genresData['genreID']?>">
                <input type="text" name="type" class="update_data" placeholder="<?php echo $genresData['genreType']?>" value="<?php echo $genresData['genreType']?>">
                <input type="text" name="description" class="update_data" placeholder="<?php echo $genresData['genreDesc']?>" value="<?php echo $genresData['genreDesc']?>">
                <button type="submit" class="update">Update</button>
            </form>
        </td>
      </tr>
    <?php }?>
    </tbody>
</table>
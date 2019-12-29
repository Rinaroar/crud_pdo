<?php
  $host = "http://$_SERVER[HTTP_HOST]/bdd_movies/";
  $url = $host . '?url=';
?>

<h2>Ajouter un artiste</h2>
<div>
    <form action="<?php $url . 'sentNewArtiste'?>" method="post">
        <input type="number" name="artisteID" value="" placeholder="Id" class="add">
        <input type="text" name="name" value="" placeholder="Name" class="add">
        <input type="text" name="nationality" value="" placeholder="Nationality" class="add">
        <button class="validate" type="submit">Validate</button>
    </form>
</div>
<h2>Liste des artistes</h2>
<table class="table">
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Nationality</b></td>
            <td><b>Linked Band</b></td>
            <td><b>Delete</b></td>
            <td><b>Update</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($artistes as $artistesData){?>
      <tr>
      <?php foreach($artistesData as $artisteData){?>
          <td><?php echo $artisteData; ?></td>
      <?php }?>
          <td>
            <form action="<?php $url . 'deleteArtiste'?>" method="post">
              <input type="hidden" name="delete_artiste" value="<?php echo $artistesData['artisteID']?>">
              <button type="submit" class="delete">Delete</button>
            </form>
          </td>
          <td class="td_update">
            <form action="<?php $url . 'updateArtiste'?>" method="post">
                <input type="hidden" name="update_artiste" value="<?php echo $artistesData['artisteID']?>">
                <input type="text" name="name" class="update_data" placeholder="<?php echo $artistesData['artisteName']?>" value="<?php echo $artistesData['artisteName']?>">
                <input type="text" name="nationality" class="update_data" placeholder="<?php echo $artistesData['artisteNationality']?>" value="<?php echo $artistesData['artisteNationality']?>">
                <button type="submit" class="update">Update</button>
            </form>
          </td>
      </tr>
    <?php }?>
    </tbody>
</table>
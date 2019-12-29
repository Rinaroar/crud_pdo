<?php
  $host = "http://$_SERVER[HTTP_HOST]/bdd_movies/";
  $url = $host . '?url=';
?>

<h2>Ajouter un band</h2>
<div>
    <form action="<?php $url . 'sentNewBand'?>" method="post">
        <input type="number" name="bandID" valule="" placeholder="Id" class="add">
        <input type="text" name="name" valule="" placeholder="Name" class="add">

        <button class="validate" type="submit">Validate</button>
    </form>
</div>
<h2>Liste des bands</h2>
<table class="table">
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Delete</b></td>
            <td><b>Update</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($bands as $bandsData){?>
      <tr>
      <?php foreach($bandsData as $bandData){?>
          <td><?php echo $bandData; ?></td>
    <?php }?>
        <td>
            <form action="<?php $url . 'deleteBand'?>" method="post">
              <input type="hidden" name="delete_band" value="<?php echo $bandsData['bandID']?>">
              <button type="submit" class="delete">Delete</button>
            </form>
        </td>
        <td class="td_update">
            <form action="<?php $url . 'updateBand'?>" method="post">
                <input type="hidden" name="update_band" value="<?php echo $bandsData['bandID']?>">
                <input type="text" name="name" class="update_data" placeholder="<?php echo $bandsData['bandName']?>" value="<?php echo $bandsData['bandName']?>">
                    <button type="submit" class="update">Update</button>
            </form>
        </td>
      </tr>
    <?php }?>
    </tbody>
</table>
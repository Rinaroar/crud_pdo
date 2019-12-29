<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Lenght</b></td>
            <td><b>URL</b></td>
            <td><b>movie ID</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($trailers as $trailersData){?>
      <tr>
      <?php foreach($trailersData as $trailerData){?>
          <td><?php echo $trailerData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
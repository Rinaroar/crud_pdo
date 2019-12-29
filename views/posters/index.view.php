<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Link</b></td>
            <td><b>movie ID</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($posters as $postersData){?>
      <tr>
      <?php foreach($postersData as $posterData){?>
          <td><?php echo $posterData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
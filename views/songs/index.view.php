<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Length</b></td>
            <td><b>URL</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($songs as $songsData){?>
      <tr>
      <?php foreach($songsData as $songData){?>
          <td><?php echo $songData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
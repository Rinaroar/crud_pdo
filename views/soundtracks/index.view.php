<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Size</b></td>
            <td><b>movie ID</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($soundtracks as $soundtracksData){?>
      <tr>
      <?php foreach($soundtracksData as $soundtrackData){?>
          <td><?php echo $soundtrackData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
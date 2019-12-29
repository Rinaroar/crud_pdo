<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Adress</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($studios as $studiosData){?>
      <tr>
      <?php foreach($studiosData as $studioData){?>
          <td><?php echo $studioData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
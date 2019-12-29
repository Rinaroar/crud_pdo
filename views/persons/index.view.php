<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Nationality</b></td>
            <td><b>Picture</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($persons as $personsData){?>
      <tr>
      <?php foreach($personsData as $personData){?>
          <td><?php echo $personData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
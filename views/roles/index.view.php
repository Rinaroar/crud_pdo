<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Description</b></td>
            <td><b>movie ID</b></td>
            <td><b>person ID</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($roles as $rolesData){?>
      <tr>
      <?php foreach($rolesData as $roleData){?>
          <td><?php echo $roleData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <td><b>ID</b></td>
            <td><b>Title</b></td>
            <td><b>Description</b></td>
            <td><b>Release Date</b></td>
            <td><b>Run time</b></td>
            <td><b>Certificate</b></td>
            <td><b>Rating</b></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($movies as $moviesData){?>
      <tr>
      <?php foreach($moviesData as $movieData){?>
          <td><?php echo $movieData; ?></td>
      <?php }?>
      </tr>
    <?php }?>
    </tbody>
</table>
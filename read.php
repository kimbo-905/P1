<?php
        $sql="SELECT * FROM projet";
        $result=mysqli_query($connexion,$sql);
?>
<div class="col-md-8 offset-2 mt-5">
    <a class="btn btn-success" href="?page=create">create</a>
<table class="table table striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">code</th>
      <th scope="col">nom</th>
      <th scope="col">description</th>
      <th scope="col">budget</th>
      <th scope="col">date_debut</th>
      <th scope="col">date_fin</th>
      <th scope="col">statut</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php while($ligne=mysqli_fetch_row($result)):?>
            <tr>
                <td><?php echo $ligne[0] ?></td>
                <td><?php echo $ligne[1] ?></td>
                <td><?php echo $ligne[2] ?></td>
                <td><?php echo $ligne[3] ?></td>
                <td><?php echo $ligne[4] ?></td>
                <td><?php echo $ligne[5] ?></td>
                <td><?php echo $ligne[6] ?></td>
                <td><?php echo $ligne[7] ?></td>

                <td>
                    <a class="btn btn-primary" href="?page=update&id=<?php echo $ligne[0] ?>" >Update</a>
                    <a class="btn btn-danger" href="?page=delete&id=<?php echo $ligne[0] ?>">Delete</a>
                </td>
            </tr>
    <?php endwhile ?>
  </tbody>
</table>
    
</div>
<?php
        if(isset($_POST["update"])){
            $id=$_POST["id"];
            $code=$_POST["code"];
            $nom=$_POST["nom"];
            $descriptio=$_POST["descriptio"];
            $budget=$_POST["budget"];
            $date_debut=$_POST["date_debut"];
            $date_fin=$_POST["date_fin"];
            $statut=$_POST["statut"];
        
            $sql="UPDATE projet set code='$code', nom='$nom', descriptio ='$descriptio', budget= '$budget', date_debut='$date_debut', date_fin='$date_fin', statut='$statut'
            where id=$id";
            mysqli_query($connexion,$sql);
            header("location:index.php");
        }
?>

<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <input type="text" name="id" value="<?php echo $ligne[0] ?>" hidden>
        <label for="">code</label>
        <input type="text" name="code" value="<?php echo $ligne[1] ?>" class="form-control">
        <br>
        <label for="">nom</label>
        <input type="text" name="nom" value="<?php echo $ligne[2] ?>" class="form-control">
        <br>
        <label for="">description</label>
        <input type="text" name="descriptio" value="<?php echo $ligne[3] ?>"  class="form-control">
        <br>
        <label for="">budget</label>
        <input type="number" name="budget" value="<?php echo $ligne[4] ?>" class="form-control">
        <br>
        <label for="">date_debut</label>
        <input type="date" name="date_debut" value="<?php echo $ligne[5] ?>" class="form-control">
        <br>
        <label for="">date_fin</label>
        <input type="date" name="date_fin" value="<?php echo $ligne[6] ?>" class="form-control">
        <br>
        <label for="statut">Statut</label>
        <select name="statut" class="form-control">
        <option value="Pret" <?php echo ($ligne[7] == 'Pret') ? 'selected' : ''; ?>>Pret</option>
        <option value="Pas Pret" <?php echo ($ligne[7] == 'Pas Pret') ? 'selected' : ''; ?>>Pas Pret</option>
        </select>
<br>

        <br>
        <button type="submit" name="update" class="btn btn-success">update</button>
        <a href="index.php" class="btn btn-danger">Retour</a>
    </form>
</div>
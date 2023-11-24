<?php

                function generateNumDossier(){
                    return "PR@" .date('Ymdhis')."#";
                }
        if(isset($_POST["create"])){

            $code=$_POST["code"];
            $nom=$_POST["nom"];
            $descriptio=$_POST["descriptio"];
            $budget=$_POST["budget"];
            $date_debut=$_POST["date_debut"];
            $date_fin=$_POST["date_fin"];
            $statut=$_POST["statut"];

            $sql="INSERT INTO projet values(NULL,'$code', '$nom', '$descriptio', '$budget', '$date_debut', '$date_fin', '$statut')";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }


?>  
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">

        <!-- <label for="">code</label> -->
        <!-- <input type="number" name="code" class="form-control"> -->
        <br>
        <label for="">Nom</label>
        <input type="text" name="nom" class="form-control">
        <br>
        <label for="">Description</label>
        <input type="text" name="descriptio" class="form-control">
        <br>
        <label for="">Budget</label>
        <input type="number" name="budget" class="form-control">
        <br>
        <label for="">Date_debut</label>
        <input type="date" name="date_debut" class="form-control">
        <br>
        <label for="">Date_fin</label>
        <input type="date" name="date_fin" class="form-control">
        <br>
        <!-- <label for="">Statut</label>
        <input type="text" name="statut" class="form-control"> -->
        <label for="statut">Statut</label>
        <select name="statut" class="form-control">
        <option value="Pret" >Pret</option>
        <option value="Pas Pret">Pas Pret</option>
        </select>
        <br>
        <button type="submit" name="create" class="btn btn-success">Ajouter</button>
        <a href="index.php" class="btn btn-danger">Retour</a>
    </form>
</div>
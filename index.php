<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>


        <?php
                  require_once("connexion.php");
                  require_once("header.php");
             

                if(isset($_GET["page"])){

                    switch($_GET["page"]){
                        
                        case "delete":
                            $id=$_GET["id"];
                            $sql="DELETE FROM projet where id=$id";
                            mysqli_query($connexion,$sql);
                            header("location:index.php");
                            break;

                        case "create":
                            require_once("create.php");
                            break;

                        case "update":
                            $id=$_GET["id"];
                            $sql="SELECT * FROM projet where id=$id";
                            $result=mysqli_query($connexion,$sql);
                            $ligne=mysqli_fetch_row($result);
                            require_once("update.php");
                            break;
                            
                        case "read":
                            require_once("read.php");


    
                    }
                }else{
                    require_once("read.php");
                }
               
                
require_once("footer.php");
        ?>

</body>
</html>
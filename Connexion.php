<?php
    $host="localhost";
    $user="root";
    $mdp="root";
    $bd="test";

    $mysqli = @new mysqli(
        $host,
        $user,
        $mdp,
        $bd
      );
        
    $connexion=mysqli_connect($host, $user, $mdp,$bd);
    if(!$connexion){
        echo "erreur de connexion a la base de donnée oh";
    }
?>
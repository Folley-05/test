<?php
    if(isset($_GET['nom']) and isset($_GET['service']) and isset($_GET['table']) and isset($_GET['id']))
    {
        $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
        $requete1="delete from ".$_GET['table']." where id=".$_GET['id'].";";

        $connexion->query($requete1);
        echo $requete1;
        header('location:promoteurs.php?service='.$_GET['service'].'&nom='.$_GET['nom']);
    }
    else
    {
        echo "error 404 <br> SERVER NOT FOUND";
    }
   
?>
<?php
    if(isset($_GET['nom']) and isset($_GET['service']) and isset($_POST['trier']))
    {
        $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
        $requete1="select * from ".$_GET['table']." where id=".$_GET['id'].";";

        header('location:promoteurs.php?service='.$_GET['service'].'&nom='.$_GET['nom'].'&odr='.$_POST['trier']);
    }
    else
    {
        echo "error 404 <br> SERVER NOT FOUND";
    }
        
?>
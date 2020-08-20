<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body
        {
            background-color: rgba(0, 0, 0, 0.6);
            padding-top:5%;
        }
        .offre
        {
            background-color: white;
            border-color: black;
            width: 30%;
            padding: 2%;
            margin: auto;
        }
        .image
        {
            margin-bottom: 2%;
        }
        .image img
        {
            width: 95%;
            margin: auto;
        }
        label
        {
            display: inline-block;
            width: 45%;
            margin: 1%;
            text-align: center;
            vertical-align:top;
        }
    </style>

</head>
<body>
<?php
    if(isset($_GET['nom']) and isset($_GET['service']) and isset($_GET['table']) and isset($_GET['id']))
    {
        $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
        $requete1="select * from ".$_GET['table']." where id=".$_GET['id'].";";

        $donnees=$connexion->query($requete1);
        $offre=$donnees->fetch();
    ?>

    <div class="container-fluid">
        <div class="offre">
            <div class="image" style="font-size:1.5em;">
                <b><label for=""><?php echo $offre['nom']; ?></label>
                <label for="" style="color:green;"><?php echo $offre['prix']; ?>  XAF</label></b>
                <img src="<?php echo $offre['image']; ?>" alt="">
            </div>
            <div class="descrip">
                <label for=""><?php echo $offre['qualite']; ?></label>
                <label for=""><?php echo $offre['supplement']; ?></label>
                <label for=""><?php echo $offre['commentaire1']; ?></label>
                <label for=""><?php echo $offre['commentaire2']; ?></label>
                <label for=""><?php echo $offre['commentaire3']; ?></label>
                <label for=""><?php echo $offre['conditions']; ?></label>
                <label for="">ajoute le<?php echo $offre['jour']; ?></label>
            </div>
        </div>
    </div>
<?php
}
else
{
    echo "error 404 <br> SERVER NOT FOUND";
}

?>
</body>
</html>
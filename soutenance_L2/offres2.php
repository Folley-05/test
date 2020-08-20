<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
function isimage($a=array())
{
    $img=$_FILES['image'];
    $ext=strtolower(substr($img['name'], -3));
    $ext_allow=array("jpg", "png", "gif");
    if(in_array($ext, $ext_allow))
    {
        return true;
    }
    else
    {
        return false;
    }
    
}
function nomimage($a=array())
{
    move_uploaded_file($a['image']['tmp_name'], "image/".$a['image']['name']);
    return "image/".$a['image']['name'];
}
?>
<body>
    <?php
    if(isset($_FILES['image']))
    {
        if(isimage($_FILES))
        {  
            $requete1='insert into offres_hotels values("", "'.$_POST['titre'].'", "'.$_POST['prix'].'", "'.nomimage($_FILES).'", "'.$_GET['nom'].'", "'.$_POST['qualite'].'", "'.$_POST['supplements'].'", "'.$_POST['commentaire1'].'", "'.$_POST['commentaire2'].'", "'.$_POST['commentaire3'].'", "'.$_POST['condition'].'", "'.$date=date('yy-m-d').'");';
            echo $requete1;
            $connexion->exec($requete1);
            header('location:promoteurs.php?service=hotels&nom=yaaHot hotel');
        }
        else{echo "votre fichier n'a pas une extension autorisé";}

    }
    else
    echo "error 404 <br> SERVER NOT FOUND";
    ?>
</body>
</html>


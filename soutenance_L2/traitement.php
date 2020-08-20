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
<?php $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', ''); ?>
<body>
    <?php 
        if(isset($_GET['service']) AND ($_GET['service']=="hotels" || $_GET['service']=="restaurants" || $_GET['service']=="transports")and isset($_FILES['image']))
        {
            if(isimage($_FILES))
            {   
                switch ($_GET['service'])
                {
                    case "hotels":
                        $requete1='insert into hotels values("", "'. $_POST['denomination'].'", "'.$_POST['ville'].'", "'.$_POST['region'].'", "'.$_POST['e-mail'].'", "'.$_POST['telephone'].'", "'.$_POST['login'].'", "'.$_POST['password'].'", "'.$_POST['localisation'].'", "'.$_POST['standing'].'", "'.nomimage($_FILES).'");';
                    break;
                    case "restaurants":
                        $requete1='insert into '. $_GET['service'] .' values("", "'. $_POST['denomination'].'", "'.$_POST['localisation'].'", "'.$_POST['ville'].'", "'.$_POST['region'].'", "'.$_POST['e-mail'].'", "'.$_POST['telephone'].'", "'.$_POST['login'].'", "'.$_POST['password'].'", "'.nomimage($_FILES).'");';
                        
                    break;
                    case "transports":
                        $requete1='insert into transports values("", "'. $_POST['denomination'].'", "'.$_POST['localisation'].'", "'.$_POST['ville'].'", "'.$_POST['voie'].'", "'.$_POST['region'].'", "'.$_POST['e-mail'].'", "'.$_POST['telephone'].'", "'.$_POST['login'].'", "'.$_POST['password'].'", "'.nomimage($_FILES).'");';
                    break;
                }
                $requete2='insert into responsables values("'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['date'].'", "'.$_POST['telephoneperso'].'", "'.$_POST['e-mailperso'].'", "'.$_POST['denomination'].'");';

                echo $requete1.'<br> '.$requete2;
                $connexion->exec($requete1);
                $connexion->exec($requete2);
                
                header('location:login.php');
            }
            else{echo "votre fichier n'a pas une extension autorisé";}
        
    ?>

    <?php
    }
    else
    {
        echo "error 404 <br> SERVER NOT FOUND";
    }
    ?>
</body>
</html>


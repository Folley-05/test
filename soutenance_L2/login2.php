<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
        if(isset($_POST['login']) AND isset($_POST['password']) AND isset($_POST['service']) AND isset($_POST['denomination']))
        {
            
            switch ($_POST['service'])
            {
                case "hotel":
                    $tab="hotels";
                break;
                case "transport":
                    $tab="transports";
                break;
                case "restaurant":
                    $tab="restaurants";
                break;
            }
            $requete0='select denomination from '. $tab .' where denomination="'. $_POST['denomination'] .'";';
            $requete1='select login from '. $tab .' where login="'. $_POST['login'] .'";';
            $donnees0=$connexion->query($requete0);
            
            $deno=$donnees0->fetch();
            if($deno=="")
            {
                echo "denomination incorrecte";
            }
            else
            {
                $donnees1=$connexion->query($requete1);
            $log=$donnees1->fetch();
            if($log=="")
            {
                echo"login incorrect <br>";
            }
            else
            {
                $requete2='select pass from '.$tab.' where login="'. $_POST['login'] .'";';
                $donnees2=$connexion->query($requete2);
                $pass=$donnees2->fetch();
                echo $pass['pass']. "<br>";
                if($pass['pass']==$_POST['password'])
                {
                    header('location:promoteurs.php?service='. $tab .'&nom='. $_POST['denomination']);
                }
                else
                {
                    echo "mot de passe incorrect <br>";
                    
                }
            }
            }
            
        }
        else
        {
            echo "error 404 <br> server SERVER NOT FOUND";
        }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="region.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <header><?php include('header.php') ?></header>

        <div class="row sites">

        <?php 
            $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');
            if(isset($_POST['region']) AND isset($_POST['type']))
                {
                $requete='select * from sites where type like "%'. $_POST['type']. '%" and region in (select region from sites where region like "%'. $_POST['region']. '%");';
                $donnees=$connexion->query($requete);
        
                while($site=$donnees->fetch())
                {
        ?>
                <div class="site">
                        <div class="im-site"><a href="final.php?id=<?php echo $site['id']; ?>"><img src="<?php echo $site['image1']; ?>" alt="" class="image"></a></div>
                        <h2><?php echo $site['nom']; ?></h2>
                </div>
        <?php  
                }
            }
            else
            {
                    echo "<span style='font-size: 2em;'>error 404 <br> page not found</span>";      

            }
        ?>              
        </div>

        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html>
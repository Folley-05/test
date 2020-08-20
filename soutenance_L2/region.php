<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
    <link rel="stylesheet"  href="region.css">
</head>
<body>
    <?php 
            $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', ''); 
            if(isset($_GET['nom']))
            {
                $requete0='select * from region where nom like "%'.$_GET['nom'].'%";';
                $donnees0=$connexion->query($requete0);
                $region=$donnees0->fetch();
                if($_GET['nom']=='nord')
                {
                    $region=$donnees0->fetch();
                }
    ?>
    <div class="container-fluid">
        <header><?php include('header.php') ?></header>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 description">
                <h1><?php echo strtoupper($region['nom']);?></h1>
                <span class="ligne"></span>
                <img src="<?php echo $region['image'];?>" alt="" class="image">
                <p class="texte"><?php echo $region['description'];?>
            </div>
        </div>
        <div class="row sites">
        <?php  
            
                $requete='select * from sites where region="'. $_GET['nom']. '";';
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



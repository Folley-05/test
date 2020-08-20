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
    <link rel="stylesheet" href="hotels.css">
    <?php $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');  ?>
</head>
<body>

    <div class="container-fluid">
        <header><?php include('header.php') ?></header>
        <div class="row">
            <div class="baniere">
                <p>HOTELS <span class="ligne"></span></p>
            </div>
            <?php 
                $requete0='select * from hotels';
                $donnees0=$connexion->query($requete0);
                while($hotel=$donnees0->fetch())
                {

            ?>
            <div class="col-md-5 hotel">
                <div class="row">
                    <div class="description">
                        <h2><?php echo strtoupper($hotel['denomination']);?></h2>
                        <?php for($i=0; $i<$hotel['standing']; $i++) { ?><div class="etoile"><img src="images/etoile.jpg" alt=""></div><?php }?> <br>
                        <label for=""><?php echo $hotel['ville'];?> <?php echo $hotel['region'];?> </label><br>
                        <?php echo $hotel['localisation'];?> <br>
                        <img src="<?php echo strtoupper($hotel['image']);?>" alt="" class="image-hotel">
                    </div>
                </div>
                <div class="row option">
                    <div class="item-option phone"><?php echo $hotel['telephone'];?></div>
                    <div class="item-option road">itineraire</div>
                    <div class="item-option web"><?php echo $hotel['email'];?></div>
                </div>
            </div>
            <?php 
                }
            ?>
            
            
            <a href="form_site.php?service=hotels"><button class="btn btn-primary btn-lg">ajoutez votre profil</button></a>
        </div>
        <div class="row">
            <div class="abaniere">
                <p>AGENCES DE TRANSPORT<span class="ligne"></span></p>
            </div>
            <?php 
                $requete1='select * from transports';
                $donnees1=$connexion->query($requete1);
                while($agence=$donnees1->fetch())
                {

            ?>
            <div class="col-md-5 hotel">
                <div class="row">
                    <div class="description">
                        <h2><?php echo strtoupper($agence['denomination']); ?></h2>
                        <label for="">voie: <?php echo $agence['voie'];?></label><br>
                        
                        <img src="<?php echo strtoupper($agence['image']);?>" alt="" class="image-hotel">
                    </div> 
                </div>
                <div class="row option">
                    <div class="item-option phone"><?php echo $agence['telephone'];?></div>
                    <div class="item-option road">itineraire</div>
                    <div class="item-option web"><?php echo $agence['email'];?></div>
                </div>
            </div>
            <?php 
                }
            ?>
            
            <a href="form_site.php?service=transports"><button class="btn btn-primary btn-lg">ajoutez votre profil</button></a>
        </div>

        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html>
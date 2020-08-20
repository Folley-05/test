<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <link  rel = "stylesheet" href = "https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
   <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <script  src = "https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js" > </script>
   <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

   <style>
       #carte
       {
           height: 500px;
           margin-bottom: 1%;
           width: 98%;
           margin-left: 1%;
       }
   </style>

    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
    <link rel="stylesheet" href="final.css">    
    
    <?php  $connexion= new PDO('mysql:host=localhost;dbname=tourisme', 'root', ''); ?>

</head>
<body>
    <?php
    if(isset($_GET['id']))
        {
            $requete='select * from sites where id='.$_GET['id'].';';
            $donnees=$connexion->query($requete);
            $site=$donnees->fetch()
    ?>
    <div class="container-fluid">
        <header> <?php include('header.php'); ?> </header>
        <div class="row corps">
            <div class="gsite">
                <h1 id="nomsite"><?php echo strtoupper($site['nom']); ?></h1>
                <div id="images">
                <img src="<?php echo$site['image3'] ?>" alt="" id="im3" width="750" height="650">
                    <p>
                        <img src="<?php echo$site['image2'] ?>" alt="" id="im2" width="550" height="320"><br>
                        <img src="<?php echo$site['image1'] ?>" alt="" id="im1" width="550" height="320">
                    </p>
                </div>
                <div class="descript">
                
                    <p class="texte-descriptif">
                    <?php echo $site['commantaire'] ?>
                    </p>
                </div>
            </div>
            <div class="row local">

                <input type="text" id="lat" value="<?php echo$site['latitude'] ?>" style="display: none;">
                <input type="text" id="lon" value="<?php echo$site['longitude'] ?>" style="display: none;">
                <input type="text" id="nom" value="<?php echo$site['nom'] ?>" style="display: none;">
                <div id="carte">

                </div>
            </div>
            <div class="row services">
            <?php 
                $requete2='select * from hotels;';
                $requete3='select * from transports;';
                $requete5='select * from sites where region="'.$site['region'].'" and id!='.$site['id'].';';
                $requete6='select * from sites where type like "%'.$site['type'].'%" and id!='.$site['id'].';';
                $donnees2=$connexion->query($requete2);
                $donnees3=$connexion->query($requete3);
                $donnees5=$connexion->query($requete5);
                $donnees6=$connexion->query($requete6);
            ?>
                <div class="agences col-md-6">
                    <h2>les agences de transport</h2>
                    <div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
                        <!-- <ol class="carousel-indicators" >
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                            <li data-target="#mycarousel" data-slide-to="3"></li>
                            <li data-target="#mycarousel" data-slide-to="4"></li>
                        </ol>-->
                        <div class="carousel-inner" role="listbox" >
                            <div class="item d1 active">
                                <h3>&emsp;</h3>
                                <p class="t1">agences pour s'y rendre</p>
                            </div>
                        <?php  
                            while($agence=$donnees3->fetch())
                            {
                        ?>
                            <div class="item d1">
                                <h3><?php echo strtoupper($agence['denomination']) ?></h3>
                                <img src="<?php echo$agence['image'] ?>" alt="" class="img-carousel">
                                
                            </div>
                        <?php } ?>     
                        </div>
                    </div>
                </div>
                <div class="hotels col-md-6">
                    <h2>les hotels</h2>
                    <div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
                        <!-- <ol class="carousel-indicators" >
                            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1"></li>
                            <li data-target="#mycarousel" data-slide-to="2"></li>
                            <li data-target="#mycarousel" data-slide-to="3"></li>
                            <li data-target="#mycarousel" data-slide-to="4"></li>
                        </ol>-->
                        <div class="carousel-inner" role="listbox" >
                            <div class="item d1 active">
                                <h3>&emsp;</h3>
                                <p class="t1">hotels sur place</p>
                            </div>
                        <?php  
                            while($hotel=$donnees2->fetch())
                            {
                        ?>
                            <div class="item d1">
                            <h3><?php echo strtoupper($hotel['denomination']) ?> <?php for($i=0; $i<$hotel['standing']; $i++) { ?><div class="etoile"><img src="images/etoile2.jpg" alt=""></div><?php }?></h3>
                                <img src="<?php echo$hotel['image'] ?>" alt="" class="img-carousel">
                                
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row sites">
                <div class="col-md-12 region">
                    <h2>dans les environs</h2>
                    <div class="liste">
                    <?php  
                            while($site1=$donnees5->fetch())
                            {
                    ?>
                           
                           <div class="site">
                                <div class="im-site"><a href="final.php?id=<?php echo $site1['id']; ?>"><img src="<?php echo $site1['image1']; ?>" alt="" class="image"></a></div>
                                <h2><?php echo $site1['nom']; ?></h2>
                            </div>
                    <?php } ?>
                    </div>

                </div>
                <div class="col-md-12 type">
                    <h2>sites simimaires</h2>
                    <div class="liste">
                        <?php  
                            while($site2=$donnees6->fetch())
                            {
                        ?>
                            <div class="site">
                                <div class="im-site"><a href="final.php?id=<?php echo $site2['id']; ?>"><img src="<?php echo $site2['image1']; ?>" alt="" class="image"></a></div>
                                <h2><?php echo $site2['nom']; ?></h2>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>  
        <footer> <?php include('footer.php'); ?> </footer>
    </div> 
    
    <?php
    }
    else
    {
        echo "error 404 <br> SERVER NOT FOUND";
    }
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>

    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js" integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    
    <script src="map.js"></script>
</body>
</html>
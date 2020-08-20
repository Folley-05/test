<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="recherche.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
</head>
<body>
    <div class="container-fluid">
        <header><?php include('header.php') ?></header>
        <div class="corps">
            <div class="row principale" >
                <div class="col-md-1"></div>
                <div class="col-md-5 text">
                    <h1>Des centaines de destinations incroyables</h1>
                    <div class=""></div>
                    <div class="">
                        Le Cameroun est un pays d’Afrique Centrale situé au fond du Golfe de Guinée, entre les 2e et 13e degrés de latitude nord et les 9e et 16e degrés de longitude est. Le pays s’étend sur une superficie de 475 650 kilomètres carrés.... 
                        <br>
                        <br>
                        <button class="btn bt1">lire plus</button>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 formulaire">
                    <form action="resultats.php" method="post">
                        <h2>Trouver votre destination</h2>
                        <div class="form-group">
                            <label for="type">type</label>
                            <select name="type" id="type" class="form-control" placeholder="choisissez un type de tourisme">
                                <option value="">tous les types de tourisme</option>
                                <option value="culturelle">Culturelle</option>
                                <option value="balneaire">Balneaire</option>
                                <option value="ecologique">Ecologique</option>
                                <option value="sportif">Sportif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">region</label>
                            <select name="region" id="type" class="form-control" placeholder="choisissez un type de tourisme">
                                <option value="">toutes les regions</option>
                                <option value="extreme-nord">Extreme-nord</option>
                                <option value="nord">Nord</option>
                                <option value="adamaoua">Adamaoua</option>
                                <option value="sud">Sud</option>
                                <option value="est">Est</option>
                                <option value="sud-Ouest">Sud-Ouest</option>
                                <option value="nord-Ouest">Nord-Ouest</option>
                                <option value="ouest">Ouest</option>
                                <option value="littoral">littoral</option>
                                <option value="centre">Centre</option>
                                </select><br><br>
                            </select>
                        </div>
                        <div class="row div-indic">
                            <div class="indic">sport</div>
                            <div class="indic">culture</div>
                            <div class="indic">religion</div>
                            <div class="indic">nature</div>
                            <div class="indic">parc</div>
                            <div class="indic">foret</div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control mon-bouton">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row sous">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h1>NOS DESTINATIONS</h1>
                </div>
                
                
                <div class="col-md-4 desti">
                    <img src="Limbe.jpg" alt="">
                    <span>Limbe ---> Nord-est</span>
                </div>
                <div class="col-md-4 desti">
                    <img src="images_sites/bamoun2.jpg" alt="">
                    <span>Palais Bamoun--->Ouest</span>
                </div>
                <div class="col-md-4 desti">
                    <img src="images_sites/nyos1.jpg" alt="">
                    <span>Lal Nyos--->Nord-est</span>
                </div>
                <div class="col-md-4 desti">
                    <img src="images_sites/reuni2.jpg" alt="">
                    <span>Place reunification--->Centre</span>
                </div>
                <div class="col-md-4 desti">
                    <img src="images_sites/obus2.jpg" alt="">
                    <span>Case obus--->Extreme-Nord</span>
                </div>
                <div class="col-md-4 desti">
                    <img src="images_sites/waza3.jpg" alt="">
                    <span>Parc de waza--->Extreme-Nord</span>
                </div>
                <div class="col-md-12">
                    <button class="btn  bt2">toutes les destinations</button>
                </div>
            </div>
        </div>
        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html> 
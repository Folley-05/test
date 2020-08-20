<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="promoteurs.css">
    <link rel="stylesheet" href="accueil.css">
	<script src="js/bootstrap.min"></script>
    <script src="accueil.js"></script>
</head>
<body>
    <div class="container-fluid">
        <header><?php include('header.php') ?></header>
        <div class="lecarousel">
            <div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
					<ol class="carousel-indicators" >
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
						<li data-target="#mycarousel" data-slide-to="3"></li>
						<li data-target="#mycarousel" data-slide-to="4"></li>
					</ol>
					<div class="carousel-inner" role="listbox" >
						<div class="item d1 active"  >
                            <img src="images/tourismecameroun1.jpg" alt="" class="img-carousel">
                            <div class="texte-carousel">
                                
                                <h1 style="text-align: center;">Decouvrez les types de tourisme</h1>
								<h3 style="text-align: center;">"Nos meilleures Experiences touristiques pour vous"</h3>
                                <a href="typetourisme.php" class="btn btn-carousel">Explorez plus</a>
                            </div>
						</div>
						<div class="item d1 "  >
                            <img src="images/reserve_dja1.jpg" alt="" class="img-carousel">
                            <div class="texte-carousel">
                                <h1 style="text-align: center;">La faune Camerounaise</h1>
                                <h3 style="text-align: center;">"Venez decouvrir la diversite de la faune africaine"</h3>
                                <a href="#"><button class="btn btn-carousel"> Explorez plus</button></a>
                            </div>
                            
						</div>
						<div class="item d1"  >
                            <img src="images/blactitude4.jpg" alt="" class="img-carousel">
                            <div class="texte-carousel">
                                
                                <h1 style="text-align: center;">Tourisme culturel</h1>
                                <h3 style="text-align: center;">Allez a la decouverte de la culture camerounaise</h3>
								<a href="typesite.php?type=culturel"><button class="btn btn-carousel"> Explorez plus</button></a>
                            
                            </div>
						</div>
						<div class="item d1"  >
                            <img src="images/jardinbotanique2.jpg" alt="" class="img-carousel">
                            <div class="texte-carousel">
                                <h1 style="text-align: center;">Eco-tourisme</h1>
                                <h3 style="text-align: center;">Entrez en symbiose avec la nature camerounaise</h3>
                                <a href="typesite.php?type=ecotourisme"><button class="btn btn-carousel"> Explorez plus</button></a>
                            </div>
						</div>
						<div class="item d1" >
                            <img src="images/balneaire.jpg" alt="" class="img-carousel">
                            <div class="texte-carousel">
                                <h1 style="text-align: center;">Tourisme balneaire</h1>
                                <h3 style="text-align: center;">"Venez explorer les belles plages des cotes camerounaises"</h3>
                                <a href="#"><button class="btn btn-carousel"> Explorez plus</button></a>
                            </div>
						</div>
		    </div>
        </div>
        
        <div class="texte">
            <div class="col-12 narrow text-center" >
                <h1 style="color: #118f35;">PETITE DOCUMENTATION</h1>
                <p class="lead" style="color: black;">
                    Le Cameroun est un pays d’Afrique Centrale situé au fond du Golfe de Guinée, entre les 2e et 13e degrés de latitude nord et les 9e et 16e degrés de longitude est ; le pays s’étend sur une superficie de 475 650 kilomètres carrés....
                </p>
                <a href="#" class="btn btn-primary">Apprenez plus</a>
		    </div>
        </div>
        <div class="row unes">
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/stade3.jpg" alt=""></div>
                <h3>LA CAN TOTAL CAMEROUN 2021</h3>
                <p>
                    Plus prestigieux evenement sportif en Afrique, elle reunit les meilleures selections africaines durant un mois a la conquete de la  coup
                </p>
            </div>
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/dja1.jpg" alt=""></div>
                <h3>VISITE DE LA RESERVE DU DJA</h3>
				<p >
                    La reserve du dja abrite une bonne partie de la faune camerounaise venez nombreux decouvrir la richesse et la diversite de notre faune 
                </p>
                </div>
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/holiday.jpg" alt=""></div>
                <h3>VACCANCES A la PLAGE</h3>
				<p >
                    La simple evocation du mot Cameroun fait sans doute penser en premiere intention a kribi ville de la cote camerounaise
				</p>
            </div>
        </div>
        <div class="row unes">
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/douala_edea2.jpg" alt=""></div>
                <h3  >NOTRE MONDE AQUATIQUE</h3>
				<p  >Fan de créatures aquatiques partagez votre passion avec. explorez le territoire aquatique camerounais sur place vous attendent d'etonnantes créatures marine
				</p>
            </div>
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/mouankeu1.jpg" alt=""></div>
                <h3 >NOS CHUTES</h3>
				<p  > Laissez nous vous fasciner par la beauté de l'écosysteme camerounais venez a admirer de nos célebres chutes d'eau et les cours d'eau qui les engendent
				</p>
            </div>
            <div class="col-md-3 une">
                <div class="img-une"><img src="images/museenational1.jpeg" alt=""></div>
                <h3 >LE MUSEE NATIONAL</h3>
				<p> Ancien palais présidentiel, le musée national est un chef d'ouvre de l'architecture africaine regroupant des tresors de différentes ethnies du pays.
				</p>
            </div>
        </div>

        <footer>
            <?php include('footer.php'); ?>
        </footer>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
</body>
</html>

<!--
    <div id="carouselexample" class="carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Limbe.jpg" alt="">
                </div>
                <div class="carousel-item active">
                    <img src="chambre.jpg" alt="">
                </div>
                <div class="carousel-item active">
                    <img src="nyos1.jpg" alt="">
                </div>
            </div>
-->
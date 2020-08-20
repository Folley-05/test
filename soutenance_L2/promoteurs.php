<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
    <link rel="stylesheet" href="promoteurs.css">

    <?php $connexion=new PDO('mysql:host=localhost;dbname=tourisme', 'root', '');  ?>
    
</head>
<body>
<?php 
        if(isset($_GET['service']) AND isset($_GET['nom']))
        {
            
           
            $requete1='select * from '. $_GET['service'] .' where denomination="'. $_GET['nom'] .'";';
            $requete2='select * from responsables where denomination="'. $_GET['nom'] .'";';
            
            $donnees1=$connexion->query($requete1);
            $donnees2=$connexion->query($requete2);
            $hotel=$donnees1->fetch();
            $respo=$donnees2->fetch();
        
?>
        <div class="container-fluid">
            <div class="tete">
                <h1>GESTION COMPTE </h1> 
                <button id="b1" style="margin-right: 0%; margin-left: 0px; border-right: 0px; color: white; background-color: rgb(0, 134, 29)">Offres</button>
                <button id="b2" style="margin-right: 0%; margin-left: -5px; border-left: 0px;">Entreprise</button>
            </div>

            <div class="row" id="entreprise" style="display: none;">
                    <div class="structure">
                        <h2>Votre Entreprise</h2>
                        <div class="div1">
                            <div class="hotel">
                                <div class="img-hotel"><img src="<?php echo $hotel['image'] ?>" alt=""></div>
                                <div class="">
                                    <div class="img-detail"><img src="chambre.jpg" alt=""></div>
                                    <div class="img-detail"><img src="image/chambre2.jpg" alt=""></div>
                                    <div class="img-detail"><img src="image/hotel1.jpg" alt=""></div>
                                    <div class="img-detail"><img src="chambre.jpg" alt=""></div>
                                </div>
                                <div class="nom-hotel">
                                    <h1><?php echo $hotel['denomination'] ?></h1>
                                    <label for=""> <?php echo $hotel['region'] ?> |</label>
                                    <label for=""> <?php echo $hotel['ville'] ?> |</label>
                                    <label for=""> <?php echo $hotel['localisation'] ?> |</label>
                                </div>
                            </div>
                        </div>
                        <div class="div2">
                            <div class="detail">
                                <h3>Informations</h3>
                                <label for="" class="l1"> denomination </label><label for="">  <?php echo $hotel['denomination'] ?></label>
                                <label for="" class="l1"> region :</label> <label for=""><?php echo $hotel['region'] ?> </label>
                                <label for="" class="l1"> ville :</label> <label for=""> <?php echo $hotel['ville'] ?></label>
                                <label for="" class="l1"> standing :</label> <label for=""></label>
                                <label for="" class="l1">telephone :</label> <label for=""><?php echo $hotel['telephone'] ?></label>
                                <label for="" class="l1">adresse mail: </label> <label for=""><?php echo $hotel['email'] ?></label>
                                <h3>Le Responsable</h3>
                                <label for="" class="l1"> nom : </label> <label for=""><?php echo $respo['nom'] ?>  <?php echo $respo['prenom'] ?></label>
                                <label for="" class="l1"> date de naissance :</label> <label for=""> <?php echo $respo['datenais'] ?></label>
                                <label for="" class="l1">telephone :</label> <label for=""><?php echo $respo['telephone'] ?></label>
                                <label for="" class="l1">adresse mail:</label> <label for=""> <?php echo $respo['email'] ?></label>
                            </div>
                            <div class="modifier">
                               <a href="form.php?<?php echo $hotel['id'] ?>"> <button class="btn btn-primary btn-lg">modifier le profil</button> </a></div>
                            </div>
                        </div>
                </div>

            <div class="row" style="display: block;" id="offres">
                <div class="col-md-3" >
                    <div class="aside" style="width: 98%;  margin-left: auto; margin-top: -4%; padding-left: 2%; background-color: rgb(230, 230, 230); border-radius: 4px; padding-top: 1%;vertical-align:top;">
                        <h3 style="width: 90%; margin: auto; margin-top: 5%; text-align: center;">CONTRAT DE DIFFUSION</h3><br>
                        <p style="padding: 2%;"><b>ENTRE LES SOUSSIGNES: </b><br><b><?php echo $hotel['denomination'] ?></b> et <br><b> VISIT CAMEROON</b> <br> <b> IL A ETE CONVENU CE QUI SUIT :</b><br>
 Le Contractant en sa qualité de Producteur et de commerçants exclusif de ses services, telle que définie ci-dessous  cède à
titre gracieux à TRACE le droit de reproduire et de multidiffuser, en tout ou partie, ladite sur toutes  par  et/ou par ses filiales, ainsi que sur ses
sites web et wap, les applications mobiles et ses services semi-interactifs. <br>
Le Contractant autorise à procéder à la multidiffusion de la Vidéomusique désignée à
l’Article 1 des présentes dans les conditions suivantes :
<ul><li>Diffusion intégrale : OUI</li><li>Diffusion d’extraits : OUI</li><li>Exclusivité : NON</li></ul>

</p>
                    </div>
                </div>
                <div class="col-md-9 offres" >
                    <h2>OFFRES ET SERVICES</h2>
                    <div class="col-md-2 option" >
                        <a href="promoteurs.php?service=<?php echo $_GET['service']; ?>&nom=<?php echo $_GET['nom']; ?>"><button class="btn btn-default ">actualiser</button></a>
                    </div>
                    <div class="col-md-5 option">
                        <form method="post" action="trier.php?&nom=<?php echo $_GET['nom'] ?>&service=<?php echo $_GET['service']?>">
                            <label for="trier" style="font-size: 1.2em;">trier par</label>
                            <select name="trier" id="trier" class="form-element">
                                <option value="jour">date</option>
                                <option value="nom">titre</option>
                                <option value="prix">prix</option>
                            </select>
                                <button class="btn btn-default ">trier</button>
                        </form>
                        
                    </div>
                    <div class="col-md-2 col-md-offset-3 option" >
                        <a href="offres.php?nom=<?php echo $_GET['nom']; ?>"><button class="btn btn-default ajouter">+</button></a>
                    </div>
                    <div class="col-md-12">
                        <div class="row titres">
                            <div class="col-xs-2"> IMAGE </div>
                            <div class="col-xs-2"> titre </div>
                            <div class="col-xs-2"> prix </div>
                            <div class="col-xs-2"> conditions </div>
                            <div class="col-xs-2"> supplement </div>
                            <div class="col-xs-2"> option </div>
                        </div>
                        <?php 
                             if($_GET['service']=="hotels")
                             {
                                 if(!isset($_GET['odr']))
                                 {
                                    $requete3='select * from offres_hotels where denomination="'.$hotel['denomination'].'";';
                                 }
                                 else
                                 {
                                    $requete3='select * from offres_hotels where denomination="'.$hotel['denomination'].'" order by '.$_GET['odr'].' asc ;';
                                 }
                                 $donnees3=$connexion->query($requete3);
                                 while($offre=$donnees3->fetch())
                                 {
                                
                        ?>
                        <div class="row offre">
                            <div class="col-xs-2"><img src="<?php echo $offre['image'] ?>" alt="" class="img-offre"></div>
                            <div class="col-xs-2">
                                <label for=""><?php echo $offre['nom'] ?></label><br>
                                <label for="">ajoute le <?php echo $offre['jour'] ?></label>
                            </div>
                            <div class="col-xs-2">
                                <label for=""><?php echo $offre['prix'] ?></label><br>
                                <label for=""> <?php echo $offre['qualite'] ?></label>
                            </div>
                            <div class="col-xs-2">
                                <label for=""><?php echo $offre['conditions'] ?></label>
                            </div>
                            <div class="col-xs-2">
                                <label for=""><?php echo $offre['commentaire1'] ?></label>
                                <label for=""><?php echo $offre['commentaire2'] ?></label>
                                <label for=""><?php echo $offre['commentaire3'] ?></label>
                                <label for=""></label>
                            </div>
                            <div class="col-xs-2">
                                <a href="visualiser.php?table=offres_hotels&id=<?php echo $offre['id'] ?>&nom=<?php echo $_GET['nom'] ?>&service=<?php echo $_GET['service']?>"><button class="btn btn-info">visualiser</button></a>
                                <button class="btn modif" style="display: none;">modifier</button>
                                <a href="supprimer.php?table=offres_hotels&id=<?php echo $offre['id'] ?>&nom=<?php echo $_GET['nom'] ?>&service=<?php echo $_GET['service']?>"><button class="btn btn-danger">supprimer</button></a>
                            </div>
                        </div>

                        <?php 
                                }
                            }

                        ?>
                </div>
            </div>
        </div>
        <script src="promoteurs.js"></script>

<?php 

    }
    else
    {
        echo "error 404 <br> SERVER NOT FOUND";
    }
?>
</body>
</html>



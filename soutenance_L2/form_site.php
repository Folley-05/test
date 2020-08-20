<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.min.css"> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
    <link rel="stylesheet"  href="form.css">
</head>
<body>
   <?php if(isset($_GET['service'])){ ?> 
    <div class="container-fluid">
            <form method="POST" action="traitement.php?service=<?php echo$_GET['service']?>" enctype="multipart/form-data" class="formulaire">
                <div class="row">
                    <div class="col-md-6  entrep">
                        <h3>L'ENTREPRISE</h3>
                        <span class="bar1"></span>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" name="denomination" class=" mon-input" id="nom" placeholder="votre denomination" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input type="text" name="localisation" class=" mon-input" id="localisation" placeholder="votre localisation" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input type="text" name="ville" class=" mon-input" id="region" placeholder="votre Ville" required>
                        </div>
                        <div class="form-group">
                            <label for="region"></label>
                            <select name="region" id="region" class="mon-input" placeholder="votre Region" required>
                                <option value="">choisissez une region</option>
                                <option value="extreme-nord">Extreme-nord</option>>
                                <option value="nord">Nord</option>
                                <option value="adamaoua">Adamaoua</option>
                                <option value="sud">Sud</option>
                                <option value="est">Est</option>
                                <option value="sud-Ouest">Sud-Ouest</option>
                                <option value="nord-Ouest">Nord-Ouest</option>
                                <option value="ouest">Ouest</option>
                                <option value="littoral">littoral</option>
                                <option value="centre">Centre</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="e-mail" class=" mon-input" id="email" placeholder="votre adresse e-mail">
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="text" name="telephone" class=" mon-input" id="email" placeholder="votre numero de Telephone" required>
                        </div>
                        <?php if($_GET['service']=="hotels"){ ?>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="text" name="standing" class=" mon-input" id="email" placeholder="le standing de votre hotel"  required>
                        </div>
                        <?php } ?>
                        <?php if($_GET['service']=="transports"){ ?>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="text" name="voie" class=" mon-input" id="email" placeholder="voie de transport" required>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="image" class="label-image">ajouter une image <img src="" alt="" id="image-etp"></label>
                            <input type="file" name="image" id="image" style="display: none;" required><br><br><br><br><br><br>
                            
                        </div>
                    </div>

                    <div class="col-md-6  gest">
                        <h3>LE RESPONSABLE</h3>
                        <span class="bar1"></span>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" name="nom" class="mon-input"  placeholder="votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input type="text" name="prenom" class="mon-input" id="prenom" placeholder="votre prenom"  required>
                        </div>
                        <div class="form-group">
                            <label for="sexe"></label>
                            <select name="sexe" id="" class="mon-input mon-input" placeholder="votre sexe" required>
                                <option value="feminin" class="mon-input">feminin</option>
                                <option value="masculin" class="mon-input">masculin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input type="date" name="date" class="mon-input" id="prenom" placeholder="votre date de naissance"  required>
                        </div>
                        <div class="form-group">
                            <label for="prenom"></label>
                            <input type="text" name="telephoneperso" class="mon-input" id="prenom" placeholder="votre numero Telephone"  required>
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input type="email" name="e-mailperso" class="mon-input" id="email" placeholder="votre adresse email"  required>
                        </div>
                        <div class="form-group">   
                            <label for="prenom"></label>
                            <input type="text" name="login" class=" mon-input" id="login" placeholder="login de connexion" required>
                        </div> 
                        <div class="form-group"> 
                            <label for="password"></label>
                            <input type="password" name="password" class=" mon-input" id="password" placeholder="mot de passe" required>
                        </div> 
                        <div class="form-group"> 
                            <label for="password"></label>
                            <input type="password" name="password2" class="mon-input" id="repassword" placeholder="confirmer le mot de passe" required>
                        </div> 
                        <div class="form-group foot">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="check">
                            &emsp; j'accepte les terme d'utilisation
                            </label> <br>
                            <a href="" ><span id="cond" color="white">lire les termes du contrat</span></a>
                            <button type="submit" class="btn  form-control" id="bt-check" style="display: none;"><b>Enregistrer</b> </button>
                        </div>
                    
                    
                <div>
            </form>
            
        <script src="form.js"></script>
    </div>
  <?php
  }
  else{ echo "erreur 404";}
  ?>  
</body>
</html>
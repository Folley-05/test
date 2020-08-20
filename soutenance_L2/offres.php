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
    <link rel="stylesheet" href="offres.css">
</head>
<body> 
    <div class="container-fluid">
    <form action="offres2.php?nom=<?php echo$_GET['nom'] ?>" method="post" enctype="multipart/form-data">
        <div class="d">
            <div class="">
                <label for="image"><img src="" alt=""></label> <input type="file" id="image" name="image">
                
                <input type="text" name="titre" class="form-control" placeholder="entrer le titre de l'offres">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <input type="number" name="prix" class="form-control" placeholder="entrez le prix de l'offre">
           </div>
            <div class="form-group col-md-4">
                <input type="text" name="qualite" class="form-control" placeholder="qualite de l'offres">
           </div>
           <div class="form-group col-md-4">
                <input type="text" name="condition" class="form-control" placeholder="conditions de payement">
           </div>
           <div class="form-group col-md-4">
                <input type="text" name="supplements" class="form-control" placeholder="supplements">
           </div>
           <div class="form-group col-md-4">
                <input type="text" name="commentaire1" class="form-control" placeholder="commentaire1">
           </div>
           <div class="form-group col-md-4">
                <input type="text" name="commentaire2" class="form-control" placeholder="commentaire1">
           </div>
           <div class="form-group col-md-4">
                <input type="text" name="commentaire3" class="form-control" placeholder="commentaire1">
           </div>
           
           <div class="form-group col-md-4">
                <button class="form-control btn btn-success">enregistrer l'offres</button>
           </div>
        </div> 
           
        </form>
    </div>
</body>
</html>
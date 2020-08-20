<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min"></script>
</head>
<body style="background-color: rgb(54, 206, 67)">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="login2.php" method="post">
                    <div class="row">
                        <h1>CONNEXION COMPTE</h1>
                        <div class="col-md-12 form-group">
                            <select name="service" id="" class="form-control" required>
                                <option value="">choisissez un service</option>
                                <option value="hotel">hotelerie</option>
                                <option value="transport">transport</option>
                            </select require>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="login">Denomination</label>
                            <input type="text" name="denomination" class="form-control" placeholder="entrez votre denomination" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="login">Login</label>
                            <input type="text" name="login" class="form-control" placeholder="entrez votre login" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="login">Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="entrez votre mot de passe" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" style="width: 100%;">connexion</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html> 
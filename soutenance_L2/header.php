
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"  href="css/bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css">
        <div class="row en-tete">
            <div class="col-md-6">
                <div class="col-xs-4 logo"><a class="navbar-brand" href="#"><img src="images/logo.png" style="border-radius: 20px;"></a></div>
				<h3 class="col-md-8 nomappli" > VISIT CAMEROON</h3>
            </div>
            <div class="col-md-6 d2">
                <nav class="navbar navbar-expand-md ">
                    
                    <ul class="nav navbar-nav">
                        <li class="active it"><a href="accueil.php" class="link0">accueil</a>
                            
                        </li>
                        <li class="item1 it"><a href="destinations.php" class="link0" >destination</span></a>
                            <ul class="nav submenu1">
                                <li ><a style="" href="typetourisme.php">types de tourisme</a></li>
                                <li ><a href="destinations.php">regions</a></li>
                                <li ><a href="recherche.php">recherche personnalisée</a></li>
                            </ul>
                        </li>
                        <li class="item2 it"><a href="activites&loisirs.php" class="link0" >activites&loisirs</a>
                            <ul class="nav submenu2">
                                <li ><a class="" href="activites&loisirs.php">activites</a></li>
                                <li ><a class="" href="activites&loisirs.php">loisirs</a></li>
                            </ul>
                        </li>
                        <li class="item3 it"><a href="hotels.php" class="link0">services</a>
                            <ul class="nav submenu3" >
                                <li ><a href="hotels.php?service=hotels">hotels</a></li>
                                <li ><a href="hotels.php?service=transports">agences de transport</a></li>
                                <li ><a href="login.php">espace promoteurs</a></li>
                            </ul>
                        </li>
                    </ul> 
                </nav>
                
            </div>
            <a href="#"><div id="up" class="pasvisible"><img src="images/up.png" alt=""></div></a>
    <script>
        document.addEventListener('DOMContentLoaded', function()
{
    window.onscroll=function(ev)
    {
        document.getElementById('up').className=(window.pageYOffset>100) ? "visible" : "pasvisible";
    }
});
    </script>
        </div>
       
        
    <script src="js/bootstrap.min"></script>
    <script src="js/bootstrap.min.js"></script>



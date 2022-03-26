<!DOCTYPE html>
<html lang="fr"> 
    <head> 
        <meta charset="utf-8">
        <link rel="stylesheet" href= "pathologies.css">
        <title>Recherhe pathologies</title>
    </head>

    <body>
        <div class = "header" >

            <div class="titre_logo"> 
                <h1 > ACUPONCTURE</h1>
                <!--<img src = logo.jpg alt="logo"> -->
                <!--<h3 class = "logo"> Azouny Poncture </h3> -->
            </div>

            <nav >
                <a href="accueil.tpl" class= "case" > Accueil </a>
                <a href="pathologies.php"  class = "case" > Pathologies </a>
                <a href="apropos.tpl" class = "case" > A propos de nous </a>
                <a href="connexion.php" class = "case" > connectez vous </a>
            </nav>
        </div>

        <div id="id01" class="modal">
    
            <form action="connexion.php"  method="post">
                <div id="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRleB2sWSxafREPNZj7gtASuicLaQMrJLvzsZnx9JPcWNFUm_y2&s">
                </div>

                <div class="container">
                    <label for="mail"><b>Nom d'utilisateur</b></label>
                    <input type="email" placeholder="Entrez le nom d'utilisateur" name="mail" required>
                    <label for="mdp"><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrez le mot de passe" name="mdp" required>
                    <button type="submit">Se connecter</button>

                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button> 
                </div>
            </form>
        </div>
    </body>
</html> 


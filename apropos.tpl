<!DOCTYPE html> 
<html Lang= "fr"> 
    <head> 
        <meta charset= "UTF-8">
        <link rel="stylesheet" href= "accueil.css">
        <title> A propos </title>
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

        <form action="pathologies.php" method="post" class="form_style">
            <p>
            <input type="text" name="mer" id="mer"/>
            <input type="submit" value="filtrer" />
            </p>
        </form>
    

        <p>
        Parlons de nous

        </p>

    </body>
    





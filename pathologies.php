<?php
//<

// Inclure dans le projet la classe Smarty 
require_once('/var/www/html/templating/smarty/libs/Smarty.class.php');

// Créer  l'objet de manipulation des vues 
$smarty=new Smarty(); 
$smarty->template_dir = '../HTML';
$smarty->compile_dir = '../tmp';

$user = 'postgres-tli';
$password = 'tli';

//connextion to the database
try {

    $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=acudb', $user, $password);
    $filtre = $_POST['mer']; 
if (empty($filtre)){  
    $sql1='SELECT * FROM patho';
    //$sql1 = 'SELECT * FROM  patho p INNER JOIN  symptpatho sp ON p.idp=sp.idp 
    //INNER JOIN symptome s ON sp.ids=s.ids  ORDER BY idp '
    $reponse = $bdd->query($sql1);
    $resultat = $reponse-> fetchAll(PDO::FETCH_ASSOC); 
   

}



    /*******description des symptomes****
    $sql2 = 'SELECT `idp` FROM symptpatho' ; 
    $symptomepato = $bdd->prepare($sql2);
    $symptomepato ->execute(array( $resultat['idp'] ));

    $sympt =  $symptomepato -> fetchAll(PDO::FETCH_ASSOC); 

    $descriptionSymp= $bdd->prepare('SELECT `desc` FROM symptome WHERE `symptome`.`idS` = ?');
    $descriptionSymp ->execute(array($sympt['idS']));
    $des=$descriptionSymp->fetchAll(PDO::FETCH_ASSOC);
    
}   
*/

$smarty-> assign('resultat',$resultat);
//$smarty-> assign('sympto',$des);
//$smarty-> assign('sympt',$sympt);

/*
else {
    $sql3 = 'SELECT DISTINCT (p.idP) FROM  patho p 
    INNER JOIN  symptpatho sp ON p.idP=sp.idP 
    INNER JOIN symptome s ON sp.idS=s.idS INNER JOIN keysympt ks ON s.idS=ks.idS 
    INNER JOIN keywords kw ON ks.idk=kw.idk   WHERE kw.name=? ORDER BY idP';ù


}
*/



// Lui demander de générer la vue et de l'afficher 
$smarty->display('pathologies.tpl');

} catch (PDOException $e) {
    echo 'Connexion échouée : '.$e ->getMessage();
    die ();
}



 




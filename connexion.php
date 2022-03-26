<?php

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

    $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=bdusers', $user, $password);
// Vérification des identifiants

$sql= 'SELECT nom From bddusers WHERE mail =' . $mail .'AND mot de passe = ' . $mdp ;

$req = $bdd->request($sql);
$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}

else
{
    session_start();
    $_SESSION['nom'] = $resultat['nom'];
    $_SESSION['mail'] = $mail;
    echo 'Vous êtes connecté !';
}



}
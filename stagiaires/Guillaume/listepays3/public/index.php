<?php 
/*
** Contrôleur frontal
*/

// chargement des dépendances 
require_once "../config.php"; // constantes
require_once "../model/CountriesModel.php"; // fonctions

// tentative de connexion 
try{
    // création d'une instance de PDO
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
}catch(Exception $e){
    // arrêt du script et affichage de l'erreur 
    die("Erreur: ".$e->getMessage());
}

// requête du la DB (model car gestion de données)

var_dump(getAllCountries($db));

$sql = "SELECT * FROM countries"; // requête non exécutée 

$query = $db->query($sql); // exécution de la requête de type SELECT avec query()

$countQuery = $query->rowCount(); // nombre de résultats de notre requête

/* récupération du template d'affichage, on l'utilisera la boucle while avec un fetch directement 
danns la vue */ 

include "../view/homepage.php";

// déconnexion (bonne pratique)
$db=null;
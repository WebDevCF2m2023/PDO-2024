<?php
/*
** Contrôleur frontal
*/

// chargement des dépendances
require_once "../config.php"; // constantes
require_once "../model/CountriesModel.php"; // fonctions
require_once "../model/PaginationModel.php";

// tentative de connexion

// requête sur la DB (se trouve dans le dossier model car gestion de données)


try{
    // création d'une instance de PDO 
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=". MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
    
    // on va mettre la valeur par défaut du format des fetch (la conversion des données récupérées en PHP) en tableau associatif, en utilisant PDO::FETCH_ASSOC
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// problème lors de la connexion, utilisation de la classe Exception    
}catch(Exception $e){

    // arrêt du script et affichage de l'erreur
    die("Erreur : ".$e->getMessage());
}
$numCountries = getNumberCountries($db);

$viewPage = PaginationModel("index.php", MY_PAGINATION_GET, $numCountries , $page, MY_PAGINATION_BY_PAGE);




/* récupération du template d'affichage, 
on utilisera la boucle while avec un fetch directement
dans la vue */
include "../view/homepage.view.php";
$countriesByPage = getCountriesByPage($db, $page,MY_PAGINATION_BY_PAGE);

// déconnexion (bonne pratique)
$db=null;
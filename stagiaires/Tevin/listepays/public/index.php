<?php

// Contrôleur frontale

// chargement des dépendances 

require_once "../config.php";

// tentative de connexion 

try {
    // création d'une instance de PDO
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
    
    /* on va mettre la valeur par défaut du format des fetch 
    (la conversion des données récupere en PHP) en tableau assotiatif, en utilisant PDO::FETCH_ASSOC */
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(Exception $e){
    // arrêt du script et affichage de l'erreur
    die("Erreur : ". $e->getMessage());
}

// requête sur la DB (se trouve dans le dossier model car gestion de données)

$sql = "SELECT * FROM countries";

$query = $db->query($sql); //exécution de la requête de type SELECT avec query()

$countQuery = $query->rowCount(); // nombre de résultats de notre requête 

/* le fetchAll crée un tableau indexé qui contient les résultats sous forme de tableau assossiatif (voir ligne)
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); */
$allCountries = $query->fetchAll();

echo count($allCountries);

// récuperation du template d'affichage, on utilisera la boucle while avec un fetch directement dans la vue

include "../view/homepage.view.php";

// déconnexion (bonne pratique)
$query->closeCursor();

$db = null;
<?php 
/* contrôleur frontale 
*/

//  chargement des dépendances
// 
require_once "../config.php"; // constantes
require_once "../model/countriesModel.php"; // fonctions

try { 
     $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
     // on va mettre la valeur par défaut des fetch (la conversion des données récupérées en PHP) en tableau associatif, en utilisant PDO::FETCH_ASSOC//
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(Exception $e){
    // arrêt du script et affichage de l'erreur 
    die("erreur : ".$e-> getMessage());
}

// requête sur la DB (model car gestion de données)
var_dump(getAllCountries($db));

$sql = "SELECT* FROM countries"; // requête non executée
$query = $db->query($sql); // execution de la requête de type SELECT avec query()

$countQuery = $query -> rowCount(); // nombre de résultats de notre requête

// le fetchALL crée un  tableau indexé qui contient les résultats 
// sous forme associatif (voir la ligne près de la connexion)
// $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$allCountries = $query->fetchAll();

/* récupération du template d'affichage, on utilisera la boucle while avec un fetch directement dans la vue */

include "../view/homepage.view.php"; 

// BONNE PRATIQUE ( autres DB que MySQL ou MariaDB)
$query->closeCursor();

// déconnexion ( bonne pratique)

$db=null;
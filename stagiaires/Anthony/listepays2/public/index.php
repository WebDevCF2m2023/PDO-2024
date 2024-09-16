<?php

//Controleur frontal

//chargement des dépendances 

require_once "../config.php";

//Tentative de connexion 

try{
    //Création d'une instance de PDO
  $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.
  ";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);

  // on va mettre la valeur par défaut du format des fetch (conversion des données récupéré en php) en tableau associatif en utilisant PDO::FETCH_ASSOC
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}

//Problème lors de la connexion, utilisation de la classe exception 
catch(Exception $e){
        //arrêt du script et affichage de l'erreur
    die("Erreur : ".$e->getMessage());
}

//Requête sur la DB(model car gestion de données)

$sql = "SELECT * FROM countries";       //requête non-executé

$query = $db->query($sql);              //Exécution de la requête de type SELECT avec query()

 $countQuery = $query->rowCount();       //Compte nombre de résultats par ligne

 //Le fetchAll crée un tableau indexé qui contient les résultats sous forme de 
  // tableau associatif(voir ligne près de la connexion)
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 $allCountries = $query->fetchAll();

 //Récupération du template d'affichage,
 //On utilisera la boucle while avec un fetch directement dans la vue
include "../view/homepage.view.php";

 //Déconnexion (bonne pratique)
 $db = null;
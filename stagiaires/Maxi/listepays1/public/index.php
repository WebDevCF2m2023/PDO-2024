<?php
/*
** Front controller
*/

//chargement de dependances
// on utilise 'require_' car on veut arreter
// le script en cas d'erreur, et le '-once'
// car le fichier contien des constasnte
//on ne peut eb aucun cas les redefinir

require_once("../config.php");

// on va se connecter à la basse de donnée
//  en utulisant PDO on instancie les objets eb 
// utulisant new, si on doit passer des arguments 
// aux parametres, on les mets dans les ().  
// Une methode appelée lorsqu'on utilise new:
// PDO::__construct(param1, param2, ...)

$PDOConnect = new PDO(MY_DB_DRIVER.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PSS);

/* Creation de la requete dans une variable
locale, bonne pratique pour futures requestes
preparees */

$sql = "SELECT * FROM countries";

/* Execution reel de la requete, on utlise 
->query() uniquement pour les SELECT */

$query = $PDOConnect->query($sql);

/* on va conter le nombre de lignes affectées 
( chargées) par la requete $querry en utilisant 
la methode ->rowCount() */

$nbPays = $query->rowCount();

/* on va charger la vue pour afficher tous les pays 
recuperes par la requete $query*/

include_once "../view/homepage.view.php";

// remettre le curseur à 0 pour reutiliser la
//requete (inutile pour MySql et MariaDB)

$query->closeCursor();

// on ferme notre connexion (portabilite du code)

$PDOConnect = null;

var_dump($PDOConnect, $nbPays);
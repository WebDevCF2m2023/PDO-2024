<?php
/*
**  Front Controller
*/

/* chargement des dépendances
 on utilise 'require_' car on veut arrêter
 le script en cas d'erreur, et le '_once'
 car le fichier contient des constantes,
 on ne peut en aucun cas les redéfinir */
require_once("../config.php");

/* on va se connecter à la base de donnée
 en utilisant PDO. On instancie les objets en
 utilisant new, si on doit passer des arguments
 aux paramètres, on les mets dans les (). 
 Une méthode est appelée lorsqu'on utilise new :
 PDO::__construct(param1, param2, ....)*/
$PDOConnect = new PDO(MY_DB_DRIVER.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PASS);

/* Création de la requête dans une variable
locale, bonne pratique pour futures requêtes
préparées */
$sql = "SELECT * FROM countries";

/* Exécution réelle de la requête, on utilise
->query() uniquement pour les SELECT */
$query = $PDOConnect->query($sql);

/* on va compter le nombre de lignes affectées
 (chargées) par la requête $query en utilisant
 la méthode ->rowCount() */
$nbPays = $query->rowCount();

/* On va charger la vue pour afficher tous les pays récupérés par la requête $query */
include_once "../view/homepage.view.php";

// remettre le curseur à 0 pour réutiliser la
// requête (inutile pour MySQL et MariaDB)
$query->closeCursor();
// on ferme notre connexion (portabilité du code)
$PDOConnect = null;
//var_dump($PDOConnect,$sql,$query,$nbPays);
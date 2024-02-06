<?php
/*
** controleur frontal
*/

//chargement des dependances
// on utulise 'require_' car on veut arreter 
// le scripte en cas d ' erreur , et le '_once' 
// car me fichier contient des constantes,
// on ne peut en aucun cas les redefinir

require_once("../config.php");

// on va se connecter a la base de donnee
// en utulisant PDO. on instancie les object en 
// utulisant new , si on doit passer des arguments 
// en parametres, on les mets dans les (). une methode est appelee lorsqu' on utulise new :
// pdo :: __constructe(param1,param2,...)


$PDOConnect = new PDO(MY_DB_DRIVER.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET,
MY_DB_LOGIN,
MY_DB_PWD);



/* creation de la requete dans une variable locale ,
bonne pratique pour requetes preparee */

$sql = "SELECT * FROM countries";

/* execution de la requete, on utulise 
-> query() uniquement  pour les SELECT*/

$query = $PDOConnect-> query($sql);

/* on va compter le nombre de lignes affectees 
(chargee) par ma requete $query en utulisant 
la methodes -> rowCount()*/

$nbPays = $query -> rowCount();

/* on va charger la vue pour afficher tout les pays 
recuperes par la requete $query*/

include_once "../view/homepage.view.php";
// remettre le curseur a 0 pour reutuliser la 
//requete ( inutile pour mysql et mariaDB)
$query->closeCursor();
// on ferme notre connection ( portabilite du code )
$PDOConnect = NULL;
//var_dump( $PDOConnect, $query, $sql,$nbPays );	


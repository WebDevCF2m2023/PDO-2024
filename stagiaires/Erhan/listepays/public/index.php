<?php

require_once "../config.php";

try{
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
}catch(Exception $e){

    die("Erreur : ".$e->getMessage());
}

$sql = "SELECT * FROM countries";

$query = $db->query($sql);

$countQuery = $query->rowCount();

include "../view/homepage.view.php";

$query->closeCursor(); //bonne pratique

$db = null;


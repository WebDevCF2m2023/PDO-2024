<?php

// paramètres de connexions
require_once "../config.php";

# Connexion PDO
try {
    $db = new PDO(
        MY_DB_TYPE.':host='.MY_DB_HOST.';port='.MY_DB_PORT.';dbname='.MY_DB_NAME.';charset='.MY_DB_CHARSET,
        MY_DB_LOGIN,
        MY_DB_PWD
    );

}catch(Exception $e){
    die($e->getMessage());
}

$sql = "SELECT * FROM countries";
$query = $db->query($sql);
$countQuery = $query -> rowCount();
$sql2 = "SELECT * FROM countries WHERE nom = 'Irlande' OR nom = 'Belgique' OR nom = 'Turquie'";
$query2 = $db->query($sql2);
include "../view/homepage.view.php";

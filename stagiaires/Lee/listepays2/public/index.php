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
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);   // default method for FETCH
}catch(Exception $e){
    die($e->getMessage());
}

$sql = "SELECT * FROM countries";

$query = $db->query($sql);

$countQuery = $query -> rowCount();

$allCountries = $query->fetchAll();

include "../view/homepage.view.php";
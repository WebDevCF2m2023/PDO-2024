<?php

require_once "../config.php";
require_once "../model/CountriesModel.php";

try{
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=".MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(Exception $e){

    die("Erreur : ".$e->getMessage());
}

$allCountries = getAllCountries($db);

include "../view/homepage.view.php";

$db = null;
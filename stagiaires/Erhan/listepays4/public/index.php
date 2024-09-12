<?php

require_once "../config.php"; 
require_once "../model/CountriesModel.php"; 
require_once "../model/PaginationModel.php";


try{
    
    $db = new PDO(MY_DB_TYPE.":host=".MY_DB_HOST.";port=".MY_DB_PORT.";dbname=". MY_DB_NAME.";charset=".MY_DB_CHARSET, MY_DB_LOGIN, MY_DB_PWD);
    
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
}catch(Exception $e){

    
    die("Erreur : ".$e->getMessage());
}


$nbPays = getNumberCountries($db);

if(isset($_GET[MY_PAGINATION_GET]) && ctype_digit($_GET[MY_PAGINATION_GET]))
{
    $page = (int) $_GET[MY_PAGINATION_GET];
}else{
    $page = 1;
}

$pagination = paginationModel("exemple.php", MY_PAGINATION_GET, $nbPays,$page,MY_PAGINATION_BY_PAGE);

$countriesByPage = getCountriesByPage($db, $page, MY_PAGINATION_BY_PAGE);

include "../view/homepage.exemple.view.php";


$db=null;
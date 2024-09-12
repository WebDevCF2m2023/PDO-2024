<?php
// chef d'orchestre

require_once "../config.php";
require_once "../model/CountriesModel.php";

// New permet de creer un nouveau objet de la classe PDO
// Nouvelle instance de PDO

$dsn = DB_DRIVER . ":host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

try{
    $myPDO = new PDO($dsn, DB_USER, DB_PASS);

}catch(Exception $e){
    // si une erreur pdo se produit, on arrete tout en affichant le message d'erreur
    die($e->getMessage());
}

$content = 'home_page.php';

if(!empty($_GET['pg'])){
    switch($_GET['pg']){
        case 'pagination':
            $allCountries = getAllCountries($myPDO);
            $content = 'pagination.php';
            break;
        default:
        $content = 'error404.php';
            break;
    }
}
// On inte/greimport le fichier html
// On fusionne le fichier avec index.php

include "../view/$content";


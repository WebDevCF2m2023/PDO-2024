<?php
// creation d une instance (object) de la class,pdo
// non valide
try{
    $connection = new PDO("mysql:host=localhost;port=3307; dbname=listepays; charset:utf8mb4;","root");
    //si on a une erreur dans le try, elle est attrapee 
    // par le catch (donc non afficher par defaut dans 
    // l'horrible onglet orange) et mise dans $e(convention
    // de nommage ) qui contient, en cas d erreur seulement,
    // une instance de la class exception
}catch(Exception $e){
    switch($e->getCode()){
        //2002 -> pas de connection au server de DB
        case 2002:
            die ("connection impossible au server de DB, verifiez les attaques");
            break;
            // tentative de connection non valide 
            // mauvais login/pwd
            case 1045:
                // header et erreur 500
                header("HTTP/1.1 500");
                //arreter du scripte
                exit();
            // les autre cas
            default:
    // on peut afficher le code erreur 
    echo "code erreur: ". $e->getcode();
    // on peut arreter le code en affichant le message 
    die("<br>erreur:  ".$e->getMessage());
}
}
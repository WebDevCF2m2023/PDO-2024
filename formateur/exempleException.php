<?php
// on essaye d'exécuter le code
try{
    // création d'une instance (object) de la classe PDO
    // non valide
    $connection = new PDO("mysql:host=localhost;port=3307;dbname=listepays;charset=utf8mb4;", "root","");
// si on a une erreur dans le try, elle est "attrapée"
// par le catch (donc non affichée par défaut dans
// l'onglet orange) et mise dans $e (convention 
// de nommage) qui contient, en cas d'erreur 
//seulement, une instance de la classe Exception   
}catch(Exception $e){
    // on vérifie le code erreur
    switch($e->getCode()){
        // 2002 -> pas de connexion au serveur de DB
        case 2002:
            die("Connexion imposssible au serveur de DB, vérifiez les attaques");
            break;
        // tentative de connexion non valide
        // mauvais login/pwd
        case 1045:
            // header et erreur 500
            header("HTTP/1.1 500");
            // arrêt du script
            exit();
        // les autres cas    
        default:
            // on peut afficher le code erreur
            echo "Code erreur : ".$e->getCode();
            // on peut arrêter le code en affichant le
            // message
            die("<br>Erreur : ".$e->getMessage());
    }

    
}
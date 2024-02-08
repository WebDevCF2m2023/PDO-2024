<?php
// on essaye d'excuter le code

try{

    // creation d'une instance (objet) de la classe PDO
    //non valide
$connection = new PDO("mysql:host=localhost;port=3307;dbname=listepays;charset=utf8mb4;","root", " ");
// si on a une erreur dans le try, elle est "attrapée"
// par le catch (donc non affichée par defaukt dans 
// l'onglet orange) et mise dans $e(convention de 
// nommage) qui contienent, en cas d'erreur 
// seulement, une istance de la classe Exception 
}catch(Exception $e){
    //onn verifie le code erreur
    switch($e->getCode()){
    // 2002-> pas de conex serveur
       case 2002:
        die("Connexion impossible au serveur de DB, verifiez les attaques");
        break;
    // tentative de connexion non valide
    // mauvais login / pwd    
        case 1045:
           //header et erreur 500
           header("http/1.1 500") ;
           // arret du script
           exit();
    default:     
    // on peut afficher le code erreur
    echo "Code Erreur : ".$e ->getCode();
    //on peut arreter le code en affichant le message
    die("<br>Erreur : ".$e->getMessage());
}
}
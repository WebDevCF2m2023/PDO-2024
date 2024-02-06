<?php 

// Création d'une fonction qui récupère tous les pays dans la db listepays, elle a besoin d'une connexion PDO pour fonctionner, si indique PDO devant le paramètre, on ne peut qu'accepter un objet de type PDO 
function getAllCountries($connectDB){
    return $connectDB;
    
}


$sql = "SELECT * FROM COUNTRIES"; // REQUETE NON EXECUTE
$query = $connectDB->query ($sql);// execution de la requete de type select avec query() 
$datas= $query->fetchAll();
$query->closeCursor();
//envois le tableau dans le datas
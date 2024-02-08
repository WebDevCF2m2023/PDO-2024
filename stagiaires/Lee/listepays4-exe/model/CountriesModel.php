<?php

// création d'une fonction qui récupère tous les pays dans la db listepays, elle a besoin d'une connexion PDO pour fonctionner, si indique PDO devant le paramètre, on ne peut qu'accepter un objet de type PDO.
// Cette fonction va nous renvoyer un array
function getAllCountries(PDO $connectDB): array
{
    $sql = "SELECT * FROM countries"; // requête non exécutée
    $query = $connectDB->query($sql); // exécution de la requête de type SELECT avec query()
    $datas = $query->fetchAll();
    // bonne pratique (autres DB que MySQL ou MariaDB)
    $query->closeCursor();
    // envoie du tableau indexé contenant les pays
    return $datas;
}

// nous retourne le nombre de pays
function getNumberCountries(PDO $connect): int
{
  /*  $sqlCount = "SELECT id FROM countries";
    $queryID = $connect->query($sqlCount);
    $numCountries =  count($queryID->fetchAll());
    $queryID->closeCursor();
    return $numCountries; 
   */

 // tidier version of above  
   /* $query = $connect->query("SELECT COUNT('id') AS nb FROM countries");
    $result = $query->fetch();
    return $result['nb'];
    */

// One line version of above
    return $connect->query("SELECT COUNT('id') AS nb FROM countries")->fetch()['nb'];
    
}

// nous affiche les pays par rapport à la page
function getCountriesByPage(PDO $dbConnect, 
                            int $currentPage=1, 
                            int $nbByPage=20): array
 {         
    $offset = ($currentPage-1)*$nbByPage;                  
    $sql = "SELECT nom FROM countries LIMIT $offset, $nbByPage";
    $query = $dbConnect->query($sql);
    return $query->fetchAll();
}







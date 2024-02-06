<?php

/* création d'une fonction qui récupère tous les pays dans la DB listepays,
   elle a besoin d'une connexion PDO pour fonctionner,
   si indique PDO devant le paramètres, on ne peut qu'accepter un objet de type PDO */
function getAllCountries(PDO $connectDB): array 

{
    $sql = "SELECT * FROM countries"; // requête non exécutée
    $query = $connectDB->query($sql); // exécution de lla requête de type SELECT avec query ()

    return $query->fetchAll();
    // bonne pratique (autres DB que MySQL ou MariaDB)
    $query->closeCursor();
    // envoie du tableau indexé contenant les pays 
    return $datas; 
}

function get NumberCountries(PDO $connect): int 

{
    return 1;
}

// nous affiche les pays par rapport à la page
function getCountriesByPage(PDO $dbConnect,
                                int $currentPage=1, 
                                int $nbByPage=20): array

{
    return [];
}
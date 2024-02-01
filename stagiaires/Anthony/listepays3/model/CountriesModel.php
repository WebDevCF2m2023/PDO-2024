<?php
/*Création d'une fonction qui récupére tout les pays dans la db listepays, elle a besoin 
d'une connexion PDO pour fonctionner, si on indique PDO devant le paramètre, on ne peut
qu'accepter un objet de type PDO*/
function getAllCountries(PDO $connectDB): array
{
    $sql = "SELECT * FROM countries";       //requête non-executé
    $query = $connectDB->query($sql);
    $data =  $query->fetchAll();
    $query->closeCursor();
    return $data;
}
//Retourne le nombre de pays
function getNumberCountries(PDO $connect): int
{
    return 1;
}


//nous affiche les pays par rapport à la page 

function getCountriesByPage(PDO $dbConnect, int $currentPage=1, int $nbByPage=20): array 
{
    return[];
}
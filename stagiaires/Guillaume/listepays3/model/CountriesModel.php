<?php 
// création d'une fonction qui récupère tout les pays dans la db listepays, 
// elle a besoin d'une connexion PDO pour fonctionner, si on indique PDO devant le paramètre,
// On ne peut qu'accepter un objet de type PDO.
function getAllCountries(PDO $connectDB){
    $sql = "SELECT * FROM countries";
    $query = $connectDB->query($sql);
    $datas = ;
}

getAllCountries()

function getNumberCountries(PDO $connect): int 
{
    return 1;
}

// nous affiche les pays par rapport à la page 
function getCountriesByPage(PDO $dbConnect, int $currentPage=1, int $nbBypage=20):array{
    return[]; 
}
<?php


function getAllCountries(PDO $connectDB): array
{
    $sql = "SELECT * FROM countries"; // requête non exécutée
    $query = $connectDB->query($sql); // exécution de la requête de type SELECT avec query()
    $datas = $query->fetchAll();
    $query->closeCursor();
    return $datas;
}

function getNumberCountries(PDO $connect): int

{    $aaa = "SELECT COUNT('id') AS nb FROM countries"; 
     $query = $connect->query($aaa);
     $result = $query->fetch();
     return $result['nb'];

}

function getCountriesByPage(PDO $dbConnect, 
                            int $currentPage=1, 
                            int $nbByPage=20): array
{
    $offset = ($currentPage-1)*$nbByPage;
    $sql = "SELECT nom FROM countries LIMIT $offset, $nbByPage";
    $query = $dbConnect->query($sql);

    return $query->fetchAll();
}

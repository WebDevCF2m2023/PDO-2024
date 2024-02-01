<?php   

function getAllCountries(PDO $connectDB): array
{
    $sql = "SELECT * FROM countries";
    $query = $connectDB->query($sql);
    $datas = $query->fetchAll();
    $query->closeCursor();
    return $datas;
}

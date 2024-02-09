<?php

function getAllCountries(PDO $myPDO): array{
    $sql = "SELECT * FROM countries";
    $query = $myPDO->query($sql);
    $allCountries = $query->fetchAll(PDO::FETCH_ASSOC);

    $query->closeCursor();
    return $allCountries;
    
};


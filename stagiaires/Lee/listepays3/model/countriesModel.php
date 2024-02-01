<?php

function getAllCountries(PDO $connectDB_Nom) : array
{
    $sql = "SELECT * FROM countries";
    $query = $connectDB_Nom->query($sql);
    $datas =  $query->fetchAll();
    $query->closeCursor();
    return $datas;

}

function getNumberCountries(PDO $connectDB_Num) : int
{
    $sql = "SELECT id FROM countries";
    $queryID = $connectDB_Num->query($sql);
    $numCountries =  count($queryID->fetchAll());
    $queryID->closeCursor();
    return $numCountries;

}


<?php

require_once "../config.php";

//Fonction utilisateur de pagnination au format texte
function PaginationModel(string $url,           //url(pour garder les autres variables get)
                        string $getName,        //Le nom de la variable get de pagination
                         int $nbTotalItem,      //nombre total d'item à afficher
                        int $currentPage=1,     // la page actuelle
                          int $nbByPage=10):string|null     //Nombre d'item par page 
{
     //création de la variable de sortie au format texte
     if($nbTotalItem===0) return null;
     $sortie="";
     //on calcule le nombre de page en divisant le total d'item par le nombre de page
     $nbPage = ceil($nbTotalItem/$nbByPage);
     if($nbPage<2) return null;
     return (string) $nbPage;
}

$page = PaginationModel("http://pdo-2024/stagiaires/Anthony/listepays3/model/PaginationModel.php",MY_PAGINATION_GET,171,2,MY_PAGINATION_BY_PAGE );

var_dump($page);
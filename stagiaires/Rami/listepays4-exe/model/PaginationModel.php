<?php

require_once "../config.php"; // constantes

// fonction utilisateur de pagination au format texte
function PaginationModel(string $url, // url (pour garder les autres variables get)
                        string $getName, // le nom de notre variable get de pagination
                        int $nbTotalItem, // le nombre total d'item à afficher
                        int $currentPage=1,  // la page actuelle
                        int $nbByPage=10 // la nombre d'item par page
                        ): string|null 
{
    // pas d'item, pas de pagination
    if($nbTotalItem===0) return null;
    // création de la variable de sortie au format texte
    $sortie="";
    // on calcule le nombre de page en divaisant le nombre
    // total d'item par le nombre d'item par page
    // le tout arrondit à l'entier supérieur ceil
    $nbPage = ceil($nbTotalItem/$nbByPage);

    // si une seule page, pas de pagination
    if($nbPage<2) return null;

    





    return (string) $nbPage;
}

$page = PaginationModel("http://pdo-2024/stagiaires/michael/listepays4-exe/model/PaginationModel.php", MY_PAGINATION_GET, 340,2,MY_PAGINATION_BY_PAGE);

var_dump($page);
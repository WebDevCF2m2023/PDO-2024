<?php
// fonction utilisateur de pagination au format texte
function paginationModel(string $url, // url (pour garder les autres variables get)
                        string $getName, // le nom de notre variable get de pagination
                        int $nbTotalItem, // le nombre total d'item à afficher
                        int $currentPage=1, // la page actuelle
                        int $nbByPage=10 // le nombre d'item par page
                        ): string|null 

{
    //création de la variable de sortie au format texte
    $sortie="";
    /* on calcul le nombre de page en divisant le nombre
     total d'item par le nombre d'item par page le tout 
     arrondit à l'entier supérieur ceil */
    $nbPage = ceil($nbTotalItem/$nbByPage);

    return $nbPage;
}
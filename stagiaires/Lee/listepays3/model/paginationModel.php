<?php
require_once "../config.php";


function PaginationModel(string $URL, string $getName, int $nbTotalItem, int $currentPage=1, int $nbByPage=10): string|null {
    $sortie="";

    $nbPage = ceil($nbTotalItem/$nbByPage);

    return (string) $nbPage;

}

$page = PaginationModel("http://pdo-2024/stagiaires/Lee/listepays3/model/paginationModel.php", MY_PAGINATION_GET, 1340, 2, MY_PAGINATION_BY_PAGE);

var_dump($page);



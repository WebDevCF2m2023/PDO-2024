<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listepays</title>
</head>
<body>
    <h1>Liste de Pays</h1>
    <h2>Liste de tous les pays du monde</h2>
    <h3>Nombre de pays : <?=$countCountries?> </h3>
    <?php 
        require_once "../model/paginationModel.php";

        $i=1;
    do{
      ?>
    <a href ="?pg=<?=$i?>"><?=$i?></a>
    <?php
        $i++;
    }while($i <= $page);
    echo "</br>";

    $begin =($page-1)*$nbByPage;
$end = $begin + $nbByPage;
$i=0;
foreach($allCountries as $pays):
    do{
        ?>

<p><?=$pays['id']."  ".$pays['nom']?></p> 
<?php
$begin++;
}while($begin < $end && $begin < $nbByPage);
endforeach;    

$i=1;
do{
  ?>
<a href ="?pg=<?=$i?>"><?=$i?></a>
<?php
    $i++;
}while($i <= $page);
echo "</br>";

    ?>
</body>
</html>
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
    foreach($allCountries as $pays):       
    ?>
    <p><?=$pays['id'].': '.$pays['nom']?></p> 
    <?php
    endforeach;
    
    ?>
</body>
</html>
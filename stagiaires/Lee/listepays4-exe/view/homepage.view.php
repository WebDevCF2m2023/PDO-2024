<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listepays</title>
</head>
<body>
    <h1>Listepays</h1>
    <h2>Liste de tous les pays du monde</h2>
    <h3>Nombre de pays : <?=$numCountries?>  <a href="./">Accueil</a></h3>

    
    <?php echo $viewPage;
    if(isset($pagination)){
        echo $pagination;
    }
   //var_dump($allCountries)?>
    <h4>Liste des pays</h4>
    <p>
    <?php
 $showCountries = getCountriesByPage($db, $page, MY_PAGINATION_BY_PAGE);
$i=(($page-1)*MY_PAGINATION_BY_PAGE)+1;
 // var_dump(getCountriesByPage($db));      
    foreach($showCountries as $countries):
    ?>
    <p><?= $i." : ".$countries['nom'] ?></p>
    <?php
    $i++;
    endforeach;
    
    ?>
    </p>
</body>
</html>
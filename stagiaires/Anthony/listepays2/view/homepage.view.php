<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listepays</title>
</head>
<body>
    <h1>Liste Pays</h1>
    <h2>Liste de tous les pays du monde</h2>
    <h3>Nombre de pays : <?=$countQuery?></h3>
    <p><pre><code>Utilisation du foreach pour afficher le tableau des pays  :
      
    </code></pre></p>

    <?php //var_dump($allCountries)?>


    <h4>Liste des pays</h4>
    <p>
    <?php
    // while avec fetch liste chaque élément du PDOStatement avec le fetch 
    //alternative au fetchAll et foreach
   foreach($allCountries as $countries):
        ?>
<p><?=$countries["nom"]?></p>

        <?php
        endforeach;
        ?>
        </p>
</body>
</html>
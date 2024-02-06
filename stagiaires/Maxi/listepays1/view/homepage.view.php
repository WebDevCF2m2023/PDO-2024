<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les pays du monde</title>
</head>
<body>
    <h1>Les pays du monde</h1>
    <h3>Nombre de pays dans notre liste: <?=$nbPays?></h3>
    <p>Utilisation de la boucle while avec fetch pour lister tous les pays</p>
    <pre><code>
        while($item = $query ->fetch(PDO::FETCH_ASSOC))
        {
            echo "$item";
        }
    </code></pre>
    <div>
        <?php
        /* Tant qu'on a des pays a lister on peut le faire avec while et 
        nos resultats lignes par ligne avec fetch PDO::FETCH_ASSOC 
        qui converti les lignes en tableau associatif  */

        while($item =$query->fetch(PDO::FETCH_ASSOC)):
        ?>
    <p><?=$item['nom']?></p>
        <?php
        endwhile;
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        code{
            background-color: rgb(34, 42, 42);
            color: white;
            font-size: 1rem;
        }
        #listepays{
            width: 300px;
            margin-top: 1rem;
            margin-left: 1rem;
            border: 1px solid black;
            padding: .2rem;
            box-shadow: 3px 3px 5px black;
            max-height: 500px;
            overflow-y: scroll;
        }
        #listepays h3{
            margin-block: .5rem;
            margin-left: .5rem;
        }
        #listepays p{
            padding-block: .2rem;
            padding-left: .2rem;
            font-weight: bold;
        }
        #listepays p:nth-child(even){
            background-color: rgb(34, 42, 42);
            color: white;
        }
    </style>
</head>
<body>
    <h1>Les pays du monde</h1>
    <h3>Nombre de pays dans notre liste : <?= $nbPays ?></h3>
    <p>Utilisation de la boucle while avec fetch pour lister tout les pays.</p>
    <pre><code>
        while($item = $query->fetch(PDO::FETCH_ASSOC))
        {
            echo $item['nom'];
        }
    </code></pre>
    <div id="listepays">
        <h3>Liste des pays :</h3>
        <?php
            while($item = $query->fetch(PDO::FETCH_ASSOC)):
        ?>
        <p><?=$item['nom']?></p>
        <?php
            endwhile;
        ?>
    </div>
</body>
</html>
<?php
require_once "config.php";
require_once "PDOConnect.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare simple</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Prepare simple</h1>
    <?php include "menu.php"; ?>
    <p>Une requête sans entrées utilisateurs dans un prepare n'a que peu d'interêts, mise à part la gestion du cache qui peut être améliorée</p>
    <code>
        <pre>
             //Requete sans entrée utilisateur 
    $sql = "SELECT * FROM countries";
    //On prépare la requete
    $query = $PDOConnect->prepare($sql);

    //On utilise le try catch sur l'execute

    try {
        //Execution de la requete du prepare
        $query->execute();
        //Recuperation des resultats
        $results = $query->fetchAll();
    } catch (Exception $e) {

        //Affichage de l'erreur
        echo $e->getMessage();
    }
    echo $query->rowCount();
        </pre>
    </code>
    <?php
    //Requete sans entrée utilisateur 
    $sql = "SELECT * FROM countries";
    //On prépare la requete
    $query = $PDOConnect->prepare($sql);

    //On utilise le try catch sur l'execute

    try {
        //Execution de la requete du prepare
        $query->execute();
        //Recuperation des resultats
        $results = $query->fetchAll();
    } catch (Exception $e) {

        //Affichage de l'erreur
        echo $e->getMessage();
    }
    echo $query->rowCount();
    var_dump($results);
    ?>
</body>


</html>
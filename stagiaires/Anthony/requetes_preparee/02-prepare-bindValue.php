<?php
require_once "config.php";
require_once "PDOConnect.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare avec bindValue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Prepare avec bindValue</h1>
    <?php include "menu.php"; ?>
    <p>L'utilisation de bindValue est la plus utilisée dans les requêtes préparées.Elle n'est pourtant pas la meilleure lorsqu'il s'agit d'automatisation</p>
    <h2>Les marqueurs nommé</h2>
    <code>
        <pre>

        </pre>
    </code>
    <?php
    if (isset($_POST['num1'], $_POST['num2'])) {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];
    } else {
        $num1 = 1;
        $num2 = 10;
    }
    //Intégrité de la DB en péril !
    $recup = $PDOConnect->query("SELECT * FROM countries WHERE id BETWEEN $num1 AND $num2");


    //Requete avec entrée utilisateur 
    $sql = "SELECT * FROM countries WHERE id BETWEEN :monid AND :mon2id";
    //On prépare la requete
    $query = $PDOConnect->prepare($sql);

    $query->bindValue("monid", $num1);
    $query->bindValue("mon2id", $num2);

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
    ?>
    <form action="" method="POST">
        Choisissez entre l'id
        <input type="number" name="num1" required>
        et l'id <input type="number" name="num2" required>
        <input type="submit" value="Sélectionner">
    </form>
    <?php

    echo $query->rowCount();
    var_dump($_POST, $results);


    ?>
</body>


</html>
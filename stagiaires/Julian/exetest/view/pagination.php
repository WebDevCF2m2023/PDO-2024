<?php


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- On se situe dans public car on a fusione le fichier avec index.php -->
    <link rel="stylesheet" href="css/style.css">
    <title>Pagination</title>
</head>
<body>
    <h1>Pagination 🤞</h1>
    <?php
    foreach($allCountries as $country){
        echo "<button>$country[nom] </button> </br>";
    }
    ?>

</body>
</html>
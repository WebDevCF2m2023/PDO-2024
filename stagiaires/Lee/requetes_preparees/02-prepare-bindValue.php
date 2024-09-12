<?php

require_once "config.php";
require_once "PDOConnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare Simple</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Prepare avec bindValue</h1>
<?php include "menu.php" ?>
<p>L'utilisation de bindValue est la plus utilisée dans les requêtes préparées.</p>
<h2>Les marqueurs nommés</h2>

<?php
if(isset($_POST["num1"], $_POST["num2"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
}else {
    $num1 = 1;
    $num2 = 10;
}

$sql = "SELECT * FROM countries WHERE id BETWEEN :monid AND :mon2id";
$query = $PDOConnect->prepare($sql);

$query->bindValue(param: "monid", value: $num1, type: PDO::PARAM_INT);
$query->bindValue(param: "mon2id", value: $num2, type: PDO::PARAM_INT);

try{
    $query->execute();

    $results = $query->fetchAll();
}catch(Exception $e){
    echo $e->getMessage();
}
echo $query->rowCount();
?>
<form action="" method="POST" name="first">
    Choissisez entre l'id
    <input type="number" name="num1" required>
    et l'id
    <input type="number2" name="num2" required>
    <button type="submit">Selectionnez</button>
    </form>

    <table>
        <th>Pays</th>
        <th>Capital</th>
        <th>Population</th>
        <tr>
            <?php
            foreach($results as $result) :
                ?>
            <td><?=$result["nom"]?></td>
            <td><?=$result["capitale"]?></td>
            <td><?=$result["population"]?></td>
        </tr>
            <?php endforeach; ?>
    </table>
<?php
// var_dump($_POST);
// var_dump($results);
?>
</body>
</html>

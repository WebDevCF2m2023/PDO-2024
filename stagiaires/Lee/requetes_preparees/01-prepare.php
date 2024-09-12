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
    <h1>Prepare Simple</h1>
<?php include "menu.php" ?>
<p>Une requête sans entrées utilisateurs dans un prepare n'a que peut d'intérêt, mise à part la gestion du cach qui peut être améliorer</p>

<?php

$sql = "SELECT * FROM countries";
$query = $PDOConnect->prepare($sql);


try{
    $query->execute();
    $results = $query->fetchAll();
}catch(Exception $e){
    echo $e->getMessage();
}
var_dump($results);
?>
</body>
</html>

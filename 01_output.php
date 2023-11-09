<?php
$name=('hello php');
// commentary

$affiche=array(1,2,3);

// obtenir le type affiche.
// echo(gettype($affiche));

// rebcoie des valeur
var_dump($affiche);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP course</title>
</head>
<body>
    <h1><?= $affiche[0]?></h1>
</body>
</html>


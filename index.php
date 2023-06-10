<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>MadissonSermeño</title>
</head>
<body>
    <?php 
$variabledeurl = "";

if(isset($_GET["variable"])){
    $variabledeurl = $_GET["variable"];
}
echo "El valor de la variable de la url es" . $_GET["variable"];

$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
$conexion = new PDO('mysql:host=localhost;final_madissonsermeño_0907_23_18114', 'root','', $pdo_options);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<nav class="navegador">
        <a href="index.php"><li>Registrar venta</li></a>
        <a href="consultar.php"><li>Buscar referencia</li></a>
    </nav>

    <h1>Registros</h1>
    <a href="index.php">inicio</a>
    
    
<?php

$conexion = mysqli_connect("localhost", "root", "", "sales");

if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado: ".mysqli_connect_errno();
} else {
    // echo "Conexion realizada correctamente :) <br/><br/>";
};


mysqli_query($conexion, "SET NAMES 'utf8' ");


$query = mysqli_query($conexion, "SELECT * FROM products");

?>
    <div class="container">
<?php
    while($data = mysqli_fetch_assoc($query)) {
        echo '<div class="caja">';
            echo 'Código: ', $data['code'];
            echo '</br>';
            echo 'Prenda: ', $data['name'];
            echo '</br>';
            echo 'Cantidad: ', $data['amount'];
            echo '</br>';
            echo 'Fecha: ', $data['date_create'];
            echo '</br>';
            echo '</div>';
        };
        ?>
    </div>
</body>
</html>

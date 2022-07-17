<?php
$conexion = mysqli_connect("localhost", "root", "", "sales");

if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos MYSQL ha fallado: ".mysqli_connect_errno();
} else {
    // echo "Conexion realizada correctamente :) <br/><br/>";
};

mysqli_query($conexion, "SET NAMES 'utf8' ");

// if (isset($_POST['name']) && isset($_POST['code']) && isset($_POST['amount'])) {
//     echo '<h1>'.$_POST['name'].'</h1>';
//     echo '<h2>'.$_POST['code'].'</h2>';
//     echo '<h2>'.$_POST['amount'].'</h2>';
// };

$name = $_POST["name"];
$code = $_POST["code"];
$amount = $_POST["amount"];

$sql = "INSERT INTO products VALUES (NULL, '$name', $code, current_timestamp, $amount)";
$query = mysqli_query($conexion, $sql);

echo 'Registro de venta exitoso!';
echo '</br>';
echo '<a href="index.php">Volver a registrar.</a>';
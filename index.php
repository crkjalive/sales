<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar venta</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navegador" id="navegador">
        <a href="insertar.php"><li>Registrar venta</li></a>
        <a href="consultar.php"><li>Ventas registradas</li></a>
    </nav>

    <h1>Registrar venta</h1>
    <div class="modulo2">
        <form action="into.php" method="POST">
            <h4>Registro</h4>
            <input type="text" name="name" placeholder="nombre del producto">
            <input type="text" name="code" placeholder="referencia producto">
            <input type="text" name="amount" placeholder="cantidad a registrar">
            <button>Registrar</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navegador">
        <a href="insertar.php"><li>Registrar venta</li></a>
        <a href="consultar.php"><li>Ventas registradas</li></a>
    </nav>
    <div class="modulo1">
        <h1>Sales Pinkylin</h1>
        <form action="registrar.php" method="POST">
            <h4>Registrar Venta</h4>
            <input type="text" placeholder="Referencia del producto">
            <button>Consultar</button>
        </form>
    </div>

</body>
</html> -->
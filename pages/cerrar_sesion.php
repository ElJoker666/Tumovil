<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./img/banco1.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salir</title>
</head>
<body>

    <?php
    require '../db_conexion.php';
    session_start();
    session_destroy();
    $sql="TRUNCATE TABLE carrito";

        $statement=$cnnPDO->prepare($sql);


        $statement->execute();
    header("Location:../index.php");
?>
</body>
</html>
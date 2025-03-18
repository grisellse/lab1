<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor">
        <label for="fecha_lanzamiento">Fecha de lanzamiento</label>
        <input type="date" name="fecha_lanzamiento" >
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial">
        <button type="submit">Registrar</button>




    </form>

    <?php

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $titulo = $_POST['titulo'];
         $autor = $_POST['autor'];
         $fecha_lanza = $_POST['fecha_lanzamiento'];
         $editorial = $_POST['editorial'];

         $insertar= $conexion ->prepare('INSERT INTO tblibros (titulo, autor, fecha_lan, editorial) VALUES (?, ?, ?, ?)');
         $insertar->bind_param('ssss', $titulo, $autor, $fecha_lanza, $editorial);
         $insertar->execute();
         header ('Location: index.php');
     }
    ?>
</body>
</html>
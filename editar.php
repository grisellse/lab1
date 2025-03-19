<?php include 'conexion.php'; 

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado =  $conexion ->query("SELECT * FROM tblibros WHERE id = $id");
    $Elibro = $resultado ->fetch_assoc();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Editar</title>
</head>
<body>
    <div class="form-container">
    <form action="" method= "post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo"
        value="<?php echo $Elibro['titulo']; ?>">

        <label for="autor">Autor</label>
        <input type="text" name="autor" id="autor"
        value="<?php echo $Elibro['autor']; ?>">

        <label for="fecha_lanzamiento">Fecha de lanzamiento</label>
        <input type="date" name="fecha_lanzamiento" id="fecha_lanzamiento"
        value="<?php echo $Elibro['fecha_lan']; ?>">
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" id="editorial"
        value="<?php echo $Elibro['editorial']; ?>">
        <button type="submit">Actualizar</button>


    </form>
    </div>

    <?php

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $titulo = $_POST['titulo'];
         $autor = $_POST['autor'];
         $fecha_lanzamiento = $_POST['fecha_lanzamiento'];
         $editorial = $_POST['editorial'];

         $insertar= $conexion ->prepare("UPDATE tblibros SET titulo = ?, autor = ?, fecha_lan = ?, editorial = ?
          WHERE id = $id");
         $insertar ->bind_param('ssss', $titulo, $autor, $fecha_lanzamiento, $editorial);
         $insertar ->execute();
         header ('Location: index.php');
     }
     ?>
     <?php include("footer.php");?>
     
</body>
</html>
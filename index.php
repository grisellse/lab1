

<?php include("conexion.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inicio</title>
</head>
<body>
    <?php
    include("header.php");
    ?>

</div>
<?php
$listLibros = $conexion ->query( 'SELECT * FROM tblibros');
echo'<table>
                <thead>
                <tr>
                    <th colspan="6" style="text-align: center;">
                        <a id="decBotReg" href="registrar.php">Registrar libro</a>
                    </th>
                </tr>
                    <tr>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Fecha de lanzamiento</th>
                        <th>Editorial</th>
                        <th colspan="2">Opciones</th>
                        
                        
                        
                    </tr>
                </thead>
                <tbody>';
while($libro = $listLibros->fetch_assoc()){
    echo "<tr>

    <td>{$libro['titulo']}</td>
    <td>{$libro['autor']}</td>
    <td>{$libro['fecha_lan']}</td>
    <td>{$libro['editorial']}</td>
    <td> <a id='decBotEli'  href= 'eliminar.php?id={$libro['id']}'>Eliminar</a></td>
    <td> <a id='decBotEdi' href= 'editar.php?id={$libro['id']}'>Editar</a></td>
    </tr>";
}

echo '</tbody>
</table>';
?>

<?php include("footer.php");?>


</body>
</html>
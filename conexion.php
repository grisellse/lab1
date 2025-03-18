<?php
$conexion = mysqli_connect("localhost", "root", "", "biblioteca");
if (mysqli_connect_errno()) {
   die("Error al conectar: ".mysqli_connect_error());
}
else
{
   //echo "Conexión exitosa";
}
?>

<?php include 'conexion.php'; 

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conexion ->query("DELETE FROM tblibros WHERE id = $id");

}
header ('Location: index.php');
?>

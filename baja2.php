<?php
include "conexion.php";


mysqli_select_db($conexion, "productosbd");

$productoBorrar = $_GET['id'];
$borrar ="DELETE FROM productos WHERE id_producto ='$productoBorrar'";
mysqli_query($conexion,$borrar);
header("Location: baja_ok.php");


?>

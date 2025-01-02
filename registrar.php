<?php 
include "conexion.php";
?>
<?php 


mysqli_select_db($conexion,"productosbd");

//var_dump($_POST);
 $identificador = $_POST['identificador'];
 $nombre = $_POST['nombre'];
 $descripcion = $_POST['descripcion'];
 $precio = $_POST['precio'];
 //El array asociativo de la imagen se encuentra en $_FILES
 //Es distinto ya que el siguiente array muestra solo informacion de la imagen
    $directorioSubida ="imagenes/";
    $max_files_size="5000000";
    $extensionesValidas = array("jpg","jpeg","png","gif");
    if(isset($_FILES['imagen'])){
        $errores = 0;
        $nombreArchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directorioTemp = $_FILES['imagen']['tmp_name'];
        $tipoArchivo = $_FILES['imagen']['type'];
        //Con array pathinfo obtenemos la extension del archivo
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];

        if(!in_array($extension,$extensionesValidas)){
            echo "Extension no valida";
            $errores=1;
        }
        if($filesize>$max_files_size){
            echo "El archivo es muy grande";
            $errores=1;
        }
        if($errores==0){
            $nombreCompleto = $directorioSubida.$nombreArchivo;
            move_uploaded_file($directorioTemp,$nombreCompleto);
        }
    }
    $insertar ="INSERT productos (id_producto,nombre,descripcion,precio,fotografia) VALUES ($identificador,'$nombre','$descripcion','$precio','$nombreArchivo')";
    mysqli_query($conexion,$insertar);
    header("Location: alta_ok.php"); 
?>
<?php 
include "footer.php";
?>
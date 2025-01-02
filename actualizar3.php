<?php 
include "conexion.php";
?>
<?php 
$idm =$_GET['idmodifica'];
$nombreAntiguo=$_GET['nombreimagen'];
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
    if(($_FILES['imagen']['name'])!=""){
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
    if(($_FILES['imagen']['name'])!=""){
        $insertar ="UPDATE productos SET id_producto='$identificador', nombre='$nombre', descripcion='$descripcion', precio='$precio', fotografia='$nombreArchivo' WHERE id_producto='$idm'";
    }
    else{
        $insertar ="UPDATE productos SET id_producto='$identificador', nombre='$nombre', descripcion='$descripcion', precio='$precio', fotografia='$nombreAntiguo' WHERE id_producto='$idm'";
           
    }
    mysqli_query($conexion,$insertar);
    header("Location: actualizar_ok.php"); 
?>
<?php 
include "footer.php";
?>
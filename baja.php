<?php
include "conexion.php";
include "header.php";
?>
<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Baja de producto
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Productos:
                        </div>
                        <?php
                        mysqli_select_db($conexion, "productosbd");
                        $consultar ="SELECT * FROM productos";
                        $registros = mysqli_query($conexion, $consultar);

                        ?>
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-hover"
                            >
                                <thead>
                                    <tr>
                                        <th scope="col">Identificador</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Borrar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while($registro = mysqli_fetch_row($registros)){
                                    ?>
                                    <tr class="aling-middle">
                                        <td scope="row"><?php echo $registro[0];?></td>
                                        <td><?php echo $registro[1];?></td>
                                        <td><?php echo $registro[2];?></td>
                                        <td><?php echo $registro[3];?></td>
                                        <td><?php echo '<img width="100px" height="100px" src="imagenes/'.$registro[4].'">';?></td>
                                        <td><a href="baja2.php?id=<?php echo $registro[0];?>"><i class="bi-trash px-1" style="font-size: 2rem; color:red;"></i></a></td>
                                    </tr>
                                   
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black;"></i></a>      
            </div>
    </div>
</div>

<?php
include "footer.php";
?>
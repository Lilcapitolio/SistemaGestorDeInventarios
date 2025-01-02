<?php
include "header.php";
?>
<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Alta de producto
                </div>
            </div>
            <div class="row mt-3 justify-content-md-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Ingresar datos
                        </div>
                        <form class="p-4" method="POST" action="registrar.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Identificador</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="identificador"
                                    id="identificador"
                                    autofocus required                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nombre"
                                    id="nombre"
                                        />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Deescripción</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Precio</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="precio"
                                    id="precio"
                                                                    />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Imagen</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="imagen"
                                    id="imagen"
                                    accept="image/*"                />
                            
                                </div>
                                <div class="d-grid">
                                    <input type="submit" class="btn-primary" value="Dar de alta">
                                </div>
                            </form>
                    </div>
                </div>
                <a href="index.php"> <i class="bi-arrow-return-left px-3" style="font-size: 4rem; color:black;"></i></a>      
            </div>
    </div>
</div>

<?php
include "footer.php";
?>
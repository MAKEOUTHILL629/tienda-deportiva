<?php
include 'presentacion/menu.php';
if (isset($_POST["crear"])) {
    $producto = new Producto("", $_POST["nombre"], $_POST["precio"], $_POST["talla"], $_POST["cantidad"], $_POST["categoria"]);
    $producto->crear();
}

?>

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-0 col-md-3"></div>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <h5 class="card-header">Crear Producto Deportivo</h5>
                <div class="card-body">
                    <?php if (isset($_POST["crear"])) { ?>
                        <div class="alert alert-success alert-dismissible fade show"
                             role="alert">
                            Datos ingresados correctamente.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <form action="index.php?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php") ?>"
                          method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" name="cantidad" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Talla</label>
                            <input type="text" class="form-control" name="talla" required="required">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoria</label>
                            <select class="form-select" name="categoria">
                                <?php
                                $categoria = new Categoria();
                                $categorias = $categoria->consultarTodos();
                                foreach ($categorias as $categoriaActual) {
                                    echo "<option value='" . $categoriaActual->getId() . "'>" . $categoriaActual->getNombre() . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="crear" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'presentacion/menu.php';
if (isset($_POST["crear"])) {
    if(isset($_GET["cp"])){
        $cantidad = $_GET["cp"];
        for($j =0; $j< $cantidad; $j++){
            $producto = new Producto("", $_POST["nombre". $j .""], $_POST["precio". $j .""], isset($_POST["talla". $j .""]) ? $_POST["talla". $j .""] : "", $_POST["cantidad". $j .""], $_POST["categoria". $j .""]);
            $producto->crear();
        }
    }
}


$cantidadResgistros = 1;
if (isset($_GET["c"])) {
    $cantidadResgistros = $_GET["c"];
}

?>

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-0 col-md-3"></div>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="row m-2">
                    <label class="col-4">Cantidad Registros</label>
                    <select  class="col-6 form-select" id="registros">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                        }
                        ?>
                    </select>
                </div>


                <?php if (isset($_POST["crear"])) { ?>
                    <div class="alert alert-success alert-dismissible fade show"
                         role="alert">
                        Datos ingresados correctamente.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                <?php } ?>
                <form action="index.php?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php") ?>&cp=<?php echo $cantidadResgistros ?>" method="post">
                <?php
                    for($i =0 ; $i< $cantidadResgistros; $i++){
                        ?>
                        <h5 class="card-header">Crear Producto <?php echo $i + 1 ?></h5>
                        <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre<?php echo $i ?>" required="required">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input type="number" class="form-control" name="precio<?php echo $i ?>" required="required">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad<?php echo $i ?>" required="required">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Talla</label>
                                    <input type="text" class="form-control" name="talla<?php echo $i ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select class="form-select" name="categoria<?php echo $i ?>">
                                        <?php
                                        $categoria = new Categoria();
                                        $categorias = $categoria->consultarTodos();
                                        foreach ($categorias as $categoriaActual) {
                                            echo "<option value='" . $categoriaActual->getId() . "'>" . $categoriaActual->getNombre() . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>


                        </div>

                        <?php
                    }

                ?>
                    <div class="d-grid">
                        <button type="submit" name="crear" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

    let cantidadRegistros = document.getElementById('registros');

    cantidadRegistros.addEventListener('change',
        function(){
            var selectedOption = this.options[cantidadRegistros.selectedIndex];
            let url = "index.php?pid=<?php echo base64_encode("presentacion/producto/crearProducto.php")?>&c=" + selectedOption.value;
            window.location.href = url;
        });

</script>
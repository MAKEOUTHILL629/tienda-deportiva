<?php
require_once 'persistencia/Conexion.php';
require_once 'persistencia/ProductoDAO.php';

class Producto
{
    private $id;
    private $nombre;
    private $precio;
    private $talla;
    private $cantidad;
    private $categoria;
    private $conexion;
    private $productoDAO;

    /**
     * Producto constructor.
     * @param $id
     * @param $nombre
     * @param $precio
     * @param $talla
     * @param $cantidad
     * @param $categoria
     * @param $conexion
     * @param $productoDAO
     */
    public function __construct($id = "", $nombre = "", $precio = "", $talla = "", $cantidad = "", $categoria = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->talla = $talla;
        $this->cantidad = $cantidad;
        $this->categoria = $categoria;
        $this->conexion = new Conexion();
        $this->productoDAO = new ProductoDAO($id, $nombre, $talla, $precio, $cantidad, $categoria);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @return mixed
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function crear()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->crear());
        $this->conexion->cerrar();
    }


    public function consultarTodos($atributo, $direccion, $filas, $pag)
    {
        $this->conexion->abrir();
        echo $this->productoDAO->consultarTodos($atributo, $direccion, $filas, $pag);
        $this->conexion->ejecutar($this->productoDAO->consultarTodos($atributo, $direccion, $filas, $pag));
        $productos = array();
        while (($resultado = $this->conexion->extraer()) != null) {

            $categoria = new Categoria($resultado[5]);
            $categoria->consultar();
            array_push($productos, new Producto($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $categoria));
        }
        $this->conexion->cerrar();
        return $productos;
    }

    public function consultarTotalFilas()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->consultarTotalFilas());
        return $this->conexion->extraer()[0];
    }
}
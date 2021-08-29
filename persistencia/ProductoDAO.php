<?php

class ProductoDAO
{
    private $id;
    private $nombre;
    private $talla;
    private $precio;
    private $cantidad;
    private $categoria;

    /**
     * ProductoDAO constructor.
     * @param $id
     * @param $nombre
     * @param $talla
     * @param $precio
     * @param $cantidad
     * @param $categoria
     */
    public function __construct($id = "", $nombre = "", $talla = "", $precio = "", $cantidad = "", $categoria = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->talla = $talla;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->categoria = $categoria;
    }

    public function crear()
    {
        return "INSERT INTO producto (nombre, talla, cantidad, precio, id_categoria) VALUES ('" . $this->nombre . "','" . $this->talla . "','" . $this->cantidad . "','" . $this->precio . "','" . $this->categoria . "')";
    }

    public function consultarTodos($atributo, $direccion, $filas, $pag){
        return "select id, nombre, precio, cantidad, talla, id_categoria
                from producto " .
            (($atributo != "" && $direccion != "")?"order by " . $atributo . " " . $direccion:"") .
            " limit " . (($pag-1)*$filas) . ", " . $filas;
    }

    public function consultarTotalFilas(){
        return "select count(1) 
                from producto";
    }
}
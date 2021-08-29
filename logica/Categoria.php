<?php
require_once 'persistencia/Conexion.php';
require_once 'persistencia/CategoriaDAO.php';

class Categoria
{
    private $id;
    private $nombre;
    private $conexion;
    private $categoriaDAO;

    /**
     * Categoria constructor.
     * @param $id
     * @param $nombre
     */
    public function __construct($id="", $nombre="")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->conexion = new Conexion();
        $this->categoriaDAO = new CategoriaDAO($id, $nombre);
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

    public function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> categoriaDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> nombre = $resultado[0];
        $this -> conexion -> cerrar();
    }

    public function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> categoriaDAO -> consultarTodos());
        $categorias = array();
        while(($resultado = $this -> conexion -> extraer()) != null){
            array_push($categorias, new Categoria($resultado[0], $resultado[1]));
        }
        $this -> conexion -> cerrar();
        return $categorias;
    }
}
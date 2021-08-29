<?php


class CategoriaDAO
{
    private $id;
    private $nombre;

    /**
     * CategoriaDAO constructor.
     * @param $id
     * @param $nombre
     */
    public function __construct($id = "", $nombre = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function consultar()
    {
        return "select nombre
                from categoria
                where id = " . $this->id;
    }

    public function consultarTodos()
    {
        return "select id, nombre
                from categoria
                order by nombre asc";
    }

}
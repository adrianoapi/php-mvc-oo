<?php

class CategoriaModel extends CategoriaService implements ICategoria
{

    private $service;
    private $id;
    private $categoria_id;
    private $nome;

    public function __construct()
    {
        $this->db = new Conn();
        $this->service = new CategoriaService($this->db, $this);
    }

    function getId()
    {
        return $this->id;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function setCategoriaId($id)
    {
        $this->categoria_id = $id;
        return $this;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCategoriaList()
    {
        return $this->service->selectCategorias();
    }

}

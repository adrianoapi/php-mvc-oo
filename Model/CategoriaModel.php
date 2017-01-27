<?php

class CategoriaModel extends CategoriaService implements ICategoria
{

    private $id;
    private $id_pai;
    private $nome;

    public function __construct()
    {
        $this->db = new Conn();
        $this->service = new ClienteService($this->db, $this);
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

    public function getIdPai()
    {
        return $this->id_pai;
    }

    public function setIdPai($id)
    {
        $this->id_pai = $id;
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

}

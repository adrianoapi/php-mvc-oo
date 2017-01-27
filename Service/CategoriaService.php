<?php

class CategoriaService
{

    private $db;
    private $categoria;

    public function __construct(IConn $conn, ICategoria $categoria)
    {
        $this->db = $conn->connect();
        $this->categoria = $categoria;
    }

    public function selectCategoria()
    {
        $query = "select * from `categorias` where `id`=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->categoria->getId());
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectCategorias()
    {
        $query = "select * from `categorias`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}

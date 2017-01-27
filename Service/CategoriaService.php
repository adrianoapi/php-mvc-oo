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
    
    

}

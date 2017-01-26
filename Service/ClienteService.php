<?php

class ClienteService
{

    private $db;
    private $cliente;

    public function __construct(IConn $conn, ICliente $cliente)
    {
        $this->db = $conn->connect();
        $this->cliente = $cliente;
    }

    public function selectCliente()
    {
        $query = "select * from `clientes` where `id`=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->cliente->getId());
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function selectClientes()
    {
        $query = "select * from `clientes`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}

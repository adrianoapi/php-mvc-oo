<?php

require_once 'Model/Cliente.php';

class Model
{

    public function getClienteList()
    {
        return array(
            "1" => new Cliente("Adriano A Costa", "sdcomputadores@gmail.com", "#__098ii"),
            "2" => new Cliente("João Alves Silva", "jsilva@hotmail.com", "jsilva"),
            "3" => new Cliente("Katia Kasuko", "k_kasuko@yahoo.com", "kaska")
        );
    }

    public function getCliente($id)
    {
        $clientes = $this->getClienteList();
        return $clientes[$id];
    }

}

<?php

require_once 'Model/Cliente.php';

class Model
{

    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function getClienteList()
    {

        $this->cliente->setNome("Adriano A Costa");
        $this->cliente->setEmail("sdcomputadores@gmail.com");
        $this->cliente->setSenha("#__098ii");
        $arr1 = array("nome" => $this->cliente->getNome(), "email" => $this->cliente->getEmail(), "senha" => $this->cliente->getSenha());

        $this->cliente->setNome("João Alves Silva");
        $this->cliente->setEmail("jsilva@hotmail.com");
        $this->cliente->setSenha("jsilva");
        $arr2 = array("nome" => $this->cliente->getNome(), "email" => $this->cliente->getEmail(), "senha" => $this->cliente->getSenha());

        $this->cliente->setNome("Katia Kasuko");
        $this->cliente->setEmail("k_kasuko@yahoo.com");
        $this->cliente->setSenha("kaska");
        $arr3 = array("nome" => $this->cliente->getNome(), "email" => $this->cliente->getEmail(), "senha" => $this->cliente->getSenha());

        return array(
            '1' => $arr1,
            '2' => $arr2,
            '3' => $arr3,
        );
    }

    public function getCliente($id)
    {
        $clientes = $this->getClienteList();
        return $clientes[$id];
    }

}

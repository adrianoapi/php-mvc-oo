<?php

class ClienteModel extends ClienteService implements ICliente
{

    private $service;
    private $nome;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->service = new ClienteService($this);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function getClienteList()
    {

        $this->setNome("Adriano A Costa");
        $this->setEmail("sdcomputadores@gmail.com");
        $this->setSenha("#__098ii");
        $arr1 = $this->service->selectCliente();

        $this->setNome("João Alves Silva");
        $this->setEmail("jsilva@hotmail.com");
        $this->setSenha("jsilva");
        $arr2 = $this->service->selectCliente();

        $this->setNome("Katia Kasuko");
        $this->setEmail("k_kasuko@yahoo.com");
        $this->setSenha("kaska");
        $arr3 = $this->service->selectCliente();

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

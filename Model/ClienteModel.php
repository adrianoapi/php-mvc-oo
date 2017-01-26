<?php

class ClienteModel extends ClienteService implements ICliente
{

    private $db;
    private $service;
    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct()
    {
        $this->db = new Conn();
        $this->service = new ClienteService($this->db, $this);
    }

    public function getId()
    {
        return (int) $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
        return $this->service->selectClientes();
    }

    public function getCliente($id)
    {
        $this->setId($id);
        return $this->service->selectCliente();
    }

}

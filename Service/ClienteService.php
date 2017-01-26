<?php

class ClienteService
{

    private $db;
    private $cliente;

    public function __construct(ICliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function selectCliente()
    {
        return array(
            "nome" => $this->cliente->getNome(),
            "email" => $this->cliente->getEmail(),
            "senha" => $this->cliente->getSenha()
        );
    }

}

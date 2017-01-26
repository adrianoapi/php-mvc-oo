<?php

require_once 'Model/Model.php';

class ClienteController
{

    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index($parametros)
    {
        $clientes = $this->model->getClienteList();
        include 'View/cliente-listagem.php';
    }

    public function visualizar($x)
    {
        $cliente = $this->model->getCliente($x[0]);
        include 'View/cliente.php';
    }

}

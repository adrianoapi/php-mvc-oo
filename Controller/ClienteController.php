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

    public function visualizar($array)
    {
        $id = $array[0];
        if (!is_numeric($id))
            die("erro");
        $cliente = $this->model->getCliente($id);
        include 'View/cliente.php';
    }

}

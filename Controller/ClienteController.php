<?php

class ClienteController
{

    private $model;

    public function __construct()
    {
        $this->model = new ClienteModel();
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
            die("Erro: O parâmetro informado é inválido!");
        $cliente = $this->model->getCliente($id);
        include 'View/cliente.php';
    }

}

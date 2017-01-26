<?php

require_once 'Model/Model.php';

class HomeController
{

    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if (!isset($_GET['cliente'])) {
            $clientes = $this->model->getClienteList();
            include 'View/cliente-listagem.php';
        } else {
            $cliente = $this->model->getCliente($_GET['cliente']);
            include 'View/cliente.php';
        }
    }

    public function index()
    {
        $this->invoke();
    }

}

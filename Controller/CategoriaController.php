<?php

class CategoriaController
{

    private $model;
    private $library;

    public function __construct()
    {
        $this->model = new CategoriaModel();
        $this->library = new Library();
    }

    public function index($x)
    {
        echo "categoria index";
        echo "<hr>";
        if (count($x) > 0) {
            echo "<pre>";
//            print_r($x);
        } else {
            echo "Listagem de tudo<br>";
            echo "<pre>";
            $rst = $this->model->getCategoriaList();
            print_r($this->library->getEstruturaMenuLoja($rst));
        }
    }

}

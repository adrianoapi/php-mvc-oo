<?php

class ProdutoController {

    private $model;
    private $library;

    public function __construct() {
        $this->model = new ProdutoModel();
        $this->library = new Library();
    }

    public function index() {
        echo "index ProdutoController";
    }

}

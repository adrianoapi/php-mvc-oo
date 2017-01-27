<?php

class CategoriaController
{

    public function __construct()
    {
        
    }

    public function index($x)
    {
        echo "categoria index";
        echo "<hr>";
        if (count($x) > 0) {
            echo "<pre>";
            print_r($x);
        } else {
            echo "Listagem de tudo";
        }
    }

}

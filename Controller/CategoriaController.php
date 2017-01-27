<?php

class CategoriaController
{

    public function __construct()
    {
        
    }

    public function index($x)
    {
        echo "categoria index";
        print_r($x);
        echo "<hr>";
        if (isset($x) > 0) {
            print_r($x);
        } else {
            echo "Exibe tudo";
        }
    }

}

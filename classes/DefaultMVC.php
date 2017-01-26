<?php

/**
 * Gerencia Models, Controllers e Views
 */
class DefaultMVC
{

    private $controlador;
    private $acao;
    private $parametros;
    private $not_found = '/includes/404.php';

    public function __construct()
    {

        $this->get_url_data();

        if (!$this->controlador) {

            require_once ABSPATH . '/Controller/HomeController.php';
            $this->controlador = new HomeController();
            $this->controlador->index();
            return;
        }

        // Se o arquivo do controlador não existir, não faremos nada
        if (!file_exists(ABSPATH . '/Controller/' . $this->controlador . '.php')) {
            // Página não encontrada
            require_once ABSPATH . $this->not_found;

            // FIM :)
            return;
        }

        require_once ABSPATH . '/Controller/' . $this->controlador . '.php';
        $this->controlador = preg_replace('/[^a-zA-Z]/i', '', $this->controlador);

        if (!class_exists($this->controlador)) {
            require_once ABSPATH . $this->not_found;
            return;
        }
        $this->controlador = new $this->controlador($this->parametros);
        $this->acao = preg_replace('/[^a-zA-Z]/i', '', $this->acao);
        if (method_exists($this->controlador, $this->acao)) {
            $this->controlador->{$this->acao}($this->parametros);
            return;
        }
        if (!$this->acao && method_exists($this->controlador, 'index')) {
            $this->controlador->index($this->parametros);
            return;
        }
        require_once ABSPATH . $this->not_found;
        return;
    }

    public function get_url_data()
    {

        if (isset($_GET['path'])) {
            $path = $_GET['path'];
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);
            $path = explode('/', $path);
            echo "<pre>";
            print_r($path);
            echo "</pre>";
            $this->controlador = chk_array($path, 0);
            $this->controlador .= 'Controller';
            $this->acao = chk_array($path, 1);
            if (chk_array($path, 2)) {
                unset($path[0]);
                unset($path[1]);
                $this->parametros = array_values($path);
            }
        }
    }

}

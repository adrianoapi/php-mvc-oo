<?php

class Library
{

    public function helper()
    {
        echo "<br/>eu sou o helper<br/>";
    }

    function getEstruturaMenuLoja($array)
    {
        $html = array();
        foreach ($array as $key => $value) {
            if ($value['id'] == $value['categoria_id']) {

                unset($array[$key]);
                $novo_array = array($this->getEstruturaMenuLojaSub($value['id'], $array));
                $html[$value['id']] = array(
                    "id" => $value['id'],
                    "categoria_id" => $value['categoria_id'],
                    "nome" => $value['nome'],
                    "sub" => $novo_array[0]);
            }
        }
        return $html;
    }

    function getEstruturaMenuLojaSub($id, array $array)
    {
        $html = array();
        foreach ($array as $key => $data):
            if ($id == $data['categoria_id']) {

                array_push($html, array(
                    'id' => $data['id'],
                    'categoria_id' => $data['categoria_id'],
                    'nome' => $data['nome'],
                    'sub' => $this->getEstruturaMenuLojaSub($data['id'], $array)));

                //Remove que já foi encotrado na comparação
                unset($array[$key]);

                $this->getEstruturaMenuLojaSub($data['id'], $array);
            }
        endforeach;
        return $html;
    }

    /**
     * 
     * @param type $value
     * @return string
     */
    public function identarEstruturaMenu($value)
    {
        $indentacao = '|';
        for ($i = 0; $i < $value; $i++) {
            $indentacao .= " - ";
        }
        return $indentacao;
    }

}

<?php

interface ICliente
{

    public function setId($id);

    public function getId();

    public function getNome();

    public function setNome($nome);

    public function getEmail();

    public function setEmail($email);

    public function getSenha();

    public function setSenha($senha);
}

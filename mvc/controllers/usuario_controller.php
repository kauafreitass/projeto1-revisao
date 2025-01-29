<?php
require_once "../models/usuario.php";

class usuario_controller
{
    private $usuario_model;
    public function __construct()
    {
        $this->usuario_model = new Usuario();
    }
    public function CriarUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function listarUsuarios() {
       return $this->usuario_model->listarUsuarios();
    }
}


?>
<?php

class Usuario
{
    public $usuarios = [
        "Teste",
        "Teste2"
    ];
    public function CriarUsuario($usuario)
    {
        array_push($this->usuarios, $usuario);
    }

    public function listarUsuarios()
    {
        for ($i = 0; $i < count($this->usuarios); $i++) {
            $usuario = $this->usuarios[$i];
            echo $usuario . "<br>";
        }
    }
}
?>
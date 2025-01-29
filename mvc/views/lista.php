<?php 
require_once '../controllers/usuario_controller.php';
    $controller = new usuario_controller();

    $controller->listarUsuarios();
?>
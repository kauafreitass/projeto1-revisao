<?php

require_once '../controllers/usuario_controller.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $controller = new usuario_controller();
    $controller->CriarUsuario($_POST['usuario']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" placeholder="Nome de usuário" name="usuario">
        <button type="submit">Cadastrar</button>
    </form>

    <?php
    require_once '../controllers/usuario_controller.php';
    $controller = new usuario_controller();

    $controller->listarUsuarios();
    echo $_POST['usuario'];
    ?>

</body>

</html>
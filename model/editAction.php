<?php
require_once("../config/bd.php");

if (isset($_POST['editar'])) {

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    if (empty($nome) || empty($senha)) {
        echo "<a> Preencha todos os campos </a>";
    } else {
        $result = mysqli_query($conn, "UPDATE usuario SET nome_usuario = '$nome', senha_usuario = '$senha' WHERE ID_usuario = $id");

        $editado = true;
        header("Location: list.php");
    }

}

?>
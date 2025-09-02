<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h1> Home </h1>
    <form method="POST" action="">
        <button type="submit" name="login">Login</button>
        <button type="submit" name="cadastrar">Cadastrar</button>
        <button type="submit" name="listar">Listar</button>
        <button type="submit" name="editar">Editar</button>
        <button type="submit" name="deletar">Deletar</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        header("Location: ../model/login.php");
    }
    if(isset($_POST['cadastrar'])){
        header("Location: ../model/register.php");
    }
    if(isset($_POST['listar'])){
        header("Location: ../model/list.php");
    }
    if(isset($_POST['editar'])){
        header("Location: ../model/edit.php");
    }
    if(isset($_POST['deletar'])){
        header("Location: ../model/delete.php");
    }
?>
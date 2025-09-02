<?php
    require "../config/bd.php";
    session_start(); 

    $erro = "";
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["login"])) { //verifica se o botão foi clicado
            $email = trim($_POST["nome"] ?? ""); //evita espaços vazios
            $senha = trim($_POST["senha"] ?? "");

           $stmt = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ? AND senha_usuario = ? ");
           $stmt -> bind_param("ss", $email, $senha);
           $stmt -> execute();
           $resultado = $stmt->get_result();

           if  ($resultado->num_rows === 1) {
                $dados = $resultado->fetch_assoc();

                $_SESSION['nome'] = $dados['nome_usuario'];
                $_SESSION['id'] = $dados['id_usuario'];

                header("location: list.php");
                exit;
            } else {
                $erro = "Usuário ou senha inválidos";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body> 
    <img class="home" src="../assets/home.png" alt="home" width="30px" height="30px" href="../public/index.php" onclick="window.location.href='../public/index.php'">  
    
    <h1 class="title" > LOGIN </h1>
    <form method="POST" action="">
        <label> Nome: </label>
        <input type="text" name="nome" required> <br>

        <label> Senha: </label>
        <input type="password" name="senha" required> <br>

        <button type="submit" name="login">Entrar</button>
        <?php
            if($erro) {
                echo "<div> $erro </div>";
            }
        ?>
    </form>
</body>
</html>
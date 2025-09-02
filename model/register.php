<?php
    require "../config/bd.php";
    session_start(); 

    $erro = "";
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["cadastrar"])) { //verifica se o botão foi clicado
            $nome = trim($_POST["nome"] ?? ""); //evita espaços vazios
            $senha = trim($_POST["senha"] ?? "");

            // Verifica se o nome de usuário já existe
            $stmt = $conn->prepare("SELECT * FROM usuario WHERE nome_usuario = ?");
            $stmt->bind_param("s", $nome);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado->num_rows > 0) {
                $erro = "Nome de usuário já existe";
            } else {
                // Insere o novo usuário no banco de dados
                $stmt = $conn->prepare("INSERT INTO usuario (nome_usuario, senha_usuario) VALUES (?, ?)");
                $stmt->bind_param("ss", $nome, $senha);
                
                if ($stmt->execute()) {
                    $mensagem = "Registro bem-sucedido! Você pode voltar para a página inicial e fazer login agora.";
                } else {
                    $erro = "Erro ao registrar. Tente novamente.";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body> 
    <img class="home" src="../assets/home.png" alt="home" width="30px" height="30px" href="../public/index.php" onclick="window.location.href='../public/index.php'"> 
     
    <h1 class="title" > Registro </h1>
    <form method="POST" action="">
        <label> Nome: </label>
        <input type="text" name="nome" required> <br>

        <label> Senha: </label>
        <input type="password" name="senha" required> <br>

        <button type="submit" name="cadastrar">Registrar</button>
        <?php
            if($erro) {
                echo "<div class='erro'> $erro </div>";
            }
            if(isset($mensagem)) {
                echo "<div class='sucesso'> $mensagem </div>";
            }
            ?>
    </form>
</body>
</html>
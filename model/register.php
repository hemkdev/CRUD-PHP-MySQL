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

        <button type="submit" name="login">Registrar</button>
    </form>
</body>
</html>
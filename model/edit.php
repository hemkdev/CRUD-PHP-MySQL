<?php
require_once("../config/bd.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM usuario WHERE ID_usuario = $id");

$resultData = mysqli_fetch_assoc($result);

$nome = $resultData['nome_usuario'];
$senha = $resultData['senha_usuario'];


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body> 
    <img class="home" src="../assets/home.png" alt="home" width="30px" height="30px" href="../public/index.php" onclick="window.location.href='../public/index.php'"> 
     
    <h1 class="title" > Edit </h1>
     
    <table>
        <tr>
            <th>Nome</th>
            <th>Senha</th>
        </tr>

        <?php 
            echo '<tr>';
                echo '<td>' . $nome . '</td>';
                echo '<td>' . $senha . '</td>';
                echo '</tr>';
        ?>                       
    </table>

    <form name="edit" method="post" action="editAction.php">
		<table>
			<tr> 
				<td>Nome</td>
				<td><input type="text" name="nome" value="<?php echo $nome; ?>"></td>
			</tr>
			<tr> 
				<td>senha</td>
				<td><input type="text" name="senha" value="<?php echo $senha; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="editar" value="editar"></td>
			</tr>
		</table>
	</form>
    
</body>
</html>
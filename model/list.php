<?php 
include_once('../config/bd.php'); // Importa a classe de conexão

$sql = "SELECT ID_usuario, nome_usuario FROM usuario"; // Consulta SQL para selecionar tudo da tabela my_test
$result = $conn->query($sql); // Executa a consulta
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> List </title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body> 
    <img class="home" src="../assets/home.png" alt="home" width="30px" height="30px" href="../public/index.php" onclick="window.location.href='../public/index.php'"> 

    <h1 class="title" > List </h1>

    <table>
        <tr>
            <th>Usuário</th>
            <th>Nome</th>
        </tr>

        <?php 
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['ID_usuario'] . '</td>'; // Exibe o ID
                echo '<td>' . $row['nome_usuario'] . '</td>'; // Exibe o Nome
                echo '</tr>'; // Fecha a linha da tabela   
            }
        } else {
            echo '<tr><td colspan="3">Nenhum resultado encontrado</td></tr>'; // Mensagem se não houver resultados
        }
        ?>                       
    </table>

</body>
</html>
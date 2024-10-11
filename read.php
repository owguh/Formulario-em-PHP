<?php
    session_start();
    include_once('crud.php');

    $sql = ("SELECT * FROM formulario");
    $result = $conexao ->query($sql);
    
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <div>
            <h1>Lista de Usuários</h1>
        </div>
        <table class="table">
            <tr>
                <th scope= "col">#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$user_data['id']}</td>
                    <td>{$user_data['nome']}</td>
                    <td>{$user_data['email']}</td>
                    <td>
                        <a href='update.php?id={$user_data['id']}'>Editar</a> |
                        <a href='delete.php?id={$user_data['id']}'>Excluir</a>
                    </td>
                  </tr>";
                }
                ?>
        </table>
    </div> 
</body>
</html>
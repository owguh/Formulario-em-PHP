<?php
    if(isset($_POST['submit'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        include_once('crud.php');
        
       $result = mysqli_query($conexao, "INSERT INTO formulario (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>

        <form action="" class="form" method="post">
            <div class="imagem">
               <a href="">
                <img src="imagens/logo-uni.png" alt="Logo Unimontes"></a> 
            </div>
            <div class="form-content">
                <label for="nome">Nome do usuário</label>
                <input type="text" name="nome" id="nome"
                placeholder="Nome completo" required>
            </div>

            <div class="form-content">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required
                placeholder="Email">
            </div>

            <div class="form-content">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required
                minlength="8" maxlength="12" autocomplete="current-password" placeholder="Senha">
            </div>

            <div class="form-content">
                <button  type="submit" name="submit" value="Cadastrar">Cadastrar</button>
                <a href="read.php"> <button type="button" > Listar
                </button></a>
            </div>

        </form>
        
    </div>
    
</body>
</html>
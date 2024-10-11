deletado<?php
    include_once('crud.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Executar a exclusão no banco de dados
        $sqlDelete = "DELETE FROM formulario WHERE id = '$id'";

        if(mysqli_query($conexao, $sqlDelete)){
            echo "Registro excluído com sucesso!";
        } else {
            echo "Erro ao excluir o registro: " . mysqli_error($conexao);
        }

        // Redirecionar de volta para a página de listagem após a exclusão
        header("Location: read.php");
        exit();
    }
?>

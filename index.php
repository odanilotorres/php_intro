<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <h3>Formulário de Inscrição de Competidores</h3>
    <form action="script.php" method="post">
        <?php
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso)){
                echo $mensagemDeSucesso;
            }
            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($mensagemDeErro)){
                echo $mensagemDeErro;
            }
        ?>
        <p>Seu Nome: <input type="text" name="nome" ></p>
        <p>Sua Idade: <input type="text" name="idade" ></p>
        <p><input type="submit" value="Enviar Dados do Competidor"></p>
        
    </form>
</body>
</html>
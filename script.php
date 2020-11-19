<?php

    session_start();

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescentes';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];


    
    
    if($idade >= 6  && $idade <= 12)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Infantil'){
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
    else if($idade >= 13 && $idade <= 18)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescentes')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }else
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
    
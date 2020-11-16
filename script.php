<?php
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescentes';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if(empty($nome)){
        echo "O nome não pode ser vazio";
        return;
    }
    if(strlen($nome) < 3){
        echo "O Nome deve conter mais de 3 caractéres";
        return;
    }
    if(strlen($nome) > 40){
        echo "o nome é muito extenço, por favor utilize abreviações";
        return;
    }
    if(!is_numeric($idade) || !is_int($idade)){
        echo "A Idade não é um número válido";
        return;
    }
    
    if($idade >= 6  && $idade <= 12)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Infantil')
                echo "O nadador $nome compete na categoria ".$categorias[$i];
        }
    }
    else if($idade >= 13 && $idade <= 18)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescentes')
                echo "O nadador ".$nome." compete na categoria".$categorias[$i];
        }
    }else{
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            {
                echo "O nadador $nome compete na categoria " .$categorias[$i];
            }
        }
    }
    
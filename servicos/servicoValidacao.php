<?php
declare('strict_type = 1');
function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha.';
        return false;
    }
    else if(strlen($nome) < 3)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome precisa ter mais de 3 caracteres, por favor preencha.';
        return false;
    }
    else if(strlen($nome) > 40)
    {
        $_SESSION['mensagem-de-erro'] = 'O nome é muito longo, por favor use abreviações.';
        return false;
    }return true;
}
function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
        $_SESSION['mensagem-de-erro'] = 'Esse não é um número válido para a idade, digite novamente.';
        return false;
}
return true;

?>
<?php

function gerarSenhaSegura($tamanho = 12, $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=<>?{}[]|') {
    $senha = '';
    $comprimentoCaracteres = strlen($caracteres);

    if ($comprimentoCaracteres <= 0 || $tamanho <= 0) {
        return false;
    }

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[random_int(0, $comprimentoCaracteres - 1)];
    }

    return $senha;
}

$tamanhoSenha = 16; 
$senhaGerada = gerarSenhaSegura($tamanhoSenha);
echo "A senha é: " . $senhaGerada;

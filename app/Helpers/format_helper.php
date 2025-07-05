<?php

function limparTelefone($telefone)
{
    return preg_replace('/[^0-9]/', '', $telefone);
}

function formatarTelefone($numero)
{
    // Garante que s�o apenas os n�meros
    $numero = preg_replace('/[^0-9]/', '', $numero);

    if (strlen($numero) === 11) {
        // Formato celular com 9 d�gitos
        return '(' . substr($numero, 0, 2) . ') ' . substr($numero, 2, 5) . '-' . substr($numero, 7);
    } elseif (strlen($numero) === 10) {
        // Formato fixo com 8 d�gitos
        return '(' . substr($numero, 0, 2) . ') ' . substr($numero, 2, 4) . '-' . substr($numero, 6);
    }

    // Retorna o n�mero como est� se n�o tiver 10 ou 11 d�gitos
    return $numero;
}
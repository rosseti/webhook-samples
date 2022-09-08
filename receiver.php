<?php

/**
 * Exemplo de recebimento de dados de um webhook
 *  Arquivo receiver, responsável pelo recebimento das informações.
 * 
 * @author Andrei Rosseti
 */

function do_input_action() 
{
    $json = file_get_contents('php://input');
    $line = date('Y-m-d H:i:s') . ' ' . $_SERVER['HTTP_HOST'] . 
        ' - Request recebido - ' . $json . PHP_EOL;
    file_put_contents('log.txt', $line, FILE_APPEND);
}

do_input_action();
<?php

/**
 * Exemplo de chamada de webhook
 *  Arquivo sender, responsável pelo envio das informações
 * 
 * @author Andrei Rosseti
 */

function webhook_call() {
    $url = 'https://webhooks.loca.lt/hook';
    $data = file_get_contents("data.json");
    $crl = curl_init($url);
    
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($crl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    
    $result = curl_exec($crl);

    return $result;
}

echo webhook_call();
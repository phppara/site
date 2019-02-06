<?php

$result = array();
$fp = fopen(__DIR__.'/.env', 'r');
while(!feof($fp)){
    $linha = fgets($fp, 4096);
    if (!empty($linha)) {
        $ex = explode("=", $linha);
        $result[$ex["0"]] = trim($ex["1"]);
    }
}
fclose($fp);

$dadosEmail = array(
		"host" => $result['EMAIL_HOST'],
		"username" => $result['EMAIL_USERNAME'],
		"password" => $result['EMAIL_PASSWORD'],
		"email" => $result['EMAIL_USERNAME']
	);

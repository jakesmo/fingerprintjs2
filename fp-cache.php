<?php
$data = "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
$data .= file_get_contents('php://input');
$data .= "---------------------------------\n\n";
file_put_contents('fp-cache.txt', print_r($data, true), FILE_APPEND | LOCK_EX);
?>
<?php

function salvaLog($mensagem) {

    $ip = $_SERVER['REMOTE_ADDR'];
    $hora = date('Y-m-d H:i:s');
    $mensagem = mysql_escape_string($mensagem);

    $sql = "INSERT INTO `logs` VALUES (NULL, '".$hora."', '".$ip."', '".$mensagem."')";

    if (mysql_query($sql)) {
        return true;
    } else {
        return false;
    }
}

$mensagem= "Nova visita no site";
salvaLog($mensagem);

?>
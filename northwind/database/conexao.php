<?php
/*
$nomeServidor = "at22_aluan.mysql.dbaas.com.br";
$userBanco = "at22_aluan";
$senhaBanco = "TIatsenac2022#";
$nomeBanco = "at22_aluan";
*/
$nomeServidor = "localhost";
$userBanco = "root";
$senhaBanco = "";
$nomeBanco = "northwind";

try {
    $conn = mysqli_connect(
        $nomeServidor,
        $userBanco,
        $senhaBanco,
        $nomeBanco
    );
} catch (Exception $e) {
    echo "Erro ao conectar o BD.";
    exit();
}

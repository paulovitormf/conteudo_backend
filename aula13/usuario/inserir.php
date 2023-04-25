<?php

//importa o arquivo de conexão
require_once "../conexao.php";

$SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('Paulo Vitor', 'admin123', '123');";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//executa o comando
$comando->execute();
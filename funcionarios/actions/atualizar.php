<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idfuncionario'];
   $nome = $_POST['nome'];
   $cargo = $_POST['cargo'];
   $salario = $_POST['salario'];
   $departamento = $_POST['departamento'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `funcionario` SET `nome`= ?, `cargo`= ?, `salario`= ?, `departamento`= ? WHERE `idfuncionario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssdsi", $nome, $cargo, $salario, $departamento, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   








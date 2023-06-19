<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_POST['nome']) && isset($_POST['cargo']) && isset($_POST['salario']) && isset($_POST['departamento'])){

      $nome = $_POST['nome'];
      $cargo = $_POST['cargo'];
      $salario = $_POST['salario'];
      $departamento = $_POST['departamento'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `funcionario` (`nome`, `cargo`, `salario`, `departamento`) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssds", $nome, $cargo, $salario, $departamento);

   //executa o comando
   $comando->execute();

   }

   //volta para o formulário
   header("Location: index.php");

   








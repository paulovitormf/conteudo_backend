<?php 
  require "consultar_todos.php"; 
  require_once "../template/cabecalho.php";
?>
    <div class="container">
    <hr>
    <div>
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a><br><br>
  </div>
    <table class="table" id="tabela_dados">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salário</th>
                <th scope="col">Departamento</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($funcionarios as $funcionario): ?>
            <tr>
                <td><?= $funcionario->nome ?></td>
                <td><?= $funcionario->cargo ?></td>
                <td><?= $funcionario->salario ?></td>
                <td><?= $funcionario->departamento ?></td>
                <td class="text-end">
                  <a href="excluir.php?id=<?= $funcionario->idfuncionario ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> 
                  Excluir</a>
                  <a href="formulario.php?id=<?= $funcionario->idfuncionario ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> 
                  Atualizar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
    <?php require_once "../template/rodape.php"; ?>
<?php 
  require "consultar_todos.php"; 
  require_once "../template/cabecalho.php";
  require_once "../template/menu_restrito.php";
?>
    <div class="container">

    <h1>Usuários</h1>
    <hr>
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
  </div>
    <table class="table" id="tabela_dados">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Foto</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario->nome ?></td>
                <td><?= $usuario->login ?></td>
                <td><img src="../uploads/<?= $usuario->foto ?>" height="25px"></td>
                <td class="text-end">
                  <a href="excluir.php?id=<?= $usuario->idusuario ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> 
                  Excluir</a>
                  <a href="formulario.php?id=<?= $usuario->idusuario ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> 
                  Atualizar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    </div>
    <?php require_once "../template/rodape.php"; ?>
<?php
    require_once "../banco/conexao.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>
<div class="container">
    <h1>Cadastro de funcionários</h1>
    <hr>

    <form action="<?=isset($funcionario) ? "atualizar.php" : "inserir.php"; ?>" method="post">
        
        <input type="hidden" name="idfuncionario" value="<?php echo $funcionario->idfuncionario ?? "";?>"><br>

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="nome" value="<?php echo $funcionario->nome ?? "";?>"><br>

        <label class="form-label">Cargo</label><br>
        <input class="form-control" type="text" name="cargo" value="<?php echo $funcionario->cargo ?? "";?>"><br>

        <label class="form-label">Salário</label><br>
        <input class="form-control" type="number" name="salario" value="<?php echo $funcionario->salario ?? "";?>"><br>

        <label class="form-label">Departamento</label><br>
        <input class="form-control" type="text" name="departamento" value="<?php echo $funcionario->departamento ?? "";?>"><br>

        <button type="submit" class="btn btn-success">Inserir</button>
        
    </form>
</div>

<?php require_once "../template/rodape.php"; ?>
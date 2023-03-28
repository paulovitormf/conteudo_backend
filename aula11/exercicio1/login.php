<h1>Request Method : GET // Formulário de Login</h1>

<?php
    
    if ($_GET['usuario'] == "admin" && $_GET['senha'] == '123') {
        echo "Você está logado!";
    } else {
        echo "Usuário ou senha inválidos!";
    }

?>
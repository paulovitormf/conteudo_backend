<h1>Request Method : POST // Formulário de Login</h1>

<?php
//se existe, ou foi enviada, a variável usuário
if (isset($_POST['usuario'])) {
    if ($_POST['usuario'] == "admin" && $_POST['senha'] == 123) {
        echo "Você está logado!";
    } else {
        echo "Usuário ou senha inválidos!";
    }
} else {
    //manda abrir outro arquivo, o formulário de login
    //caso o usuário tente abrir esse arquivo pela URL
    //sem acessar o formulário de login "redirecionamento"
    header("Location: form_login.html");
}
?>
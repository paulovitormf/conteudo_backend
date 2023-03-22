<h1>Request Method : GET</h1>

<?php
    $resposta = ($_GET['n1'] + $_GET['n2']);
    echo "O resultado é $resposta"."<br>";
    var_dump($_GET);

?>
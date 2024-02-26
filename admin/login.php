<?php       
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];

    if ($nome == "Hendrew" && $senha == "123") {
        header("location: principal.php");
    }
    else {
        header("location:index.php");
    }
?>
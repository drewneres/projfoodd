<?php       

    session_start();
    $nome = $_POST['txtNome'];
    if ($nome == "Hendrew") 
    {
        $_SESSION['usuario']= $nome;
        header("location: principal.php");
    }
    else {
        echo "<script>alert('Usuário ou senha incorretos')</script>";
        echo "<script>location='index.php'</script>";
    }
?>
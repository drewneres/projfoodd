<?php       

    session_start();
    include_once("../dao/manipuladados.php");

    $nome = $_POST['txtNome'];
    $senha = $_POST['txtPassword'];

    $dadoslogin = new ManipulaDados();
    $dadoslogin->setTable('tb_usuario');
    

    if ($dadoslogin->validarLogin($nome, $senha)!=0) 
    {
        $_SESSION['usuario']= $nome;
        header("location: principal.php");
    }
    else {
        echo "<script>alert('Usuário ou senha incorretos')</script>";
        echo "<script>location='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    
    <meta charset='utf-8'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <title>My Food</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    <link rel='stylesheet' href='css/bootstrap.css'/>
    <link rel='stylesheet' href='css/estilo.css'/>
</head>
<body>

        <?php
        session_start();
        $qualquer = $_SESSION['usuario'];
        echo'<h1>Bem vindo'.$qualquer.'</h1>';
        ?>
        <?php include("includes/cabecalho.php");?>
        <?php include("includes/menu.php");?>
        <main>
            <?php 
                include_once("controller/verurl.php");
                $redirecionar = new VerUrl();
                $redirecionar->trocarUrl(@$_GET['secao']);


            ?>
        </main>
        <?php include("includes/rodape.php");?>
        
    <script src='js/bootstrap.bundle.js'></script>
 
</body>
</html>